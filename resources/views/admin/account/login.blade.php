{{-- @extends('admin.layouts.master')
@section('content') --}}
    <div class="card theme-wizard mb-5" data-theme-wizard="data-theme-wizard">
        <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
            <ul class="nav justify-content-between nav-wizard nav-wizard-success">
                <li class="nav-item"><a class="nav-link active fw-semibold" href="#bootstrap-wizard-validation-tab1"
                        data-bs-toggle="tab" data-wizard-step="1">
                        <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span
                                    class="nav-item-circle"><span class="fas fa-lock"></span></span></span><span
                                class="d-none d-md-block mt-1 fs-9">Account</span></div>
                    </a></li>

            </ul>
        </div>
        <div class="card-body pt-4 pb-0">
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1"
                    id="bootstrap-wizard-validation-tab1">
                    <form class="needs-validation" id="wizardValidationForm1" novalidate="novalidate" data-wizard-form="1">
                        <div class="mb-2">
                            <label class="form-label text-body" for="bootstrap-wizard-validation-wizard-name">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="John Smith"
                                required="required" id="bootstrap-wizard-validation-wizard-name" />
                            <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="bootstrap-wizard-validation-wizard-email">Email*</label>
                            <input class="form-control" type="email" name="email" placeholder="Email address"
                                pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required"
                                id="bootstrap-wizard-validation-wizard-email" />
                            <div class="invalid-feedback">You must add email</div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <div class="mb-2 mb-sm-0">
                                    <label class="form-label text-body"
                                        for="bootstrap-wizard-validation-wizard-password">Password*</label>
                                    <input class="form-control" type="password" name="password" placeholder="Password"
                                        required="required" id="bootstrap-wizard-validation-wizard-password"
                                        data-wizard-password="true" />
                                    <div class="invalid-feedback">Please enter password</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-2">
                                    <label class="form-label text-body"
                                        for="bootstrap-wizard-validation-wizard-confirm-password">Confirm Password*</label>
                                    <input class="form-control" type="password" name="confirmPassword"
                                        placeholder="Confirm Password" required="required"
                                        id="bootstrap-wizard-validation-wizard-confirm-password"
                                        data-wizard-confirm-password="true" />
                                    <div class="invalid-feedback">Passwords need to match</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terms" required="required"
                                checked="checked" id="bootstrap-wizard-validation-wizard-checkbox" />
                            <label class="form-check-label text-body" for="bootstrap-wizard-validation-wizard-checkbox">I
                                accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
{{-- @endsection --}}
