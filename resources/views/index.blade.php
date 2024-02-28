@extends('layouts.template-guest')
@section('title')
    Beranda
@endsection
@section('content')
    <section class="wrapper bg-soft-primary" id="mobile" style="overflow-x: hidden;">
        <div class="row d-lg-flex justify-content-between align-items-center banner-hipmi">
            <div class="col-md-11 col-lg-11 col-xl-11  mx-lg-11 my-11" id="bottom">
                <div class="container-banner">
                    <div class="caption-hipmi">HIPMI KOTA BANDUNG
                    </div>
                    <div class="caption-utama-new px-lg-5">
                        Organisasi Pengusaha Muda
                        <span class="caption-utama-highlight">Terbesar</span>
                        di Indonesia
                    </div>
                    <p class="sub-caption-utama px-lg-15 mx-lg-15">Berdiri sejak 1972, HIPMI menjadi tempat berhimpun bagi
                        pengusaha muda Indonesia untuk berjejaring dan memberikan dampak terhadap masyarakat luas. Mari
                        bergabung bersama kami HIPMI Kota Bandung.</p>
                    <button onclick="window.location.replace('{{ route('tentangkami') }}','_blank')"
                        class="btn mt-3 btn btn-green" id="btn-yellow" type="button">
                        <p class="subtitle-custom text-center" style="color: #FFFFFF; margin-top: 20px; font-weight: bold">
                            Sejarah
                            Terbentuk</p>
                    </button>
                </div>
            </div>

            <div class="col-md-1 col-lg-1 col-xl-1">

            </div>
            <!--/column -->

            <!--/column -->
        </div>
        <!--/.row -->
    </section>
    <!-- /section -->
    <section class="wrapper background-white">
        <div class="container pt-10 pb-14 pt-md-7 pb-md-15" id="section">
            <div class="row align-items-center sejak-background">
                <div class="col-md-4 sejak-position" style="margin-top: 24px" id="b">
                    <h2 class="sejak-style">Sejak MUSCAB ke X</h2>
                    <p class="mb-10 subtitle-custom" id="p">HIPMI Kota Bandung saat ini telah memasuki periodesasi 2023-2025.</p>
                    {{-- <a href="{{ route('tentangkami') }}" class="text-succes " id="href">Baca sejarah terbentuk</a> --}}
                </div>
                <div class="col-md-8 sejak-count">
                    <div class="row bg-green p-7 text-center" style="margin-right: 24px" id="m0">
                        <div class="col-lg-4" id="line-after-div">
                            <h2 class="sejak-style" style="color: #FFFFFF">{{ $count_pengurus }}</h2>
                            <p class="subtitle-custom" style="color: #FFFFFF">Pengurus</p>    
                            
                        </div>
                        <div class="col-lg-4" id="line-after-div">
                            <h2 class="sejak-style" style="color: #FFFFFF">{{ $count_katalog }}</h2>
                            <p class="subtitle-custom" style="color: #FFFFFF">Perusahaan Anggota</p>    
                        </div>
                        <div class="col-lg-4" id="line-after-div2">
                            <h2 class="sejak-style" style="color: #FFFFFF">{{ $count_master_bidang_usaha }}</h2>
                            <p class="subtitle-custom" style="color: #FFFFFF">Klasifikasi Usaha</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-white elipse">
        <div class="container-fluid pt-10 pb-14 pt-md-10 pb-md-12">
            <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center ">
                <h2 class="title-section">Anggota Hipmi<br>Kota Bandung</h2>
                <div class="d-flex justify-content-center mt-0">
                    <div class="col-lg-7">

                        <p class="sub-caption-utama-dark">Berikut adalah perusahaan – perusahaan yang telah berhimpun di
                            HIPMI
                            Kota Bandung.
                        </p>
                        <button onclick="window.location.replace('{{ route('ekatalog') }}','_blank')" type="button"
                            class="btn btn-success btn-green px-5" style="width: auto!important;">
                            <p class="subtitle-custom text-center"
                                style="color: #FFFFFF; margin-top: 20px; font-weight: bold">
                                Lihat Daftar
                                Perusahaan</p>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mt-15" id="grid-ktl">
                {{-- start loop --}}
                @foreach ($katalog as $var)
                    {{-- <div class="col-lg-2 col-md-6 col-sm-6 box-katalog"
                        onclick="window.location.replace('{{ route('detailekatalog', $var['id']) }}','_blank')">
                        <div class="box-img p-0"
                            style="background-image: url({{ asset('image/katalog/' . $var['logo']) }})">
                        </div>
                        <div class="box-text  ps-2 pe-2" id="box-caption">
                            <p class="text-left" id="caption-katalog">{!! Str::limit($var['nama_katalog'], 25, ' ...') !!}</p>
                        </div>
                        <div class="col-lg-12 p-0" id="box-desc">
                            <div class="col-12 ps-3 pe-3 pt-2 pb-2 mb-2 jenis-perusahaan">
                                {{ $var->Master_bidang_usaha['bidang_usaha'] }}
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-1 col-md-4 col-sm-6 box-katalog pb-3"
                        onclick="window.location.replace('{{ route('detailekatalog', $var['id']) }}','_blank')">
                        @if($var['kerjasama_count'] >= 20)
                        <div class="fav-icon rounded px-2 py-1">
                            <i class="bi bi-star-fill" style="color: #047857;"></i>
                        </div>
                        @endif
                        <div class="box-img2">
                            <img src="{{ asset('image/katalog') }}/{{ $var['logo'] }}" class="img-katalog"
                                alt="">
                        </div>
                        <div class="box-text  ps-2 pe-2" id="box-caption">
                            <p class="text-left" id="caption-katalog">{!! Str::limit($var['nama_katalog'], 25, ' ...') !!}</p>
                        </div>
                        <div class="col-lg-12 p-0" id="box-desc">
                            <div class="col-12 ps-3 pe-3 pt-2 pb-2 mb-2 jenis-perusahaan">
                                {{ $var->Master_bidang_usaha['bidang_usaha'] }}
                            </div>
                        </div>
                        <div id="des">{!! Str::limit($var['deskripsi'], 60, ' ...') !!}</div>
                    </div>
                @endforeach
                {{-- end loop --}}
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- <section class="pt-10 pb-10 pt-md-10 pb-md-10">
        <div class="container mt-10 mb-10">
            <div class="row">
                <div class="col-sm-2 col-md-4   box-ig text-center p-2"
                    onclick="window.location.replace('https://www.instagram.com/hipmi.bdg/')">
                    <img src="{{ asset('assets/img/ig/ig (2).png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-sm-2 col-md-4 box-ig text-center p-2"
                    onclick="window.location.replace('https://www.instagram.com/hipmi.bdg/')">
                    <img src="{{ asset('assets/img/ig/ig (1).png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-sm-2 col-md-4 box-ig text-center p-2"
                    onclick="window.location.replace('https://www.instagram.com/hipmi.bdg/')">
                    <img src="{{ asset('assets/img/ig/ig (6).png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-sm-2 col-md-4 box-ig text-center p-2"
                    onclick="window.location.replace('https://www.instagram.com/hipmi.bdg/')">
                    <img src="{{ asset('assets/img/ig/ig (5).png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-sm-2 col-md-4 box-ig text-center p-2"
                    onclick="window.location.replace('https://www.instagram.com/hipmi.bdg/')">
                    <img src="{{ asset('assets/img/ig/ig (4).png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-sm-2 col-md-4 box-ig text-center p-2"
                    onclick="window.location.replace('https://www.instagram.com/hipmi.bdg/')">
                    <img src="{{ asset('assets/img/ig/ig (3).png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section> --}}
    <section class="section-join">
        <div class="container-fluid pt-10 pb-10 pt-md-10 pb-md-10">
            <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center">
                <h3 class="title-join">Tertarik Menjadi Bagian<br>dari HIPMI Kota Bandung?</h3>
                <div class="">
                <a href="{{ route('keanggotaan') }}" target="_blank" type="button" class="btn btn-success btn-green px-5" style="width: auto!important;">
                            <p class="subtitle-custom text-center"
                                style="color: #FFFFFF; margin-top: 20px; font-weight: bold">
                                Lihat Daftar
                                Perusahaan</p>
                        </a>
                </div>
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- /section -->
    <section class="wrapper bg-white">
        <div class="container py-14 py-md-16 text-center">
            <div class="row">
                <iframe style="border-radius: 30px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7671408771876!2d107.60752911449985!3d-6.918418469636028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e62ff87d38a3%3A0xc5b8736987935ecd!2sJl.%20Braga%20No.36%2C%20Braga%2C%20Kec.%20Sumur%20Bandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040111!5e0!3m2!1sid!2sid!4v1658116293183!5m2!1sid!2sid"
                    width="500" height="450" style="border:0; margin: 0px 24px" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    
<section class="wrapper section-first  mt-14" id="cek_anggota">
    <div class="">
        <div class="row set-bg" style="--bs-gutter-x: 0;">
            <div class="col-lg-12 htr-full ps-0 ps-sm-14 pe-0 pe-sm-11 pt-0 pt-sm-13 pb-0 pb-sm-13 col-12">
                <div class="col-lg-6 p-0" id="mbl-pd-set">
                    <h2 id="tk">CEK KEANGGOTAAN</h2>
                </div>
                <div class="col-lg-2" id="mbl-pd-set">
                    <form class="" method="get" action="{{ route('beranda') }}#cek_anggota">
                        <div class="input-group mb-3 mx-auto" id="box-searching">
                            
                            <div class="col-lg-10 col-10 p-0">
                                <input type="text" name="q" value=""
                                    class="form-control p-1" id="input-search"
                                    aria-label="Ketik Nomor Kartu Tanda Anggota"
                                    placeholder="Ketik Nomor Kartu Tanda Anggota">
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
                <div class="col-lg-10">
                    <div class="col-lg-6 p-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// dd($anggota);
if($anggota == "not found"){ ?>
<section class="wrapper background-white">
    <div class="container pt-10 pb-14 pt-md-7 pb-md-15" id="section">
        <div class="row align-items-center sejak-background">
            <div class="col-md-12 sejak-position text-center" style="margin-top: 24px" id="b">
                <h2 class="sejak-style">KTA Tidak Terdaftar</h2>
            </div>
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<?php }else if(!is_null($anggota)){ ?>
<section class="wrapper background-white">
    <div class="container pt-10 pb-14 pt-md-7 pb-md-15" id="section">
        <div class="row align-items-center sejak-background">
            <div class="col-md-12 sejak-position text-center" style="margin-top: 24px" id="b">
                <h2 class="sejak-style">Anggota BPC Kota Bandung</h2>
                <p class="mb-3 subtitle-custom" id="p"><b>Nama Lengkap</b> : {{ $anggota[0]['name'] }}</p>
                <p class="mb-3 subtitle-custom" id="p"><b>KTA</b> : {{ substr_replace($anggota[0]['kta'], '****', -4) }}</p>
                <p class="mb-3 subtitle-custom" id="p"><b>Perusahaan</b> : {{ $perusahaan }}</p>
            </div>
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>

<?php } ?>

@endsection
    

@section('css-inner')
    <style>
        .motobg {
            background-image: url("{{ asset('assets/img/bg-tentang-moto.png') }}");
        }

        .banner-hipmi {
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('/image/banner/20220425-DSC00550.jpg') }}");
        }

        .elipse {
            background-image: url("{{ asset('assets/img/elipse (1).png') }}");
            background-position: top center;
            background-repeat: no-repeat;
        }
        .fav-icon{
            position:absolute;
            background-color: #ECFDF5;
            box-shadow: 11px 12px 32px -16px rgba(0,0,0,0.48);
            -webkit-box-shadow: 11px 12px 32px -16px rgba(0,0,0,0.48);
            -moz-box-shadow: 11px 12px 32px -16px rgba(0,0,0,0.48);
        }
        .img-katalog{
            width: 210px;
            height: 210px;
            object-fit: contain;
            object-position: center;
        }
        /*untuk layar device berukuran kecil*/
        @media screen and (max-width: 450px) {
            .img-katalog{
                width: 165px;
                height: 165px;
                object-fit: contain;
                object-position: center;
            }

        }
        
    </style>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            let width = window.screen.width;
        });
    </script>
@endsection
