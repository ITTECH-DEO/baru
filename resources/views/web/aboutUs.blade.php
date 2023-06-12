@extends('web.waras')

@section("content")

<style>
  .btn-square-md {
    background-color: #F15006 !important;
    border: none !important;
    color: white !important;
    padding: 1px 30px !important;
    text-align: center !important;
    text-decoration: none !important;
    display: inline-block !important;
    font-size: 30px !important;
    margin: 4px 2px !important;
    cursor: pointer !important;
    -webkit-transition-duration: 0.3s !important;
    transition-duration: 03s !important;
    box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%) !important;
    border-radius: 40px !important;
    position: absolute !important;
    right: 35% !important;
    bottom: 50px !important;
    font-family: 'Bayon';font-size: 22px;
        }
</style>
<!-- Banner Here -->



{{--<div class="banner header-text">--}}
{{--  <div class="owl-banner owl-carousel">            --}}
{{--      @foreach ($banneraboutus as $bs)--}}
{{--          <div class="banner-item" style="background-image: url({{ asset($bs->image) }});">--}}
{{--              <div class="text-content">--}}
{{--                  <h4>Find your car today!</h4>--}}
{{--                  <h2>Kt 88 Cars For U !</h2>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      @endforeach--}}
{{--  </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

<div class="row">
    <div class="col-md-12">
        
          <div class="text-content">
            <button type="button" class="btn btn-secondary btn-square-md">Find your car today !</button>
        </div>
    
        <img src="{{url($banneraboutus->image)}}" style='height: 500px; width: 100%; object-fit: cover' alt="">
    </div>
</div>
<div class="products">
  <div class="container mb-5">


{{--      <div class="col-lg-12">--}}
{{--      <div class="row">--}}
{{--          <div class="col-md">--}}
{{--              <h1 class="display-4">About Us</h1>--}}
{{--          </div>--}}
{{--      </div>--}}
          <div class="row ">
              @foreach ($about as $ab)
              <div class="col-md-6">
                  <div class="card" style="width: 33rem;">

                      <div class="card-body">
                        <p class="text-justify ">{{$ab->about}}</p>
                      </div>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-md-6 rounded">
                  <img  src="{{$ab->image}}" alt="" id="myImg3" class="img-thumbnail rounded wc-image zoom_01">
                </div><!-- /.col-lg-6 -->
              @endforeach
          </div>
      </div>
{{--  </div>--}}
</div>

@stop
