<?php

namespace App\Imports;

use App\Models\Page;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class PagesImport implements ToCollection
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

                    if (isset($row[2], $row[3])) {
                        Page::create([
                            'user_id' => $user->id,
                            'fb_page_id' => trim($row[2]),
                            'page_name' => trim($row[3]),
                            'status' => 1,
                        ]);
                    }
                }
            });
        } catch (\Throwable $th) {

            throw $th;
        }
    }
}
