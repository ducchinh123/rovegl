@extends('auth.layouts.master')

@section('css')
    <style>
        .custom-error {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
@endsection

@section('content')
    <div class="card theme-wizard mb-5 " data-theme-wizard="data-theme-wizard">
        <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
            <ul class="nav justify-content-between nav-wizard nav-wizard-success">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold" href="{{ route('login') }}" data-bs-toggle="tab"
                        data-wizard-step="1">
                        <div class="text-center d-inline-block">
                            <span class="nav-item-circle-parent">
                                {{-- <span class="nav-item-circle">
                                    <span class="fas fa-lock"></span>
                                </span> --}}
                                <img src="{{ asset('assets_ad') }}/img/logos/logo_rovegl.png" alt="rovegl"
                                    width="auto" />
                            </span>
                            <span class="d-none d-md-block mt-1 fs-9"><h4>Đăng Nhập</h4></span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="card-body pt-4 pb-0">
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1"
                    id="bootstrap-wizard-validation-tab1">
                    {{-- Adapt the form --}}
                    <form class="needs-validation" method="POST" action="{{ route('login') }}" novalidate="novalidate"
                        data-wizard-form="1">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-2">
                            <label class="form-label" for="bootstrap-wizard-validation-wizard-email">Email*</label>
                            <input class="form-control" type="email" name="email" placeholder="Email address"
                                :value="old('email')" required id="bootstrap-wizard-validation-wizard-email"
                                pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" />
                            <div class="invalid-feedback">Bạn phải thêm email.</div>

                            @error('email')
                                <div class="custom-error">{{ $message }}</div>
                            @enderror

                        </div>

                        <!-- Password -->
                        <div class="mb-2">
                            <label class="form-label" for="bootstrap-wizard-validation-wizard-password">Password*</label>
                            <input class="form-control" type="password" name="password" placeholder="Password address"
                                :value="old('password')" required id="bootstrap-wizard-validation-wizard-email"
                                pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" />
                            <div class="invalid-feedback">Bạn phải thêm mật khẩu.</div>

                            @error('password')
                                <div class="custom-error">{{ $message }}</div>
                            @enderror

                        </div>

                        <!-- Remember Me -->
                        {{-- <div class="form-check">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            <button type="submit" class="btn btn-primary ms-3 mb-2 ">  {{ __('Log in') }}</button>
                        </div> --}}

                        <!-- Login Button and Forgot Password -->
                        <div class="d-flex justify-content-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Quên mật khẩu?') }}
                                </a>
                            @endif
                            <a href="{{ route('register') }}">Đăng ký tài khoản</a>
                            <button type="submit" class="btn btn-primary ms-3 mb-2 "> {{ __('Đăng Nhập') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
