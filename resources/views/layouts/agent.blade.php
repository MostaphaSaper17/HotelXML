<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=2, minimum-scale=1">
    <title>Hotels XML</title>
    <!-- bootstrap css -->
    <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- font awesome css -->
    <link href="{{ asset('website/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/support/linearicon/style.css') }}" rel="stylesheet">
    <link href="{{ asset('website/support/themify/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('website/ion-range-slider/ion.rangeSlider.css') }}" rel="stylesheet">
    <link href="{{ asset('website/ion-range-slider/ion.rangeSlider.skinHTML5.css') }}" rel="stylesheet">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700|Material+Icons|Poppins:400,600,700" rel="stylesheet">
    <!-- custom style css -->
    <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/helpers.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/search-result.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/fotorama.css') }}" rel="stylesheet">

        <!-- Main styles -->
        <link href="{{ asset('website/profile-admin/css/admin.css') }}" rel="stylesheet">
        <!-- Icon fonts-->
        <link href="{{ asset('website/profile-admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Plugin styles -->
        <link href="{{ asset('website/profile-admin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
        <!-- Your custom styles -->
        <link href="{{ asset('website/profile-admin/css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('website/profile-admin/css/dropzone.css') }}" rel="stylesheet">
    <!-- End Custom CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    @include('components.agent.navbar')



    @yield('content')

    <div class="clearfix"></div>

    @include('components.agent.footer')

<!-- jquery -->
<script src="{{ asset('website/profile-admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('website/js/jquery.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('website/js/fontawesome.min.js') }}"></script>

<link href="{{ asset('website/menu/stellarnav.min.css') }}" rel="stylesheet">
<script src="{{ asset('website/menu/stellarnav.min.js') }}"></script>
<!-- gallery js -->
<script type='text/javascript' src='{{ asset('website/js/jquery.matchHeight.js') }}'></script>
<script type='text/javascript' src='{{ asset('website/js/fotorama.js') }}'></script>
<!-- date picker js -->
<script type='text/javascript' src='{{ asset('website/js/moment.min.js') }}'></script>
<script src="{{ asset('website/js/daterangepicker.js') }}"></script>
<!-- price range slider -->
<script src="{{ asset('website/ion-range-slider/ion.rangeSlider.min.js') }}"></script>
<!-- flex slider js -->
<link href="{{ asset('website/flex-slider/flexslider.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('website/flex-slider/jquery.flexslider-min.js') }}"></script>
<!-- main js -->
<script src="{{ asset('website/js/main.js') }}"></script>

<script src="{{ asset('website/profile-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Page level plugin JavaScript-->
<script src="{{ asset('website/profile-admin/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('website/profile-admin/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('website/profile-admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('website/profile-admin/vendor/jquery.selectbox-0.2.js') }}"></script>
<script src="{{ asset('website/profile-admin/vendor/retina-replace.min.js') }}"></script>
<script src="{{ asset('website/profile-admin/vendor/jquery.magnific-popup.min.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('website/profile-admin/js/admin.j') }}s"></script>
<!-- Custom scripts for this page-->
<script src="{{ asset('website/profile-admin/js/admin-charts-all.js') }}"></script>
<!-- Custom scripts for this page-->
<script src="{{ asset('website/profile-admin/js/admin-datatables.js') }}"></script>

</body>
</html>
