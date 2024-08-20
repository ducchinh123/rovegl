@extends('admin.layouts.master')

@section('css')
    {{-- Chèn Bootstrap 5 CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    {{-- Chèn Bootstrap 5 JavaScript --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    
@endsection

@section('content')
    @if (Session::has('ok'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">
                {{ Session::get('ok') }}
            </h4>
            <p class="mb-0"></p>
        </div>
    @endif

    @if (Session::has('no'))
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">
                {{ Session::get('no') }}
            </h4>
            <p class="mb-0"></p>
        </div>
    @endif

    @if ($errors->any())
        {{-- <div class="alert alert-danger"> --}}
            <ul>
                @foreach ($errors->all() as $error)
                   <div class="text-danger">{{ $error }}</div>
                    
                @endforeach
            </ul>
        {{-- </div> --}}
    @endif

    <div class="container">
        <ul class="nav nav-tabs" id="profile-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="info-tab" data-bs-toggle="tab" href="#info" role="tab"
                    aria-controls="info" aria-selected="true">Thông tin cá nhân</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="updatePassword-tab" data-bs-toggle="tab" href="#updatePassword" role="tab"
                    aria-controls="updatePassword" aria-selected="false">Cập nhật mật khẩu</a>
            </li>
        </ul>

        <div class="tab-content" id="profile-tab-content">
            <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                <h3>Cập nhật hồ sơ</h3>
                <form action="{{ route('admin.profile.updateBasic', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ old('name', $user->name) }}" >
                    </div>

                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email', $user->email) }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Cập nhật thông tin</button>
                </form>
            </div>

            <div class="tab-pane fade" id="updatePassword" role="tabpanel" aria-labelledby="updatePassword-tab">
                <h3>Cập nhật mật khẩu</h3>
                <form action="{{ route('admin.profile.updatePassword', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="current_password">Nhập mật khẩu hiện tại: </label>
                        <input type="password" name="current_password" id="current_password"
                            placeholder="Nhập mật khẩu hiện tại" class="form-control">
                        {{-- @error('current_password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="form-group">
                        <label for="new_password">Nhập mật khẩu mới: </label>
                        <input type="password" name="new_password" id="new_password" placeholder="Nhập mật khẩu mới"
                            class="form-control">
                        {{-- @error('new_password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>

                    <div class="form-group">
                        <label for="new_password_confirmation">Nhập lại mật khẩu mới: </label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                            placeholder="Nhập lại mật khẩu mới" class="form-control">
                        @error('new_password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Cập nhật mật khẩu</button>
                </form>
            </div>

        </div>
    </div>
@endsection

@section('js')
    {{-- JavaScript to trigger the tab --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
@endsection
