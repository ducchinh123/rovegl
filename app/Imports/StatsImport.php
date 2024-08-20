<?php

namespace App\Imports;

use App\Models\Stat;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class StatsImport implements ToCollection
{
    /**
     * @param Collection $rows
     */
    public function collection(Collection $rows)
    {
        $skipFirstRow = true;
        $user = auth()->user();
        // dd($rows->toArray());
        try {
            DB::transaction(function () use ($rows, $skipFirstRow, $user) {
                foreach ($rows as $index => $row) {
                    if ($skipFirstRow && $index == 0) {
                        continue; // Skip the first row (header row)
                    }

                    // dd($row[0], $row[2], $row[9], $row[10]);
                    if (isset($row[0], $row[2], $row[9], $row[10])) {
                        $date = \Carbon\Carbon::createFromFormat('m/d/Y', trim($row[9]))->format('Y-m-d');

                        $stas = Stat::create([
                            'fb_video_asset_id' => trim($row[0]),
                            'fb_page_id' => trim($row[2]),
                            'date' => $date,
                            'earnings' => trim($row[10]),
                            'status' => 1,
                        ]);
                        // dd($stas);
                    }
                }
            });
        } catch (\Throwable $th) {

            throw $th;
        }
    }
}
