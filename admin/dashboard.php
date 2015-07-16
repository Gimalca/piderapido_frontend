f<!DOCTYPE html>
<html>

 <?php include 'layout/header.php'; ?>

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

            <!-- Start: Topbar-Dropdown -->
            <div id="topbar-dropmenu">
                <div class="topbar-menu row">
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-success">
                            <span class="metro-icon glyphicons glyphicons-inbox"></span>
                            <p class="metro-title">Messages</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-info">
                            <span class="metro-icon glyphicons glyphicons-parents"></span>
                            <p class="metro-title">Users</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-alert">
                            <span class="metro-icon glyphicons glyphicons-headset"></span>
                            <p class="metro-title">Support</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-primary">
                            <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                            <p class="metro-title">Settings</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-warning">
                            <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                            <p class="metro-title">Videos</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-system">
                            <span class="metro-icon glyphicons glyphicons-picture"></span>
                            <p class="metro-title">Pictures</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End: Topbar-Dropdown -->

            <!-- Start: Topbar -->
           
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">

                <!-- Dashboard Tiles -->
                <div class="row mb10">
                    <div class="col-md-4">
                        <div class="panel bg-alert light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-comments-o"></i> </div>
                                <h2 class="mt15 lh15"> <b>523</b> </h2>
                                <h5 class="text-muted">Pedidos realizados</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel bg-info light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-twitter"></i> </div>
                                <h2 class="mt15 lh15"> <b>348</b> </h2>
                                <h5 class="text-muted">Franquicias suscritas</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel bg-danger light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>
                                <h2 class="mt15 lh15"> <b>267</b> </h2>
                                <h5 class="text-muted">Sucursales Pide Rapido</h5>
                            </div>
                        </div>
                    </div>
                   
                </div>

              <div class="row">
                
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">
                            Datos generales
                        </span>
                    </div>
                    <div class="panel-body">
                        
                        <div class="col-md-4">
                                            <h5 class="mt5 ph10 pb5 br-b fw700">Franquicias mas populares</h5>
                                            <table class="table mbn">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="mr5 va-b"></span>Burger King</td>
                                                        <td class="fs15 fw700 text-right"> + </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="mr5 va-b"></span>Subway</td>
                                                       <td class="fs15 fw700 text-right"> + </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="mr5 va-b"></span>KFC</td>
                                                        <td class="fs15 fw700 text-right"> + </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class=" mr5 va-b"></span>McDonalds</td>
                                                       <td class="fs15 fw700 text-right"> + </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="mr5 va-b"></span>Sushi Town</td>
                                                        <td class="fs15 fw700 text-right"> + </td>
                                                    </tr>
                                                  
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="mt5 ph10 pb5 br-b fw700">Combos mas pedidos</h5>
                                            <table class="table mbn">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="mr5 va-b"></span>Big Mac</td>
                                                            <td class="fs15 fw700 text-right"> + </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="mr5 va-b"></span>Whooper Doble</td>
                                                        <td class="fs15 fw700 text-right"> + </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="mr5 va-b"></span>Mc Pollo</td>
                                                            <td class="fs15 fw700 text-right"> + </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="mr5 va-b"></span>Combo del Rey</td>
                                                            <td class="fs15 fw700 text-right"> + </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="mr5 va-b"></span>Bucket de Pollo</td>
                                                            <td class="fs15 fw700 text-right"> + </td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                         </div>

                                         <div class="col-md-4">
                                            
                                            <h5 class="mt5 ph10 pb5 br-b fw700 text-center">Relación de consumo</h5>
                                                
                                                <div class="panel" id="p10">
                                                    
                                                            
                                                        <div class="mb20 text-right">
                                                            <span class="fs11 text-muted"><i class="fa fa-circle text-info fs12 pr5"></i> Top PR</span>
                                                            <span class="fs11 text-muted ml10"><i class="fa fa-circle text-warning fs12 pr5"></i> Top Franquicia</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-center">
                                                                <div class="info-circle" id="c1" title="Top PR" value="80" data-circle-color="primary"></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="info-circle" id="c2" title="Top Franquicia" value="30" data-circle-color="warning"></div>
                                                            </div>
                                                        </div>
                                                    
                                                </div>

                                         </div>
                          
                    </div>
                </div>
            </div>       
            <div class="row">
                
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">
                            Últimos 10 Pedidos realizados
                        </span>
                    </div>
                    <div class="panel-body">

                        <div id="tableCenter">
                            <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                                <thead>
                                    <tr class="bg-light">
                                        <th class="text-center"># Pedidos</th>
                                        <th class="">Total</th>
                                        <th class="">Detalle</th>
                                        <th class="text-center">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                        <td class="">2686164464</td>
                                        <td class="">1500 Bs</td>
                                        <td class=""><a href="detalle_factura.php">Ver Detalle</a></td>
                                        <td class="text-center">

                                             <div class="btn-group text-center">
                                                <button class="btn btn-success br2 btn-xs fs12 dropdown-toggle" aria-expanded="false" type="button" disabled>
                                                Retirado
                                            </button>       
                                             </div>                 

                                         
                                        </td>

                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">
                            Últimas Transacciones realizadas
                        </span>
                    </div>
                    <div class="panel-body">

                        <div id="tableCenter">
                            <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                                <thead>
                                    <tr class="bg-light">
                                        <th class="text-center">Fecha</th>
                                        <th class="">Combo</th>
                                        <th class="">Franquicia</th>
                                        <th class="">ID Sucursal</th>
                                        <th class="">Dirección</th>
                                        <th class="">Metodo de Pago</th>
                                        <th class="">Monto</th>
                                        <th class="text-center">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                        <td class="">23 / 23 /2015 </td>
                                        <td class="">Combo del Rey</td>
                                        <td class="">10000000</td>
                                        <td class="">Nro. 000001</td>
                                        <td class="">Banesco</td>
                                        <td class="">TDC</td>
                                        <td class="">500 Bs</td>
                                        <td class="text-center">

                                             <div class="btn-group text-center">
                                                    <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Retirado
                                                        <span class="caret ml5"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                      
                                                        <li class="divider"></li>
                                                        <li class="active">
                                                            <a href="#">Retirado</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">No retirado</a>
                                                        </li>
                                                    </ul>
                                                </div>                 

                                         
                                        </td>

                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>

            </div>

        
        </section>
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
            demoHighCharts.init();

            // Because we are using Admin Panels we use the OnFinish 
            // callback to activate the demoWidgets. It's smoother if
            // we let the panels be moved and organized before 
            // filling them with content from various plugins

            // Init plugins used on this page
            // HighCharts, JvectorMap, Admin Panels

            // Init Admin Panels on widgets inside the ".admin-panels" container
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
