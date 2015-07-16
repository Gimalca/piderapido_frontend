<?php echo include('layouts/header.php');?>


<div class="container main-container headerOffset">
  
  <div class="row innerPage">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row userInfo">
        
        <p class="lead text-center"> 
			<img src="images/logo2.png">
		</p>
        <p class="lead text-center"> 
        	Enviando correo electronico para reestablecer su contraseña, 
			por favor espere.
			<!--h5>
				<center>
					<a href="index.php">Continuar</a>
				</center>
			</h5-->
		</p>
        
		<?php  header("refresh: 5; url = index.php");  ?>
        
      </div>  <!--/row end-->
    </div>
  </div> <!--/.innerPage-->
  <div style="clear:both">  </div>
</div><!-- /.main-container -->


<div class="gap"> </div>

<?php echo include('layouts/footer.php'); ?>