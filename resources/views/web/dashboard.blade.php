@extends('web.waras')

@section('style')
    <style>
        .harga-responsive {
            font-size: 1.6em;
            font-weight: bold;
        }

        @media (max-width: 500px) {
            .harga-responsive {
                font-size: 0.95em;
                font-weight: bold;
            }

            .p-2 {
                padding: 100px;
                /*margin:0px;*/
                /*background-color: black;*/
            }

        }
        .btn-square-md {
        width: 800px !important;
        max-width: 100% !important;
        max-height: 100% !important;
        height: 100px !important;
        text-align: center;
        padding: 0px;
        font-size: 30px !important;
        color: white !important;
        background-color: #F15006 !important;
        border-radius: 50px !important;
}
.judul {
    display: block;
    font-size: 1.5em;
    margin-top: 0.83em;
    margin-bottom: 0.83em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
    color:#F15006 !important; 
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
   
    </style>
@stop

@section('content')

    <div class="banner header-text">
        <div class="carousel-wrapper">
            <div class="owl-banner owl-carousel ">
                @foreach ($banner as $b)
                    <div class="banner-item" style="background-image: url({{ asset($b->image) }});">
                        <div class="text-content">
                            <h2 class="judul">KT88 CARS !</h2>
                            <button type="button" class="btn btn-secondary btn-square-md">Find your car today!</button>
                        </div>
                    </div>
                @endforeach
            </div>
            
    </div>
    </div>
    

    <!-- Banner Ends Here -->

    {{-- AWAL BAGIAN --}}




    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2 style="font-weight: bold"><span style="color: #F15006">Rekomendasi</span> Mobil</h2>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">Search Product</label>
                            <form action="/" method="GET" class="d-flex flex-column justify-content-center">
                                <input type="search" class="form-control" id="search" placeholder="Search Product"
                                    name="search">
                                    <br>
                                 <div class="d-flex justify-content-center">
                                    <input type="number" class="form-control" id="min" placeholder="Min" name="min">
                                    &nbsp;<h2> - </h2>&nbsp;
                                    <input type="number" class="form-control" id="max" placeholder="Max" name="max">
                                </div>   
                               
                                <button type="submit" class="btn btn-primary" style="background-color: #F15006; border-color:#F15006;">Filter</button>
                            </form>
                        </div>

                        <div class="col-md-5 mb-3">
                            <div class="middle">
                                {{-- <div id="multi_range">
                                    <span id="left_value">{{ $carPriceMin }}</span><span> ~ </span><span
                                        id="right_value">{{ $carPriceMax }}</span>
                                </div>
                                <div class="multi-range-slider my-2">
                                    <input type="search" id="input_left" class="form-control" value="{{ $carPriceMin }}"
                                        onmousemove="left_slider(this.value)">
                                    <input type="search" id="input_right" class="form-control" value="{{ $carPriceMax }}"
                                        onmousemove="right_slider(this.value)">
                                    <div class="slider">
                                        <div class="track"></div>
                                        <div class="range"></div>
                                        <div class="thumb left"></div>
                                        <div class="thumb right"></div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                        <div class="col-md-5 mt-1 pt-1">
                            <div class="middle">
                                <div class="multi-range-slider my-2">
                                    <select name="sort_by" id="sort_by" class="form-control">
                                        <option value="">Sort By</option>
                                        <option value="highest_price">Highest Price</option>
                                        <option value="lowest_price">Lowest Price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a href="/all-cars">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="row search-result">
                @foreach ($cars as $car)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="product-item  shadow rounded remove-padding">
                            <a href="{{ route('car.detail', ['id' => $car['id']]) }}"><img class="rounded-lg"
                                    src="{{ url($car->img_car) }}" alt="NGeng Ngeng1"></a>
                            <div class="down-content">
                                <a href="{{ route('car.detail', ['id' => $car['id']]) }}">
                                    <h4>{{ $car->name_car }}</h4>
                                </a>
                                @php
                                    $hasil_rupiah = 'Rp ' . number_format($car->day_price, 2, ',', '.');
                                @endphp
                                <p class="harga-responsive"> {{ $hasil_rupiah }}</p>
                                <p>{{ $car->power }} &nbsp;/&nbsp; {{ $car->fuel }} &nbsp;/&nbsp;
                                    {{ $car->tahun }}
                                    &nbsp;</p>
                                <small>
                                    <strong title="Author"><i class="fa fa-dashboard"></i> {{ $car->millage }}</strong>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Author"><i class="fa fa-cube"></i>
                                        {{ $car->engine_size }}</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Views"><i class="fa fa-cog"></i> {{ $car->type_car }}</strong>
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    {{-- AKHIR BAGIAN --}}

    {{-- AWAL BAGIAN --}}
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2 style="font-weight: bold"><span style="color: #F15006">Mobil</span> Matic</h2>
                        <a href="/mobil-matic">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach ($matic as $car)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 ">
                        <div class="product-item p-2 shadow rounded">
                            <a href="{{ route('car.detail', ['id' => $car['id']]) }}"><img class="rounded-lg"
                                    src="{{ url($car->img_car) }}" alt="NGeng Ngeng1"></a>
                            <div class="down-content">
                                <a href="{{ route('car.detail', ['id' => $car['id']]) }}">
                                    <h4>{{ $car->name_car }}</h4>
                                </a>
                                @php
                                    $hasil_rupiah = 'Rp ' . number_format($car->day_price, 2, ',', '.');
                                @endphp
                                <h6> {{ $hasil_rupiah }}</h6>

                                <p>{{ $car->power }} &nbsp;/&nbsp; {{ $car->fuel }} &nbsp;/&nbsp;
                                    {{ $car->tahun }} &nbsp;</p>

                                <small>
                                    <strong title="Author"><i class="fa fa-dashboard"></i> {{ $car->millage }}</strong>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Author"><i class="fa fa-cube"></i>
                                        {{ $car->engine_size }}</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Views"><i class="fa fa-cog"></i> {{ $car->type_car }}</strong>
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- AKHIR BAGIAN --}}

    {{-- AWAL BAGIAN --}}
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2 style="font-weight: bold"><span style="color: #F15006">Mobil</span> Manual</h2>
                        <a href="/mobil-manual">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>


                @foreach ($manual as $car)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 ">
                        <div class="product-item p-2 shadow rounded">
                            <a href="{{ route('car.detail', ['id' => $car['id']]) }}"><img class="rounded-lg"
                                    src="{{ url($car->img_car) }}" alt="NGeng Ngeng1"></a>
                            <div class="down-content">
                                <a href="{{ route('car.detail', ['id' => $car['id']]) }}">
                                    <h4>{{ $car->name_car }}</h4>
                                </a>

                                @php
                                    $hasil_rupiah = 'Rp ' . number_format($car->day_price, 2, ',', '.');
                                @endphp
                                <h6> {{ $hasil_rupiah }}</h6>

                                <p>{{ $car->power }} &nbsp;/&nbsp; {{ $car->fuel }} &nbsp;/&nbsp;
                                    {{ $car->tahun }} &nbsp;</p>

                                <small>
                                    <strong title="Author"><i class="fa fa-dashboard"></i> {{ $car->millage }}</strong>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Author"><i class="fa fa-cube"></i>
                                        {{ $car->engine_size }}</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Views"><i class="fa fa-cog"></i> {{ $car->type_car }}</strong>
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    {{-- AKHIR BAGIAN --}}
@stop
@section('script')

<script>
  $(document).ready(function(){
  $( ".btn-square-md" ).click(function() {
    var x = $(window).scrollTop();
     $('html, body').animate({ scrollTop: x + 600 }) 
  });
});
</script>
   
    <script>
        $(document).ready(function(e) {
            // $('.range_slider').on('change', function() {
            //     let left_value = $('#input_left').val();
            //     let right_value = $('#input_right').val();
            //     // alert(left_value+right_value);
            //     $.ajax({
            //         url: "{{ route('search.products') }}",
            //         method: "GET",
            //         data: {
            //             left_value: left_value,
            //             right_value: right_value
            //         },
            //         success: function(res) {
            //             console.log(res);
            //             $('.search-result').html(res.html);
            //         }
            //     });
            // });

            $('#sort_by').on('change', function() {
                let sort_by = $('#sort_by').val();
                $.ajax({
                    url: "{{ route('sort.by') }}",
                    method: "GET",
                    data: {
                        sort_by: sort_by
                    },
                    success: function(res) {
                        console.log(res);
                        $('.search-result').html(res.html);
                    }
                });
            });
        })
    </script>
@endsection
