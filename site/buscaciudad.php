<?php echo include('layouts/header.php');?>

<div class="parallax-section parallax-image-1">
  <div class="container">
    <div class="row ">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="parallax-content clearfix">
			<!-- contenido vacío -->
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container main-container headerOffset"> 

 <div class="panel panel-default">
          
		  <div class="panel-heading">
            <h4 class="panel-title"> 
			    <a data-toggle="collapse" href="#collapse2" class="collapseWill"> Ciudad <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> 
			</h4>
          </div>
		  
          <div id="collapse2" class="panel-collapse collapse in">
            <div class="panel-body">
              <form class="form-horizontal">
                <fieldset>
                  
                  <!-- Form Name -->
                  <div class="form-group">
						
						<div class="col-md-3 col-md-offset-1">
							
								<select id="selectbasic" name="selectbasic" class="form-control">
									<option value="1">Ciudad #1
									<option value="2">Ciudad #2
							  </select>
						</div>
						
						<div class="col-md-3">
							
								<select id="selectbasic" name="selectbasic" class="form-control">
									<option value="1">Zona #1
									<option value="2">Zona #2
							  </select>
						</div>
						
						<div class="col-md-3">
							<input id="textinput" class="form-control input-md" type="text" placeholder="Nombre de franquicia" name="textinput"></input>
							<span class="help-block"></span>
							
						</div>
						
						<div class="col-md-2">
							<button id="button2id" class="btn btn-default" name="button2id">
								Buscar
							</button>
						</div>
						
					</div>
                  
                  
                </fieldset>
              </form>
            </div>
          </div>
        </div>
 	
 <!-- /.row  -->
  
  <div class="row"> 
		<br>
    <!--left column-->
    
    <!--right column-->
    <div class="col-lg-12 col-md-12 col-sm-12">
     
	 <!--/.productFilter-->
      <div class="row  categoryProduct xsResponse clearfix">
        <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
          <div class="product">
         
            <div class="image">  
          <div class="quickview">
              
             </div><a href="detallefranquicia.php"><img src="images/look3/kfc-h.png" alt="img" class="img-responsive"></a>
              
            </div>
            <div class="description">
              <a href="detallefranquicia.php"><h4>KFC</h4></a>
              <h6>Sede: <a href="detallesucursal.php">La Trinidad</a></h6>
              <div class="grid-description">
                <p>Descripción Breve</p>
              </div>
              <div class="list-description">
                <p> Sed sed rutrum purus. Descripción BrevePellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante.</p>
              </div>
               </div>
            
				<div class="action-control"> 
					<a class="btn btn-primary" href="detallefranquicia.php"> 
						<span class="add2cart"><i class="glyphicon glyphicon-arrow-right"> </i> Entrar </span> 
					</a> 
				</div>
			</div>
        </div>
		
		<div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6 list-view">
          <div class="product">
         
            <div class="image">  
          <div class="quickview">
              
             </div><a href="detallefranquicia.php"><img src="images/look3/kfc-h.png" alt="img" class="img-responsive"></a>
              
            </div>
            <div class="description">
              <a href="detallefranquicia.php"><h4>KFC</h4></a>
              <h6>Sede: <a href="detallesucursal.php">La Trinidad</a></h6>
              <div class="grid-description">
                <p>Descripción Breve</p>
              </div>
              <div class="list-description">
                <p> Sed sed rutrum purus. Descripción BrevePellentesque risus lacus, iaculis in ante vitae, viverra hendrerit ante.</p>
              </div>
               </div>
            
				<div class="action-control"> 
					<a class="btn btn-primary" href="detallefranquicia.php"> 
						<span class="add2cart"><i class="glyphicon glyphicon-arrow-right"> </i> Entrar </span> 
					</a> 
				</div>
			</div>
        </div>
		
	  
	  </div>
    
      <!--/.categoryFooter--> 
    </div>
    <!--/right column end--> 
  </div>
  <!-- /.row  --> 
</div>
<!-- /main container -->

<div class="gap"> </div>

<?php echo include('layouts/footer2.php'); ?>