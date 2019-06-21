<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Review Book</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/lite-purple.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/styleAdmin.css') }}">
    <script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/ckfinder/ckfinder.js') }}"></script>
    <link rel="shortcut icon" type="image/png" href="{{ asset("fonts/font-awesome/css/all.css") }}"/>
  </head>
  <body>
    <div class="app-admin-wrap">
      <!-- header top menu start -->
      <div class="main-header">
        @include('admin.layouts.header')
      </div>
      <!-- header top menu end -->
      <!--=============== Left side Start ================-->
      <div class="side-content-wrap">
        @include('admin.layouts.sidebar')
      </div>
      <!--=============== Left side End ================-->
      <!-- ============ Body content start ============= -->
      <div class="main-content-wrap sidenav-open d-flex flex-column">
        
        @include('commons.errors')
        @yield('main-content')
        
        <!-- Footer Start -->
        <div class="flex-grow-1">
        </div>
        <div class="app-footer">
          @include('admin.layouts.footer')
        </div>
        <!-- fotter end -->
      </div>
      <!-- ============ Body content End ============= -->
    </div>
    <!--=============== End app-admin-wrap ================-->
    <script src="{{ asset('fonts/font-awesome/js/all.js') }}"></script>
    <script src="{{ asset('admin/js/common-bundle-script.js') }}"></script>
    <script src="{{ asset('admin/js/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/js/echart.options.min.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard.v1.script.js') }}"></script>
    <script src="{{ asset('admin/js/script.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/js/datatables.script.js') }}"></script>
    <script src="{{ asset('admin/js/sidebar.large.script.min.js') }}"></script>
    <script src="{{ asset('admin/js/sidebar-horizontal.script.js') }}"></script>
    <script src="{{ asset('admin/js/customizer.script.min.js') }}"></script>
    <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="{{ asset('admin/js/ajax.js') }}"></script>
    <script src="{{ asset('admin/js/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/js/chart.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/pusher4.4.js') }}"></script>
    <script src="{{ asset('admin/js/notification.js') }}"></script>
  </body>
</html>
