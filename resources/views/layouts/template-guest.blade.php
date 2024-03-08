<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GV7LLKST0D"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-GV7LLKST0D');
    </script>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="HIPMI Kota Bandung sebagai organisasi pengusaha muda terbesar di Kota Bandung yang senantiasa melahirkan inovasi dan kreasi melalui unit usaha para anggotanya ingin memulai suatu pergerakan untuk mendukung implementasi Semangat Pengusaha Muda dalam menghadapi pandemi in dengan mencanangkan suatu semangat dan kiat-kiat membuat inovasi terdepan dalam mempertahankan bisnisnya. Sebuah visi dimana Bandung meniadi garda terdepan perkembangan ekonomi kreatif Indonesia walaupun adanya pandemi.">
    <meta name="keywords"
        content="hipmi, HIPMI, HIPMI Kota Bandung, organisasi pengusaha muda, inovasi dan kreasi, himpunan, pengusaha, muda, himpunan pengusaha muda">
    <meta name="author" content="HIPMI Kota Bandung">
    <title>HIPMI Kota Bandung</title>
    <link rel="shortcut icon" href="{{ url('assets/img/Hipmi Bandung Logo.png') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/custom-font.css') }}">
    <link href="{{ url('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    @yield('css-inner')
</head>

<body>
    {{-- <a href="https://api.whatsapp.com/send?phone=6282138680308&text=Hallo" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a> --}}
    <div class="content-wrapper ">
        <header class="wrapper bg-soft-primary">
            <nav
                class="navbar  {{ request()->is('/') ? 'navbar-dark' : '' }}  navbar-expand-lg center-nav transparent position-absolute ">
                <div class="container-fluid flex-lg-row flex-nowrap align-items-center p-0" style="margin: 0px 50px">
                    <div class="navbar-brand w-100">
                        <a href="{{ route('beranda') }}">
                            <img class="logo-dark"
                                src="{{ url(request()->is('/') ? 'assets/img/logo-hipmi.png' : 'assets/img/hipmi-lg.png') }}"
                                style="max-width: 160px"
                                srcset="{{ url(request()->is('/') ? 'assets/img/logo-hipmi.png' : 'assets/img/hipmi-lg.png') }}"
                                alt="" />
                            <img class="logo-light" style="max-width: 160px"
                                src="{{ url(request()->is('/') ? 'assets/img/logo-hipmi.png' : 'assets/img/hipmi-lg.png') }}"
                                alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <!-- <h3 class="text-white fs-30 mb-0">Sandbox</h3> -->
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                        style="color: {{ request()->is('/') ? '' : '#111827' }} "
                                        href="{{ route('beranda') }}">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('e-katalog*') ? 'active' : '' }}"
                                        style="color: {{ request()->is('/') ? '' : '#111827' }} "
                                        href="{{ route('ekatalog') }}">e-Katalog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('tentang-kami') ? 'active' : '' }}"
                                        style="color: {{ request()->is('/') ? '' : '#111827' }} "
                                        href="{{ route('tentangkami') }}">Tentang Kami</a>
                                </li>                         
                                <li class="nav-item dropdown">
                                    <a class="nav-link {{ request()->is('badan-otonom*') ? 'active' : '' }} dropdown-toggle"
                                        style="color: {{ request()->is('/') ? '' : '#111827' }} "
                                        href="{{ route('badanotonom') }}">Badan Otonom
                                        </i></a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        @foreach ($panduan_anggota as $key => $item)
                                            <li class="nav-item"><a class="dropdown-item"
                                                    href="{{ route('detailbadanotonom', $item['id']) }}">{{ $item['judul'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @guest
                                    <li class="nav-item m-2">
                                        <button onclick="window.location.replace('{{ route('keanggotaan') }}','_blank')"
                                            class="btn btn-navbar btn-outline-success" type="submit"><b>Jadi
                                                Anggota</b></button>
                                    </li>
                                    <li class="nav-item m-2">
                                        <button onclick="window.location.replace('{{ route('login') }}')"
                                            class="btn btn-navbar btn-success" type="submit"><b>Masuk</b></button>
                                    </li>
                                    @if (Route::has('register'))
                                    @endif
                                @else
                                    {{-- <li class="nav-item m-2">
                                        <button onclick="window.location.replace('{{ route('keanggotaan') }}','_blank')"
                                            class="btn btn-navbar btn-outline-success" type="submit">Jadi Anggota</button>
                                    </li> --}}
                                    <li class="nav-item dropdown">
                                        <a class="nav-link  dropdown-toggle" id="dropdownMenuButton1" 
                                                data-bs-toggle="dropdown" href="#">
                                            {{-- <img
                                                style="width: 20px; color: {{ request()->is('/') ? '' : '#111827' }} " 
                                                src="{{ asset('image/pengguna') }}/{{ Auth::user()->photo }}"
                                                alt="" class="img-fluid "> --}}
                                                Akun
                                            </i></a>
                                        <ul class="dropdown-menu">
                                            @if (Auth::user()->role != 'anggota')
                                            <li class="nav-item"><a class="dropdown-item"
                                                    href="/admin/home">Dashboard</a></li>
                                                
                                            @else
                                            {{-- <li class="nav-item"><a class="dropdown-item" href="#"></a></li> --}}
                                            <li class="nav-item"><a class="dropdown-item"
                                                    href="{{ route('anggota.edit_akun') }}">Akun</a></li>
                                            <li class="nav-item"><a class="dropdown-item"
                                                    href="/anggota/katalog-pengguna">Katalog</a></li>
                                            {{-- <li class="nav-item"><a class="dropdown-item"
                                                    href="{{ route('anggota') }}">Partnership</a></li> --}}
                                            @endif
                                            <li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="">
                                                    @csrf
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>

                                @endguest

                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>

                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other  d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item d-lg-none">
                                <button class="p-0 offcanvas-nav-btn" id="hide"><span><img
                                            src="{{ url('assets/img/navbar.png') }}"
                                            class="img-fluid"></span></button>

                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->

        {{-- END NAVBAR --}}
        @yield('content')
        @yield('content2')
        {{-- START FOOTER --}}
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse">
        <div class="container-fluid py-13 px-12 py-md-15 ">
            <div class="row gy-6 gy-lg-0">
                <div class="col-lg-3 p-0">
                    <div class="widget">
                        <img style="max-width: 160px" class="mb-4" src="{{ url('assets/img/logo-hipmi.png') }}"
                            srcset="{{ url('assets/img/logo-hipmi.png') }}" alt="" />
                        <p class="mb-4 footer-subtitle">© 2022 HIPMI Kota Bandung. <br>All rights reserved.</p>
                        <br>
                        <p class="mb-4 footer-subtitle">Developed by: <br>
                            <a href="https://www.langgenginovasiteknologi.com/" target="_blank"> Langgeng Inovasi Teknologi</a></p>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-3 col-lg-3 ps-0">
                    <div class="widget">
                        <h4 class="footer-title">Alamat Sekretariat </h4>
                        <ul class="list-unstyled mb-0">
                            <li>

                                <div class="nav social social-white row">

                                    <div class="col-1">

                                        <i class="uil uil-location-point"></i>
                                    </div>
                                    <div class="col" id="text-footer-alamat">
                                        Jalan Braga No.36 Braga Kecamatan Sumur Bandung
                                        Kota Bandung Jawa Barat 40111
                                        Indonesia </div>


                                </div>

                            </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-3 col-lg-3 p-0">
                    <div class="widget">
                        <h4 class="footer-title">Kontak Kami</h4>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <div class="nav social social-white">
                                    <a href="https://wa.me/6282138680308" target="_blank"><i class="uil uil-whatsapp"></i>
                                        +62821-3868-0308
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="nav social social-white">
                                    <a href="mailto:info.anggota@hipmibdg.or.id"><i class="uil uil-envelope"></i>
                                        info.anggota@hipmibdg.or.id </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-3 col-lg-3 p-0">
                    <div class="widget">
                        <h4 class="footer-title">Sosial Media</h4>
                        <div class="nav social social-white">
                            <a href="https://www.facebook.com/HIPMI-Kota-Bandung-899407083544682"><i
                                    class="uil uil-facebook"></i>
                                Hipmi Kota Bandung
                            </a>
                        </div>
                        <div class="nav social social-white">
                            <a href="https://www.instagram.com/hipmi.bdg/"><i class="uil uil-instagram"></i>
                                hipmi.bdg
                            </a>
                        </div>
                        <div class="nav social social-white">
                            <a href="https://twitter.com/HipmiKotaBdg"><i class="uil uil-twitter"></i>
                                hipmi.bdg
                            </a>
                        </div>
                        <div class="nav social social-white">
                            <a href="https://www.youtube.com/channel/UCxoitvr_eMtsjVpInYCBb6Q"><i
                                    class="uil uil-youtube"></i>
                                Hipmi Kota Bandung
                            </a>
                        </div>

                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ url('assets/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ url('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ url('assets/js/scripts.bundle.js') }}"></script>

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
    {{-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ url('assets/js/plugins.js') }}"></script>
    <script src="{{ url('assets/js/theme.js') }}"></script>
    <!-- Bootstrap JS (Bootstrap 5 no longer requires jQuery or Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('js')
</body>

</html>
