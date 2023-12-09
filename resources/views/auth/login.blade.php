@extends('layouts.template-guest')
@section('title')
    Login
@endsection
@section('content')
    <!--begin::Logo-->
    <!--end::Logo-->
    <!--begin::Wrapper-->
    <div class="bg-white container mt-20">
        <div class="text-center mb-8">
            <h3 class="text-dark mb-3 title-login">
                <green>Selamat Datang di HIPMI Kota Bandung</green>
            </h3>
        </div>
        <!--begin::Form-->
        <form class="form  p-9 mb-10" id="form-border" novalidate="novalidate" id="kt_sign_in_form" method="POST"
            action="{{ route('login') }}">
            @csrf
            <div class="text-center mb-8">
                <h4 class="text-dark mb-3 text" id="masuk">Masuk</h4>
            </div>
            <!--begin::Heading-->

            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="fv-row mb-8">
                <!--begin::Label-->
                <label class="form-label fs-15 fw-bolder text-dark title-input">Email</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                    id="email" type="text" name="email" autocomplete="email" value="{{ old('email') }}" required
                    autofocus />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-5">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack mb-2">
                    <!--begin::Label-->
                    <label class="form-label fw-bolder text-dark fs-15 mb-0">Kata Sandi</label>
                    <!--end::Label-->
                    <!--begin::Link-->

                    <!--end::Link-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Input-->
                <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                    id="password" type="password" name="password" required autocomplete="current-password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <div class="row mb-10">
                <div class="col-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Ingat Saya') }}
                        </label>
                    </div>

                </div>
                <div class="col-2    ">
                    <a href="{{ route('password.request') }}" class="link-primary fs-15 fw-bolder">Lupa Kata Sandi ?</a>
                </div>
            </div>
            <!--begin::Actions-->
            <div class="text-center">
                <!--begin::Submit button-->
                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                    <span class="indicator-label">Login</span>
                </button>
                <!--end::Submit button-->
                <!--begin::Separator-->
                <!-- <div class="text-center text-muted text-uppercase fw-bolder mb-5">Atau</div> -->

                {{-- <div class="text-gray-400 fw-bold fs-15">Belum Memiliki Akun?
                <a href="{{ route('register') }}" class="link-primary fw-bolder">Buat Akun Baru Disini</a></div> --}}
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Wrapper-->
@endsection
