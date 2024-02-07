@extends('layouts.template-guest')
@section('title')
    Menjadi Anggota
@endsection
@section('content')
    <section class="wrapper section-first  mt-14">
        <div class="">
            <div class="row set-bg">
                <div class="col-lg-7 htr ps-0 ps-sm-14 pe-0 pe-sm-12 pt-0 pt-sm-13 pb-0 pb-sm-13">
                    <div class="col-lg-11" id="mbl-pd-set">
                        <h2 id="tk">Menjadi Anggota</h2>
                        {{-- <p class="text-white">Bergabung dan memulai langkah bersama HIPMI Kota Bandung untuk mendorong hadirnya pengusaha indonesia yang tangguh dan mandiri.</p> --}}
                        <p class="subtitle-custom text-white">{{ App\Cms_konten::find(3)->k1 }}</p>
                    </div>
                </div>
                <div class="col-lg-5">

                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="wrapper background-white mt-15 mb-10 pt-2 container">
        <div class="row">
            <div class="col-lg-6">
                <h2 id="cpt-keanggotaan">Syarat Keanggotaan</h2>
            </div>
            <div class="col-lg-6" id="dsc-keanggotaan">
                {!! App\Cms_konten::find(3)->k2 !!}
                {{-- <ol >
                <li>Warga negara Republik Indonesia</li>
                <li>Pemilik / Penanggung Jawab Usaha</li>
                <li>Berusia 18-40th</li>
                <li>Melampirkan copy identitas dan legalitas usaha</li>
                <li>Membayar iuran keanggotaan dan biaya administrasi</li>
                <li>Bersedia mematuhi tata tertib, anggaran dasar dan anggaran rumah tangga organisasi.</li>
            </ol> --}}
            </div>
        </div>
        <hr id="hr-keanggotaan">
        <div class="row">
            <div class="col-lg-6">
                <h2 id="cpt-keanggotaan">Regulasi</h2>
            </div>
            <div class="col-lg-6" id="dsc-keanggotaan">
                {!! App\Cms_konten::find(3)->k3 !!}
                {{-- <ol id="dsc-keanggotaan">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra pellentesque amet, vulputate at
                    erat tempus odio in. Mauris, at ultrices id quis. Sed in morbi feugiat mauris enim. Risus
                    suspendisse mauris fames phasellus. Dis eu lacus, elementum, vulputate morbi bibendum odio aliquam
                    egestas.</li>
                <li>Tempor diam quam massa, imperdiet metus, scelerisque pellentesque etiam. Condimentum in scelerisque
                    malesuada sagittis. Nec tellus pretium, vitae scelerisque vitae commodo. Sed fermentum luctus
                    nascetur ullamcorper ut diam magna lorem. Lacinia risus cursus ipsum sodales nunc. Neque sit
                    venenatis arcu ultricies sit consequat. Venenatis ullamcorper semper elit lacinia etiam quis vitae.
                    Id arcu consectetur massa consequat malesuada. Dolor a consectetur lorem turpis amet lorem. At
                    praesent suscipit lacus laoreet. Molestie est venenatis tempor nunc. Magna eget sit cursus cursus
                    faucibus urna, sit congue massa.</li>
            </ol> --}}
            </div>
        </div>
        <hr id="hr-keanggotaan">
        <div class="row">
            <div class="col-lg-6">
                <h2 id="cpt-keanggotaan">Pertanyaan Umum</h2>
            </div>
            <div class="col-lg-6" id="section">
                <div class="accordion accordion-wrapper" id="accordionSimpleExample">
                    {{-- <div class="card plain accordion-item">
                  <div class="card-header faq-b" id="headingSimpleOne">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseSimpleOne" aria-expanded="true" aria-controls="collapseSimpleOne"> FAQ 1 </button>
                  </div>
                  <div id="collapseSimpleOne" class="accordion-collapse collapse show" aria-labelledby="headingSimpleOne" data-bs-parent="#accordionSimpleExample">
                    <div class="card-body">
                      <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                    </div>
                  </div>
                </div> --}}
                    <!--/.accordion-item -->
                    <!--{{ $a = 0 }}
                                                                                                                                                                                                {{ $b = 0 }}
                                                                                                                                                                                                {{ $c = 1000 }}
                                                                                                                                                                                                {{ $d = 1000 }}
                                                                                                                                                                                                {{ $e = 1000 }}-->
                    @foreach ($result as $key => $item)
                        <div class="card plain accordion-item">
                            <div class="card-header faq-b" id="headingSimple{{ $a++ }}">
                                <button class="collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSimple{{ $c++ }}" aria-expanded="false"
                                    aria-controls="collapseSimple{{ $d++ }}">
                                    <div id="dsc-keanggotaan" style="line-height: 32px; font-weight: 600;">
                                        {{ $item['judul'] }}</div>
                                </button>
                            </div>
                            <div id="collapseSimple{{ $e++ }}" class="accordion-collapse collapse"
                                aria-labelledby="headingSimple{{ $b++ }}"
                                data-bs-parent="#accordionSimpleExample">
                                <div class="card-body">
                                    <div id="dsc-keanggotaan">
                                        {{ $item['deskripsi'] }}</div>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-item -->
                    @endforeach
                </div>
                <!--/.accordion -->
            </div>
        </div>
        <hr id="hr-keanggotaan">
    </section>
    <!-- /section -->
    <section class="section-join">
        <div class="container-fluid pt-10 pb-10 pt-md-10 pb-md-10">
            <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center">
                <h3 class="title-join">Tertarik Menjadi Bagian <br>
                    dari HIPMI Kota Bandung?</h3>
                <br>
                <div class="">
                    <button class="btn btn btn-success btn-join" type="button"
                        onclick="window.location.href='{{ App\Cms_konten::find(3)->k4 }}';" target="_blank">
                        <p class="subtitle-custom text-center" style="color: #FFFFFF; margin-top: 20px; font-weight: bold">
                            Daftar Menjadi Anggota</p>
                    </button>

                </div>
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
@section('css-inner')
    <style>
        .motobg {
            background-image: url("{{ asset('assets/img/bg-tentang-moto.png') }}");
        }

        .set-bg {
            background-image: url("{{ asset('assets/img/DSC07647.JPG') }}");
            background-repeat: no-repeat;
            /* background-size: contain; */
            background-position: right;
            height: 352px;
            background-size: cover;
        }

        .bg-keanggotaan {
            background-image: url("{{ asset('assets/img/bg-keanggotaan.png') }}");
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
