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
                    <th>User ID</th>
                    <th>Title</th>
                    <th>Trạng Thái</th>
                    <th>Ngày Tạo</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($videos as $index => $video)
                    <tr>
                        <td>{{ $videos->firstItem() + $index }}</td>
                        <td>{{ $video->fb_video_id }}</td>
                        <td>{{ $video->page_id }}</td>
                        <td>{{ $video->user_id }}</td>
                        <td>{{ \Str::limit($video->title, 50) }}</td>
                        <td>{{ $video->status }}</td>
                        <td>{{ $video->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Edit</a>
                            <a href="#" class="btn btn-primary btn-sm">Copy</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $videos->links() }}
    </div>
@endsection
