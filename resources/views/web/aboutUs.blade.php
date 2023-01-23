@extends('web.waras')

@section("content")
<!-- Banner Here -->
<div class="banner header-text">
  <div class="owl-banner owl-carousel">            
      @foreach ($banneraboutus as $bs)
          <div class="banner-item" style="background-image: url({{ asset($bs->image) }});">
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

<div class="products">
  <div class="container">
      <div class="col-lg-12">
          <div class="row ">
              @foreach ($about as $ab)
              <div class="col-md-6">
                  <div class="card" style="width: 33rem;">
                      <div class="card-body">
                        <p class="text-justify ">{{$ab->about}}</p>
                      </div>
                    </div>

                </div><!-- /.col-lg-6 -->
                <div class="col-md-6">
                  <img style="height: 400px; width: 400px float-right" src="{{$ab->image}}" alt="" id="myImg3" class="img-fluid wc-image zoom_01">
                </div><!-- /.col-lg-6 -->
              @endforeach
          </div>
      </div>
  </div>
</div>

@stop
