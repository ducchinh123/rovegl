<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Imports\MediaImportClass;
use App\Imports\PagesImport;
use App\Imports\StatsImport;
use App\Imports\VideosImport;
use App\Models\Stat;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $month = $request->input('month', Carbon::now()->format('Y-m'));

        // Lọc dữ liệu theo tháng và nhóm theo ngày
        $stats = Stat::select('date', DB::raw('SUM(earnings) as total_earnings'))
            ->whereYear('date', Carbon::parse($month)->year)
            ->whereMonth('date', Carbon::parse($month)->month)
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Kiểm tra dữ liệu
        // dd($stats);

        // Format data for chart

        $dates = $stats->pluck('date')->map(function ($date) {
            return Carbon::parse($date)->format('Y-m-d');
        });

        // dd($dates);
        $earnings = $stats->pluck('total_earnings');
        return view('admin.index', compact('dates', 'earnings', 'month'));
    }

    public function profile()
    {

        $user = Auth::user();
        return view('admin.account.index', ['user' => $user]);
    }
    public function edit()
    {

        $user = Auth::user();
        return view('admin.account.profile', ['user' => $user]);
    }
    /**
     * Show the form for creating a new resource.
     */

    public function updateProfileBasic(ProfileUpdateRequest $request)
    {
        $user = auth()->user();
        //  dd($user);

        /**
         * @var User $user
         */

        $user->update($request->only(['name', 'email']));

        return redirect()->back()->with('ok', 'Thông tin cơ bản đã được cập nhật.');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('no', 'Mật khẩu cũ không chính xác.');
        }

        /**
         * @var User $user
         */

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->back()->with('ok', 'Mật khẩu đã được cập nhật.');
    }
    public function import()
    {
        //
        return view('admin.media.import');
    }

    public function importSave(Request $request)
{

    // test thử xem sao
    if ($request->file('file_excel_2')) {
        $request->validate([
            'file_excel_2' => 'required|file|mimes:xls,xlsx,csv',
        ], [
            'file_excel_2.required' => 'Bắt buộc',
            'file_excel_2.file' => 'Không có file',
            'file_excel_2.mimes' => 'Định dạng tệp không hợp lệ. Chỉ chấp nhận các tệp có đuôi .xls, .xlsx, .csv',
        ]);
        
        try {
            $file_excel = $request->file('file_excel_2');
            $filePath = $file_excel->getRealPath();

            // Tạo một instance của MediaImportClass và gọi phương thức import
            $importer = new MediaImportClass($filePath);
            $importer->import();

            return redirect()->back()->with('ok', 'Import thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('no', $e->getMessage());
        }
    }
}

    
    


    public function importTable($table)
    {
        //
        $tables = ['pages', 'videos', 'stats'];
        // dd($table);

        if (!in_array($table, $tables)) {
            return redirect()->back()->with('error', 'Bảng không hợp lệ!');
        }

        $viewTable = '';

        if ($table == 'pages') {
            $viewTable = 'admin.fanpage.import';
        } elseif ($table == 'videos') {
            $viewTable = 'admin.video.import';
        } elseif ($table == 'stats') {
            $viewTable = 'admin.stats.import';
        } else {
            // Trường hợp không hợp lệ hoặc báo lỗi
            abort(404, 'Table not found');
        }

        return view($viewTable, compact('table'));
    }

    public function importSaveTable(Request $request, $table)
    {

        $tables = ['pages', 'videos', 'stats'];


        if (!in_array($table, $tables)) {
            return redirect()->back()->with('no', 'Bảng không hợp lệ!');
        }

        $request->validate([
            'file_excel' => 'required|mimes:xlsx,xls,csv',
        ]);

        try {
            $file_excel = $request->file('file_excel');
            // dd($file_excel);
            // dd($table);
            switch ($table) {

                case 'pages':
                    // dd('pages');
                    Excel::import(new PagesImport, $file_excel);

                    break;

                case 'videos':
                    // dd('videos');

                    Excel::import(new VideosImport, $file_excel);

                    break;

                case 'stats':
                    Excel::import(new StatsImport, $file_excel);

                    break;

                default:
                    return redirect()->back()->with('no', 'Bảng không hợp lệ!');
            }

            return redirect()->back()->with('ok', 'Import thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('no', $e->getMessage());
        }
    }

    // public function showChart(Request $request)
    // {
    //     // Lấy tháng từ yêu cầu (mặc định là tháng hiện tại)
    //     $month = $request->input('month', Carbon::now()->format('Y-m'));

    //     // Lọc dữ liệu theo tháng và nhóm theo ngày
    //     $stats = Stat::select('date', DB::raw('SUM(earnings) as total_earnings'))
    //         ->whereYear('date', Carbon::parse($month)->year)
    //         ->whereMonth('date', Carbon::parse($month)->month)
    //         ->groupBy('date')
    //         ->orderBy('date')
    //         ->get();

    //     // Kiểm tra dữ liệu
    //     dd($stats);

    //     // Format data for chart
    //     $dates = $stats->pluck('date')->map(function ($date) {
    //         return Carbon::parse($date)->format('YYYY-MM-DD'); // Định dạng ngày tháng
    //     });
    //     $earnings = $stats->pluck('total_earnings');

    //     // Kiểm tra dữ liệu để đảm bảo dữ liệu đúng định dạng
    //     // dd($dates, $earnings); 

    //     return view('admin.index', compact('dates', 'earnings', 'month'));
    // }
    public function logout()
    {
        Auth()->logout();
        return redirect()->route('client.home')->with('ok', 'Your logouted');
    }
}
