<?php echo include('layouts/header-login.php');?>

<div class="container main-container headerOffset">

  
  <div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<center>
				 <h1 class="section-title-inner"><span>Hola, Paola D' Alvano </span></h1>
				 <h6 class="section-title-inner"><span>Ult vez conectado: XX / XX / XXXX - 12:00 pm</span></h6>
			</center>
		</div>
		<br><br>
		<div class="col-lg-12 col-md-12 col-sm-12">
				<br>
			<ul class="myAccountList row">
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4  text-center ">
              <div class="thumbnail equalheight"> <a title="Orders" href="historial.php"><i class="fa fa-calendar"></i> Historial de Compras </a> </div>
            </li>
           <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4  text-center ">
              <div class="thumbnail equalheight"> <a title="Add  address" href="saldo.php"> <i class="fa fa-credit-card"> </i> Saldo PideRápido </a> </div>
            </li>
            <li class="col-lg-3 col-md-3 col-sm-3 col-xs-4  text-center ">
              <div class="thumbnail equalheight"> <a title="Personal information" href="informacion.php"><i class="fa fa-cog"></i>Información Personal </a> </div>
            </li>
			<li class="col-lg-3 col-md-3 col-sm-3 col-xs-4  text-center ">
              <div class="thumbnail equalheight"> <a title="My addresses" href="direcciones.php"><i class="fa fa-map-marker"></i> Dirección </a> </div>
            </li>
			
          </ul>
          <div class="clear clearfix"> </div>
		</div>
			
			<br><br>
			<center>
				<a href="micuenta.php">
					<button class="btn btn-primary" type="submit">
							Salir
						</button>
				</a>
			</center>
    </div>
</div> 
  
</div>

<div class="gap"> </div>


<?php echo include('layouts/footer.php'); ?>