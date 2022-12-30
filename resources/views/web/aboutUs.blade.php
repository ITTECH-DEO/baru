@include('web.header')


<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(<?php echo url('web/assets/images/heading-6-1920x500.jpg'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>KTT8 CARS</h4>
                    <h2>ABOUT-US PAGE</h2>
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
{{-- <div class="modal fade" id="Booked" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This car have been booked</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <p>This car have been booked , and wil bee ready again if the booked before not pay the invoice !
                    </p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="modal fade" id="Sold" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">This car have been sold</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
             <p>This car have been sold</p>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@include('web.footer')
