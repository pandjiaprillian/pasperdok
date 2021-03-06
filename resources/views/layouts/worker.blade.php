<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    {{-- FavIcon --}}
    <link rel="icon" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" href="{{ asset('img/apple-icon-180x180.png') }}">

    <title>@yield('title', 'PasPerDok')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/vendor/sb-admin/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    @if (isset($page))
    @if ($page == 'login')
    @yield('content')
    @endif
    @else
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('templates.worker.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('templates.worker.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- content -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white mt-3">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PasPerDok {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('templates.worker.logout-modal')


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/vendor/sb-admin/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/vendor/sb-admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/vendor/sb-admin/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
    <script src="{{ asset('/js/absensi.js') }}"></script>
    @include('sweetalert::alert')
    @endif

</body>

</html>
