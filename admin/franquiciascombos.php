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
				
				<div class="panel">
                        <div class="panel-menu p12 admin-form theme-primary">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="field select">
                                        <select id="filter-purchases" name="filter-purchases">
                                            <option value="0">Filter by Purchases</option>
                                            <option value="1">1-49</option>
                                            <option value="2">50-499</option>
                                            <option value="1">500-999</option>
                                            <option value="2">1000+</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="field select">
                                        <select id="filter-group" name="filter-group">
                                            <option value="0">Filter by Group</option>
                                            <option value="1">Customers</option>
                                            <option value="2">Vendors</option>
                                            <option value="3">Distributors</option>
                                            <option value="4">Employees</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="field select">
                                        <select id="filter-status" name="filter-status">
                                            <option value="0">Filter by Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                            <option value="3">Suspended</option>
                                            <option value="4">Online</option>
                                            <option value="5">Offline</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body pn">
                           <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">
                                <span class="glyphicons glyphicons-fast_food"></span>Combo #1</span>
                            </div>
                            <div class="panel-body">
                                <div class="clearfix"></div>
                                <div class="tab-content br-n pn">
                                    <div id="tab17_1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="assets/img/logos/combo1.jpg" class="img-responsive thumbnail mr25">
                                            </div>
                                            <div class="col-md-8">
                                                <h5>Combo Nombre</h5><br>
                                                <p>Descripcion</p>
                                                 <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="editarcombo.php">Editar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>                                                
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                             <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">
                                <span class="glyphicons glyphicons-fast_food"></span>Combo #1</span>
                            </div>
                            <div class="panel-body">
                                <div class="clearfix"></div>
                                <div class="tab-content br-n pn">
                                    <div id="tab17_1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="assets/img/logos/combo1.jpg" class="img-responsive thumbnail mr25">
                                            </div>
                                            <div class="col-md-8">
                                                <h5>Combo Nombre</h5><br>
                                                <p>Descripcion</p>
                                                 <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="editarcombo.php">Editar</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>                                                
                                            </div>
                                            
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                        </div>
                    <div class="panel-body pn">
                         <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">
                                <span class="glyphicons glyphicons-fast_food"></span>Combo #1</span>
                            </div>
                            <div class="panel-body">
                                <div class="clearfix"></div>
                                <div class="tab-content br-n pn">
                                    <div id="tab17_1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="assets/img/logos/combo1.jpg" class="img-responsive thumbnail mr25">
                                            </div>
                                            <div class="col-md-8">
                                                <h5>Combo Nombre</h5><br>
                                                <p>Descripcion</p>
                                                 <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="editarcombo.php">Editar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>                                                
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                           <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">
                                <span class="glyphicons glyphicons-fast_food"></span>Combo #1</span>
                            </div>
                            <div class="panel-body">
                                <div class="clearfix"></div>
                                <div class="tab-content br-n pn">
                                    <div id="tab17_1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="assets/img/logos/combo1.jpg" class="img-responsive thumbnail mr25">
                                            </div>
                                            <div class="col-md-8">
                                                <h5>Combo Nombre</h5><br>
                                                <p>Descripcion</p>
                                                 <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="editarcombo.php">Editar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>                                                
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                        </div>
                    </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

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
