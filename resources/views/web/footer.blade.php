 <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © PT DEEPA DIGITAL INDONESIA - All Rights Reserved</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{url('web/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('web/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('dashboard/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{url('dashboard/js/jquery.elevatezoom.js')}}"></script>
    <script src="{{url('dashboard/js/google-map.js')}}"></script>
    <script src="{{url('dashboard/js/jquery.min.js')}}"></script>
    <script src="{{url('dashboard/js/main.js')}}"></script>
    <script src="{{url('dashboard/js/popper.js')}}"></script>
    <script src="{{url('dashboard/js/bootstrap.min.js')}}"></script>
    <script src="{{url('dashboard/js/jquery.min.js')}}"></script>	
    <script src="{{url('dashboard/js/validate.min.min.js')}}"></script>	 
    @stack('dashboardfooter')
    <!-- Additional Scripts -->
    <script src="{{url('web/assets/js/custom.js')}}"></script>
    <script src="{{url('web/assets/js/owl.js')}}"></script>
    <script type="text/javascript">
      function submitForm()
      {
          $('#muter_beh').show();
          $('#submit_form').hide();
          setTimeout(function() { 
           window.location.href= "{{url('/')}}";
        }, 7000);
      }
      </script>
    <script>

      $(".zoom_01").elevateZoom({
        easing : true
      });
      $(document).ready(function(){
  $('#btn1').on("click",function(e){
   $('#myImg').toggle('slow');
   $('#myImg2').toggle('slow');
   $('#myImg3').toggle('slow');
   
  });
});
      </script>
  </body>

</html>
