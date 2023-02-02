<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="Laborator.co" />
    <link rel="icon" href="assets/images/favicon.ico">
    <title>Workshop</title>
    <link rel="stylesheet" href="{{ asset('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}"
        id="style-resource-1">
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons/entypo/css/entypo.css') }}" id="style-resource-2">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic"
        id="style-resource-3">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" id="style-resource-4">
    <link rel="stylesheet" href="{{ asset('assets/css/neon-core.css') }}" id="style-resource-5">
    <link rel="stylesheet" href="{{ asset('assets/css/neon-theme.css') }}" id="style-resource-6">
    <link rel="stylesheet" href="{{ asset('assets/css/neon-forms.css') }}" id="style-resource-7">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" id="style-resource-8">
    <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <!--[if lt IE 9]><script src="https://demo.neontheme.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
</head>

<body class="page-body page-fade">
    <div class="page-container">
        @include('dashboard.partials.script')
@include('dashboard.partials.sidebar')
        <div class="main-content">
            @include('dashboard.partials.navbar')
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary" id="charts_env">
                        <div class="panel-body">
                            <div class="main-panel">
                            @yield('content')
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('dashboard.partials.footer')
    </div>
    </body>
</html>
