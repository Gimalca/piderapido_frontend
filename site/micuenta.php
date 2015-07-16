<?php echo include('layouts/header.php');?>

<div class="container main-container headerOffset">
  <div class="row">
  
	<center>
		 <h1 class="section-title-inner"><span>Inicia Sesión o Registrate</span></h1>
      
	</center>
  
    <div class="col-lg-12 col-md-9 col-sm-7">
     
      <div class="row userInfo">
      
        <div class="col-xs-12 col-sm-4">
          <h2 class="block-title-2"> Crear una cuenta en Pide Rápido </h2>
          <form role="form" class="regForm">
            <div class="form-group">
              <label>Nombre</label>
              <input title="Please enter your username (at least 3 characters)" type="text" class="form-control" placeholder="Nombre" required="" minlength="3">
            </div>
            <div class="form-group">
              <label>Correo Electrónico</label>
              <input title="Please enter valid email" type="email" class="form-control" placeholder="Correo Electrónico" required="">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input required="" minlength="5" title="Please enter your password, between 5 and 12 characters" type="password" class="form-control" placeholder="Password">
            </div>
            <div class="error">
            </div>
            
            <a href="registro.php">
				<button type="submit" class="btn   btn-primary">Crear una cuenta</button>
			</a>
          </form>
        </div>
		<div class="col-xs-12 col-sm-4">
          <h2 class="block-title-2"><span>Ya registrado?</span></h2>
          <form role="form" class="logForm">
            <div class="form-group">
              <label>Correo Electrónico</label>
              <input type="email" class="form-control" placeholder="Correo Electrónico">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <p><a title="Recover your forgotten password" href="password.php">¿Olvidó su contraseña? </a></p>
            </div>
            <a class="btn btn-primary" href="index-login.php">Iniciar Sesión</a>
          </form>
        </div>
		
        <div class="col-xs-12 col-sm-4">
          <h2 class="block-title-2"><span>Ingresa con Facebook</span></h2>
				<div class="control-group">
					<a class="fb_button btn btn-block btn-lg " href="#"> Vía Facebook </a>
				</div>
        </div>
      </div>
      <!--/row end--> 
      
    </div>
   
  </div> <!--/row-->
  
</div>

<div class="gap"> </div>


<?php echo include('layouts/footer.php'); ?>