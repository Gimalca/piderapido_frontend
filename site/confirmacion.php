<?php echo include('layouts/header.php');?>

	<div class="container main-container headerOffset">
 
  
  <div class="row">
		<div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Sumario de Compra </span></h1>
		</div>

    <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar"> 
		<h4 class="caps"><a href="index.php"><i class="fa fa-chevron-left"></i> Volver a la tienda </a></h4>
    </div>
</div>
  
  <div class="row">
  
		<!--div class="col-lg-12 col-md-12 col-sm-12">
		  <div class="row userInfo">
			<div class="col-xs-12 col-sm-12">
			  <div class="w100 clearfix">
				<ul class="orderStep orderStepLook2">
				  <li> <a href="orden.php"> <i class="fa fa fa-envelope  "></i> <span> Facturación </span></a></li>
				  <li> <a href="pagos.php"><i class="fa fa-money "> </i><span>Pagos</span> </a> </li>
				  <li class="active"> <a href="confirmacion.php"><i class="fa fa-check-square "> </i><span>Confirmación de orden</span></a> </li>
				</ul>
				</div>
			  
			</div>
		  </div>
		  
		</div-->
		
  
    <div class="col-lg-9 col-md-9 col-sm-12">
      <div class="row userInfo">
        
        <div class="col-xs-12 col-sm-12">
        
        <div class="w100 clearfix">
        
        
        	<div class="row userInfo">
                
                <div class="col-lg-12">
                    <h2 class="block-title-2"> Productos Ordenados </h2>
                </div>
                
            
            
            	<div class="col-xs-12 col-sm-12">
                      <div class="cartContent w100 checkoutReview ">
                        <table class="cartTable table-responsive" style="width:100%">
                          <tbody>
                            <tr class="CartProduct cartTableHeader">
                              <th style="width:15%"> Productos </th>
                              <th class="checkoutReviewTdDetails">Detalle</th>
                              <th style="width:10%">Precio Unitario</th>
                              <th class="hidden-xs" style="width:5%">Cant.</th>
                              <th class="hidden-xs" style="width:10%">Desc.</th>
                              <th style="width:15%">Total</th>
                            </tr>
                            <tr class="CartProduct">
                              <td class="CartProductThumb"><div> <a href="detalleproducto.php"><img src="images/product/combo1.jpg"></a> </div></td>
                              <td><div class="CartDescription">
                                  <h4> <a href="detalleproducto.php">Combo #1 </a> </h4>
                                  <span class="size">Franquicia: <a href="detallefranquicia.php">XXXX</a></span>
                                 
                                </div></td>
                              <td class="delete"><div class="price ">Bs.116.51 </div></td>
                              <td class="hidden-xs">1</td>
                              <td class="hidden-xs">0</td>
                              <td class="price">Bs.116.51</td>
                            </tr>
                            <tr class="CartProduct">
                              <td class="CartProductThumb"><div> <a href="detalleproducto.php"><img src="images/product/combo2.jpg"></a> </div></td>
                              <td><div class="CartDescription">
                                  <h4> <a href="detalleproducto.php">Combo #2 </a> </h4>
                                  <span class="size">Franquicia: <a href="detallefranquicia.php">XXXX</a></span>
                                
                                </div></td>
                              <td class="delete"><div class="price ">Bs.50 </div></td>
                              <td class="hidden-xs">1</td>
                              <td class="hidden-xs">0</td>
                              <td class="price">Bs.50</td>
                            </tr>
                            <tr class="CartProduct">
                              <td class="CartProductThumb"><div> <a href="detalleproducto.php"><img src="images/product/combo3.jpg"></a> </div></td>
                              <td><div class="CartDescription">
                                  <h4> <a href="detalleproducto.php">Combo #3 </a> </h4>
                                  <span class="size">Franquicia: <a href="detallefranquicia.php">XXXX</a></span>
                                 
                                </div></td>
                              <td class="delete"><div class="price ">Bs.50  </div></td>
                              <td class="hidden-xs">1</td>
                              <td class="hidden-xs">0</td>
                              <td class="price">Bs.50</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      
          
        </div>
                
                
                </div>
                
          
            
            
            
            </div><!--/row end-->
            
            
            
            <div class="cartFooter w100">
            <div class="box-footer">
              
               <div class="pull-right">
                <a href="finalizar.php" class="btn btn-primary btn-small "> 
					Ver comprobante de Compra &nbsp; <i class="fa fa-check"></i>
                </a>
              </div>
               
               
              
            </div>
          </div>
          <!--/ cartFooter --> 
    
        </div>
          
          
          
                
        </div>
      </div>
      <!--/row end--> 
      
	  <div class="col-lg-3">
								<h2 class="block-title-2"> Resumen de Venta </h2>
							</div>
  
  
    <div class="col-lg-3 col-md-3 col-sm-12 rightSidebar"> 
						
							
						
						<div class="w100 cartMiniTable">
                            <table id="cart-summary" class="std table">
                                    <tbody><tr>
                                      <td>Metodo de Pago</td>
                                      <td class="price">SALDO P.R</td>
                                    </tr>
                                   <!--tr>
                                      <td>I.V.A</td>
                                      <td class="price" id="total-tax">Bs.0.00</td>
                                    </tr>
                                    <tr>
                                      <td> Total </td>
                                      <td class=" site-color" id="total-price">Bs.216.51</td>
                                    </tr-->
                                    
                                                                         
                                    </tbody><tbody>
                                    </tbody>
                                  </table> 
                        </div>
						
						<br>
						
						<div class="w100 cartMiniTable">
                            <table id="cart-summary" class="std table">
                                    <tbody><tr>
                                      <td>Sub Total</td>
                                      <td class="price">Bs.216.51</td>
                                    </tr>
                                   
                                    <tr class="cart-total-price ">
                                      <td>Total (sin I.V.A)</td>
                                      <td class="price">Bs.216.51</td>
                                    </tr>
                                    <tr>
                                      <td>I.V.A</td>
                                      <td class="price" id="total-tax">Bs.0.00</td>
                                    </tr>
                                    <tr>
                                      <td> Total </td>
                                      <td class=" site-color" id="total-price">Bs.216.51</td>
                                    </tr>
                                    
                                                                         
                                    </tbody><tbody>
                                    </tbody>
                                  </table> 
                        </div>
						
						<br>
			
						
      
    </div>
    <!--/rightSidebar--> 
    
  </div>
  <!--/row-->
  
  <div style="clear:both"></div>
</div>

<?php echo include('layouts/footer.php'); ?>