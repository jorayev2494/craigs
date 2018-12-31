<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

        <!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin') }}/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin') }}/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin') }}/assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin') }}/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin') }}/assets/css/colors.css" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->

        <!-- Core JS files -->
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/loaders/pace.min.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/core/libraries/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/core/libraries/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/loaders/blockui.min.js"></script>
        <!-- /core JS files -->

        <!-- Theme JS files -->
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/visualization/d3/d3.min.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/forms/styling/switchery.min.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/ui/moment/moment.min.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/pickers/daterangepicker.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/ui/headroom/headroom.min.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/ui/headroom/headroom_jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/plugins/ui/nicescroll.min.js"></script>

        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/core/app.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/pages/dashboard.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/pages/layout_fixed_custom.js"></script>
        <script type="text/javascript" src="{{ asset('admin') }}/assets/js/pages/layout_navbar_hideable_sidebar.js"></script>
        <!-- /theme JS files -->

    </head>

    <body class="navbar-top">

        <!-- Main navbar -->
        @include("admin.includes.navbar")
        <!-- /main navbar -->

        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main sidebar -->
                @include("admin.includes.sidebar")
                <!-- /main sidebar -->


                <!-- Main content -->
                <div class="content-wrapper">

                    <!-- Content area -->
                    @yield('content')
                    <!-- /content area -->

                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>
        <!-- /page container -->

    </body>
</html>
