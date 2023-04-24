<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

    </head>

    @yield('content')

        <!-- Vendor js -->
        <script src="{{ asset('admin/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/js/app.min.js') }}"></script>

    </body>

</html>
