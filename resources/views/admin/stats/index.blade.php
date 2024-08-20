@extends('admin.layouts.master')

@section('link_css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('title')
    Dashboard
@endsection

@section('content')
    <h2>Biểu đồ Doanh thu</h2>

    <!-- Form chọn tháng -->
    <form method="GET" action="{{ route('admin.dashboard.chart') }}">
        <label for="month">Chọn tháng:</label>
        <input type="month" id="month" name="month" value="{{ $month }}">
        <button type="submit">Xem</button>
    </form>

    <canvas id="earningsChart" width="400" height="200"></canvas>
@endsection

@section('script')
    <script>
          document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('earningsChart').getContext('2d');
    const earningsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($dates), // Các ngày từ PHP
            datasets: [{
                label: 'Doanh thu (USD)',
                data: @json($earnings), // Dữ liệu doanh thu từ PHP
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                },
                x: {
                    type: 'time',
                    time: {
                        unit: 'day',
                        tooltipFormat: 'dd MMM yyyy'
                    },
                    title: {
                        display: true,
                        text: 'Ngày'
                    }
                }
            }
        }
    });
});

    </script>
@endsection
