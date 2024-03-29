@extends('web.waras')

@section("style")
    <link rel="stylesheet" href="{{url("css/jquery.jqZoom.css")}}" />
@stop

@section("content")

   <!-- Page Content -->
   <div class="page-heading about-heading header-text" style="background-image: url(<?php echo url('web/assets/images/heading-6-1920x500.jpg'); ?>);">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="text-content">
                    <h4>{{ strtoupper($car->name_car) }}</h4>
                       <h2>{{ strtoupper($car->model) }}</h2>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <div class="products">
       <div class="container">
           <div class="row">
               <div class="col-md">
                   <div>
                       <button type="button" id="btn1" class="btn btn-light">Show More</button>
                   </div>
               </div>
           </div>
           <div class="row">
               @if(!empty($car["img_car"]))
               <div class="col-md">
                       <div>
                           <br>
                           <div class="zoom-box">

                           <img src="{{ url($car['img_car']) }}" alt="" class="img-thumbnail wc-image zoom_01">
                           </div>
                       </div>
                   <br>
               </div>
               @endif
                   @if(!empty($car->img_car2))
                   <div class="col-md">
                       <div>
                           <br>
                           <div class="zoom-box">

                           <img src="{{ url($car->img_car2) }}" alt="" id="myImg" class="img-thumbnail wc-image zoom_01" style="display:none ;">
                           </div>
                       </div>
               </div>
                   @endif
                   @if(!empty($car["img_car3"]))

                   <div class="col-md">
                   <div>
                       <br>
                       <div class="zoom-box">
                       <img src="{{ url($car->img_car3) }}" alt="" id="myImg2" class="img-thumbnail wc-image zoom_01" style="display:none ;">
                       </div>
                   </div>
                   </div>
                   @else
                   <p>kontk</p>
               @endif
                   @if(!empty($car->img_car4))
                   <div class="col-md">
                       <div>
                           <br>
                           <div class="zoom-box">
                           <img src="{{ url($car->img_car4) }}" alt="" id="myImg3" class="img-thumbnail wc-image zoom_01" style="display:none ;">
                           </div>
                       </div>
               </div>
                   @endif


               <br>


           </div>
           <div class="row">
            @if(!empty($car->img_car_lainnya1))
            <div class="col-md">
        <div>
            <br>
            <div class="zoom-box">
            <img src="{{ url($car->img_car_lainnya1) }}" alt="" id="anot1" class="img-thumbnail wc-image zoom_01" style="display:none ;">
            </div>
        </div>
            </div>
    @endif

    @if(!empty($car->img_car_lainnya2))
            <div class="col-md">
        <div>
            <br>
            <div class="zoom-box">
            <img src="{{ url($car->img_car_lainnya2) }}" alt="" id="anot2" class="img-thumbnail wc-image zoom_01" style="display:none ;">
            </div>
        </div>
            </div>
    @endif
    <br>
    @if(!empty($car->img_car_lainnya3))
            <div class="col-md">
        <div>
            <br>
            <div class="zoom-box">
            <img src="{{ url($car->img_car_lainnya3) }}" alt="" id="anot3" class="img-thumbnail wc-image zoom_01" style="display:none ;">
            </div>
        </div>
            </div>
    @endif
    <br>
    @if(!empty($car->img_car_lainnya4))
            <div class="col-md">
        <div>
            <br>
            <div class="zoom-box">
            <img src="{{ url($car->img_car_lainnya4) }}" alt="" id="anot4" class="img-thumbnail wc-image zoom_01" style="display:none ;">
            </div>
        </div>
            </div>
    @endif
           </div>
           <br><br>

           <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 90%;">
                    <div class="card-body">
                      <h5 class="card-title">Deskripsi</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Keterangan Singkat</h6><br>
                      <p class="card-text">{{$car->description}}</p>
                      <!-- <a href="#" class="card-link">Instagram Post</a> -->
                      <!-- <a href="#" class="card-link">Another link</a> -->
                    </div>
                  </div>
            </div>
               <div class="col-md-5">
                   <form action="#" method="post" class="form">
                       <ul class="list-group list-group-flush">
                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">Type</span>
                                   <strong class="pull-right">{{ strtoupper($car->type_car) }}</strong>
                               </div>
                           </li>

                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">Vendor</span>
                                   <strong class="pull-right">{{ strtoupper($car->vendor->name_vendor) }}</strong>
                               </div>
                           </li>

                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left"> Model</span>
                                   <strong class="pull-right">{{ strtoupper($car->model) }}</strong>
                               </div>
                           </li>

                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">First registration</span>

                                   <strong class="pull-right">{{ strtoupper($car->fisrt_registartion) }}</strong>
                               </div>
                           </li>

                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">Mileage</span>
                                   <strong class="pull-right">{{ strtoupper($car->millage) }}</strong>
                                   <strong class="pull-right">{{ strtoupper($car->mils) }}</strong>
                               </div>
                           </li>

                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">Fuel</span>

                                   <strong class="pull-right">{{ strtoupper($car->fuel) }}</strong>
                               </div>
                           </li>

                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">Engine size</span>
                                   <strong class="pull-right">{{ strtoupper($car->engine_size) }}</strong>
                               </div>
                           </li>

                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">Power</span>
                                   <strong class="pull-right">{{ strtoupper($car->power) }}</strong>
                               </div>
                           </li>

                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">Number of seats</span>
                                   <strong class="pull-right">{{ strtoupper($car->seats) }}</strong>
                               </div>
                           </li>

                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">Doors</span>
                                   <strong class="pull-right">{{ strtoupper($car->doors) }}</strong>
                               </div>
                           </li>

                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">Color</span>
                                   <strong class="pull-right">{{ strtoupper($car->color) }}</strong>
                               </div>
                           </li>
                           <li class="list-group-item">
                               <div class="clearfix">
                                   <span class="pull-left">WhatsApp Number</span>
                                   <strong class="pull-right">{{ strtoupper($car->whatsapp->nama_cabang) }} :
                                       {{ strtoupper($car->whatsapp->wa) }}</strong>
                               </div>
                           </li>
                       </ul>
                   </form>
               </div>
            </div>
           </div>
       </div>
   </div>
   @php $modelT = new App\Models\User(); @endphp
   @php $check = $modelT->get_contact_details(); @endphp
   @php $bank = $modelT->get_bank(); @endphp
   @php $cek_pay = $modelT->cek_pay($car->id); @endphp
   <div class="section">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <div class="section-heading">
                       <h2>Contact Details</h2>
                   </div>

                   <div class="left-content">
                       <p>
                           <span>Name</span>

                           <br>

                           <strong>{{ $check->name }}</strong>
                       </p>

                       <p>
                           <span>Phone</span>

                           <br>

                           <strong>
                               <a href="tel:123-456-789">{{ $check->phone_number }}</a>
                           </strong>
                       </p>

                       <p>
                           <span>Email</span>

                           <br>

                           <strong>
                               <a href="mailto:john@carsales.com">{{ $check->email }}</a>
                           </strong>
                       </p>
                       <p>
                           @auth
                               <button type="button" class="btn btn-success" data-toggle="modal"
                                   data-target="#exampleModal">
                                   Book Now
                               </button>
                           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                               aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                                           <button type="button" class="close" data-dismiss="modal"
                                               aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                       </div>
                                       <div class="modal-body">
                                           <div class="contact-form">
                                               <form target="_blank" action="{{ url('transaction_add') }}"
                                                   method="POST" id="contact">
                                                   @csrf
                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <fieldset>
                                                               <p>{{ Auth::user()->name }}</p>
                                                           </fieldset>
                                                       </div>

                                                       <div class="col-md-6">
                                                           <fieldset>
                                                               <p>{{ Auth::user()->email }}</p>
                                                           </fieldset>
                                                       </div>
                                                   </div>

                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <fieldset>
                                                               <p> {{ Auth::user()->phone_number }}</p>
                                                           </fieldset>
                                                       </div>

                                                       <div class="col-md-6">
                                                           <fieldset>

                                                               <p>{{ Auth::user()->address }}</p>

                                                           </fieldset>
                                                       </div>
                                                   </div>

                                                   <div class="row">
                                                       <div class="col-md-6">
                                                           <fieldset>
                                                               <p>Car : {{ $car->name_car }}</p>
                                                           </fieldset>
                                                       </div>

                                                       <div class="col-md-6">
                                                           <fieldset>

                                                               <p>Price : {{ number_format($car->day_price) }}</p>

                                                           </fieldset>
                                                       </div>
                                                   </div>
                                                   <p align="center">Information for payment</p>
                                                   @foreach ($bank as $b)
                                                       <p>Bank / An / Number : {{ $b->name_bank }} / {{ $b->an }} /
                                                           {{ $b->no_rek }}</p>
                                                   @endforeach
                                                   <input type="hidden" name="car_id" value="{{ $car->id }}">
                                                   <input type="hidden" name="amount" value="{{ $car->day_price }}">
                                           </div>
                                       </div>
                                       <div class="modal-footer">
                                           @if ($cek_pay == 1)
                                               <p align="center">You Have Benn Book This Car!</p>
                                               <button type="button" class="btn btn-secondary"
                                                   data-dismiss="modal">close</button>
                                           @else
                                               <button type="button" class="btn btn-secondary"
                                                   data-dismiss="modal">Cancel</button>
                                               <button type="submit" onclick="submitForm()" style="cursor: pointer;"
                                                   id="submit_form" class="btn btn-warning">Book Now</button>

                                               <img id="muter_beh" style="display: none"
                                                   src="{{ url('admin/images/muter.gif') }}" class="img-circle w-56"
                                                   style="margin-bottom: -7rem">
                                           @endif
                                       </div>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       @endauth
                       @guest
                           <button type="button" class="btn btn-success" data-toggle="modal"
                               data-target="#exampleModalR">
                               Book Now
                           </button>
                           <a class="btn btn-primary" href="https://wa.me/62{{$car->whatsapp->wa}}"><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i></a>
                       @endauth
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <div class="modal fade" id="exampleModalR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">You are not logged in , register first</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <div class="contact-form">
                       <form role="form" action="{{ url('register_customer') }}" method="POST">
                           @csrf
                           <div class="row">
                               <div class="col-md-6">
                                   <fieldset>
                                       <label>Name Of User</label>
                                       <input class="form-control" name="name" placeholder="Name Of User">
                                   </fieldset>
                               </div>

                               <div class="col-md-6">
                                   <fieldset>
                                       <label>Email Of User</label>
                                       <input class="form-control" name="email" placeholder="Email Of User">
                                   </fieldset>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-6">
                                   <fieldset>
                                       <label>Password</label>
                                       <input type="password" class="form-control see_create" name="password"
                                           value="" placeholder="Password Of User">
                                   </fieldset>
                               </div>

                               <div class="col-md-6">
                                   <fieldset>
                                       <label>Phone Number</label>
                                       <input class="form-control" name="phone_number" placeholder="Phone Of User">
                                   </fieldset>
                               </div>
                           </div>
                           <label>Address</label>
                           <textarea class="form-control" name="address" placeholder="Address Of User">

                      </textarea>
                   </div>
               </div>
               <div class="modal-footer">
                   <a href="{{ url('login') }}" class="btn btn-info">Login</a>
                   OR
                   <button type="submit" class="btn btn-primary">Register</button>
               </div>
               </form>
           </div>
       </div>
   </div>

   @stop

@section("script")
    <script src="{{url("js/jquery.jqZoom.js")}}"></script>
    <script>
        $(function(){
            $("img").jqZoom({
                selectorWidth: 30,
                selectorHeight: 30,
                viewerWidth: 400,
                viewerHeight: 300
            });
        })
    </script>
{{--    <script src="/path/to/cdn/jquery.min.js"></script>--}}
@stop
