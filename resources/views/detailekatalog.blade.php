@extends('layouts.template-guest')
@section('title')
    Rincian Katalog
@endsection
@section('content')
    <section class="wrapper container mt-17">
        <nav class="d-inline-block mb-12    " aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('beranda') }}" class="aktif">
                        <div id="dsc-keanggotaan" class="aktif" style="line-height: 28px; font-weight: 600;">
                            Home</div>
                    </a></li>
                <li class="breadcrumb-item"><a href="{{ route('ekatalog') }}">
                        <div id="dsc-keanggotaan" class="aktif" style="line-height: 28px; font-weight: 600;">
                            e-Katalog</div>
                    </a></li>
                <li class="breadcrumb-item"><a href="#">
                        <div id="dsc-keanggotaan" style="line-height: 28px; font-weight: 600; color: #6B7280">
                            {{ $var['nama_katalog'] }}</div>
                    </a></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-8">
                <h1 class="caption-banom mb-5">{{ $var['nama_katalog'] }}</h1>
                <p id="text-banom">
                    {{ $var['deskripsi'] }}
                </p>
            </div>
            <div class="col-lg-4  mt-10">
                <div class="mx-auto mx-lg-0 row frame-image d-flex align-items-center justify-content-center "
                    id="img-katalog">
                    <div class="box-img2 p-0">
                        <img src="{{ asset('storage/image/katalog/') }}/{{ $var['logo'] }}" class="img-fluid" alt=""
                            style="    border-radius: 27px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-10">

            <div class="tab-content" id="pills-tabContent">
                <div class=" tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <div class="row">
                        <h2 id="s7">Umum</h2>
                        <div class="row mt-7">
                            <div class="col-md-5">
                                <h4 id="sub-cpt">Nama Perusahaan</h4>
                                <p id="isi">{{ $var['nama_katalog'] }} </p>
                            </div>
                            <div class="col-md-5">
                                <h4 id="sub-cpt">Bidang Usaha</h4>
                                <p id="isi">{{ $var->Master_bidang_usaha['bidang_usaha'] }}</p>
                            </div>
                            {{-- <div class="col-md-5">
                                <h4 id="sub-cpt">Jumlah Kerjasama</h4>
                                <p id="isi">{{ $var['kerjasama_count'] }} Kerjasama</p>
                            </div> --}}
                        </div>
                    </div>
                    @guest
                        <div class="block-panel">
                            <div class="alert alert-success" role="alert" id="notif">
                                Silakan masuk untuk melihat informasi ini. <a class="fw-bold" href="#">Masuk</a> <br>
                                Belum memiliki akun? <a class="fw-bold" href="#">Daftar</a>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <h2 id="s7">Kontak</h2>
                            <div class="row  mt-7">
                                <div class="col-md-4">
                                    <h4 id="sub-cpt">Nama Pemilik Usaha</h4>
                                    <p id="isi">{{ $var['nama_pemilik'] }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h4 id="sub-cpt">WhatsApp Pemilik</h4>
                                    <p id="isi">{{ $var['no_pemilik'] }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h4 id="sub-cpt">Email</h4>
                                    <p id="isi">{{ $var['email_pemilik'] }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h4 id="sub-cpt">Sosial Media</h4>
                                    <p id="isi">
                                    <div class="d-inline-block" aria-label="breadcrumb">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><a id="grey" href="#"><i
                                                        class="uil uil-facebook"></i></a></li>
                                            <li class="list-inline-item"><a id="grey" href="{{ $var['instagram'] }}"><i
                                                        class="uil uil-instagram"></i></a></li>
                                            <li class="list-inline-item"><a id="grey" href="#"><i
                                                        class="uil uil-twitter"></i></a></li>
                                            <li class="list-inline-item"><a id="grey" href="#"><i
                                                        class="uil uil-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <h4 id="sub-cpt">Alamat Perusahaan</h4>
                                    <p id="isi">{{ $var['alamat'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h2 id="caption-small">Brand</h2>
                            <div class="row  mt-7">
                                @foreach ($brand as $brands)
                                    <div class="col-md-6">
                                        <div class="card brand">
                                            <div class="row">
                                                <div class="col-md-4 ">
                                                    <div class="img-brand box-img m-2 p-0"
                                                        style="background-image: url('{{ asset('image/brand') }}/{{ $brands['logo_brand'] }}');    background-position: center; background-size: contain;">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-md-8 pt-2 pb-2">
                                                    <h4 id="cpt-br mt-1 ">{{ $brands['nama_brand'] }}</h4>
                                                    <p id="dsc-br">{{ $brands['deskripsi_brand'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endguest
                    <!--@guest-->
                        <!--    <div class="block-panel">-->
                        <!--        <div class="alert alert-success" role="alert" id="notif">-->
                        <!--            Silakan masuk untuk melihat informasi ini. <a class="fw-bold" href="#">Masuk</a> <br>-->
                        <!--            Belum memiliki akun? <a class="fw-bold" href="#">Daftar</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                    <!--@else-->
                        <!--    <div class="row">-->
                        <!--        <h2 id="caption-small">Brand</h2>-->
                        <!--        <div class="row  mt-7">-->
                        <!--            @foreach ($brand as $brands)
        -->
                        <!--                <div class="col-md-6">-->
                        <!--                    <div class="card brand">-->
                        <!--                        <div class="row">-->
                        <!--                            <div class="col-md-4 ">-->
                        <!--                                <div class="img-brand box-img m-2 p-0"-->
                        <!--                                    style="background-image: url('{{ url('image/brand') }}/{{ $brands['logo_brand'] }}');    background-position: center; background-size: contain;">-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="col-md-8 col-md-8 pt-2 pb-2">-->
                        <!--                                <h4 id="cpt-br mt-1 ">{{ $brands['nama_brand'] }}</h4>-->
                        <!--                                <p id="dsc-br">{{ $brands['deskripsi_brand'] }}</p>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--
        @endforeach-->
                        <!--        </div>-->
                        <!--    </div>-->
                    <!--@endguest-->
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">



                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">

                </div>
            </div>

            <div class="col-sm-5 mt-12 mb-12">
                @if (isset($var['cv']))
                    {{-- kondisi tidak NULL --}}
                    <button type="button"
                        onclick="window.open('{{ asset('storage/pdf/katalog') }}/{{ $var['cv'] }}','_blank')"
                        target="_blank" class="btn btn-success" id="radius">Download Company Profile</button>
                @else
                    {{-- kondisi NULL --}}
                @endif
            </div>
            @guest
            @else
                {{-- <form action="{{ route('kerjasama', $var['id']) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success" id="radius">Ajukan Kerja Sama</button>
                    <div class="mt-10"></div>
                </form> --}}
            @endguest
            {{-- <hr style="border: 1px solid  #E5E7EB;;"> --}}

            <h3 id="s7">Perusahaan Anggota Lainnya</h3>
            <!-- start content  -->
            <div class="row d-flex justify-content-center mt-5 container-fluid mb-14">
                @foreach ($katalog as $var)
                    <div class="col-lg-4 col-\sm -6 box-katalog-page pb-3"
                        onclick="window.location.replace('{{ route('detailekatalog', $var['id']) }}','_blank')"
                        style="width: 32%;">
                        <div class="box-img2 p-0" style="">
                            <img src="{{ asset('storage/image/katalog/') }}/{{ $var['logo'] }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="box-text p-0">
                            <div class="col-12 d-flex align-items-center p-0" id="box-caption">
                                <p class="text-left mb-1" id="caption-katalog">{{ $var['nama_katalog'] }}</p>
                            </div>
                            <div class="col-lg-12 p-0" id="box-desc">
                                <div class="col-12 ps-3 pe-3 pt-2 pb-2 mb-2 jenis-perusahaan">
                                    {{ $var->Master_bidang_usaha['bidang_usaha'] }}
                                </div>
                            </div>
                            <div id="des">{!! Str::limit($var['deskripsi'], 60, ' ...') !!}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- end brand -->
        </div>
    </section>
@endsection
<link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">
@section('js')
    @if (Session::get('message') != null)
        <script>
            Swal.fire({
                text: "{{ Session::get('message') }}",
                icon: "{{ Session::get('error') }}",
                customClass: {
                    confirmButton: "btn fw-bold btn-light",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            })
        </script>
    @endif
@endsection
