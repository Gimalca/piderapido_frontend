<?php echo include('layouts/header-login.php');?>


<div class="container main-container headerOffset">
	
	<div class="row">
		
		<div class="col-lg-12 col-md-12 col-sm-12">
			
			<center>
				<div class="col-lg-7">
				  <h1 class="section-title-inner"><span> Recarga tu Saldo P.R </span></h1>
				  <div class="row userInfo">
					<div class="col-lg-12">
					  <p class="required"><sup>*</sup> Campo Requeridos </p>
					</div>
					<form>
					  <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-md-offset-3">
						<div class="form-group required">
						  <label for="InputName">Monto Saldo P.R <sup>*</sup> </label>
						  <input required="" type="text" class="form-control" id="InputName" placeholder="1000 Bs.">
						</div>
						<div class="form-group required">
								<label for="InputName">Banco <sup>*</sup> </label>
								<select id="selectbasic" name="selectbasic" class="form-control">
									<option value="1">Banco #1
									<option value="2">Banco #2
									<option value="2">Banco #3
									<option value="2">Banco #4
									<option value="2">Banco #5
							  </select>
						</div>
						<div class="form-group">
						  <label for="InputEmail"> Fecha de Pago </label>
						  <input type="text" class="form-control" id="InputEmail" placeholder="DD/MM/AAAA">
						</div>
						
						<div class="form-group required">
						  <label for="InputPasswordCurrent"> N° de Confirmación <sup> * </sup> </label>
						  <input type="password" value="123456" name="InputPasswordCurrent" class="form-control" id="InputPasswordCurrent">
						</div>
						
								<center>
								
									<a href="confirmacionsaldo.php">		
										<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp; Cargar </button>
									</a>
								
									<a href="cuenta.php">		
										<button type="submit" class="btn btn-primary"><i class="fa fa-cancel"></i> &nbsp; Cancelar </button>
									</a>
									
									<!--a href="movimientos.php">		
										<button type="submit" class="btn btn-primary"><i class="fa fa-cancel"></i> &nbsp; Movimientos de Saldo P.R </button>
									</a-->
							</center>		
					  
					  </div>
						
					</form>
					
					<div class="col-lg-12 clearfix">
					  <ul class="pager">
						<li class="next pull-left"><a href="cuenta.php"> &larr; Ir a mi cuenta </a></li>
					  </ul>
					</div>
				  </div>
    
				</div>
				
				<div class="col-lg-5">
					<br><br>
					<h1 class="section-title-inner">
						<span> ¿Cúal es tu saldo? </span><hr>
					</h1>
					<br>
					<div class="panel panel-default">
					  <div class="panel-heading">
						<h3 class="panel-title"><strong>Saldo Actual</strong></h3>
					  </div>
					  <div class="panel-body">
						<ul>
						  <li> 
							<center>
							<h1 style="font-size: 50px;"> 1500 Bs </h1>
							</center>
						  </li>
						</ul>
					  </div>
					</div>

					<br>

					<a href="movimientos.php">		
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp; Ver movimientos de Saldo P.R  </button>
					</a>
					
				</div>


			</div>

				
				<h5>
				<center>
					<p> En caso de presentar problemas, favor comunicarse al correo electrónico <a href="">soporte@piderapido.com</a>
					<br><br>
					<a href="cuenta.php">Continuar</a>
				</center>
				</h5>
			
			</center>
		</div>
	</div>
</div>

<div class="gap"> </div>


<?php echo include('layouts/footer.php'); ?>