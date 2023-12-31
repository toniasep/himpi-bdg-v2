@extends('layouts.template-guest')
@section('title')
    Badan Otonom
@endsection
@section('content')
    <!-- /section -->
    {{-- <section class="wrapper section-first bg-keanggotaan mt-5">
    <div class="conainer">
        <div class="flex">
            <div class="col-lg-4">
                <h2>Badan Otonom</h2>
            </div>
        </div>
    </div>
</section> --}}
    <section class="wrapper section-first  mt-14">
        <div class="">
            <div class="row set-bg" style="--bs-gutter-x: 0;">
                <div class="col-lg-7 htr ps-0 ps-sm-14 pe-0 pe-sm-12 pt-0 pt-sm-13 pb-0 pb-sm-13">
                    <div class="col-lg-11" id="mbl-pd-set">
                        <h2 id="tk">Badan Otonom</h2>
                        <p class="text-white">{{ App\Cms_konten::find(4)->k1 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="wrapper background-white mt-10 mb-10 pt-2 container">
        <div class="row py-4">

            @foreach ($result as $key => $item)
                <div class="col-lg-6 p-0">
                    <div class="box p-8 m-2 box-banom">
                        <div class="row mb-2">
                            <div class="col-lg-3">
                                <img src="{{ asset('storage/image/banom') }}/{{ $item['logo'] }}"
                                    class="img-fluid img-banom">
                            </div>
                            <div class="col-lg-9 ">
                                <h4 class="otonom-title mt-1 align-items-center">{{ $item['judul'] }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <p class="otonom-desc">
                                {{ $item['deskripsi_pendek'] }}
                            </p>
                            <div class="col-md-4">
                                <button class="btn btn-info btn-sm btn-banom" type="button"
                                    onclick="window.location.replace('{{ route('detailbadanotonom', $item['id']) }}','_blank')">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>
    <!-- /section -->
@endsection
@section('css-inner')
    <style>
        .motobg {
            background-image: url("{{ asset('assets/img/bg-tentang-moto.png') }}");
        }

        .set-bg {
            background-image: url("{{ asset('assets/img/bg.png') }}");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: right;
            height: 352px;
        }

        .bg-keanggotaan {
            background-image: url("{{ asset('assets/img/bg.png') }}");
            min-height: 350px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        .htr {
            background-color: #00AF50;
            background-image: url("{{ asset('assets/img/ornamen.png') }}");
            background-repeat: no-repeat;
            background-position: left;
            border-top-right-radius: 144px;
            border-bottom-right-radius: 144px;
        }
    </style>
@endsection
