@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-20">
    <a href="../../index.html" class="mb-10 pt-lg-20">
        <img alt="Logo" src="../../assets/media/logos/logo-text.png" class="h-200px mb-0" />
    </a>
    <div class="pt-lg-10">
        @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
        </div>
        @endif
        <h1 class="fw-bolder fs-2qx text-dark mb-7">Verifikasi Email Anda</h1>
        <div class="fs-3 fw-bold text-gray-400 mb-10">Sistem telah mengirim tautan Verifikasi email ke 
            <a href="#" class="link-primary fw-bolder">{{ Auth::user()->email }}</a>
            <br />silakan ikuti tautan Email Anda.</div>
            <div class="fs-5">
                <span class="fw-bold text-gray-700">Tidak menerima email?</span>
                <a href="../layouts/base/sign-up.html" class="link-primary fw-bolder"></a>
            </div>
            <div class="text-center mb-10 mt-5">
                <a href="{{ route('verification.resend') }}" class="btn btn-lg btn-primary fw-bolder">Kirim ulang</a>
            </div>
        </div>
    </div>
@endsection