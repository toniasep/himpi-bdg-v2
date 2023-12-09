@extends('layouts.template')
@section('title')
Akun Saya
@endsection
@section('content_bottom')

@include('akun.akuninfo')

<!--begin::details View-->
<div class="container-fluid">
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Informasi Akun</h3>
            </div>
            <!--end::Card title-->
            <!--begin::Action-->
            {{-- <a href="{{route('akun.suntingakun')}}" class="btn btn-primary align-self-center">Sunting Akun</a> --}}
            <!--end::Action-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Nama lengkap</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{ Auth::user()->name }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Alamat Email
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                        title="Pastikan Alamat Email Anda Aktif"></i></label>
                <div class="col-lg-8 d-flex align-items-center">
                    <span class="fw-bold fs-6 text-gray-800 me-2">{{ Auth::user()->email }}</span>
                    <span class="badge badge-success">Terverifikasi</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Email Terverifikasi</label>
                <div class="col-lg-8 d-flex align-items-center">
                    <span
                        class="fw-bold fs-6 text-gray-800 me-2">{{ Carbon\Carbon::parse(Auth::user()->email_verified_at)->formatLocalized('%A, %d %B %Y, %H:%M:%S')}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Hak Akses</label>
                <div class="col-lg-8">
                    <a href="#"
                        class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{ Auth::user()->role }}</a>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Data Akun Dibuat
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                        title="Data Akun ini dibuat"></i></label>
                <div class="col-lg-8">
                    <span
                        class="fw-bold fs-6 text-gray-800">{{ Carbon\Carbon::parse(Auth::user()->created_at)->formatLocalized('%A, %d %B %Y')}}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Data Akun Disunting</label>
                <div class="col-lg-8">
                    <span
                        class="fw-bold fs-6 text-gray-800">{{ Carbon\Carbon::parse(Auth::user()->updated_at)->formatLocalized('%A, %d %B %Y')}}</span>
                </div>
            </div>
            <!--begin::Notice-->
            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                <!--begin::Icon-->
                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
                            fill="currentColor" />
                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                    <!--begin::Content-->
                    <div class="fw-semibold">
                        <h4 class="text-gray-900 fw-bold">Kami membutuhkan perhatian Anda!</h4>
                        <div class="fs-6 text-gray-700">Jangan Menyerahkan akses email dan kata sandi akun anda pada
                            pegawai lain, mohon ganti kata sandi secara berkala
                            <a class="fw-bold" href="{{route('akun.gantipw')}}">Ganti Kata Sandi</a>.
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Notice-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::details View-->
    <!--begin::Login sessions-->
    <div class="card mb-5 mb-lg-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Heading-->
            <div class="card-title">
                <h3>Catatan Sesi Login</h3>
            </div>
            <!--end::Heading-->
            <!--begin::Toolbar-->
            <div class="card-toolbar">
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-10">
            <!--begin::Table wrapper-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="example" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                    <!--begin::Thead-->
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th class="min-w-150px">Sesi</th>
                            <th class="min-w-100px">Status</th>
                            <th class="min-w-150px">Alamat IP</th>
                            <th class="min-w-150px">Waktu</th>
                            <th class="min-w-150px">Time</th>
                        </tr>
                    </thead>
                    <!--end::Thead-->
                    <!--begin::Tbody-->
                    {{-- {{$logs['ip']}} --}}
                    <tbody class="fw-6 fw-semibold text-gray-600">
                        @foreach ($logs as $key => $item)
                        <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">{{$item['description']}}</a>
                            </td>
                            <td>
                                <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                            </td>
                            <td>{{ json_decode($item['properties'])->ip}}</td>
                            <td>{{ Carbon\Carbon::parse($item['created_at'])->formatLocalized('%A, %d %B %Y, %H:%M:%S')}}
                            </td>
                            <td>{{ \Carbon\Carbon::parse($item['created_at'])->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <!--end::Tbody-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table wrapper-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Login sessions-->
</div>
@endsection
@include('pluign.data-table')
