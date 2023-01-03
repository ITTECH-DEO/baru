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
<div class="container-fluid m-5">
    <div class="owl-carousel owl-theme">
        @php
           var_dump($cars->count())
        @endphp
    @foreach ($cars as $car)
        @if ($car->status_id == 1)
            <div class="card item" style="max-width: 200px;">
                <img src="{{ $car->img_car }}" style="height: 100%; width: 100%" />
                <div class="card-body">

                    <div class="pull-left">
                        <p>Nama : </p> <b>{{ $car->name_car }}</b>
                        <p>Type Mobil:</p> <b>{{ $car->type_car }}</b>
                        <p>Vendor Mobil:</p> <b>{{ $car->vendor->name_vendor }}</b>
                    </div>
                </div>
            </div>
        @else
        @endif
    @endforeach

</div>
</div>

@include('web.footer')
<script>
    $('.owl-carousel').owlCarousel({
        margin: 25,
        responsiveClass: true,
        autoWidth: true,

    })
    $('.owl-carousel').on('mousewheel', '.owl-stage', function(e) {
        if (e.deltaY > 0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
</script>
