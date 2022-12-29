@include('web.header')

<!-- Page Content -->
<div class="page-heading about-heading header-text mb-3" style="background-image: url(<?php echo url('web/assets/images/heading-6-1920x500.jpg'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>KTT8 CARS</h4>
                    <h2>CAR PAGE</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                @php $modelT = new App\Models\User(); @endphp
                @foreach ($cars as $car)
                    @php $data = $modelT->cek_booked($car->id); @endphp
                    @if ($car->status_id == 1)
                        <div class="col-md-6">
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
                                        <div class="pull-right col-md-6">
                                            @if ($data)
                                                @if ($data->status_transaction == 'process')
                                                    <p align="right"><a href="#" class="btn btn-warning btn-sm"
                                                            data-toggle="modal" data-target="#Booked">Booked</a></p>
                                                @elseif($data->status_transaction == 'agree')
                                                    <p align="right"><a href="#" class="btn btn-danger btn-sm"
                                                            data-toggle="modal" data-target="#Sold">Sold</a></p>
                                                @else
                                                    <p align="right"><a href="{{ url('car_detail/' . $car->id) }}"
                                                            class="btn btn-info btn-sm">Detail</a></p>
                                                @endif
                                            @else
                                                <p align="right"><a href="{{ url('car_detail/' . $car->id) }}"
                                                        class="btn btn-info btn-sm">Detail</a></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        @else
            @endif
            @endforeach
            <div class="col-md-12">
                <ul class="pages">
                    {{ $cars->links() }}
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="modal fade" id="Booked" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
</div>

<div class="modal fade" id="Sold" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
</div>
@include('web.footer')
