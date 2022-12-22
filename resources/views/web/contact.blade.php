@include('web.header')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Contact Form #06</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters mb-5">
                        <div class="col-md-7 ">
                            <div class="contact-wrap w-100 p-md-5 p-4 mr-3 ">
                                <h3 class="mb-4">Contact Us</h3>
                                <div id="form-message-warning" class="mb-4"></div>

                                <table class="table table-striped b-t b-b table-success" id="tableok">
                                    <thead>
                                        <tr>
                                            <th>Nama Cabang</th>
                                            <th>Nomer Wa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($whatsapp as $no)
                                        <tr>

                                            <td>{{$no->nama_cabang}}</td>
                                            <td>{{$no->wa}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>



                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch mt-5">
                            <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="2"
                                  style="border:2" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('web.footer')
