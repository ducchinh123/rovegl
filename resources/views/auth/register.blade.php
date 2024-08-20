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
    <div class="card theme-wizard mb-5" data-theme-wizard="data-theme-wizard">
        <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
            <ul class="nav justify-content-between nav-wizard nav-wizard-success">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold" href="{{ route('register') }}" data-bs-toggle="tab"
                        data-wizard-step="1">
                        <div class="text-center d-inline-block">
                            <span class="nav-item-circle-parent">
                                <img src="{{ asset('assets_ad') }}/img/logos/logo_rovegl.png" alt="rovegl"
                                    width="auto" />
                            </span>
                            <span class="d-none d-md-block mt-1 fs-9"><h4>Đăng Ký Tài Khoản</h4></span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-body pt-4 pb-0">
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-tab1"
                    id="bootstrap-wizard-tab1">
                    <form method="POST" action="{{ route('register') }}" id="wizardForm1" novalidate="novalidate"
                        data-wizard-form="1">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="bootstrap-wizard-wizard-name">Name</label>
                            <input class="form-control" type="text" name="name" id="bootstrap-wizard-wizard-name"
                                placeholder="John Smith" value="{{ old('name') }}" required autofocus>

                            @error('name')
                                <div class="custom-error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bootstrap-wizard-wizard-email">Email*</label>
                            <input class="form-control" type="email" name="email" id="bootstrap-wizard-wizard-email"
                                placeholder="Email address" value="{{ old('email') }}" required>

                            @error('email')
                                <div class="custom-error">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <div class="mb-2">
                                    <label class="form-label" for="bootstrap-wizard-wizard-password">Password*</label>
                                    <input class="form-control" type="password" name="password"
                                        id="bootstrap-wizard-wizard-password" placeholder="Password" required>

                                    @error('password')
                                        <div class="custom-error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-2">
                                    <label class="form-label" for="bootstrap-wizard-wizard-confirm-password">Confirm
                                        Password*</label>
                                    <input class="form-control" type="password" name="password_confirmation"
                                        id="bootstrap-wizard-wizard-confirm-password" placeholder="Confirm Password"
                                        required>

                                    @error('password_confirmation')
                                        <div class="custom-error">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <a href="{{ route('login') }}" class="text-decoration-none btn btn-info ms-3 mb-2">Đăng nhập</a>
                            <button type="submit" class="btn btn-primary ms-3 mb-2">{{ __('Đăng Ký') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
