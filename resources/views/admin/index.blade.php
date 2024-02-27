@extends('layouts.template')
@section('title')
Beranda
@endsection
@section('content_bottom')
<div class="container">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body">
            <div class="col-lg-12">
                <div class="row text-center align-items-center justify-content-center gap-3">
                    <div class="col-lg-3 bg-primary pt-5 rounded">
                        <h2 class="sejak-style text-white">{{ $count_pengurus }}</h2>
                        <p class="subtitle-custom text-white">Total Pengurus</p>
                    </div>
                    <div class="col-lg-3 bg-primary pt-5 rounded">
                        <h2 class="sejak-style text-white">{{ $count_katalog }}</h2>
                        <p class="subtitle-custom text-white">Total Perusahaan Anggota</p>
                    </div>
                    <div class="col-lg-3 bg-primary pt-5 rounded">
                        <h2 class="sejak-style text-white">{{ $count_master_bidang_usaha }}</h2>
                        <p class="subtitle-custom text-white">Total Klasifikasi Usaha</p>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
@endsection