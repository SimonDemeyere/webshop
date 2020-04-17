<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Back-End for webshops" name="description" />
    <meta content="Simon Demeyere" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Plugins css -->
    <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    @include("layouts.partials.topbar")

    <!-- Left side-bar Start -->
    @include("layouts.partials.left-sidebar")

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                @yield("content")
            </div>
        </div>
    </div>


    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

@include("layouts.partials.right-sidebar")

<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>

<!-- Plugins js-->
<script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/libs/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>

<!-- Dashboard 1 init js-->
<script src="{{ asset('assets/js/pages/dashboard-1.init.js') }}"></script>

<!-- App js-->
<script src="{{ asset('assets/js/app.min.js') }}"></script>

</body>
</html>
