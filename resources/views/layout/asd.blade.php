<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Favicons -->
    <link href={{ asset('assets/img/favicon.png') }} rel="icon">
    <link href={{ asset('assets/img/apple-touch-icon.png') }} rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('assets/vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/animate.css/animate.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/aos/aos.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    @yield('head-script')
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{
                -webkit-appearance: none;
                margin:0;
        }
        
        th, td {
            text-align: left;
            padding: 8px;
        }
        
        /*tr:nth-child(even){background-color: #f2f2f2}
        tr:first-child{background-color:#3fc097;}*/
        
        tr[data-href] {
            cursor: pointer;
        }

        #test{
            width: 100%;
            border-collapse: collapse;
        }
        #test th, #test td{
            border: 1px solid;
        }
        #test th{
            color: #000000;
            font-weight: bold;
            background-color: cornflowerblue;
            text-align: center;
            padding: 2px;
        }
        #test td{
            height: 30px;
            color: #000000;
            font-weight: bold;
            text-align: center;
        }
        
        input[type=number] {
            font-weight: bold;
        }
        
        #worklist tr:hover {background-color: coral;}
        @media only screen and (max-width: 600px) {
            #test {
                    width:1000px;
            }
        }
    </style>
    @yield('style')
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style="margin-top: -40px;">
        <div class="container d-flex align-items-center">
            <a href="#" class="logo me-auto">
                <img src="{{url('assets/img/logo.png')}}" alt="">
            </a>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href={{ url('dashboard') }}>Dashboard</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('register new patient') }}">Register New Patient</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('worklist') }}">Worklist</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a class="appointment-btn scrollto logout" style="cursor: pointer;">Logout</a>
        </div>
    </header>
    <!-- End Header -->
    <!--------------------BODY--------------------->
    @yield('main-body')
    <!--------------------END BODY----------------->
    
    <!-- Vendor JS Files -->
    <script src={{ asset('assets/vendor/purecounter/purecounter.js') }}></script>
    <script src={{ asset('assets/vendor/aos/aos.js') }}></script>
    <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
    <script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
    {{--<script src="assets/vendor/php-email-form/validate.js"></script>--}}
    <!-- Template Main JS File -->
    <script src={{ asset('assets/js/main.js') }}></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.logout').on('click',function(){
                if (confirm("Are you sure want to Logout") == true){
                    window.location.replace("/logout");
                }
            });
        });
    </script>
    @yield('body-script')
</body>
</html>