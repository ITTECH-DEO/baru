<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>KT 88 Cars</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url('web/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('web/assets/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    @yield('style')


</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="logo-image">
                    <img src="{{ asset('web/assets/images/KT88 White.png') }}" class="img-fluid">
                </div>
                <style>
                    .logo-image {
                        width: 100px;
                        height: 50px;
                        border-radius: 10%;
                        overflow: hidden;
                        margin-top: 9px;
                    }
                </style>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('aboutUs*') ? 'active' : '' }}"><a class="nav-link"
                                href="/aboutUs">About Us</a></li>

                        <li class="nav-item {{ Request::is('contact*') ? 'active' : '' }}"><a class="nav-link"
                                href="/contact">Contact Us</a></li>

                        <li class="nav-item {{ Request::is('login*') ? 'active' : '' }}"><a class="nav-link"
                                href="/login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    @include('web.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ url('dashboard/js/jquery.elevatezoom.js') }}"></script>
    <script src="{{ url('web/assets/js/popper.js') }}"></script>
    <script src="{{ url('web/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('web/assets/js/main1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <!-- Additional Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ url('web/assets/js/custom.js') }}"></script>

    <script type="text/javascript">
        function submitForm() {
            $('#muter_beh').show();
            $('#submit_form').hide();
            setTimeout(function() {
                window.location.href = "{{ url('/') }}";
            }, 7000);
        }
    </script>
    <script>
        //  $(".zoom_01").elevateZoom({
        //      easing: true
        //  });
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


    <script>
        $(document).ready(function() {


            $('#btn1').on("click", function(e) {

                var link = $(this);
                console.log(link.text())

                if (link.text() == "Show More") {
                    link.text('Show Less');
                } else {
                    link.text('Show More');
                }

                $('.showpanel').slideToggle('slow', function() {
                    if ($(this).is(':visible')) {
                        link.text('close');
                    } else {
                        link.text('open');
                    }
                });

                $('#myImg').toggle('slow');
                $('#myImg2').toggle('slow');
                $('#myImg3').toggle('slow');
                $('#myImg4').toggle('slow');
                $('#anot1').toggle('slow');
                $('#anot2').toggle('slow');
                $('#anot3').toggle('slow');
                $('#anot4').toggle('slow');
                //  $('#anot2').toggle('slow');
                //  $('#anot2').toggle('slow');
                //  $('#anot2').toggle('slow');
                //  $('#anot2').toggle('slow');
                //  $('#anot2').toggle('slow');
            });
        });
    </script>
    @yield('script')

</body>

</html>
