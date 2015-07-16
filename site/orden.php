<?php echo include('layouts/header.php');?>

<div class="container main-container headerOffset">
  
    <div class="row">
		<div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Facturación</span></h1>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-5 rightSidebar"> 
			<h4 class="caps"><a href="index.php"><i class="fa fa-chevron-left"></i> Volver a la tienda </a></h4>
		</div>
	</div>
	
	  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <div class="w100 clearfix">
            <ul class="orderStep orderStepLook2">
              <li class="active"> <a href="orden.php"> <i class="fa fa fa-envelope  "></i> <span> Facturación </span></a></li>
              <li> <a href="pagos.php"><i class="fa fa-money "> </i><span>Pagos</span> </a> </li>
              <!--li> <a href="confirmacion.php"><i class="fa fa-check-square "> </i><span>Confirmación de orden</span></a> </li-->
            </ul>
            <!--/.orderStep end--> 
          </div>
          
		  
		  <div class="w100 clearfix">
            <div class="row userInfo">
              <div class="col-lg-12">
				<legend>
					Dirección
				</legend>
				
				 <div class="form-group">
                   
                    <div class="col-md-8">
                      <label class="radio-inline" for="radios-0">
                        <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
                        Ingresar una dirección nueva </label>
                      <label class="radio-inline" for="radios-1">
                        <input name="radios" id="radios-1" value="2" type="radio">
                        Usar Dirección ya registrada </label>
                    </div>
					<br>
                  </div>
			  </div>
			</div>
		  </div>
          
          <div class="w100 clearfix">
            <div class="row userInfo">
              <div class="col-lg-12">
                <h2 class="block-title-2"> Para utilizar una dirección nueva, llene el formulario de abajo </h2>
              </div>
              
              <form>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group required">
                    <label for="InputName"> Nombres <sup>*</sup> </label>
                    <input required="" type="text" class="form-control" id="InputName" placeholder="Nombres">
                  </div>
                  <div class="form-group required">
                    <label for="InputLastName">Apellidos <sup>*</sup> </label>
                    <input required="" type="text" class="form-control" id="InputLastName" placeholder="Apellidos">
                  </div>
                  <div class="form-group">
                    <label for="InputEmail">Email </label>
                    <input type="text" class="form-control" id="InputEmail" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="InputCompany">Empresa </label>
                    <input type="text" class="form-control" id="InputCompany" placeholder="Empresa">
                  </div>
                  <div class="form-group required">
                    <label for="InputAddress">Dirección <sup>*</sup> </label>
                    <input required="" type="text" class="form-control" id="InputAddress" placeholder="Dirección">
                  </div>
                  
                </div>
                <div class="col-xs-12 col-sm-6">
                  
				  <div class="form-group required">
                    <label for="InputCity">Ciudad <sup>*</sup> </label>
                    <input required="" type="text" class="form-control" id="InputCity" placeholder="Ciudad">
                  </div>
                  <div class="form-group required">
                    <label for="InputState">Estado <sup>*</sup> </label>
              
                    <select class="form-control" required="" aria-required="true" id="InputState" name="InputState">
                      <option value="">Choose
                      <option value="1">Alabama
                      <option value="2">Alaska
                      <option value="3">Arizona
                      <option value="4">Arkansas
					</select>
                  </div>
				  <div class="form-group required">
                    <label for="InputZip">Código Postal<sup>*</sup> </label>
                    <input required="" type="text" class="form-control" id="InputZip" placeholder="Código Postal">
                  </div>
                  <div class="form-group required">
                    <label for="InputCountry">País <sup>*</sup> </label>
                      <select class="form-control" required="" aria-required="true" id="InputCountry" name="InputCountry">
                      <option value="">Choose
                      <option value="38">Algeria
                      <option value="39">American Samoa
                      <option value="40">Andorra
                      <option value="41">Angola
                      <option value="42">Anguilla
                      <option value="43">Antigua and Barbuda
                      <option value="44">Argentina
                      <option value="45">Armenia
                      <option value="46">Aruba
                      <option value="24">Australia
                      <option value="2">Austria
                      <option value="47">Azerbaijan
                      <option value="48">Bahamas
                      <option value="49">Bahrain
                      <option value="50">Bangladesh
                      <option value="3">Belgium
                      <option value="34">Bolivia
                      <option value="4">Canada
                      <option value="5">China
                      <option value="16">Czech Republic
                      <option value="20">Denmark
                      <option value="7">Finland
                      <option value="8">France
                      <option value="1">Germany
                      <option value="9">Greece
                      <option value="22">HongKong
                      <option value="26">Ireland
                      <option value="29">Israel
                      <option value="10">Italy
                      <option value="32">Ivory Coast
                      <option value="11">Japan
                      <option value="12">Luxemburg
                      <option value="35">Mauritius
                      <option value="13">Netherlands
                      <option value="27">New Zealand
                      <option value="31">Nigeria
                      <option value="23">Norway
                      <option value="14">Poland
                      <option value="15">Portugal
                      <option value="36">Romania
                      <option value="25">Singapore
                      <option value="37">Slovakia
                      <option value="30">South Africa
                      <option value="28">South Korea
                      <option value="6">Spain
                      <option value="18">Sweden
                      <option value="19">Switzerland
                      <option value="33">Togo
                      <option value="17">United Kingdom
                      <option value="21">United States
                    </select>
                  </div>
                  <div class="form-group required">
                    <label for="InputMobile">Celular<sup>*</sup></label>
                    <input required="" type="tel" name="InputMobile" class="form-control" id="InputMobile">
                  </div>
                  
                </div>
              </form>
            </div>
            <!--/row end--> 
            
          </div>
          <div class="cartFooter w100">
            <div class="box-footer">
              <div class="pull-left"> <a class="btn btn-default" href="index.php"> <i class="fa fa-arrow-left"></i> &nbsp; Volver a la tienda </a> </div>
              <div class="pull-right"> <a class="btn btn-primary btn-small" href="pagos.php"> Metodos de pago &nbsp; <i class="fa fa-arrow-circle-right"></i> </a> </div>
            </div>
          </div>
          <!--/ cartFooter --> 
          
        </div>
      </div>
      <!--/row end--> 
      
    </div>
   
   <!--/rightSidebar--> 
    
  </div> <!--/row-->
  
  <div style="clear:both"></div>

<?php echo include('layouts/footer.php'); ?>