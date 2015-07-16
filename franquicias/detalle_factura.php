<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicon1s, etc. -->
    <meta charset="utf-8">
    <title>Zona Franquicias - Pide Rápido</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- favicon1 -->
    <link rel="shortcut icon" href="assets/img/favicon1.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="invoice-page">

    <!-- Start: Main -->
    <div id="main">

        <?php include ('layouts/header.php');?>

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
            <section id="content">

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
                                <br><br><br><br>
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
