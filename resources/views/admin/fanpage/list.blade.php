@extends('admin.layouts.master')

@section('title')
    Danh Sách Thông Tin FanPage
@endsection

@section('content')
    <div class="container">
        <h1 class="page-header">Danh Sách Thông Tin</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>User ID</th>
                    <th>FB Page ID</th>
                    <th>Tên Page</th>
                    <th>Trạng Thái</th>
                    <th>Ngày Tạo</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pages as $index => $page)
                <tr>
                    <td>{{ $pages->firstItem() + $index }}</td>
                    <td>{{ $page->user_id }}</td>
                    <td>{{ $page->fb_page_id }}</td>
                    <td>{{ $page->page_name }}</td>
                    <td>{{ $page->status }}</td>
                    <td>{{ $page->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm">Edit</a>
                        <a href="#" class="btn btn-primary btn-sm">Copy</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$pages->links()}}
    </div>
@endsection
