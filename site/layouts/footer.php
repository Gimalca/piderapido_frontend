<footer>
  <div class="footer" id="footer">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
          <h3> Soporte </h3>
          <ul>
            <li class="supportLi">
              <p> Lorem ipsum dolor sit amet, consectetur </p>
              <h4> <a class="inline" href="callto:+8801680531352"> <strong> <i class="fa fa-phone"> </i> 88 01680 531352 </strong> </a> </h4>
              <h4> <a class="inline" href="mailto:soporte@piderapido.com"> <i class="fa fa-envelope-o"> </i> soporte@piderapido.com </a> </h4>
            </li>
          </ul>
        </div>
        
		<div class="col-lg-4  col-md-3 col-sm-6 col-xs-12 ">
          <h3> Información </h3>
			
			      <ul class="unstyled">	
      				<li class="no-border">
                        <p> <strong> &nbsp; </strong> </p>
                      </li>
      					<li> <a href="encuentralo.php"> Encuéntralo </a> </li>
      					<li> <a href="terminoscondiciones.php"> Terminos y condiciones </a> </li>
      					<li> <a href="politicas.php"> Políticas de Privacidad </a> </li>
            </ul>
			
		</div>
		
    <div class="col-lg-4  col-md-3 col-sm-6 col-xs-12 ">
      <h3> Mantente en Contacto </h3>
      <br>
      <a href="http://facebook.com">
      <div id="fb" class="col-md-2">
        <img class="bottom" src="images/social/facebookamarillo.png" />
        <img class="top" src="images/social/facebookrojo.png" />
      </div>
      </a>
      <a href="http://twitter.com">
      <div id="fb" class="col-md-2">
        <img class="bottom" src="images/social/instagramamarillo.png" />
        <img class="top" src="images/social/instagramrojo.png" />
      </div>
      </a>
      <a href="https://instagram.com">
      <div id="fb" class="col-md-2">
        <img class="bottom" src="images/social/twitteramarillo.png" />
        <img class="top" src="images/social/twitterrojo.png" />
      </div>
      </a>
      <a href="http://youtube.com">
      <div id="fb" class="col-md-2">
        <img class="bottom" src="images/social/youtubeamarillo.png" />
        <img class="top" src="images/social/youtuberojo.png" />
      </div>
      </a>
      <!--ul class="social">
        <center>
          <li> <a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a> </li>
          <li> <a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a> </li>
          <li> <a href="https://plus.google.com"> <i class="fa fa-instagram"> &nbsp; </i> </a> </li>
          <li> <a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a> </li>
        </center>
      </ul-->       
    </div>
      </div>
      <!--/.row--> 
    </div>
    <!--/.container--> 
  </div>
  <!--/.footer-->
  
  <div class="footer-bottom">
    <div class="container">
      <p class="pull-left"> &copy; Pide Rápido 2015. Derechos reservados. </p>
      <div class="pull-right paymentMethodImg"> <img height="30" class="pull-right" src="images/site/payment/master_card.png" alt="img"> <!--img height="30" class="pull-right" src="images/site/payment/paypal.png" alt="img"--> <img height="30" class="pull-right" src="images/site/payment/american_express_card.png" alt="img"> <!--img height="30" class="pull-right" src="images/site/payment/discover_network_card.png" alt="img"--> <!--img height="30" class="pull-right" src="images/site/payment/google_wallet.png" alt="img"--> </div>
    </div>
  </div>
  <!--/.footer-bottom--> 
</footer>


  <div class="modal fade" id="modalAds" role="dialog">
        <div class="modal-dialog  modal-bg-1">
            <div class="modal-body-content">
      		<a class="close" data-dismiss="modal">×</a>
              <div class="modal-body">
              <div class="col-lg-6 col-sm-8 col-xs-8">
               <h3>Pedidos Programados</h3>
                    <p>Podrás decirle a la Franquicia, a que hora vas a retirar tu comida y estará lista para tí</p>
					<!--p class="discountLg">10% OFF </p-->

               <center>
			   
              <div class="clearfx"> 
				
					  <form id="newsletter" class="newsletter">
							<input type="time" id="subscribe" name="s" placeholder="Hora">
					  </form>
				 
			  </div>
			  
              <br>
             <p>
				<a href="orden.php" class="btn btn-primary btn-small"> 
					Programar &nbsp; <i class="fa fa-check"></i>
                </a>
				<a href="orden.php" class="btn btn-primary btn-small"> 
					Ignorar &nbsp; <i class="fa fa-check"></i>
                </a>
			 </p>
              
			  </center>
              
              </div>
              </div>
			</div>
		</div>
	</div>
<!-- Le javascript
================================================== --> 

<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="assets/js/jquery/1.8.3/jquery.js"></script> 
<script src="assets/bootstrap/js/bootstrap.js"></script> 
    <script type='text/javascript'>
      $(document).ready(function() {

      /* Example 6 */
      $("#R").slider();
      $("#R").on('slide', function(slideEvt) {
        $("#RSliderVal").text(slideEvt.value);
      });

      /* Example 7 */
      $("#ex7").slider();
      $("#ex7-enabled").click(function() {
        if(this.checked) {
          $("#ex7").slider("enable");
        }
        else {
          $("#ex7").slider("disable");
        }
      });

      

    });
    </script>
<script>
 // this script required for subscribe modal
$(window).load(function(){
	$('#modalAds').removeClass('hide');
});

// Without JQuery
var slider = new Slider("#ex6");
slider.on("slide", function(slideEvt) {
  $("#ex6SliderVal").text(slideEvt.value);
});



    });

</script>

<script src="assets/js/jquery.cycle2.js"></script> 

<script src="assets/js/jquery.easing.1.js"></script> 

<script type="text/javascript" src="assets/js/jquery.parallax-1.js"></script> 

<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.js"></script> 

<script type="text/javascript" src="assets/js/jquery.js"></script> 

<script type="text/javascript" src="assets/js/ion-checkRadio/ion.checkRadio.js"></script> 

<script src="assets/js/grids.js"></script> 

<script src="assets/js/owl.carousel.js"></script> 

<script src="assets/js/jquery.minimalect.js"></script> 

<script src="assets/js/bootstrap.js"></script> 

<script src="assets/js/home.js"></script> 

<script src="assets/js/script.js"></script>

<script src="assets/js/bootstrap-slider.js"></script>

</body>
</html>