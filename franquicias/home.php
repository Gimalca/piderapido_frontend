<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Zona Franquicias - Pide Rápido</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Panels CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon1.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page sb-l-o sb-r-c">

    <div id="main">

        <!-- Start: Header -->
            <?php include ('layouts/header.php');?>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">

                <!-- Start: Sidebar Header -->
                <header class="sidebar-header">
                    <div class="user-menu">
                        <div class="row text-center mbn">
                            <div class="col-xs-4">
                                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                                    <span class="glyphicons glyphicons-home"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                                    <span class="glyphicons glyphicons-inbox"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                                    <span class="glyphicons glyphicons-bell"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                                    <span class="glyphicons glyphicons-imac"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                                    <span class="glyphicons glyphicons-settings"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                                    <span class="glyphicons glyphicons-restart"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- End: Sidebar Header -->
                <!-- sidebar menu -->                
                <?php include('layouts/menu.php'); ?>            
            </div>
        </aside>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
        
            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">

                <!-- Dashboard Tiles -->
                <div class="row mb10">
                    <div class="col-md-3">
                        <br><br>
                        <div class="panel bg-alert light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-comments-o"></i> </div>
                                <h2 class="mt15 lh15"> <b>523</b> </h2>
                                <h5 class="text-muted">Saldo de ventas historico</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <br><br>
                        <div class="panel bg-info light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-twitter"></i> </div>
                                <h2 class="mt15 lh15"> <b>348</b> </h2>
                                <h5 class="text-muted">Número de pedidos</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <br><br>
                        <div class="panel bg-danger light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>
                                <h2 class="mt15 lh15"> <b>267</b> </h2>
                                <h5 class="text-muted">Visitas</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel-body bg-light dark">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Sucursal</h3>
                                    <label class="switch block mt15">
                                        <div class="switch switch-success round switch-inline">
                                            <input id="exampleCheckboxSwitch1" type="checkbox">
                                            <label for="exampleCheckboxSwitch1" data-on="SI" data-off="NO"></label>
                                            <span>Abierto</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-md-6" id="portal">
                                    <h3>Portal</h3>
                                    <label class="switch block mt15">
                                        <div class="switch switch-success round switch-inline">
                                            <input id="exampleCheckboxSwitch2" type="checkbox">
                                            <label for="exampleCheckboxSwitch2" data-on="SI" data-off="NO"></label>
                                            <span>Activo</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">
                        <span class="glyphicons glyphicons-fast_food"></span>Combos</span>
                    </div>
                    <div class="panel-body">

                        <div id="tableCenter">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th><b><center>Nombre de combo</center></b></th>
                                        <th><b><center>Disponibilidad</center></b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="assets/img/stock/combo1.jpg" class="responsive" id="imgCombo"></td>
                                        <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModa" data-whatever="Big Mac">Big Mac</button></td>
                                        <td>Si</td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/img/stock/combo1.jpg" class="responsive" id="imgCombo"></td>
                                        <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModa1" data-whatever="Cuarto de libra">Cuarto de libra</button></td>
                                        <td>No</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">
                            Últimos Pedidos
                        </span>
                    </div>
                    <div class="panel-body">

                        <div id="tableCenter">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><b><center># Pedido</center></b></th>
                                        <th><b><center>Total</center></b></th>
                                        <th><b><center>Detalle</center></b></th>
                                        <th><b><center>Status</center></b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2686164464</td>                                            
                                        <td>1500 Bs</td>
                                        <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal1" data-whatever="Detalle del pedido (3:00PM)">Ver Detalle</button></td>
                                        <td>
                                            <button class="btn btn-success br2 btn-xs fs12 dropdown-toggle" aria-expanded="false" type="button" disabled>
                                                Retirado
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1894153465</td>                                            
                                        <td>1450 Bs</td>
                                         <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal2" data-whatever="Detalle del pedido (5:30PM)">Ver Detalle</button></td>
                                        <td>
                                            <button class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" aria-expanded="false" type="button" disabled>
                                                Por retirar
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4156414683</td>                                            
                                        <td>1250 Bs</td>
                                         <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal3" data-whatever="Detalle del pedido (12:00PM)">Ver Detalle</button></td>
                                        <td>
                                            <button class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" aria-expanded="false" type="button" disabled>
                                                Por retirar
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2564185646</td>                                            
                                        <td>2500 Bs</td>
                                         <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal4" data-whatever="Detalle del pedido (2.30PM)">Ver Detalle</button></td>
                                        <td>
                                            <button class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" aria-expanded="false" type="button" disabled>
                                                Por hacer
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
                <div class="admin-panels fade-onload sb-l-o-full">
                    <div class="row"> 
					
						<h2 class="lh30 mt15 text-center">
							Ventas de
								<b class="text-primary">la Sucursal</b>
							</h2>
							<br><br>
					
                        <div class="panel" id="pchart3">
                           <div class="panel-menu hidden">
                                <div class="chart-legend" data-chart-id="#high-line">
                                    <button type="button" data-chart-id="0" class="legend-item btn btn-sm btn-danger mr10">Data 1</button>
                                    <button type="button" data-chart-id="1" class="legend-item btn btn-success btn-sm">Data 2</button>
                                </div>
                            </div>
                            <div class="panel-body pn">
                                <div id="high-line" style="width: 100%; height: 275px; margin: 0 auto"></div>
                                <div class="p15 pt5 mt15 bg-light br-t col-xs-12">
                                    <table class="table mbn admin-form fs13 table-legend" data-chart-id="#high-line">
                                        <thead>
                                            <tr>
                                                <th class="w50">Visualizar</th>
                                                <th>Descripción</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="switch switch-custom block mbn">
                                                        <input type="checkbox" class="legend-switch" name="features" id="s1" value="0">
                                                        <label for="s1" data-on="SI" data-off="NO"></label>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="va-m fw600 text-muted">
                                                    <span class="fa fa-money mr15"></span>Monto - Sucursal
                                                </td>
                                                <td class="fs15 fw700 text-right">18,625 Bs.</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="switch switch-custom block mbn">
                                                        <input type="checkbox" class="legend-switch" name="features" id="s2" value="1">
                                                        <label for="s2" data-on="SI" data-off="NO"></label>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="va-m fw600 text-muted">
                                                    <span class="fa fa-group mr15"></span>Monto - Franquicia
                                                </td>
                                                <td class="fs15 fw700 text-right">11,812 Bs.</td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <div class="modal fade" id="exampleModa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel"></h4>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="tamaño-combo" class="control-label">Tamaño del combo: </label>
                        <input type="text" class="form-control" id="tamaño-combo" value="Mediano (300°°Bs), Grande (350°°Bs)" disabled>
                      </div>
                      <div class="form-group">
                        <label for="ingredientes-extras" class="control-label">Ingredientes extras (30°°Bs): </label>
                        <input type="text" class="form-control" id="ingredientes-extras" value="queso, cebolla dulce" disabled></input>
                      </div>
                      <div class="form-group">
                        <label for="descuento" class="control-label">Descuento: </label>
                        <input type="text" class="form-control" id="descuento" value="25%" disabled></input>
                      </div>
                      <div class="form-group">
                        <label for="dias" class="control-label">Días disponibles: </label>
                        <input type="text" class="form-control" id="dias" value="Lunes, Miercoles, Viernes" disabled></input>
                      </div>
                      <div class="form-group">
                        <label for="horario" class="control-label">Horario disponible: </label>
                        <input type="text" class="form-control" id="horario" value="10:00AM-2:00PM" disabled></input>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="exampleModa1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel"></h4>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="tamaño-combo" class="control-label">Tamaño del combo: </label>
                        <input type="text" class="form-control" id="tamaño-combo" value="Pequeño (200°°Bs), Mediano (250°°Bs)" disabled>
                      </div>
                      <div class="form-group">
                        <label for="ingredientes-extras" class="control-label">Ingredientes extras (50°°Bs): </label>
                        <input type="text" class="form-control" id="ingredientes-extras" value="queso, tocineta" disabled></input>
                      </div>
                      <div class="form-group">
                        <label for="promocion" class="control-label">Promoción: </label>
                        <input type="text" class="form-control" id="promocion" value="2x1" disabled></input>
                      </div>
                      <div class="form-group">
                        <label for="dias" class="control-label">Días disponibles: </label>
                        <input type="text" class="form-control" id="dias" value="Martes, Jueves" disabled></input>
                      </div>
                      <div class="form-group">
                        <label for="horario" class="control-label">Horario disponible: </label>
                        <input type="text" class="form-control" id="horario" value="3:00PM-5:00PM" disabled></input>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel"></h4>
              </div>
              <div class="modal-body">
                <div class="panel">
                    <div class="panel-body pn">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2152</td>
                                    <td>Big Mac</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>1685</td>
                                    <td>Cuarto de libra</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1961</td>
                                    <td>Cajita Feliz</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>2642</td>
                                    <td>Mc Pollo</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel"></h4>
              </div>
              <div class="modal-body">
                <div class="panel">
                    <div class="panel-body pn">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2152</td>
                                    <td>Big Mac</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>1685</td>
                                    <td>Cuarto de libra</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1961</td>
                                    <td>Cajita Feliz</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>2642</td>
                                    <td>Mc Pollo</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel"></h4>
              </div>
              <div class="modal-body">
                <div class="panel">
                    <div class="panel-body pn">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2152</td>
                                    <td>Big Mac</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>1685</td>
                                    <td>Cuarto de libra</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1961</td>
                                    <td>Cajita Feliz</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>2642</td>
                                    <td>Mc Pollo</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel"></h4>
              </div>
              <div class="modal-body">
                <div class="panel">
                    <div class="panel-body pn">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2152</td>
                                    <td>Big Mac</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>1685</td>
                                    <td>Cuarto de libra</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1961</td>
                                    <td>Cajita Feliz</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>2642</td>
                                    <td>Mc Pollo</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
		
		

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Sparklines CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <!-- Chart Plugins -->
    <script type="text/javascript" src="vendor/plugins/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="vendor/plugins/circles/circles.js"></script>
    <script type="text/javascript" src="vendor/plugins/raphael/raphael.js"></script>

    <!-- Holder js  -->
    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>

    <!-- Admin Panels  -->
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript" src="assets/js/pages/widgets.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init({
                sbm: "sb-l-c",
            });

            // Init Demo JS
            Demo.init();


            // Init Widget Demo JS
            // demoHighCharts.init();

            // Because we are using Admin Panels we use the OnFinish 
            // callback to activate the demoWidgets. It's smoother if
            // we let the panels be moved and organized before 
            // filling them with content from various plugins

            // Init plugins used on this page
            // HighCharts, JvectorMap, Admin Panels

            // Init Admin Panels on widgets inside the ".admin-panels" container
            $( "#exampleCheckboxSwitch1" ).click(function() {
                $( "#portal" ).slideToggle("slow");
            });

            $('#exampleModal1').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-title').text(recipient)
            });
            $('#exampleModal2').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-title').text(recipient)
            });
            $('#exampleModal3').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-title').text(recipient)
            });
            $('#exampleModal4').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-title').text(recipient)
            });
            $('.admin-panels').adminpanel({
                grid: '.admin-grid',
                draggable: true,
                preserveGrid: true,
                mobile: false,
                callback: function() {
                    bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
                },
                onFinish: function() {
                    $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                    // Init the rest of the plugins now that the panels
                    // have had a chance to be moved and organized.
                    // It's less taxing to organize empty panels
                    demoHighCharts.init();
                    runVectorMaps();

                    // We also refresh any "in-view" waypoints to ensure
                    // the correct position is being calculated after the 
                    // Admin Panels plugin moved everything
                    Waypoint.refreshAll();

                },
                onSave: function() {
                    $(window).trigger('resize');
                }
            });            
            

            // Widget VectorMap
            function runVectorMaps() {

                // Jvector Map Plugin
                var runJvectorMap = function() {
                    // Data set
                    var mapData = [900, 700, 350, 500];
                    // Init Jvector Map
                    $('#WidgetMap').vectorMap({
                        map: 'us_lcc_en',
                        //regionsSelectable: true,
                        backgroundColor: 'transparent',
                        series: {
                            markers: [{
                                attribute: 'r',
                                scale: [3, 7],
                                values: mapData
                            }]
                        },
                        regionStyle: {
                            initial: {
                                fill: '#E5E5E5'
                            },
                            hover: {
                                "fill-opacity": 0.3
                            }
                        },
                        markers: [{
                            latLng: [37.78, -122.41],
                            name: 'San Francisco,CA'
                        }, {
                            latLng: [36.73, -103.98],
                            name: 'Texas,TX'
                        }, {
                            latLng: [38.62, -90.19],
                            name: 'St. Louis,MO'
                        }, {
                            latLng: [40.67, -73.94],
                            name: 'New York City,NY'
                        }],
                        markerStyle: {
                            initial: {
                                fill: '#a288d5',
                                stroke: '#b49ae0',
                                "fill-opacity": 1,
                                "stroke-width": 10,
                                "stroke-opacity": 0.3,
                                r: 3
                            },
                            hover: {
                                stroke: 'black',
                                "stroke-width": 2
                            },
                            selected: {
                                fill: 'blue'
                            },
                            selectedHover: {}
                        },
                    });
                    // Manual code to alter the Vector map plugin to 
                    // allow for individual coloring of countries
                    var states = ['US-CA', 'US-TX', 'US-MO',
                        'US-NY'
                    ];
                    var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                    var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                    $.each(states, function(i, e) {
                        $("#WidgetMap path[data-code=" + e + "]").css({
                            fill: colors[i]
                        });
                    });
                    $('#WidgetMap').find('.jvectormap-marker')
                        .each(function(i, e) {
                            $(e).css({
                                fill: colors2[i],
                                stroke: colors2[i]
                            });
                        });
                }

                if ($('#WidgetMap').length) {
                    runJvectorMap();
                }
            }

        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>
