@extends('web.waras')

@section("style")
    <style>
        .harga-responsive{
            font-size: 1.6em;
            font-weight: bold;
        }
        @media (max-width: 500px) {
            .harga-responsive{
                font-size: 0.95em;
                font-weight: bold;
            }
            .p-2 {
                padding:100px;
                /*margin:0px;*/
                /*background-color: black;*/
            }


        }
    </style>
@stop

@section("content")

<div class="banner header-text">
  <div class="owl-banner owl-carousel">
      @foreach ($banner as $b)
          <div class="banner-item" style="background-image: url({{ asset($b->image) }});">
              <div class="text-content">
                  <h4>Find your car today!</h4>
                  <h2>Kt 88 Cars For U !</h2>
              </div>
          </div>
      @endforeach
  </div>
</div>
</div>
</div>

    <!-- Banner Ends Here -->

    {{-- AWAL BAGIAN --}}

    {{-- <div class="container">
      <div class="slider-area">
        <div class="col-md-5 mb-3">
          <div class="middle">
              <div id="multi_range">
                  <span id="left_value">25</span><span> ~ </span><span id="right_value">75</span>
              </div>
              <div class="multi-range-slider my-2">
                  <input type="range" id="input_left" class="range_slider" min="0" max="100" value="25" onmousemove="left_slider(this.value)">
                  <input type="range" id="input_right" class="range_slider" min="0" max="100" value="75" onmousemove="right_slider(this.value)">
                  <div class="slider">
                      <div class="track"></div>
                      <div class="range"></div>
                      <div class="thumb left"></div>
                      <div class="thumb right"></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-5 mt-4 pt-2">
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
  </div>
    </div> --}}
      
       {{-- <div class="search-result">
        @if($cars->count() >=1)
        @foreach ($cars as $car)
        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
          <div class="product-item  shadow rounded remove-padding">
            <a href="{{ route('car.detail', ['id'=>$car["id"]]) }}"><img class="rounded-lg" src="{{url($car->img_car)}}" alt="NGeng Ngeng1"></a>
            <div class="down-content">
              <a href="{{ route('car.detail', ['id'=>$car["id"]]) }}"><h4>{{$car->name_car}}</h4></a>
              @php
                  $hasil_rupiah = "Rp " . number_format($car->day_price,2,',','.');
              @endphp
                <p class="harga-responsive"> {{ $hasil_rupiah }}</p>
              <p>{{$car->power}} &nbsp;/&nbsp; {{$car->fuel}} &nbsp;/&nbsp; {{$car->tahun}} &nbsp;</p>
              <small>
                <strong title="Author"><i class="fa fa-dashboard"></i> {{$car->millage}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Author"><i class="fa fa-cube"></i> {{$car->engine_size}}</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Views"><i class="fa fa-cog"></i> {{$car->type_car}}</strong>
              </small>
            </div>
          </div>
        </div>
        @endforeach
    @else
            <div class="col-md-12 my-5 text-center">
                <h2>Nothing Found</h2>
            </div>
        <div>
    @endif
       </div>
   </div> --}}

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="font-weight: bold"><span style="color: orange">Rekomendasi</span> Mobil</h2>
              <a href="/all-cars">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>


          <div class="row">
          @foreach ($cars as $car)
          <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <div class="product-item  shadow rounded remove-padding">
              <a href="{{ route('car.detail', ['id'=>$car["id"]]) }}"><img class="rounded-lg" src="{{url($car->img_car)}}" alt="NGeng Ngeng1"></a>
              <div class="down-content">
                <a href="{{ route('car.detail', ['id'=>$car["id"]]) }}"><h4>{{$car->name_car}}</h4></a>
                @php
                    $hasil_rupiah = "Rp " . number_format($car->day_price,2,',','.');
                @endphp
                  <p class="harga-responsive"> {{ $hasil_rupiah }}</p>
                <p>{{$car->power}} &nbsp;/&nbsp; {{$car->fuel}} &nbsp;/&nbsp; {{$car->tahun}} &nbsp;</p>
                <small>
                  <strong title="Author"><i class="fa fa-dashboard"></i> {{$car->millage}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                  <strong title="Author"><i class="fa fa-cube"></i> {{$car->engine_size}}</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                  <strong title="Views"><i class="fa fa-cog"></i> {{$car->type_car}}</strong>
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
                <h2 style="font-weight: bold"><span style="color: orange">Mobil</span> Matic</h2>
                <a href="/mobil-matic">view more <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            @foreach ($matic as $car)
            <div class="col-lg-4 col-md-6 ">
              <div class="product-item p-2 shadow rounded">
                <a href="{{ route('car.detail', ['id'=>$car["id"]]) }}"><img class="rounded-lg" src="{{url($car->img_car)}}" alt="NGeng Ngeng1"></a>
                <div class="down-content">
                  <a href="{{ route('car.detail', ['id'=>$car["id"]]) }}"><h4>{{$car->name_car}}</h4></a>
                  @php
                      $hasil_rupiah = "Rp " . number_format($car->day_price,2,',','.');
                  @endphp
                  <h6> {{ $hasil_rupiah }}</h6>

                  <p>{{$car->power}} &nbsp;/&nbsp; {{$car->fuel}} &nbsp;/&nbsp; {{$car->tahun}} &nbsp;</p>

                  <small>
                    <strong title="Author"><i class="fa fa-dashboard"></i> {{$car->millage}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="Author"><i class="fa fa-cube"></i> {{$car->engine_size}}</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="Views"><i class="fa fa-cog"></i> {{$car->type_car}}</strong>
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
              <h2 style="font-weight: bold"><span style="color: orange">Mobil</span> Manual</h2>
              <a href="/mobil-manual">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>


          @foreach ($manual as $car)

          <div class="col-lg-4 col-md-6 ">
            <div class="product-item p-2 shadow rounded">
              <a href="{{ route('car.detail', ['id'=>$car["id"]]) }}"><img class="rounded-lg" src="{{url($car->img_car)}}" alt="NGeng Ngeng1"></a>
              <div class="down-content">
                <a href="{{ route('car.detail', ['id'=>$car["id"]]) }}"><h4>{{$car->name_car}}</h4></a>

                @php
                    $hasil_rupiah = "Rp " . number_format($car->day_price,2,',','.');
                @endphp
                <h6> {{ $hasil_rupiah }}</h6>

                <p>{{$car->power}} &nbsp;/&nbsp; {{$car->fuel}} &nbsp;/&nbsp; {{$car->tahun}} &nbsp;</p>

                <small>
                  <strong title="Author"><i class="fa fa-dashboard"></i> {{$car->millage}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                  <strong title="Author"><i class="fa fa-cube"></i> {{$car->engine_size}}</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                  <strong title="Views"><i class="fa fa-cog"></i> {{$car->type_car}}</strong>
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