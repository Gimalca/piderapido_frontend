<?php echo include('layouts/header-login.php');?>

<div class="container main-container headerOffset">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			
	      	<h1 class="section-title-inner"><span><i class="fa fa-map-marker"></i> Dirección del Usuario </span></h1>
        
        	<div class="row userInfo">
            
      
                
                <div class="col-lg-12 col-xs-12">
                    <h2 class="block-title-2"> Agrega la dirección de tu domicilio. </h2>
                    <p class="required"><sup>*</sup> Campo requerido</p>
                </div>
                
                <form>
            
            	<div class="col-xs-12 col-sm-6">
                
                    
                          <div class="form-group required">
                            <label for="InputAddress">Dirección <sup>*</sup>   </label>
                            <input required="" type="text" class="form-control" id="InputAddress" placeholder="Dirección">
                          </div>
                          <div class="form-group">
                            <label for="InputAddress2">Dirección (Linea 2)    </label>
                            <input type="text" class="form-control" id="InputAddress2" placeholder="Dirección 20">
                          </div>
                          
                           <div class="form-group required">
                            <label for="InputCity">Ciudad <sup>*</sup>   </label>
                            <input required="" type="text" class="form-control" id="InputCity" placeholder="Ciudad">
                          </div>
                          
                                    
                      
                          
                          
                </div>
                
                
                <div class="col-xs-12 col-sm-6">
						

                       
               <div class="form-group required">
                            <label for="InputZip">Código Postal <sup>*</sup>  </label>
                            <input required="" type="text" class="form-control" id="InputZip" placeholder="Zip / Postal Code">
                          </div>
						 
                          <!--div class="form-group required">
                            <label for="InputCountry">País <sup>*</sup>  </label>
                            <select required="" name="InputCountry" class="form-control" id="InputCountry"><option value="38">Algeria<option value="39">American Samoa<option value="40">Andorra<option value="41">Angola<option value="42">Anguilla<option value="43">Antigua and Barbuda<option value="44">Argentina<option value="45">Armenia<option value="46">Aruba<option value="24">Australia<option value="2">Austria<option value="47">Azerbaijan<option value="48">Bahamas<option value="49">Bahrain<option value="50">Bangladesh<option value="3">Belgium<option value="34">Bolivia<option value="4">Canada<option value="5">China<option value="16">Czech Republic<option value="20">Denmark<option value="7">Finland<option value="8">France<option value="1">Germany<option value="9">Greece<option value="22">HongKong<option value="26">Ireland<option value="29">Israel<option value="10">Italy<option value="32">Ivory Coast<option value="11">Japan<option value="12">Luxemburg<option value="35">Mauritius<option value="13">Netherlands<option value="27">New Zealand<option value="31">Nigeria<option value="23">Norway<option value="14">Poland<option value="15">Portugal<option value="36">Romania<option value="25">Singapore<option value="37">Slovakia<option value="30">South Africa<option value="28">South Korea<option value="6">Spain<option value="18">Sweden<option value="19">Switzerland<option value="33">Togo<option value="17">United Kingdom<option selected="selected" value="21">United States</select>
                          </div-->
				
                         
                          <div class="form-group required">
                            <label for="InputMobile">Teléfono Celular<sup>*</sup></label>
                             <input required="" type="tel" name="InputMobile" class="form-control" id="InputMobile">
						              </div>

                          <div class="form-group required">
                            <label for="State">Estado <sup>*</sup>   </label>
                            <select required="" aria-required="true" id="State" name="Estado">
                           <option value="">Elegir
                        <option value="1">Alabama<option value="2">Alaska<option value="3">Arizona<option value="4">Arkansas<option value="5">California<option value="6">Colorado<option value="7">Connecticut<option value="8">Delaware<option value="53">District of Columbia<option value="9">Florida<option value="10">Georgia<option value="11">Hawaii<option value="12">Idaho<option value="13">Illinois<option value="14">Indiana<option value="15">Iowa<option value="16">Kansas<option value="17">Kentucky<option value="18">Louisiana<option value="19">Maine<option value="20">Maryland<option value="21">Massachusetts<option value="22">Michigan<option value="23">Minnesota<option value="24">Mississippi<option value="25">Missouri<option value="26">Montana<option value="27">Nebraska<option value="28">Nevada<option value="29">New Hampshire<option value="30">New Jersey<option value="31">New Mexico<option value="32">New York<option value="33">North Carolina<option value="34">North Dakota<option value="35">Ohio<option value="36">Oklahoma<option value="37">Oregon<option value="38">Pennsylvania<option value="51">Puerto Rico<option value="39">Rhode Island<option value="40">South Carolina<option value="41">South Dakota<option value="42">Tennessee<option value="43">Texas<option value="52">US Virgin Islands<option value="44">Utah<option value="45">Vermont<option value="46">Virginia<option value="47">Washington<option value="48">West Virginia<option value="49">Wisconsin<option value="50">Wyoming</select>
                          </div>
						  


            						  <div class="form-group required text-center">

                              <br>
            								
                              <a href="cuenta.php">
                              <button type="submit" class="btn btn-primary"><i class="fa fa-delete"></i> Cancelar </button>
                            </a>

                            <a href="cuenta.php">
            									<button type="submit" class="btn btn-primary"><i class="fa fa-map-marker"></i> Guardar Dirección </button>
            								</a>

                            
            						  </div>
						  
                </div>
               
			   </form>
                
                
                <div class="col-lg-12 col-xs-12  clearfix ">
						<ul class="pager">
							<li class="previous pull-right"><a href="cuenta.php"> <i class="fa fa-home"></i> Volver </a></li>
						</ul>
               </div>
           
      </div><!--/row-->
      
      

  <div style="clear:both"></div>
</div>
<!-- /wrapper --> 

<div class="gap"> </div>


			
		</div>
	</div>
</div>

<div class="gap"> </div>


<?php echo include('layouts/footer.php'); ?>