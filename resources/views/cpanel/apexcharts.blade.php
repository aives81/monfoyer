<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/vendors/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/vendors/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/vendors/images/favicon-16x16.png')}}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/style.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
<body>
<div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo"><img src="{{asset('assets/vendors/images/deskapp-logo.svg')}}" alt=""></div>
        <div class='loader-progress' id="progress_div">
            <div class='bar' id='bar1'></div>
        </div>
        <div class='percent' id='percent1'>0%</div>
        <div class="loading-text">
            Patientez...
        </div>
    </div>
</div>

@include('layouts.header')
@include('layouts.menu')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Apexcharts</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Charts</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                January 2020
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <h4 class="h4 text-blue">line Chart</h4>
                <div id="chart1"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <h4 class="h4 text-blue">Area Chart</h4>
                <div id="chart2"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <h4 class="h4 text-blue">Column Chart</h4>
                <div id="chart3"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <h4 class="h4 text-blue">Bar Chart</h4>
                <div id="chart4"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <h4 class="h4 text-blue">Mixed Chart</h4>
                <div id="chart5"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <h4 class="h4 text-blue">Timeline Chart</h4>
                <div id="chart6"></div>
            </div>
            <div class="bg-white pd-20 card-box mb-30">
                <h4 class="h4 text-blue">Candlestick Chart</h4>
                <div id="chart7"></div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <h4 class="h4 text-blue">Pie Chart</h4>
                        <div id="chart8"></div>
                    </div>
                </div>
                <div class="col-md-6 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <h4 class="h4 text-blue">Radial Bar Chart</h4>
                        <div id="chart9"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>
</div>
<!-- js -->
<script src="{{asset('assets/vendors/scripts/core.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/script.min.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/process.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/layout-settings.js')}}"></script>
<script src="{{asset('assets/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/apexcharts-setting.js')}}"></script>
</body>
</html>
