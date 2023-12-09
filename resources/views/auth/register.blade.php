@extends('layouts.app')

@section('content')
    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <div class="w-lg-600px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
            <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="POST"
                action="{{ route('register') }}">
                @csrf
                <div class="mb-10 text-center">
                    <a href="{{ url('/') }}" class="mb-12">
                        <img alt="Logo" src="../../assets/media/logos/logo-text.png" class="img-fluid" />
                    </a>
                    <h1 class="text-dark mb-3">Buat Akun Baru Disini</h1>
                    <div class="text-gray-400 fw-bold fs-4">Sudah Memiliki Akun?
                        <a href="{{ route('login') }}" class="link-primary fw-bolder">Login disini</a>
                    </div>
                </div>
                <div class="row fv-row mb-7">
                    <div class="col-xl-12">
                        <label class="form-label fw-bolder text-dark fs-6">Nama Lengkap</label>
                        <input class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror"
                            type="text" placeholder="" value="{{ old('name') }}" name="name" autocomplete="off"
                            required="" />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- <div class="col-xl-6">
                                        <label class="form-label fw-bolder text-dark fs-6">Nama Belakang</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="last-name" autocomplete="off" />
                                    </div> -->
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6">Email</label>
                    <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                        type="email" placeholder="" name="email" value="{{ old('email') }}" required
                        autocomplete="email" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <div class="mb-1">
                        <label class="form-label fw-bolder text-dark fs-6">Kata Sandi</label>
                        <div class="position-relative mb-3">
                            <input
                                class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                type="password" name="password" required autocomplete="new-password" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                    </div>
                    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                </div>
                <div class="fv-row mb-5">
                    <label class="form-label fw-bolder text-dark fs-6">Konfirmasi Kata Sandi</label>
                    <input class="form-control form-control-lg form-control-solid" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>
                <div class="fv-row mb-10">
                    <label class="form-check form-check-custom form-check-solid mb-5">
                        <input class="form-check-input" type="checkbox" name="toc" value="1" required="" />
                        <span class="form-check-label fw-bold text-gray-700 fs-6">Saya Menyetujui
                            <a href="#" class="ms-1 link-primary">Syarat dan Ketentuan</a>.</span>
                    </label>
                </div>
                <div class="text-center">
                    <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                        <span class="indicator-label">Daftar</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    {{-- <script src="{{ url('assets/js/custom/authentication/sign-up/general.js')}}"></script> --}}
@endsection
