<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eazzyfind Business listing">
    <meta name="keywords" content="Eazzyfind">
    <meta name="author" content="Eazzyfind">

    {{-- Request header --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('admin/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" type="image/x-icon">
    <title>{{ __('Eazzyfind') }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/scrollable.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/select2.css') }}">
    <!-- Plugins css Ends-->
    @yield('styles')
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('admin/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/toastr.css') }}">
    <style>
        .dark-mode__text{
            color: rgba(255, 255, 255, 0.6);
        }
    </style>
  </head>
  <body>

    <!-- loader starts-->
    @include('admin.components.__loader')
    <!-- loader ends-->

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

      <!-- Page Header Start-->
      @include('admin.components.__header')
      <!-- Page Header Ends -->

      <!-- Page Body Start-->
      <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        @include('admin.components.__sidebar')
        <!-- Page Sidebar Ends-->

        <div class="page-body">

          <!-- Container-fluid starts-->
          @yield('body')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('admin.components.__footer')

      </div>
    </div>
    <script src="{{ asset('admin/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('admin/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('admin/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('admin/js/scrollbar/custom.js') }}"></script>
    <script src="{{ asset('admin/js/scrollable/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/js/scrollable/scrollable-custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('admin/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('admin/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('admin/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('admin/js/slick/slick.js') }}"></script>
    <script src="{{ asset('admin/js/header-slick.js') }}"></script>

    <script src="{{ asset('admin/js/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('admin/js/dropzone/dropzone-script.js') }}"></script>
    <script src="{{ asset('admin/js/filepond/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('admin/js/filepond/filepond-plugin-file-rename.js') }}"></script>
    <script src="{{ asset('admin/js/filepond/filepond-plugin-image-transform.js') }}"></script>
    <script src="{{ asset('admin/js/filepond/filepond.js') }}"></script>
    <script src="{{ asset('admin/js/filepond/custom-filepond.js') }}"></script>
    <script src="{{ asset('admin/js/tooltip-init.js') }}"></script>

    <script src="{{ asset('admin/js/touchspin/vendors.min.js') }}"></script>
    <script src="{{ asset('admin/js/touchspin/touchspin.js') }}"></script>
    <script src="{{ asset('admin/js/touchspin/input-groups.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('admin/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('admin/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('admin/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard/dashboard_2.js') }}"></script>
    <script src="{{ asset('admin/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('admin/js/toastr.min.js') }}"></script>
    <script src="{{ asset('admin/js/product-tab.js') }}"></script>
    <script src="{{ asset('admin/js/animation/wow/wow.min.js') }}"></script>
    <script src="{{ asset('admin/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('admin/js/general-widget.js') }}"></script>
    <script src="{{ asset('admin/js/height-equal.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('admin/js/script.js') }}"></script>

    @yield('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
        }
        @endif
    </script>

  </body>
</html>
