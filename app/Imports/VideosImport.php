<?php

namespace App\Imports;

use App\Models\Video;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class VideosImport implements ToCollection
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

                    if (isset($row[0], $row[2], $row[4])) {
                        // dd($row[0], $row[2], $row[4]);
                        Video::create([
                            'user_id' => $user->id,
                            'fb_video_id' => trim($row[0]),
                            'page_id' => trim($row[2]),
                            'title' => trim($row[4]),
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
