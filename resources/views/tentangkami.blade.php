@extends('layouts.template-guest')
@section('title')
    Tentang kami
@endsection
@section('content')
    <section class="wrapper section-first  mt-14">
        <div class="">
            <div class="row set-bg" style="--bs-gutter-x: 0;">
                <div class="col-lg-7 htr ps-0 ps-sm-14 pe-0 pe-sm-11 pt-0 pt-sm-13 pb-0 pb-sm-13 col-12 ">
                    <div class="col-lg-11 p-0" id="mbl-pd-set">
                        <h2 id="tk">Tentang Kami</h2>
                        <div class="row menu-submenu mt-7">
                            <div class="col-4 sub-menu" id="border-right-tent"> <a class="text-black" href="#sejarah">
                                    Sejarah</a></div>
                            <div class="col-4 sub-menu" id="border-right-tent"> <a class="text-black" href="#visimisi"> Visi
                                    Misi</a></div>
                            <div class="col-4 sub-menu "> <a class="text-black" href="#so"> Struktur Organisasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper container pb-15 ">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ url('storage') }}/{{ App\Cms_konten::find(1)->logo1 }}" class="img-fluid rounded">
            </div>
            <div class="col-lg-6 ps-lg-7" id="sejarah">
                <h3 id="s1">Sejarah Terbentuk</h3>
                <br>
                <div class="text" id="s2">
                    {!! App\Cms_konten::find(1)->k1 !!}
                </div>
            </div>
        </div>
    </section>
    <section class="vm pt-15 pb-15 motobg" id="visimisi">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 id="s3">Visi & Misi</h3>
                    <br>
                    <h3 id="s4">Visi</h3>
                    {{-- <p id="s5">Menjadi komunitas kewirausahaan yang unggul, berkarakter dan berkelas dunia dengan Spiritual, Kreatifitas, dan Intelektualitas (SKI) untuk terciptanya kemakmuran seluruh rakyat Indonesia Raya serta menjadi representatasi pengusaha muda intelektual Indonesia di tatanan Nasional dan Internasional.</p> --}}
                    <p id="s5">{!! App\Cms_konten::find(2)->k1 !!} </p>
                    <h3 id="s4">Misi</h3>
                    <div class="asd">
                        <p id="s5">{!! App\Cms_konten::find(2)->k2 !!}</p>
                        {{-- <ol id="s5">
                        <li>Membentuk sistem keorganisasian dengan Memperkokoh asas nilai Integritas, Passion, Kreatifitas, Rendah Hati, dan Profesionalisme Universitas Esa Unggul.</li>
                        <li>Membangun jaringan luas dengan lembaga internal, dan eksternal kampus di tingkat nasional dan internasional.</li>
                        <li>Memaksimalkan potensi dan minat jiwa kewirausahaan anggota melalui ilmu pengetahuan dan keadaan sosial.</li>
                        <li>Mempengaruhi semangat kewirausahaan dengan konsep SKI (Spiritual, Kreatifitas, dan Intelektualitas).</li>
                    </ol> --}}
                    </div>
                </div>
                <div class="col-lg-1 align-items-center  justify-content-center pt-18 pl-2 bggaris">

                </div>
                <div class="col-lg-5 align-items-center  justify-content-center pt-18 pl-2">
                    <h3 id="s4">Motto</h3>
                    <div class="isi text-left ">
                        {!! App\Cms_konten::find(2)->k3 !!}
                        {{-- Pengusaha Pejuang-Pejuang Pengusaha yang bermakna bahwa kader-kader HIPMI tidak saja diharapkan menjadi pengusaha nasional yang tangguh tetapi juga menjadi pengusaha yang berwawasan kebangsaan dan memiliki kepedulian terhadap tuntutan nurani rakyat. --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-15 mb-15">
        <h2 id="s1">BPC HIPMI Kota Bandung 2022-2025</h2>
        <div class="row mt-8" id="so">
            @foreach ($aktif as $key => $item)
                <div class="col-lg-3 col-md-6 col-sm-6 align-items-center">
                    <img class="mx-auto mb-4 col-12" src="{{ url('storage/public') }}/{{ $item['gambar'] }}"
                        style="max-width: 300px; max-height: 200px; object-fit:cover; object-position: 0% 10%;"
                        alt="HIPMI BANDUNG {{ $item['nama'] }}-{{ $item['jabatan'] }}" />
                    <h4 id="s7" class="mb-1">{{ $item['nama'] }}</h4>
                    <div id="s8" class="meta mb-2">{{ $item['jabatan'] }}</div>
                    <!-- /.social -->
                </div>
            @endforeach
        </div>
        <div class="row mt-8">
            <h3 id="s6">Ketua Badan Otonom</h3><br>
            @foreach ($partner as $key => $item)
                <div class="col-lg-3 col-md-6 col-sm-6 align-items-center">
                    <img class="mx-auto mb-4 col-12" src="{{ url('storage/public') }}/{{ $item['gambar'] }}"
                        style="max-width: 300px; max-height: 200px; object-fit:cover; object-position: 0% 10%;"
                        alt="HIPMI BANDUNG {{ $item['nama'] }}-{{ $item['jabatan'] }}" />
                    <h4 id="s7" class="mb-1">{{ $item['nama'] }}</h4>
                    <div id="s8" class="meta mb-2">{{ $item['jabatan'] }}</div>
                    <!-- /.social -->
                </div>
            @endforeach
        </div>
    </section>
    <!-- /section -->
    <section class="pt-10 pb-10 vm">
        <div class="container">
            <h3 id="s6">Sejarah Ketua Umum HIPMI Kota Bandung</h3><br>
            <div class="swiper-container mb-10" data-margin="30" data-nav="true" data-dots="true" data-items-xl="5"
                data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($riwayat as $key => $item)
                            <div class="swiper-slide" id="slidetentang">
                                <img src="{{ url('storage/public') }}/{{ $item['gambar'] }}"
                                    alt="HIPMI BANDUNG {{ $item['nama'] }}-{{ $item['jabatan'] }}"
                                    style="max-width: 300px; max-height: 200px; object-fit:cover; object-position: 0% 10%;">
                                <div class="pt-3 pb-3">
                                    <h4 id="s7" class="mb-1">{{ $item['nama'] }}</h4>
                                    <div id="s8" class="meta mb-2">{{ $item['periode'] }}</div>
                                </div>
                            </div>
                            <!--/.swiper-slide -->
                        @endforeach
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>
    </section>
    <!-- /section -->
@endsection
@section('css-inner')
    <style>
        .motobg {
            background-image: url("{{ url('assets/img/bg-tentang-moto.png') }}");
        }

        .herobg {
            background: linear-gradient(180deg, rgba(0, 53, 24, 0.1) 0%, rgba(0, 53, 24, 0) 83.94%);
        }

        .set-bg {
            background-image: url("{{ url('assets/img/bg2.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 300px;
            /* background-size: contain; */
            background-position: right;
            margin-bottom: 200px;
        }

        .bg-keanggotaan {
            background-image: url("{{ url('assets/img/bg-keanggotaan.png') }}");
            min-height: 350px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        .bggaris {
            /*mengatur border bagian kiri tag div */
            border-left: 2px solid #00AF50;
            /* mengatur tinggi tag div*/
            height: 615px;
            /*mengatur lebar tag div*/
            width: 1px;

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
