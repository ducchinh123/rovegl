<?php

namespace App\Imports;

use App\Models\Page;
use App\Models\Stat;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class MediaImportClass
{
    protected $spreadsheet;

    public function __construct($filePath)
    {
        // Load file Excel bằng PhpSpreadsheet
        $this->spreadsheet = IOFactory::load($filePath);
    }

    public function import()
    {
        $worksheet = $this->spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray();

        $skipFirstRow = true;
        $user = auth()->user();
        
        DB::beginTransaction();
        try {
            $pages = [];
            $videos = [];
            $stats = [];
            
            foreach ($rows as $index => $row) {
                if ($skipFirstRow && $index == 0) {
                    continue; // Bỏ qua dòng đầu tiên (tiêu đề)
                }

                if (isset($row[0], $row[2], $row[3], $row[4], $row[5], $row[6], $row[9], $row[10])) {
                    $date = \Carbon\Carbon::createFromFormat('m/d/Y', trim($row[9]))->format('Y-m-d');
                    
                    $pages[] = [
                        'user_id' => $user->id,
                        'fb_page_id' => trim($row[2]),
                        'page_name' => trim($row[3]),
                        'status' => 1,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];

                    $videos[] = [
                        'fb_video_id' => trim($row[0]),
                        'page_id' => trim($row[2]),
                        'user_id' => $user->id,
                        'title' => trim($row[4]),
                        'status' => 1,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];

                    $stats[] = [
                        'fb_video_asset_id' => trim($row[0]),
                        'fb_page_id' => trim($row[2]),
                        'date' => $date,
                        'earnings' => trim($row[10]),
                        'status' => 1,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }

            Page::insert($pages);
            Video::insert($videos);
            Stat::insert($stats);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
