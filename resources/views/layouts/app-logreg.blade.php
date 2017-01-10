<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <!-- Title -->
    <title>Perpustakaan</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- Favicon -->
    <link href="favicon.html" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css" >
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" >
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/nexus.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" type="text/css">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,300"  type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"  type="text/css">
</head>
<body>
    <div id="pre_header" class="visible-lg"></div>
    <div id="header" class="container">
        <div class="row">
            <!-- Logo -->
            <div class="logo">
                <a href="{{url('/')}}" title="">
                    <img src="assets/img/Logofix.png" alt="Logo" />
                </a>
            </div>
            <!-- Top Menu -->
            <div class="col-md-12 margin-top-30">
                <div id="hornav" class="pull-right visible-lg">
                    <ul class="nav navbar-nav">
                        <li><span>Referensi</span>
                            <ul>
                                <li><a href="{{ url('/dosen') }}">Dosen</a></li>
                                <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
                                <li><a href="{{ url('/plp') }}">PLP</a></li>
                                
                            </ul>
                        
                        <li><a href="{{ url('/login')}}">Admin</a></li>
                        
                        
                    </ul>               </div>
                </div>
                <div class="clear"></div>
                <!-- End Top Menu -->
            </div>
        </div>
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
        <div id="content" class="container">
            <div class="container">
                <div class="row margin-vert-30">
                    @yield('content')
</div>
            </div>
        </div>
        <!-- === END CONTENT === -->
        <!-- === BEGIN FOOTER === -->
        <div id="base">
            
                <div class="row">
                    
                        
                        
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- Footer Menu -->
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div id="copyright" class="col-md-4">
                            <p>(c) Copyright 2016</p>
                        </div>
                        <div id="footermenu" class="col-md-8">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Menu -->
    </div>
</div>
<!-- JS -->
            <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}" ></script>
            <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}" ></script>
            <script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="{{asset('assets/js/jquery.isotope.js')}}"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="{{asset('assets/js/jquery.visible.js')}}" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="{{asset('assets/js/slimbox2.js')}}" charset="utf-8"></script>
            <!-- Modernizr -->
            <script type="text/javascript" src="{{asset('assets/js/modernizr.custom.js')}}" ></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->

