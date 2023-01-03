@include('web.headerdashboard')
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="height: 90vh" class="d-block w-100" src="web/assets/images/mobil3.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="height: 90vh" src="web/assets/images/mobil2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="height: 90vh" src="web/assets/images/mobil4.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>







<!-- Page Content -->
<div class="container-fluid m-3"></div>
    <div class="owl-carousel owl-theme row">
        @php $modelT = new App\Models\User(); @endphp
        @foreach ($cars as $car)
            @php $data = $modelT->cek_booked($car->id); @endphp
            @if ($car->status_id == 1)
                <div class="item">
                    <div class="card ">
                        <img class="zoom_01" src="{{ $car->img_car }}" style="height: 100%; width: 100%" data-zoom-image="{{ $car->img_car }}" />
                        <div class="card-body">

                            <div class="pull-left">
                                <p>Nama : </p> <b>{{ $car->name_car }}</b>
                                <p>Type Mobil:</p> <b>{{ $car->type_car }}</b>
                                <p>Vendor Mobil:</p> <b>{{ $car->vendor->name_vendor }}</b>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="pull-left col-md-6">
                                    @php
                                        $hasil_rupiah = number_format($car->day_price,2,',','.');
                                    @endphp
                                    Rp.{{ $hasil_rupiah }}
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            @else
            @endif
        @endforeach
{{--    <h2>Pilihlah Mobil</h2>--}}
{{--     <section class="customer-logos slider">--}}
{{--        <div class="slide">--}}
{{--          <img src="images/1.jpg">--}}
{{--        </div>--}}
{{--        <div class="slide">--}}
{{--          <img src="images/5.jpg">--}}
{{--        </div>--}}
{{--        <div class="slide">--}}
{{--          <img src="images/3.jpg">--}}
{{--        </div>--}}
{{--        <div class="slide">--}}
{{--          <img src="images/4.jpg">--}}
{{--        </div>--}}
{{--        <div class="slide">--}}
{{--          <img src="images/2.jpg">--}}
{{--        </div>--}}
{{--        <div class="slide">--}}
{{--          <img src="images/6.jpg">--}}
{{--        </div>--}}
{{--        <div class="slide">--}}
{{--          <img src="images/7.jpg">--}}
{{--        </div>--}}
{{--        <div class="slide">--}}
{{--          <img src="images/8.jpg">--}}
{{--        </div>--}}
{{--     </section>--}}
  </div>

@include('web.footer')
<script >
    $('.owl-carousel').owlCarousel({
        margin:50,
        loop:true,
        responsiveClass:true,
        // responsive:{
        //     0:{
        //         items:1,
        //         nav:true
        //     },
        //     600:{
        //         items:3,
        //         nav:false
        //     },
        //     1000:{
        //         items:5,
        //         nav:true,
        //         loop:false
        //     }
        // }
    })
    $('.owl-carousel').on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
</script>
{{--@push('web.footer')--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $(".customer-logos").slick({--}}
{{--            slidesToShow: 6,--}}
{{--            slidesToScroll: 1,--}}
{{--            autoplay: true,--}}
{{--            autoplaySpeed: 1500,--}}
{{--            arrows: false,--}}
{{--            dots: false,--}}
{{--            pauseOnHover: false,--}}
{{--            responsive: [--}}
{{--                {--}}
{{--                    breakpoint: 768,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 4--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 520,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 3--}}
{{--                    }--}}
{{--                }--}}
{{--            ]--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--@endpush--}}

