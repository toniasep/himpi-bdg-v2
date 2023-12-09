@extends('layouts.template-guest')
@section('title')
    Login
@endsection
@section('content')
    {{-- <a href="{{ url('/') }}" class="mb-12">
        <img alt="Logo" src="{{ url('assets/media/logos/logo-text.png') }}" class="img-fluid w-lg-200px" />
    </a> --}}
    <!--end::Logo-->
    <!--begin::Wrapper-->
    <div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
        <!--begin::Form-->

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" method="POST"
            action="{{ route('password.email') }}">
            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3 title-login">
                    <green>Reset Kata Sandi </green>
                </h1>
                <!--end::Title-->
                <!--begin::Link-->

                <!--end::Link-->
            </div>
            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <label class="form-label fw-bolder text-gray-900 fs-6">
                    <p id="title-input">Email</p>
                </label>
                <input class="form-control form-control-solid @error('email') is-invalid @enderror" id="email"
                    type="email" placeholder="" name="email" required autocomplete="email" autofocus
                    value="{{ old('email') }}" />


                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                <button type="submit" id="kt_password_reset_submit" class="btn btn-lg btn-primary fw-bolder me-4">
                    <span class="indicator-label">Submit</span>
                    {{-- <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span> --}}
                </button>
                <a href="{{ route('login') }}" class="btn btn-lg btn-dark-primary fw-bolder">Kembali</a>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
@endsection
