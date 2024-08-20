@extends('auth.layouts.master')

@section('css')
    <style>
        .custom-error {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 0.5rem;
        }
    </style>
@endsection

@section('content')
    <div class="card theme-wizard mb-5" data-theme-wizard="data-theme-wizard">
        <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
            <ul class="nav justify-content-between nav-wizard nav-wizard-success">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold" href="#" data-bs-toggle="tab"
                        data-wizard-step="1">
                        <div class="text-center d-inline-block">
                            <span class="nav-item-circle-parent">
                                <img src="{{ asset('assets_ad') }}/img/logos/logo_rovegl.png" alt="rovegl"
                                    width="auto" />
                            </span>
                            <span class="d-none d-md-block mt-1 fs-9"><h5>Lấy mật khẩu</h5></span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="card-body pt-4 pb-0">
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1"
                    id="bootstrap-wizard-validation-tab1">
                    <form class="needs-validation" method="POST" action="{{ route('password.email') }}"
                        novalidate="novalidate" data-wizard-form="1">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-2">
                            <label class="form-label" for="bootstrap-wizard-validation-wizard-email">Nhập Email Của
                                bạn*</label>
                            <input class="form-control" type="email" name="email" placeholder="Email address"
                                :value="old('email')" required id="bootstrap-wizard-validation-wizard-email" />
                            <div class="invalid-feedback">Vui lòng nhập địa chỉ email hợp lệ.</div>

                            @error('email')
                                <div class="custom-error">{{ $message }}</div>
                            @enderror

                        </div>

                        <!-- Submit Button -->
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit"
                                class="btn btn-primary ms-3 mb-2">{{ __('Gửi liên kết đặt lại mật khẩu') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
