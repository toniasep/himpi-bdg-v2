@extends('layouts.template-guest')
@section('title')
    E-Katalog
@endsection
@section('content')
    <!-- /section -->
    <section class="wrapper section-first  mt-14">
        <div class="">
            <div class="row set-bg" style="--bs-gutter-x: 0;">
                <div class="col-lg-12 htr-full   ps-0 ps-sm-14 pe-0 pe-sm-11 pt-0 pt-sm-13 pb-0 pb-sm-13 col-12">
                    <div class="col-lg-12 p-0" id="mbl-pd-set">
                        <h2 id="tk">ANGGOTA HIPMI KOTA BANDUNG</h2>
                        <p id="s5" style="color: #FFFFFF">Berikut adalah perusahaan – perusahaan yang telah berhimpun
                            di HIPMI Kota Bandung.
                        </p>

                    </div>
                    <div class="col-lg-2" id="mbl-pd-set">
                        <form class="" method="get" action="{{ route('ekatalog') }}">
                            <div class="input-group mb-3 mx-auto" id="box-searching">
                                <div class="col-lg-4 col-4 p-0">
                                    <select data-control="select2" class="form-select" id="select-cari"
                                        aria-label="Select example" name="f">
                                        <option selected value="" @if ($f == 'semua') selected @endif>
                                            Semua klasifikasi</option>
                                        @foreach ($master_bidang_usaha as $key => $item)
                                            <option value="{{ $item['id'] }}"
                                                @if ($f == $item['id']) selected @endif>
                                                {{ $item['bidang_usaha'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-6 p-0">
                                    <input type="text" name="q" value="{{ $q }}"
                                        class="form-control p-1" id="input-search"
                                        aria-label="Ketik nama perusahaan atau brand"
                                        placeholder="Ketik nama perusahaan atau brand">
                                </div>
                                <div class="col-lg-1 cold-md-1 col-sm-0 p-0">

                                </div>
                                <div class="col-lg-1 col-1 p-0">
                                    <button type="submit" class="input-group-text" id="btn-cari"> <span
                                            id="icon-seach-green" class="mx-auto input-group-text"><i
                                                class="uil uil-search text-white text-center"></i></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-10"> </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper background-white mb-10 pt-2 container">

        <!-- start content  -->

        <div class="row  d-flex justify-content-center">
            {{-- start loop --}}
            @if (count($search) > 0)
                @foreach ($search as $var)
                    <div class="col-lg-1 col-md-4 col-sm-6 box-katalog pb-3"
                        onclick="window.location.replace('{{ route('detailekatalog', $var['id']) }}','_blank')">
                        <div class="fav-icon rounded px-2 py-1">
                            <i class="bi bi-star-fill" style="color: #047857;"></i>
                        </div>
                        <div class="box-img2 p-0" style="">
                            <img src="{{ asset('image/katalog') }}/{{ $var['logo'] }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="box-text  ps-2 pe-2" id="box-caption">
                            <p class="text-left" id="caption-katalog">{{ $var['nama_katalog'] }}</p>
                        </div>
                        <div class="col-lg-12 p-0" id="box-desc">
                            <div class="col-12 ps-3 pe-3 pt-2 pb-2 mb-2 jenis-perusahaan">
                                {{ $var->Master_bidang_usaha['bidang_usaha'] }}
                            </div>
                        </div>
                        <div id="des">{!! Str::limit($var['deskripsi'], 60, ' ...') !!}</div>
                    </div>
                @endforeach
            @else
                Data tidak ditemukan.
            @endif
            {{-- end loop --}}
        </div>
        <div class="row">
            <div class="container-fluid d-flex justify-content-center align-items-center mt-13 mb-15 "
                id="client-paginator">
                {{-- {{ $katalog->links() }} --}}
                {{ $search->links() }}
            </div>
        </div>
        <!-- end content -->
    </section>
    <!-- /section -->
    <style>
        .select2-selection__rendered {
            line-height: 31px !important;
        }

        .select2-container .select2-selection--single {
            height: 35px !important;
            border: none;
        }

        .select2-selection__arrow {
            height: 34px !important;
        }

        .htr-full {
            background-color: #00AF50;
            background-image: url("{{ asset('assets/img/ornamen.png') }}"), url("{{ asset('assets/img/ornamen.png') }}");
            background-repeat: no-repeat, no-repeat;
            background-position: left, right;
        }


        #client-paginator {
            overflow-y: auto;
            overflow-x: auto;
            /* height: 137px; */
            width: 800px;
        }

        .fav-icon{
            display:;
            position:absolute;
            background-color: #ECFDF5;
            box-shadow: 11px 12px 32px -16px rgba(0,0,0,0.48);
            -webkit-box-shadow: 11px 12px 32px -16px rgba(0,0,0,0.48);
            -moz-box-shadow: 11px 12px 32px -16px rgba(0,0,0,0.48);
        }
        
        /*untuk layar device berukuran kecil*/
        @media screen and (max-width: 450px) {
            #client-paginator {
                overflow-y: auto;
                overflow-x: auto;
                justify-content: left !important;
                width: 800px;
            }

        }
    </style>
@endsection
@section('js')
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
@endsection
