<?php echo include('layouts/header.php');?>

<div class="container main-container headerOffset">
	
	<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-7">
      <h1 class="section-title-inner"> <span> <i class="fa fa-unlock-alt"> </i> ¿Olvidaste tu contraseña? </span> </h1>
      <div class="row userInfo">
        <div class="col-xs-12 col-sm-12">
          <p> Para reiniciar tu contraseña, favor enviar tu dirección de correo para enviarte una contraseña nueva. </p>
          <form role="form">
            <div class="form-group">
              <label for="exampleInputEmail1"> Correo Electrónico </label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo Electrónico">
            </div>
				    <a href="gestionpassword.php"> 
                <button type="button" class="btn btn-primary"> <i class="fa fa-unlock"> </i> Solicitar Contraseña </button>
		        </a>
          </form>
          <div class="clear clearfix">
            <ul class="pager">
              <li class="previous pull-right"> <a href="index.php"> &larr; Volver </a> </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/row end--> 
      
    </div>
    
  </div>
  <!--/row-->
  
  <div style="clear:both"> </div>
</div>

<?php echo include('layouts/footer.php'); ?>