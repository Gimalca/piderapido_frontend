<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fav and touch icons -->

<link rel="shortcut icon" href="images/favicon1.png">
<title>PideRápido - Tu aplicación de ventas online</title>
<!-- Bootstrap core CSS -->
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- add theme styles for this template -->
<link id="pagestyle" rel="stylesheet" type="text/css" href="assets/css/skin-1.css">
<link href="assets/css/idangerous.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/css/style.css" rel="stylesheet">

<!-- css3 animation effect for this template -->
<link href="assets/css/animate.css" rel="stylesheet">

<!-- styles needed by carousel slider -->
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/owl (1).css" rel="stylesheet">

<!-- styles needed by checkRadio -->
<link href="assets/css/ion.css" rel="stylesheet">
<link href="assets/css/ion.checkRadio.css" rel="stylesheet">

<!-- styles needed by mCustomScrollbar -->
<link href="assets/css/jquery.css" rel="stylesheet">

<link href="assets/css/footable-0.css" rel="stylesheet" type="text/css">
<link href="assets/css/footable.sortable-0.css" rel="stylesheet" type="text/css">

</head>

<body>
<!-- Modal Login start -->
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h3 class="modal-title-site text-center"> Ingresar a PideRápido </h3>
      </div>
      <div class="modal-body">
        <div class="form-group login-username">
          <div>
            <input name="log" id="login-user" class="form-control input" size="20" placeholder="Usuario" type="text">
          </div>
        </div>
        <div class="form-group login-password">
          <div>
            <input name="Password" id="login-password" class="form-control input" size="20" placeholder="Contraseña" type="password">
          </div>
        </div>
        <div class="form-group">
          <div>
            <div class="checkbox login-remember">
              <!--label>
                <input name="rememberme" value="forever" checked="checked" type="checkbox">
                Recordarme </label-->
            </div>
          </div>
        </div>
        <div>
          <div>
            <a href="cuenta.php">
				<input name="submit" class="btn  btn-block btn-lg btn-primary" value="Ingresar" type="submit">
			</a>
		  </div>
        </div>
        <!--userForm--> 
        
      </div>
      <div class="modal-footer">
        <p class="text-center"> ¿No tienes cuenta? <a data-toggle="modal" data-dismiss="modal" href="#ModalSignup"> Iniciar Sesión. </a> <br>
          <a href="password.php"> ¿Olvidó contraseña? </a> </p>
      </div>
    </div>
    <!-- /.modal-content --> 
    
  </div>
  <!-- /.modal-dialog --> 
  
</div>
<!-- /.Modal Login --> 

<!-- Modal Signup start -->
<div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h3 class="modal-title-site text-center"> Registrarse en Pide Rápido </h3>
      </div>
      <div class="modal-body">
        <div class="control-group"> <a class="fb_button btn  btn-block btn-lg " href="#"> Vía Facebook </a> </div>
        <h5 style="padding:10px 0 10px 0;" class="text-center"> O </h5>
        <div class="form-group reg-username">
          <div>
            <input name="login" class="form-control input" size="20" placeholder="Usuario" type="text">
          </div>
        </div>
        <div class="form-group reg-email">
          <div>
            <input name="reg" class="form-control input" size="20" placeholder="Correo Electrónico" type="text">
          </div>
        </div>
        <div class="form-group reg-password">
          <div>
            <input name="password" class="form-control input" size="20" placeholder="Contraseña" type="password">
          </div>
        </div>
        <div class="form-group">
          <div>
            <div class="checkbox login-remember">
              <label>
                <input name="rememberme" id="rememberme" value="forever" checked="checked" type="checkbox">
                Recordarme </label>
            </div>
          </div>
        </div>
        <div>
          <div>
            <a href="index.php">
				<input name="submit" class="btn btn-block btn-lg btn-primary" value="Registrar" type="submit">
			</a>
		  </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <p class="text-center"> ¿Ya eres miembro? <a data-toggle="modal" data-dismiss="modal" href="#ModalLogin"> Ingresar </a> </p>
      </div>
    </div>
    
  </div>
 
</div>
<!-- /.ModalSignup End --> 

