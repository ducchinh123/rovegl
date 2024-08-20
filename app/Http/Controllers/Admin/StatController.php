<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatController extends Controller
{

    public function showChart(Request $request)
    {
        // Lấy tháng từ yêu cầu (mặc định là tháng hiện tại)
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
            return Carbon::parse($date)->format('YYYY-MM-DD'); // Định dạng ngày tháng
        });
        $earnings = $stats->pluck('total_earnings');

        // Kiểm tra dữ liệu để đảm bảo dữ liệu đúng định dạng
        // dd($dates, $earnings); 

        return view('admin.stats.index', compact('dates', 'earnings', 'month'));
    }


    // public function showChart()
    // {
    //     $stats = Stat::select('date', 'earnings')
    //     ->orderBy('date')
    //     ->get()
    //     ->groupBy('date');

    // // Format data for chart
    // $dates = $stats->keys();
    // $earnings = $stats->map(function ($group) {
    //     return $group->sum('earnings');
    // });
    //     return view('admin.stats.index', compact('dates', 'earnings'));
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stats = Stat::paginate(10);
        // dd($pages);
        return view('admin.stats.list', compact('stats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
