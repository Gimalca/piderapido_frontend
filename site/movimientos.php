<?php echo include('layouts/header-login.php');?>


<div class="container main-container headerOffset">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="col-lg-12 col-md-12 col-sm-7">
      <h1 class="section-title-inner"><span><i class="fa fa-list-alt"></i> Historial de Transacciones P.R </span></h1>
      <div class="row userInfo">
	  
		<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" href="#collapse2" class="collapseWill"> Filtro de Búsqueda <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse in">
            <div class="panel-body">
              <form class="form-horizontal">
                <fieldset>
                  
                  
                  <!-- Multiple Radios -->
                  <div class="form-group">
                    <div class="col-md-12">
							  <div class="radio">
								<label for="radios-0">
								  <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
								  Consumo </label>
							  </div>
                      <div class="radio">
                        <label for="radios-1">
                          <input name="radios" id="radios-1" value="2" type="radio">
                          Recarga </label>
                      </div>
					   
					  <br>
					  <center>
						<button id="singlebutton" class="btn btn-primary" name="singlebutton">Buscar</button>
					  </center>
                    </div>
                  </div>
               </div>   
            </div>   
	  
	  
	  
        <div class="col-lg-12">
          <h2 class="block-title-2"> Listado de transacciones a través del saldo P.R</h2>
        </div>
        
        <div class="col-xs-12 col-sm-12">
          <table class="footable">
            <thead>
              <tr>
                <th data-hide="phone" data-type="numeric"> Fecha </th>
				<th data-hide="phone,tablet" data-sort-ignore="true">Descripción</th>
				<th data-class="expand" data-sort-initial="true"> <span title="table sorted by this column on load">N° de Referencia</span> </th>
                
                <th data-hide="phone,tablet" data-sort-ignore="true">Ver Factura</th>
                <th data-hide="phone,tablet" data-sort-ignore="true">Monto</th>
                <th data-hide="default" style="width: 44px;">  + / - </th>
				<th data-hide="phone" data-type="numeric"> Estado </th>
               
				<th data-hide="default" data-type="numeric"> Saldo </th>

               
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>13/12/1990</td>
                <td>Consumo</td>
                <td> # 0AD455 </td>
                <td><a href="factura-saldo.php"> 572307 </a></td>
				<td data-value="3"> 3,485 Bs. </td>
				<td data-value="3"><center> - </center></td>
				<td data-value="3"><span class="label label-success">Finalizado</span></td>
               
                <td data-value="3"> 210 Bs. </td>
                 
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="col-lg-12 clearfix">
          <ul class="pager">
            <li class="next pull-left"><a href="cuenta.php"> &larr; Volver a mi Cuenta</a></li>
          </ul>
        </div>
      </div>
      <!--/row end--> 
      
    </div>
			
		</div> 
    </div>
			
		</div>
	</div>
</div>

<div class="gap"> </div>


<?php echo include('layouts/footer.php'); ?>