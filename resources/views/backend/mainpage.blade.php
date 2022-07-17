<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/ubold/layouts/default/ecommerce-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 07:08:02 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Ecommerce Dashboard | UBold - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="{{asset('backend/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap css -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{asset('backend/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
    <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css-->
        <link href="{{asset('backend/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('backend/js/head.js')}}"></script>

</head>

<!-- body start -->

<body data-layout-mode="default" data-theme="light" data-layout-width="fluid" data-topbar-color="dark"
    data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
       @include('backend.layouts.header')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.layouts.sidebar')
       
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
          @yield('content')

            <!-- Footer Start -->
       @include('backend.layouts.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

  

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{asset('backend/js/vendor.min.js')}}"></script>

    <!-- Third Party js-->
    <script src="{{asset('backend/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('backend/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('backend/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- Dashboard init js -->
    <script src="{{asset('backend/js/pages/ecommerce-dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('backend/js/app.min.js')}}"></script>

    <!-- Select2 js-->
    <script src="{{asset('backend/libs/select2/js/select2.min.js')}}"></script>
    <!-- Dropzone file uploads-->
    <script src="{{asset('backend/libs/dropzone/min/dropzone.min.js')}}"></script>

    <!-- Quill js -->
    <script src="{{asset('backend/libs/quill/quill.min.js')}}"></script>

    <!-- Init js-->
    <script src="{{asset('backend/js/pages/form-fileuploads.init.js')}}"></script>

    <!-- Init js -->
    <script src="{{asset('backend/js/pages/add-product.init.js')}}"></script>
</body>

</html>
