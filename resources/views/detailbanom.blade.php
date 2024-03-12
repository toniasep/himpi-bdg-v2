@extends('layouts.template-guest')
@section('title')
    Tentang kami
@endsection
@section('content')
    <section class="wrapper container mt-17 px-12 mb-15">
        <nav class="d-inline-block mb-12    " aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#" class="aktif">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="aktif">Badan Otonom</a></li>
                <li class="breadcrumb-item"><a href="#">{{ $result['judul'] }}</a></li>
            </ol>
        </nav>
        <div class="row mb-10">
            <div class="col-lg-8 ">
                <h1 class="caption-banom">{{ $result['judul'] }}</h1>
                <p id="text-banom">
                    {!! $result['deskripsi'] !!}
                </p>
            </div>
            <div class="col-lg-4 p-5 mt-5">
                <div class="frame-image d-flex align-items-center justify-content-center " id="img-katalog-detail">
                    <img src="{{ asset('image/banom') }}/{{ $result['logo'] }}" class="img-fluid p-4" alt="">
                </div>
            </div>
        </div>

    </section>
@endsection
@section('css-inner')
    <style>
        .bg-keanggotaan {
            background-image: url("{{ asset('assets/img/bg-keanggotaan.png') }}");
            min-height: 350px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }
    </style>
@endsection
