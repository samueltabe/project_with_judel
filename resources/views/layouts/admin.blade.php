<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Dashboard | eCommerce</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}">

        <!-- Plugins css-->
        <link href="{{ asset('admin/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- Topbar Start -->
             @include('layouts.inc.navbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
             @include('layouts.inc.sidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                         @yield('content')
                        <!-- end page title -->

                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->



                <!-- Footer Start -->
            @include('layouts.inc.footer')
    </body>
</html>
