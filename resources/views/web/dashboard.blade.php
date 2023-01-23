
@extends('web.waras')

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
    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="font-weight: bold"><span style="color: orange">Rekomendasi</span> Mobil</h2>
              <a href="/homepage">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>


          @foreach ($cars as $car)

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
                <h2 style="font-weight: bold"><span style="color: orange">Mobil</span> Matic</h2>
                <a href="/homepage">view more <i class="fa fa-angle-right"></i></a>
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
              <a href="/homepage">view more <i class="fa fa-angle-right"></i></a>
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