<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
  <div class="navbar-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
          <!-- <div class="pull-left ">
            <ul class="userMenu ">
              <li> <a href="#"> <span class="hidden-xs">Ayuda</span><i class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a> </li>
              <li class="phone-number"> <a href="callto:+584149108744"> <span> <i class="glyphicon glyphicon-phone-alt "></i></span> <span class="hidden-xs" style="margin-left:5px"> +58 414 9108744 </span> </a> </li>
            </ul>
          </div> -->
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
          <div class="pull-right">
            
			<ul class="userMenu">
			
				  <li><a class="fa fa-facebook tooltipHere" href="https://www.facebook.com/pages/Pide-R%C3%A1pido/1553920374896633?fref=ts" data-original-title="Facebook" data-toggle="tooltip" data-placement="bottom" title=""></a></li>
          <li><a class="fa fa-twitter tooltipHere" href="https://twitter.com/piderapido" data-original-title="twitter" data-toggle="tooltip" data-placement="bottom" title=""></a></li>
          <li><a class="fa fa-instagram tooltipHere" href="https://instagram.com/piderapido/" data-original-title="instagram" data-toggle="tooltip" data-placement="bottom" title=""></a></li>
          <li style="margin-right: 25px;"><a class="fa fa-youtube tooltipHere" href="https://www.youtube.com/channel/UCaW4eyI65cTrLTWWRRIlZjQ" data-original-title="youtube" data-toggle="tooltip" data-placement="bottom" title=""></a></li>
         
			  <li> <a href="cuenta.php"><span class="hidden-xs"> Mi cuenta</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a> </li>
              <li> <a href="cuenta.php"> <span class="hidden-xs">Paola D' Alvano</span> <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a> </li>
              <li> <a href="index.php"> <span class="hidden-xs">Cerrar Sesión</span> <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.navbar-top-->
  
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> </button>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"> <i class="fa fa-shopping-cart colorWhite"> </i> <span class="cartRespons colorWhite"> Carrito (210.00) </span> </button>
      <a class="navbar-brand " href="index.php"> <img src="images/logo5.png" alt="TSHOP" style="margin-top: -12px"> </a> 
      
      <!-- this part for mobile -->
      <!-- <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
        <div class="input-group">
          <button class="btn btn-nobg getFullSearch" type="button"> <i class="fa fa-search"> </i> </button>
        </div>
      </div> -->
    </div>
    
    <!-- this part is duplicate from cartMenu  keep it for mobile -->
    <div class="navbar-cart  collapse">
      <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
        <div class="w100 miniCartTable scroll-pane">
          <table>
            <tbody>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href=""> <img src="images/product/3.jpg" alt="img"> </a> </div></td>
                <td style="40%"><div class="miniCartDescription">
                    <h4> <a href="detalleproducto.php"> Combo #1 </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> 8.80 Bs. </span> </div>
                  </div></td>
                <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                <td style="15%" class="miniCartSubtotal"><span> 8.80 Bs. </span></td>
                <td style="5%" class="delete"><a> x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href=""> <img src="images/product/2.jpg" alt="img"> </a> </div></td>
                <td style="40%"><div class="miniCartDescription">
                    <h4> <a href=""> Combo #2 </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> 8.80 Bs. </span> </div>
                  </div></td>
                <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                <td style="15%" class="miniCartSubtotal"><span> 8.80 Bs. </span></td>
                <td style="5%" class="delete"><a> x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href=""> <img src="images/product/5.jpg" alt="img"> </a> </div></td>
                <td style="40%"><div class="miniCartDescription">
                    <h4> <a href=""> Combo #3 </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> 8.80 Bs. </span> </div>
                  </div></td>
                <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                <td style="15%" class="miniCartSubtotal"><span> 8.80 Bs. </span></td>
                <td style="5%" class="delete"><a> x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href=""> <img src="images/product/3.jpg" alt="img"> </a> </div></td>
                <td style="40%"><div class="miniCartDescription">
                    <h4> <a href=""> Combo #4 </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> 8.80 Bs. </span> </div>
                  </div></td>
                <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                <td style="15%" class="miniCartSubtotal"><span> 8.80 Bs. </span></td>
                <td style="5%" class="delete"><a> x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href=""> <img src="images/product/3.jpg" alt="img"> </a> </div></td>
                <td style="40%"><div class="miniCartDescription">
                    <h4> <a href=""> Combo #5 </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> 8.80 Bs. </span> </div>
                  </div></td>
                <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                <td style="15%" class="miniCartSubtotal"><span> 8.80 Bs. </span></td>
                <td style="5%" class="delete"><a> x </a></td>
              </tr>
              <tr class="miniCartProduct">
                <td style="20%" class="miniCartProductThumb"><div> <a href=""> <img src="images/product/4.jpg" alt="img"> </a> </div></td>
                <td style="40%"><div class="miniCartDescription">
                    <h4> <a href=""> Combo #6 </a> </h4>
                    <span class="size"> 12 x 1.5 L </span>
                    <div class="price"> <span> 8.80 Bs. </span> </div>
                  </div></td>
                <td style="10%" class="miniCartQuantity"><a> X 1 </a></td>
                <td style="15%" class="miniCartSubtotal"><span> 8.80 Bs. </span></td>
                <td style="5%" class="delete"><a> x </a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--/.miniCartTable-->
        
        <div class="miniCartFooter  miniCartFooterInMobile text-right">
          <h3 class="text-right subtotal"> Sub-total: 210 </h3>
          <a class="btn btn-sm btn-danger"> <i class="fa fa-shopping-cart"> </i> Ver Carrito </a> <a class="btn btn-sm btn-primary"> CHECKOUT </a> </div>
        <!--/.miniCartFooter--> 
        
      </div>
      <!--/.cartMenu--> 
    </div>
    <!--/.navbar-cart-->
    
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"> <a href="index.php"> Inicio </a> </li>
        <li class="dropdown megamenu-fullwidth"> <a href="encuentralo.php"> Encuéntralo </b> </a>
         <!--  <ul class="dropdown-menu">
            <li class="megamenu-content ">
              <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                <li class="no-border">
                  <p class="promo-1"> <strong> NEW COLLECTION </strong> </p>
                </li>
                <li> <a href="category.html"> ALL NEW PRODUCTS </a> </li>
                <li> <a href="category.html"> NEW TOPS </a> </li>
                <li> <a href="category.html"> NEW SHOES </a> </li>
                <li> <a href="category.html"> NEW TSHIRT </a> </li>
                <li> <a href="category.html"> NEW TSHOP </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                <li> <a class="newProductMenuBlock" href=""> <img class="img-responsive" src="images/site/promo1.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> JEANS </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li> <a class="newProductMenuBlock" href=""> <img class="img-responsive" src="images/site/promo2.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> PARTY DRESS </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li> <a class="newProductMenuBlock" href=""> <img class="img-responsive" src="images/site/promo3.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span> </a> </li>
              </ul>
            </li>
          </ul> -->
        </li>
        
        <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
        <li class="dropdown megamenu-80width "> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> Promociones <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content"> 
              
              <!-- megamenu-content -->
              
              <ul class="col-lg-6 col-sm-2 col-md-6  unstyled noMarginLeft">
			  
                <li>
					<p> <strong> Descuentos y promociones </strong> </p>
					<br>
					<p> Aquí va un texto introductorio muy resumido de lo que significa esta zona en especial</p>
                </li>
                
				<li> 
					<br>
					<div class="form-group required">
            <label for="State">Tipo de comida <sup>*</sup>   </label>
            <select required="" aria-required="true" id="State" name="Estado">
             <option value="">Elegir
              <option value="1">Sushi<option value="2">Mexicana<option value="3">Hamburguesa</select>
          </div>
					<input id="textinput" name="textinput" placeholder="Ciudad" class="form-control input-md" type="text">
		
				</li>
                
					<a href="verpromociones.php">
							<button id="button2id" class="btn btn-default" name="button2id">
								Buscar
							</button>
						</a>
              </ul>
				
			 <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
                <div>
					<a href="detalleproducto.php">
						<img class="img-responsive" alt="img" src="images/promociones/p1.jpg"></img>
					</a>
				</div>
				<br>
				<div>
					<a href="detalleproducto.php">
						<img class="img-responsive" alt="img" src="images/promociones/p2.jpg"></img>
					</a>
				</div>
				<br>
				<div>
					<a href="detalleproducto.php">
						<img class="img-responsive" alt="img" src="images/promociones/p3.jpg"></img>
					</a>
				</div>
              </ul>
			   
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-6">
               <div>
					<a href="detalleproducto.php">
						<img class="img-responsive" alt="img" src="images/promociones/p4.jpg"></img>
					</a>
				</div>
				<br>
				<div>
					<a href="#">
						<img class="img-responsive" alt="img" src="images/promociones/p5.jpg"></img>
					</a>
				</div>
				<br>
				<div>
					<a href="#">
						<img class="img-responsive" alt="img" src="images/promociones/p6.jpg"></img>
					</a>
				</div>
              </ul>
            </li>
          </ul>
        </li>
        <!--li class="dropdown megamenu-fullwidth"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> Saldo P.R <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content"> 
              
             
              <h3 class="promo-1 no-margin hidden-xs"> 28+ HTML PAGES ONLY 12 || AVAILABLE ONLY AT WRAP BOOTSTRAP </h3>
              <h3 class="promo-1sub hidden-xs"> Complete Parallax E-Commerce Boostrap Template, Responsive on any Device, 10+ color Theme + Parallax Effect </h3>
              <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                <li class="no-border">
                  <p> <strong> Home Pages </strong> </p>
                </li>
                <li> <a href="index.html"> Home Version 1 </a> </li>
                <li> <a href="index2.html"> Home Version 2 </a> </li>
                <li> <a href="index3.html"> Home Version 3 (BOXES) </a> </li>
                <li> <a href="index4.html"> Home Version 4 (LOOK 2)</a> </li>
                <li> <a href="index5.html"> Home Version 5 (LOOK 3)</a> </li>
                <li> <a href="index-header2.html"> Header Version 2 </a> </li>
                <li> <a href="index-header3.html"> Header Version 3 </a> </li>
                <li> <a href="index-static-search.html">Header Version 4<br>
                  ( Static Search Form)</a> </li>
              </ul>
              <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                <li class="no-border">
                  <p> <strong> Featured Pages </strong> </p>
                </li>
                <li> <a href="category.html"> Category </a> </li>
                <li> <a href="sub-category.html"> Sub Category </a> </li>
                <li> <a href="category-list.html"> Category List View </a> </li>
                <li> <a href=""> Product Details Version 1 </a> </li>
                <li> <a href="product-details-style2.html"> Product Details Version 2 </a> </li>
                <li> <a href="product-details-style3.html"> Product Details Version 3  (Custom Thumbnail Position)</a> </li>
                  <li> <a href="single-product-modal.html"> Single Product Details Modal</a></li>
 <li> <a href="single-subscribe-modal.html"> Single Subscribe Modal</a></li>
              </ul>
              <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                <li class="no-border">
                  <p> <strong> &nbsp; </strong> </p>
                </li>
                <li> <a href="cart.html"> Cart </a> </li>
                <li> <a href="about-us.html"> About us </a> </li>
                <li> <a href="about-us-2.html"> About us 2 (no parallax) </a> </li>
                <li> <a href="contact-us.html"> Contact us </a> </li>
                <li> <a href="contact-us-2.html"> Contact us 2 (No Fixed Map) </a> </li>
                <li> <a href="terms-conditions.html"> Terms &amp; Conditions </a> </li>
              </ul>
              <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                <li class="no-border">
                  <p> <strong> Checkout </strong> </p>
                </li>
                <li> <a href="checkout-0.html"> Checkout Before </a> </li>
                <li> <a href="checkout-1.html"> checkout step 1 </a> </li>
                <li> <a href="checkout-2.html"> checkout step 2 </a> </li>
                <li> <a href="checkout-3.html"> checkout step 3 </a> </li>
                <li> <a href="checkout-4.html"> checkout step 4 </a> </li>
                <li> <a href="checkout-5.html"> checkout step 5 </a> </li>
              </ul>
              <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                <li class="no-border">
                  <p> <strong> User Account </strong> </p>
                </li>
                <li> <a href="account-1.html"> Account Login </a> </li>
                <li> <a href="account.html"> My Account </a> </li>
                <li> <a href="my-address.html"> My Address </a> </li>
                <li> <a href="user-information.html"> User information </a> </li>
                <li> <a href="wishlist.html"> Wisth list </a> </li>
                <li> <a href="order-list.html"> Order list </a> </li>
                <li> <a href="forgot-password.html"> Forgot Password </a> </li>
              </ul>
              <ul class="col-lg-2  col-sm-2 col-md-2 unstyled">
                <li class="no-border">
                  <p> <strong> &nbsp; </strong> </p>
                </li>
                <li> <a href="error-page.html"> Error Page </a> </li>
                <li> <a href="blank-page.html"> Blank Page </a> </li>
                <li> <a href="form.html"> Basic Form Element </a> </li>
              </ul>
            </li>
          </ul>
        </li-->
		<li class="dropdown megamenu-80width "> <a href="comofunciona.php"> Cómo funciona </b> </a></li>
		<li class="dropdown megamenu-80width "> <a href="contacto.php"> Contacto </a></li>
		
      </ul>
      
      <div class="nav navbar-nav navbar-right hidden-xs">
        <div class="dropdown  cartMenu "> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Carrito (210.00) </span> <b class="caret"> </b> </a>
          <div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
            <div class="w100 miniCartTable scroll-pane">
              <table>
                <tbody>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="detalleproducto.php"> <img src="images/product/combo1.jpg" alt="img"> </a> </div></td>
                    <td style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="detalleproducto.php"> Combo #1 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> 22 Bs. </span> </div>
                      </div></td>
                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                    <td style="width:15%" class="miniCartSubtotal"><span> 33 Bs. </span></td>
                    <td style="width:5%" class="delete"><a> x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href=""> <img src="images/product/combo2.jpg" alt="img"> </a> </div></td>
                    <td style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="detalleproducto.php"> Combo #2 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> 15 Bs. </span> </div>
                      </div></td>
                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                    <td style="width:15%" class="miniCartSubtotal"><span> 120 Bs. </span></td>
                    <td style="width:5%" class="delete"><a> x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="detalleproducto.php"> <img src="images/product/combo3.jpg" alt="img"> </a> </div></td>
                    <td style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="detalleproducto.php"> Combo #3 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> 30 Bs. </span> </div>
                      </div></td>
                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                    <td style="width:15%" class="miniCartSubtotal"><span> 80 Bs. </span></td>
                    <td style="width:5%" class="delete"><a> x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="detalleproducto.php"> <img src="images/product/combo4.jpg" alt="img"> </a> </div></td>
                    <td style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="detalleproducto.php"> Combo #4 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> 15 Bs. </span> </div>
                      </div></td>
                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                    <td style="width:15%" class="miniCartSubtotal"><span> 55 Bs. </span></td>
                    <td style="width:5%" class="delete"><a> x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="detalleproducto.php"> <img src="images/product/combo5.jpg" alt="img"> </a> </div></td>
                    <td style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="detalleproducto.php"> Combo #5 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> 44 Bs. </span> </div>
                      </div></td>
                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                    <td style="width:15%" class="miniCartSubtotal"><span> 40 Bs. </span></td>
                    <td style="width:5%" class="delete"><a> x </a></td>
                  </tr>
                  <tr class="miniCartProduct">
                    <td style="width:20%" class="miniCartProductThumb"><div> <a href="detalleproducto.php"> <img src="images/product/combo6.jpg" alt="img"> </a> </div></td>
                    <td style="width:40%"><div class="miniCartDescription">
                        <h4> <a href="detalleproducto.php"> Combo #6 </a> </h4>
                        <span class="size"> 12 x 1.5 L </span>
                        <div class="price"> <span> 80 Bs. </span> </div>
                      </div></td>
                    <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                    <td style="width:15%" class="miniCartSubtotal"><span> 8.80 Bs. Bs. </span></td>
                    <td style="width:5%" class="delete"><a> x </a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            
            <div class="miniCartFooter text-right">
              <h3 class="text-right subtotal"> Sub-total: 210 Bs. </h3>
				<a class="btn btn-sm btn-danger" href="carrito.php"> 
					<i class="fa fa-shopping-cart"> </i> 
						Ver carrito 
				</a> 
			</div>
           
          </div>
         
        </div>
      
      </div>
    
    </div>
  
    
  </div>
  <!--/.container -->
  
  <div class="search-full text-right"> <a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>
    <div class="searchInputBox pull-right">
      <input type="search" data-searchurl="search?=" name="q" placeholder="Escriba su búsqueda" class="search-input">
      <button class="btn-nobg search-btn" type="submit"> <i class="fa fa-search"> </i> </button>
    </div>
  </div>
  <!--/.search-full--> 
  
</div>

 	