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
                    <a class="nav-link active fw-semibold" href="#" data-bs-toggle="tab"
                        data-wizard-step="1">
                        <div class="text-center d-inline-block">
                            <span class="nav-item-circle-parent">
                                <img src="{{ asset('assets_ad') }}/img/logos/logo_rovegl.png" alt="rovegl"
                                width="auto" />
                            </span>
                            <span class="d-none d-md-block mt-1 fs-9">Reset Password</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-body pt-4 pb-0">
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1"
                    id="bootstrap-wizard-validation-tab1">
                    <form method="POST" action="{{ route('password.store') }}" id="wizardForm1" novalidate="novalidate"
                        data-wizard-form="1">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label class="form-label" for="bootstrap-wizard-wizard-email">Email*</label>
                            <input class="form-control" type="email" name="email" id="bootstrap-wizard-wizard-email"
                                placeholder="Email address" value="{{ old('email', $request->email) }}" required autofocus>

                            @error('email')
                                <div class="custom-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label" for="bootstrap-wizard-wizard-password">Password*</label>
                            <input class="form-control" type="password" name="password"
                                id="bootstrap-wizard-wizard-password" placeholder="New password" required>

                            @error('password')
                                <div class="custom-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label class="form-label" for="bootstrap-wizard-wizard-confirm-password">Confirm Password*</label>
                            <input class="form-control" type="password" name="password_confirmation"
                                id="bootstrap-wizard-wizard-confirm-password" placeholder="Confirm new password" required>

                            @error('password_confirmation')
                                <div class="custom-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="{{ route('login') }}" class="text-decoration-none">Back to Login</a>
                            <button type="submit" class="btn btn-primary ms-3 mb-2">{{ __('Reset Password') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
