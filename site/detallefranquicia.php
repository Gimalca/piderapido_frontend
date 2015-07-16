<?php echo include('layouts/header.php');?>

<div class="container main-container headerOffset"> 
  
  <!-- Main component call to action -->
 
  <div class="row"> 
    
    <!--right column-->
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="w100 clearfix category-top">
        <h2>Burger King</h2>
        <div class="categoryImage"> <img src="images/sucursal/sucursales.jpg" class="img-responsive" alt="img"> </div>
      </div>
      <!--/.category-top-->
      
      <div class="row subCategoryList clearfix">
	  
    		<center>
    			<h1>Sucursales afiliadas a Pide Rápido</h1>
          <p> Buscar sucursales filtradas por tu ciudad</p>
    			<br>

            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-md-offset-4">
                  <select id="selectbasic" name="selectbasic" class="form-control">
                    <option value="0" selected>Seleccione Zona
                    <option value="1">Zona #1
                    <option value="2">Zona #2
                </select>
                </div>
            </div>

    		</center>
    	  
      </div>

 <!--/.subCategoryList-->
      
      <div class="w100 productFilter clearfix">
        <p class="pull-left"> Listado de Sucursales</p>
        
      </div>
      <!--/.productFilter-->
      <div class="container">
        <div class="row xsResponse">

            <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="product">
                  
                    
                      <div class="image">  
                    <div class="quickview">
                        <!--a title="Ver combo" class="btn btn-xs  btn-quickview" data-target="#product-details-modal" data-toggle="modal"> Ver combo </a-->
                       </div><a href="detallesucursal.php"><br><img src="images/sucursal/fachada.jpg" alt="img" class="img-responsive"></a> </div>
                      <div class="description">
                        <h4><a href="detallesucursal.php">Sucursal #1</a></h4>
                        <p>Descripcion de la sucursal</p>
                        <!--span class="size">XL / XXL / S </span--> </div>
                      <!--div class="price"> <span>$25</span> </div-->
                      <div class="action-control"> 
                  <a class="btn btn-primary" href="detallesucursal.php"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i>  Ir a sucursal  </span>
                  </a> 
                </div>
              </div>
            </div>

            <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="product">
                  
                    
                      <div class="image">  
                    <div class="quickview">
                        <!--a title="Ver combo" class="btn btn-xs  btn-quickview" data-target="#product-details-modal" data-toggle="modal"> Ver combo </a-->
                       </div><a href="detallesucursal.php"><br><img src="images/sucursal/fachada.jpg" alt="img" class="img-responsive"></a> </div>
                      <div class="description">
                        <h4><a href="detallesucursal.php">Sucursal #2</a></h4>
                        <p>Descripcion de la sucursal</p>
                        <!--span class="size">XL / XXL / S </span--> </div>
                      <!--div class="price"> <span>$25</span> </div-->
                      <div class="action-control"> 
                  <a class="btn btn-primary" href="detallesucursal.php"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i>  Ir a sucursal  </span>
                  </a> 
                </div>
              </div>
            </div>

            <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="product">
                  
                    
                      <div class="image">  
                    <div class="quickview">
                        <!--a title="Ver combo" class="btn btn-xs  btn-quickview" data-target="#product-details-modal" data-toggle="modal"> Ver combo </a-->
                       </div><a href="detallesucursal.php"><br><img src="images/sucursal/fachada.jpg" alt="img" class="img-responsive"></a> </div>
                      <div class="description">
                        <h4><a href="detallesucursal.php">Sucursal #3</a></h4>
                        <p>Descripcion de la sucursal</p>
                        <!--span class="size">XL / XXL / S </span--> </div>
                      <!--div class="price"> <span>$25</span> </div-->
                      <div class="action-control"> 
                  <a class="btn btn-primary" href="detallesucursal.php"> 
                    <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Ir a sucursal </span>
                  </a> 
                </div>
              </div>
            </div>


        </div>
      </div>
    <!--/right column end--> 
  </div>
  <!-- /.row  --> 
</div>

<?php echo include('layouts/footer2.php'); ?>