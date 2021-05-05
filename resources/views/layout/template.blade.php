<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link href="{{ asset('assets/css/styles.css')}} " rel="stylesheet" />
        <link href="{{ asset('assets/css/styleadd.css')}} " rel="stylesheet" />
        {{-- bootstrap --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous" />
        {{-- datatable --}}
        <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css">
    </head>

    <body class="sb-nav-fixed">
        @section('navbartop')
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Aplikasi Giat</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Cari Data" aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Ganti Password</a>
                        <a class="dropdown-item" href="#">Aktivitas Terakhir</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        @show
        <div id="layoutSidenav">
            <!-- menu navigasi -->
            @section('navbarside')
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Utama</div>
                            <a class="nav-link" href="{{ url('') }} ">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <!-- kegiatan -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKegiatan" aria-expanded="false" aria-controls="collapseKegiatan">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Kegiatan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseKegiatan" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('act')}}">Lihat</a>
                                    <a class="nav-link" href="{{ url('act/add')}}">Tambah</a>
                                </nav>
                            </div>
                            <!-- kegiatan -->
                            <!-- data pegawai -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData" aria-expanded="false" aria-controls="collapseData">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Pegawai
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseData" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('emp')}} ">Profil Saya</a>
                                    <a class="nav-link" href="{{ url('emp/list')}} ">Daftar Pegawai</a>
                                </nav>
                            </div>
                            <!-- data pegawai -->
                            <!-- data lembaga -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLembaga" aria-expanded="false" aria-controls="collapseLembaga">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Lembaga
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLembaga" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Organisasi</a>
                                    <a class="nav-link" href="#">Unit / Sub Unit</a>
                                </nav>
                            </div>
                            <!-- data lembaga -->
                            <!-- laporan -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan" aria-expanded="false" aria-controls="collapseLaporan">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Laporan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLaporan" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Ekspor Bulanan</a>
                                    <a class="nav-link" href="#">Ekspor Harian</a>
                                </nav>
                            </div>
                            <!-- data pegawai -->
                            <div class="sb-sidenav-menu-heading">Menu Publik</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Kegiatan Pegawai
                            </a>
                            {{-- <div class="sb-sidenav-menu-heading">Setting</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Statistik
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Grafik
                            </a> --}}
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Agri Apriliando
                    </div>
                </nav>
            </div>
            @show
            <!-- menu navigasi -->
            <div id="layoutSidenav_content" class="bg-gradient">
                <main>
                    <!-- content -->
                    @yield('content')
                    <!-- content -->
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; TIPD 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        
        <!-- Bootstrap 4 Autocomplete -->
        <script src="{{ asset('assets/js/bootstrap-4-autocomplete.js')}} "></script>
        <script src="{{ asset('assets/js/config-autocomplete.js')}} "></script>

        {{-- fontawesome --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

        {{-- bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/scripts.js')}}"></script>

        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/datatables-demo.js')}} "></script>

        <!-- button print datatables -->
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>
    </body>
</html>