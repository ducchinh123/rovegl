@extends('admin.layouts.master')

@section('title')
    Danh Sách Thông Tin Video
@endsection

@section('content')
    <div class="container">
        <h1 class="page-header">Danh Sách Thông Tin</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Video ID</th>
                    <th>FB Page ID</th>
                    <th>Date</th>
                    <th>earnings</th>
                    <th>Trạng Thái</th>
                    <th>Ngày Tạo</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($stats as $index => $stat)
                    <tr>
                        <td>{{ $stats->firstItem() + $index }}</td>
                        <td>{{ $stat->fb_video_asset_id }}</td>
                        <td>{{ $stat->fb_page_id }}</td>
                        <td>{{ $stat->date }}</td>
                        <td>{{ $stat->earnings }}</td>
                        <td>{{ $stat->status }}</td>
                        <td>{{ $stat->status }}</td>
                        <td>{{ $stat->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Edit</a>
                            <a href="#" class="btn btn-primary btn-sm">Copy</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $stats->links() }}
    </div>
@endsection
