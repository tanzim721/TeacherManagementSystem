<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Open+Sans?query=san">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/')}}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('backend/')}}/plugins/summernote/summernote-bs4.min.css">
    <!-- jQuery -->
</head>
<body class="fix-header fix-siebar">
    
    @include('Layout.menu')


    @yield('content')


    {{-- @include('Layout.footer') --}}

    <script src="{{asset('backend/')}}/plugins/jquery/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/sidebar.min.js')}}"></script>
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <script src="{{asset('js/sticky-kit.min.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('backend/')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('backend/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{asset('backend/')}}/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{asset('backend/')}}/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('backend/')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{asset('backend/')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('backend/')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{asset('backend/')}}/plugins/moment/moment.min.js"></script>
    <script src="{{asset('backend/')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('backend/')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{asset('backend/')}}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('backend/')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/')}}/dist/js/adminlte.js"></script> 
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{asset('backend/')}}/dist/js/demo.js"></script>  -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('backend/')}}/dist/js/pages/dashboard.js"></script> 

    <!-- DataTables  & Plugins -->
    <script src="{{asset('backend/')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend/')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- jquery-validation -->
    <script src="{{asset('backend/')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{asset('backend/')}}/plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
