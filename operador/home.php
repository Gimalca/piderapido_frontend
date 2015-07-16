<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Zona Operador - Pide Rápido</title>
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

      <?php include ('layouts/header.php');?>
        <section>
            <section id="content" class="animated fadeIn">
              <div class="col-md-12" id="margen">
                  <div class="admin-form">
                      <div id="p1" class="panel heading-border">
                          <div class="panel-body bg-light">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="section-divider mt40 mb25" id="spy4">
                                          <span>Número de Pedido</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">        
                                      <div class="section">                                           
                                          <form class="form-horizontal" role="form">
                                              <div class="form-group">
                                                  <div class="col-md-offset-3 col-md-6">
                                                      <center>
                                                          <h6>
                                                              Ingrese número de pedido 
                                                          </h6>                                                                
                                                            <div class="section">
                                                                <label class="field">
                                                                    <input type="text" name="from" id="from" class="gui-input" placeholder="">
                                                                </label>
                                                            </div>
                                                      </center>                                                            
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                                  
                                  <div class="col-md-12 text-center">
                                      <center>
                                          <button class="button btn-primary" type="submit">Procesar</button>
                                      </center>
                                  </div>                                    
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-12">
                <div class="admin-form">
                  <div class="panel-body bg-light">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                      <li role="presentation" class="active"><a href="#solicitados" aria-controls="solicitados" role="tab" data-toggle="tab">Pedidos Solicitados</a></li>
                      <li role="presentation"><a href="#retirar" aria-controls="retirar" role="tab" data-toggle="tab">Pedidos por Retirar</a></li>
                      <li role="presentation"><a href="#procesados" aria-controls="procesados" role="tab" data-toggle="tab">Pedidos Procesados</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="solicitados">
                    <div>
                          </br>
                          <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                  <span class="panel-title">
                                  <span></span>Listado de pedidos solicitados</span>
                                </div>
                                <div class="panel-body" id="tableCenter">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b><center>Fecha - Hora</center></b></th>
                                                <th><b><center># Pedido</center></b></th>
                                                <th><b><center>Total</center></b></th>
                                                <th><b><center>Detalle</center></b></th>
                                                <th><b><center>Acción</center></b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>25/05/2015 - 1:30pm</td>
                                                <td>2686164464</td>                                            
                                                <td>1500 Bs</td>
                                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="Detalle del pedido (1:30PM)">Ver Detalle</button></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary notification" data-dismiss="modal" data-note-style="success" type="submit">Procesar Pedido</button>
                                                    &nbsp;
                                                    &nbsp;
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal5" data-whatever="No Procesar Pedidos">NO Procesar Pedido</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20/05/2015 - 2:00pm</td>
                                                <td>1894153465</td>                                            
                                                <td>1450 Bs</td>
                                                 <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="Detalle del pedido (2:00PM)">Ver Detalle</button></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary notification" data-dismiss="modal" data-note-style="success" type="submit">Procesar Pedido</button>
                                                    &nbsp;
                                                    &nbsp;
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal5" data-whatever="No Procesar Pedidos">NO Procesar Pedido</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19/05/2015 - 2:30pm</td>
                                                <td>4156414683</td>                                            
                                                <td>1250 Bs</td>
                                                 <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3" data-whatever="Detalle del pedido (2:30PM)">Ver Detalle</button></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary notification" data-dismiss="modal" data-note-style="success" type="submit">Procesar Pedido</button>
                                                    &nbsp;
                                                    &nbsp;
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal5" data-whatever="No Procesar Pedidos">NO Procesar Pedido</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>28/05/2015 - 3:30pm</td>
                                                <td>2564185646</td>                                            
                                                <td>2500 Bs</td>
                                                 <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4" data-whatever="Detalle del pedido (3:30PM)">Ver Detalle</button></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary notification" data-dismiss="modal" data-note-style="success" type="submit">Procesar Pedido</button>
                                                    &nbsp;
                                                    &nbsp;
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal5" data-whatever="No Procesar Pedidos">NO Procesar Pedido</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>                    
                          </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="retirar">
                    <div>     
                        </br>
                        <div class="col-md-12">
                            <div class="panel">
                              <div class="panel-heading">
                                <span class="panel-title">
                                <span></span>Listado de pedidos solicitados</span>
                              </div>
                              <div class="panel-body" id="tableCenter">
                                  <table class="table table-bordered">
                                      <thead>
                                          <tr>
                                              <th><b><center>Fecha - Hora</center></b></th>
                                              <th><b><center># Pedido</center></b></th>
                                              <th><b><center>Total</center></b></th>
                                              <th><b><center>Detalle</center></b></th>
                                              <th><b><center>Acción</center></b></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>25/05/2015 - 1:30pm</td>
                                              <td>2686164464</td>                                            
                                              <td>1500 Bs</td>
                                              <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="Detalle del pedido (1:30PM)">Ver Detalle</button></td>
                                              <td>
                                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#invoiceModal" data-whatever="Factura">Factura</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger notification" data-dismiss="modal" data-note-style="success" type="submit">Retirar</button>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>20/05/2015 - 2:00pm</td>
                                              <td>1894153465</td>                                            
                                              <td>1450 Bs</td>
                                               <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="Detalle del pedido (2:00PM)">Ver Detalle</button></td>
                                              <td>
                                                  <button type="button" class="btn btn-success">Pedido Procesado: Retirar</button>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>19/05/2015 - 2:30pm</td>
                                              <td>4156414683</td>                                            
                                              <td>1250 Bs</td>
                                               <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3" data-whatever="Detalle del pedido (2:30PM)">Ver Detalle</button></td>
                                              <td>
                                                  <button type="button" class="btn btn-success">Pedido Procesado: Retirar</button>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>28/05/2015 - 3:30pm</td>
                                              <td>2564185646</td>                                            
                                              <td>2500 Bs</td>
                                               <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4" data-whatever="Detalle del pedido (3:30PM)">Ver Detalle</button></td>
                                              <td>
                                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#invoiceModal" data-whatever="Factura">Factura</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger notification" data-dismiss="modal" data-note-style="success" type="submit">Retirar</button>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                            </div>                    
                        </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="procesados">
                    <div>      
                      </br>
                      <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                              <span class="panel-title">
                              <span></span>Listado de pedidos Procesados</span>
                            </div>
                            <div class="panel-body" id="tableCenter">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><b><center>Fecha - Hora</center></b></th>
                                            <th><b><center># Pedido</center></b></th>
                                            <th><b><center>Total</center></b></th>
                                            <th><b><center>Detalle</center></b></th>
                                            <th><b><center>Acción</center></b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>25/05/2015 - 1:30pm</td>
                                            <td>2686164464</td>                                            
                                            <td>1500 Bs</td>
                                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="Detalle del pedido (1:30PM)">Ver Detalle</button></td>
                                            <td>
                                                <button type="button" class="btn btn-success">Entregado</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>20/05/2015 - 2:00pm</td>
                                            <td>1894153465</td>                                            
                                            <td>1450 Bs</td>
                                             <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="Detalle del pedido (2:00PM)">Ver Detalle</button></td>
                                            <td>
                                                <button type="button" class="btn btn-danger">Entregar</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>19/05/2015 - 2:30pm</td>
                                            <td>4156414683</td>                                            
                                            <td>1250 Bs</td>
                                             <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3" data-whatever="Detalle del pedido (2:30PM)">Ver Detalle</button></td>
                                            <td>
                                                <button type="button" class="btn btn-success">Entregado</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28/05/2015 - 3:30pm</td>
                                            <td>2564185646</td>                                            
                                            <td>2500 Bs</td>
                                             <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4" data-whatever="Detalle del pedido (3:30PM)">Ver Detalle</button></td>
                                            <td>
                                                <button type="button" class="btn btn-danger">Entregar</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>                    
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

        <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel"></h4>
              </div>
              <div class="modal-body">
                <div class="panel">
                    <div class="panel-body">
                      <h2>Seleccione una opción</h2>
                        <form role="form">
                          <div class="radio">
                            <label><input type="radio" name="optradio">Se quemo la cocina</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">No hay hamburguesas</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">Nos cerro el Seniat</label>
                          </div>
                        </form>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Enviar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade bs-example-modal-lg" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel"></h4>
              </div>
              <div class="modal-body">

                    <div class="panel invoice-panel">
                        <div class="panel-heading">
                            <div class="col-md-12">
                                <span class="panel-title">
                                    <span class="glyphicon glyphicon-print"></span> Factura #58126332</span>
                            </div>

                            <div class="panel-header-menu pull-right mr10">
                                <div class="btn-group">
                                    <ul class="dropdown-menu checkbox-persist pull-right text-left" role="menu">
                                        <li>
                                            <a><i class="fa fa-user"></i> View Profile </a>
                                        </li>
                                        <li>
                                            <a><i class="fa fa-envelope-o"></i> Message </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body p20" id="invoice-item">

                            <div class="row mb30">
                                <div class="col-md-4">
                                    <div class="pull-left">
                                        <h1> Factura #58126332</h1>
                                        <h5 class="mn"> Creada: Mayo 6 2015 </h5>
                                        <h5 class="mn"> Status: <b class="text-success">Pagada</b> </h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pull-right text-right">
                                        <h2 class="invoice-logo-text hidden lh10">PideRapido</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="invoice-info">
                                <div class="col-md-6">
                                    <div class="panel panel-alt">
                                        <div class="panel-heading">
                                            <span class="panel-title"> <i class="fa fa-user"></i> Datos personales: </span>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="list-unstyled">
                                                <li> <b>Nombre:</b> David Lares</li>
                                                <li> <b>Cédula</b> 19.258.369</li>
                                                <li> <b>Dirección:</b> La Lagunita, Miranda</li>
                                                <li> <b>Teléfono</b> (414)456-7890</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-alt">
                                        <div class="panel-heading">
                                            <span class="panel-title"> <i class="fa fa-info"></i> Detalle de factura: </span>
                                            <div class="panel-btns pull-right ml10"> </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="list-unstyled">
                                                <li> <b>Factura #:</b> 58126332</li>
                                                <li> <b>Fecha:</b> Mayo 6 2015</li>
                                                <li> <b>Tipo de Pago:</b> TDC</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="invoice-table">
                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th><b>Código</b></th>
                                                <th><b>Producto</b></th>
                                                <th><b>Descripción</b></th>
                                                <th><b>Cantidad</b></th>
                                                <th><b>P. Unitario</b></th>
                                                <th class="text-right pr10" style="width: 80px;"><b>Precio</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><b>101</b>
                                                </td>
                                                <td>Big Mac</td>
                                                <td>Hamburguesa con doble carne, salsa, queso derretido, cebolla y pepino.</td>
                                                <td class="text-right pr10">2</td>
                                                <td class="text-right pr10">250Bs</td>
                                                <td class="text-right pr10">500 Bs</td>
                                            </tr>
                                            <tr>
                                                <td><b>105</b>
                                                </td>
                                                <td>Premium Doble Deluxe</td>
                                                <td>Hamburguesa con doble carne, salsa, mostaza, mayonesa, cebolla morada, pepinillo, lechuga y tomate</td>
                                                <td class="text-right pr10">1</td>
                                                <td class="text-right pr10">300Bs</td>
                                                <td class="text-right pr10">300 Bs</td>
                                            </tr>
                                            <tr>
                                                <td><b>345</b>
                                                </td>
                                                <td>Premium Doble Bacon</td>
                                                <td>Hamburguesa con doble carne, salsa, mostaza, ketchup, cebolla morada, pepinillo y tocineta</td>
                                                <td class="text-right pr10">2</td>
                                                <td class="text-right pr10">350Bs</td>
                                                <td class="text-right pr10">700 Bs</td>
                                            </tr>
                                            <tr>
                                                <td><b>332</b>
                                                </td>
                                                <td>Cajita Feliz</td>
                                                <td>Hamburguesa de carne con queso con un regalo incluido</td>
                                                <td class="text-right pr10">2</td>
                                                <td class="text-right pr10">250Bs</td>
                                                <td class="text-right pr10">500 Bs</td>
                                            </tr>
                                            <tr>
                                                <td><b>156</b>
                                                </td>
                                                <td>McFlurry Oreo</td>
                                                <td>Helado de vainilla con trocitos de galleta Oreo y topping de chocolate</td>
                                                <td class="text-right pr10">2</td>
                                                <td class="text-right pr10">190Bs</td>
                                                <td class="text-right pr10">360 Bs</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row" id="invoice-footer">
                                <div class="col-md-12">
                                    <div class="pull-left mt20 fs15 text-primary"> Gracias por su compra.</div>
                                    <div class="pull-right">
                                        <table class="table" id="invoice-summary">
                                            <thead>
                                                <tr>
                                                    <td><b>P. Unitario:</b>
                                                    </td>
                                                    <td class="text-right pr10">2360 Bs</td>
                                                </tr>
                                                <tr>
                                                    <td><b>IVA (12%):</b>
                                                    </td>
                                                    <td class="text-right pr10">283.2 Bs</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Servicio (10%):</b>
                                                    </td>
                                                    <td class="text-right pr10">283.2 Bs</td>
                                                </tr>
                                                <tr>
                                                    <td><b>IVA Servicio (12%):</b>
                                                    </td>
                                                    <td class="text-right pr10">28.2 Bs</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Subtotal:</b>
                                                    </td>
                                                    <td class="text-right pr10">387.2 Bs</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><h3><b>Total:</b></h3>
                                                    </td>
                                                    <td class="text-right pr10" style="width: 110px;"><h3>3879.2 Bs</h3></td>
                                                </tr>
                                            </tbody>                                        
                                        </table>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>
                    </div>

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

    <!-- Page Plugins -->
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/advanced/steps/jquery.steps.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery.validate.min.js"></script>

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

            $('#exampleModal5').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-title').text(recipient)
            });

            var form = $("#form-wizard");
            form.validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });
            form.children(".wizard").steps({
                headerTag: ".wizard-section-title",
                bodyTag: ".wizard-section",
                onStepChanging: function(event, currentIndex, newIndex) {
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onFinishing: function(event, currentIndex) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function(event, currentIndex) {
                    alert("Submitted!");
                }
            });

            // Demo Wizard Functionality
            var formWizard = $('.wizard');
            var formSteps = formWizard.find('.steps');

            $('.wizard-options .holder-style').on('click', function(e) {
                e.preventDefault();

                var stepStyle = $(this).data('steps-style');

                var stepRight = $('.holder-style[data-steps-style="steps-right"');
                var stepLeft = $('.holder-style[data-steps-style="steps-left"');
                var stepJustified = $('.holder-style[data-steps-style="steps-justified"');

                if (stepStyle === "steps-left") {
                    stepRight.removeClass('holder-active');
                    stepJustified.removeClass('holder-active');
                    formWizard.removeClass('steps-right steps-justified');
                }
                if (stepStyle === "steps-right") {
                    stepLeft.removeClass('holder-active');
                    stepJustified.removeClass('holder-active');
                    formWizard.removeClass('steps-left steps-justified');
                }
                if (stepStyle === "steps-justified") {
                    stepLeft.removeClass('holder-active');
                    stepRight.removeClass('holder-active');
                    formWizard.removeClass('steps-left steps-right');
                }

                // Assign new style 
                if ($(this).hasClass('holder-active')) {
                    formWizard.removeClass(stepStyle);
                } else {
                    formWizard.addClass(stepStyle);
                }

                // Assign new active holder
                $(this).toggleClass('holder-active');
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
