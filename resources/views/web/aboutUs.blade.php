@include('web.header')


<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(<?php echo url('web/assets/images/heading-6-1920x500.jpg'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>KTT8 CARS</h4>
                    <h2>ABOUT-US PAGE 2</h2>
                </div>
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

@include('web.footer')
