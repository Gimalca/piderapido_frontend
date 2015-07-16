<!DOCTYPE html>
<html>

 <?php include 'layout/header.php' ?>

<body class="dashboard-page sb-l-o sb-r-c">

    
    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <?php include 'layout/menu-superior.php'; ?>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <?php include 'layout/menu.php'; ?>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Begin: Content -->
            <section id="content" class="">

                <div class="panel invoice-panel">
                    <div class="panel-heading">
                        <span class="panel-title">
                            <span class="glyphicon glyphicon-print"></span> Fatura #58126332</span>
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
                                    <h1 class="lh10 mt10"> Factura #58126332</h1>
                                    <h5 class="mn"> Creada: Mayo 6, 2015 </h5>
                                    <h5 class="mn"> Status: <b class="text-success">Pagada</b> </h5>
                                </div>
                            </div>
                            <div class="col-md-4"> <img src="assets/img/logos/logo5.png" class="img-responsive center-block mt10 mw200 hidden-xs" alt="AdminDesigns"> </div>
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
                                        <address>
                                            <strong>David Lares</strong>
                                            <br> 19.954.672
                                            <br> La Lagunita
                                            <br> Miranda
                                            <abbr title="Phone">Teléfono:</abbr> (414) 456-7890
                                        </address>
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
                                            <li> <b>Tipo de Pago:</b> Tarjeta de Pide Rápido</li>
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
                                            <th>Código</th>
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Precio Unitario</th>
                                            <th class="text-right pr10" style="width: 80px;">Precio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>101</b>
                                            </td>
                                            <td>Big Mac</td>
                                            <td>Hamburguesa con doble carne, salsa, queso derretido, cebolla y pepino.</td>
                                            <td>2</td>
                                            <td>250Bs</td>
                                            <td class="text-right pr10">500 Bs</td>
                                        </tr>
                                        <tr>
                                            <td><b>105</b>
                                            </td>
                                            <td>Premium Doble Deluxe</td>
                                            <td>Hamburguesa con doble carne, salsa, mostaza, mayonesa, cebolla morada, pepinillo, lechuga y tomate</td>
                                            <td>1</td>
                                            <td>300Bs</td>
                                            <td class="text-right pr10">300 Bs</td>
                                        </tr>
                                        <tr>
                                            <td><b>345</b>
                                            </td>
                                            <td>Premium Doble Bacon</td>
                                            <td>Hamburguesa con doble carne, salsa, mostaza, ketchup, cebolla morada, pepinillo y tocineta</td>
                                            <td>2</td>
                                            <td>350Bs</td>
                                            <td class="text-right pr10">700 Bs</td>
                                        </tr>
                                        <tr>
                                            <td><b>332</b>
                                            </td>
                                            <td>Cajita Feliz</td>
                                            <td>Hamburguesa de carne con queso con un regalo incluido</td>
                                            <td>2</td>
                                            <td>250Bs</td>
                                            <td class="text-right pr10">500 Bs</td>
                                        </tr>
                                        <tr>
                                            <td><b>156</b>
                                            </td>
                                            <td>McFlurry Oreo</td>
                                            <td>Helado de vainilla con trocitos de galleta Oreo y topping de chocolate</td>
                                            <td>2</td>
                                            <td>190Bs</td>
                                            <td class="text-right pr10">360 Bs</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row" id="invoice-footer">
                            <div class="col-md-12">
                                <div class="pull-left mt20 fs15 text-primary"> Gracias por su compra.</div>
                                <div class="pull-right">
                                    <table class="table" id="invoice-summary">
                                        <thead>
                                            <tr>
                                                <th>Sub Total:
                                                </th>
                                                <th class="text-right pr10" style="width: 80px;">2360 Bs</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <tr>
                                                <td>IVA (12%)
                                                </td>
                                                <td class="text-right pr10">283.2 Bs</td>
                                            </tr>
                                            <tr>
                                                <td><b>Sub Total:</b>
                                                </td>
                                                <td class="text-right pr10">2879.2 Bs</td>
                                            </tr>
                                            <tr>
                                                <td>Servicio (10%)
                                                </td>
                                                <td class="text-right pr10">236 Bs</td>
                                            </tr>
                                            <tr>
                                                <td>IVA (12%):
                                                </td>
                                                <td class="text-right pr10">3000.2 Bs</td>
                                            </tr>
                                            <tr>
                                                <td><b>TOTAL</b>
                                                </td>
                                                <td class="text-right pr10">3000.2 Bs</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix"></div>
                                <div class="invoice-buttons">
                                    <a href="javascript:window.print()" class="btn btn-default mr10"><i class="fa fa-print pr5"></i> Imprimir </a>
                                    <button class="btn btn-primary btn-gradient" type="button"><i class="fa fa-floppy-o pr5"></i> Guardar </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
            <!-- End: Content -->

        </section>

        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano">
            <div class="sidebar_right_content nano-content">
                <div class="tab-block sidebar-block br-n">
                    <ul class="nav nav-tabs tabs-border nav-justified hidden">
                        <li class="active">
                            <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                        </li>
                    </ul>
                    <div class="tab-content br-n">
                        <div id="sidebar-right-tab1" class="tab-pane active">

                            <h5 class="title-divider text-muted mb20"> Server Statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                    <span class="fs11">DB Request</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                    <span class="fs11 text-left">Server Load</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                    <span class="fs11 text-left">Server Connections</span>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">132</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">212</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">82.5</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt40 mb20"> Server Statistics <span class="pull-right text-primary fw600">USA</span> </h5>
                            <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                        </div>
                        <div id="sidebar-right-tab2" class="tab-pane"></div>
                        <div id="sidebar-right-tab3" class="tab-pane"></div>
                    </div>
                    <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Demo JS 
            Demo.init();


        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
