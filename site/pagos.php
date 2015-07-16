<?php echo include('layouts/header.php');?>

<div class="container main-container headerOffset">
  
    <div class="row">
		<div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Métodos de Pago</span></h1>
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
				  <li> <a href="orden.php"> <i class="fa fa fa-envelope  "></i> <span> Facturación </span></a></li>
				  <li class="active"> <a href="pagos.php"><i class="fa fa-money "> </i><span>Pagos</span> </a> </li>
				  <!--li> <a href="gestionpago.php"><i class="fa fa-check-square "> </i><span>Confirmación de orden</span></a> </li-->
				</ul>
				<!--/.orderStep end--> 
			  </div>
			  
			</div>
		  </div>
		  <!--/row end--> 
		  
		</div>
	   
   <!--/rightSidebar--> 
		
		<div class="w100 clearfix">
            <div class="row userInfo">
              <div class="col-lg-12">
                <h2 class="block-title-2"> Método de pago</h2>
                <p>Favor seleccionar el métdo de pago preferido para usar en el pedido.</p>
                <hr>
              </div>
              <div class="col-xs-12 col-sm-12">
                <div class="paymentBox">
                  <div class="panel-group paymentMethod" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading panel-heading-custom">
                        <h4 class="panel-title"> <a class="cashOnDelivery" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <span class="numberCircuil">Opción 1: </span> <strong> Saldo P.R</strong> </a> </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                           <div class="panel-body">
                          <p>Todas las transacciones son seguras y cifradas. Para aprender más, favor leer nuestras políticas de usuario</p>
                          <br>
                          <label class="radio-inline" for="radios-3">
                            <input name="radios" id="radios-3" value="4" type="radio">
                            <!--img src="images/site/payment/mercadopago-small.png" height="18" alt="paypal"--> Pagar con Saldo Pide Rapido </label>
								  <div class="form-group">
									 <div class="text-center">
                    
                      <p> Su saldo actual es: <b> 150 Bs </b> </p>

                      <br>
                      <input data-slider-id="RC" id="R" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="3"/>
                       <span id="RCurrentSliderValLabel"><span id="RSliderVal">3</span></span>
                      
                  </div>
								  </div>
								  <div class="form-group clearfix text-center">
									<label class="checkbox-inline" for="checkboxes-0">
									  <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
									  He leído los <a href="terms-conditions.html">Términos y condiciones</a> </label>
								  </div>
                          <div class="pull-right"> <a href="gestionpago.php" class="btn btn-primary btn-small "> Procesar Pago &nbsp; <i class="fa fa-arrow-circle-right"></i> </a> </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading panel-heading-custom">
                        <h4 class="panel-title"> <a class="masterCard" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <span class="numberCircuil">Opción 3: </span> <strong> Tarjeta de Crédito </strong> </a> </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Todas las transacciones son seguras y cifradas. Para aprender más, favor leer nuestras políticas de usuario</p>
                          <br>
                          <div class="panel open">
                            <div class="creditCard">
                              <div class="cartBottomInnerRight paymentCard"> 
                              </div>
                              <span>Supported</span> <span>Tarjetas de Crédito</span>
                              <div class="paymentInput">
                                <label for="CardNumber">N° de Tarjeta de Crédito *</label>
                                <br>
                                <input id="CardNumber" type="text" name="Number">
                              </div>
                              <!--paymentInput-->
                              <div class="paymentInput">
                                <label for="CardNumber2">Nombre de titular de la Tarjeta de Crédito *</label>
                                <br>
                                <input type="text" name="CardNumber2" id="CardNumber2">
                              </div>
                              <!--paymentInput-->
                              <div class="paymentInput">
                                <div class="form-group">
                                  <label>Fecha de Expiración *</label>
                                  <br>
                                  <div class="col-lg-4 col-md-4 col-sm-4 no-margin-left no-padding">
                                    <select required="" aria-required="true" name="expire">
                                      <Opción:  value="">Month
                                      <Opción:  value="1">01 - January
                                      <Opción:  value="2">02 - February
                                      <Opción:  value="3">03 - March
                                      <Opción:  value="4">04 - April
                                      <Opción:  value="5">05 - May
                                      <Opción:  value="6">06 - June
                                      <Opción:  value="7">07 - July
                                      <Opción:  value="8">08 - August
                                      <Opción:  value="9">09 - September
                                      <Opción:  value="10">10 - October
                                      <Opción:  value="11">11 - November
                                      <Opción:  value="12">12 - December
                                    </select>
                                  </div>
                                  <div class="col-lg-4 col-md-4 col-sm-4">
                                    <select required="" aria-required="true" name="year">
                                      <Opción:  value="">Year
                                      <Opción:  value="2013">2013
                                      <Opción:  value="2014">2014
                                      <Opción:  value="2015">2015
                                      <Opción:  value="2016">2016
                                      <Opción:  value="2017">2017
                                      <Opción:  value="2018">2018
                                      <Opción:  value="2019">2019
                                      <Opción:  value="2020">2020
                                      <Opción:  value="2021">2021
                                      <Opción:  value="2022">2022
                                      <Opción:  value="2023">2023
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <!--paymentInput-->
                              
                              <div style="clear:both"></div>
                              <div class="paymentInput clearfix">
                                <label for="VerificationCode">Código de Verificación *</label>
                                <br>
                                <input type="text" id="VerificationCode" name="VerificationCode" style="width:90px;">
                                <br>
                              </div>
                              <!--paymentInput-->
                              
                              <!--div>
                                <input type="checkbox" name="saveInfo" id="saveInfoid">
                                <label for="saveInfoid">&nbsp;Salvar datos de Tarjeta de Crédito</label>
                              </div>
                            </div-->
                            <!--creditCard-->
                            
                            <div class="pull-right"> <a href="gestionpago.php" class="btn btn-primary btn-small "> Procesar Pago &nbsp; <i class="fa fa-arrow-circle-right"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!--/row--> 
                
              </div>
            </div>
          </div>
          <!--/row end-->
          
          <div class="cartFooter w100">
            <div class="box-footer">
              <div class="pull-left"> <a class="btn btn-default" href="orden.php"> <i class="fa fa-arrow-left"></i> &nbsp; Facturación </a> </div>
            </div>
          </div>
        </div>
        
	
  </div> <!--/row-->
  
  <div style="clear:both"></div>


<?php echo include('layouts/footer.php'); ?>