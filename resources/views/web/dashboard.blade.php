@include('web.headerdashboard')
<div class="page-heading2 about-heading header-text">
  <h2>Automatic Slideshow</h2>
  <p>Change image every 2 seconds:</p>
  
  <div class="slideshow-container">
  
  <div class="mySlides fade">
    <img src="web/assets/images/mobil3.jpg" style="width: 1349px;height: 455px;">
    <div class="hero">
      <hgroup>
          <h1>KTT8 CARS</h1>        
      </hgroup>
    </div>
  </div>
  
  <div class="mySlides fade">
    <img src="web/assets/images/mobil2.jpg" style="width: 1349px;height: 455px;">
    <div class="hero">
      <hgroup>
          <h1>KTT8 CARS</h1>        
      </hgroup>
    </div>
  </div>
  
  <div class="mySlides fade">
    <img src="web/assets/images/mobil4.jpg" style="width: 1349px;height: 455px;">
    <div class="hero">
      <hgroup>
          <h1>KTT8 CARS</h1>        
      </hgroup>
    </div>
  </div>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
  </div>
</div>


<!-- Page Content -->
<br><br><br><br>
<div class="">
    <div class="container ">
        <div class="col-md-12">
            <div class="row">
                @php $modelT = new App\Models\User(); @endphp
                @foreach ($cars as $car)
                    @php $data = $modelT->cek_booked($car->id); @endphp
                    @if ($car->status_id == 1)
                        <div class="card round">
                            <img class="zoom_01 round" style="width: 520px;height: 360px;" src="{{ $car->img_car }}"
                                data-zoom-image="{{ $car->img_car }}" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 pull-left">
                                        <b>Nama Mobil:</b><br>
                                        <b>Type Mobil:</b><br>
                                        <b>Vendor Mobil:</b>
                                    </div>
                                    <div class="col-md-6 pull-right">
                                        <b>{{ $car->name_car }}</b><br>
                                        <b>{{ $car->type_car }}</b><br>
                                        <b>{{ $car->vendor->name_vendor }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="pull-left col-md-6">
                                        <b>RP. {{ $car->day_price }}</b>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        @else
            @endif
            @endforeach
            {{-- <div class="col-md-12">
                <ul class="pages">
                 {{$cars->links()}}
                </ul>
              </div> --}}
        </div>
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
@push('dashboardfooter')
<script>
  let slideIndex = 0;
  showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
  }
  </script>
@endpush
@include('web.footer')
