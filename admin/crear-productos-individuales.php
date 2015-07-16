b<!DOCTYPE html>
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
            <section id="content" class="animated fadeIn">
                
                <div class="panel">
                        
                            <div class="panel-heading">
                                <span class="panel-title">
                                    <span class="glyphicons glyphicons-fast_food"></span>
                                    Producto Individual
                                    </span>
                                </span>
                            </div>
                           

                            <div id="p1" class="panel heading-border panel-primary">

                                <div class="panel-body bg-light">
                                  
                                    <div class="col-md-4">
                                        <div class="tray-bin pl10 mb10" style="height: 250px;">
                                               <br>
                                               <form action="/file-upload" class="dropzone dropzone-sm" id="dropZone">
                                                     <div class="fallback">
                                                         <input name="file" type="file" multiple />
                                                      </div>
                                               </form>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="inputStandard" class="col-lg-3 control-label">Nombre del producto
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="text" id="inputStandard" class="form-control" placeholder="Nombre">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label" for="textArea2">Descripción</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" id="textArea2" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label" for="textArea2">Precio</label>
                                                <div class="col-lg-9">
                                                    <input type="text" id="inputStandard" class="form-control" >
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <div class="col-md-offset-8">
                                                    <button type="button"class="btn btn-primary notification" data-note-style="success" type="submit">Guardar Cambios</button>
                                                    <input class="btn btn-danger" type="button" value="Cancelar">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="panel">
                        
                            <div class="panel-heading">
                                <span class="panel-title">
                                    <span class="glyphicons glyphicons-fast_food"></span>
                                        Elementos Creados
                                    </span>
                                </span>
                            </div>
                           

                            <div id="p1" class="panel heading-border panel-primary">

                                <div class="panel-body bg-light">
                                  
                                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Fecha de creación</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <center>
                                                    <img src="http://www.placehold.it/42x42">
                                                </center>
                                            </td>
                                            <td>Burritos Don Joaquín</td>
                                            <th>Descripción del producto</th>
                                            <td>25/10/2015</td>
                                            <td>
                                                
                                                <div class="btn-group text-center">
                                                    <center>
                                                        <button class="btn btn-default light" type="button">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                     </center>
                                                </div>

                                            </td>
                                          
                                        </tr>
                                        
                                    </tbody>
                                </table>

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
    <script type="text/javascript" src="vendor/plugins/dropzone/dropzone.min.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript" src="assets/js/pages/widgets.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

             Dropzone.options.dropZone = {
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 0, // MB

                addRemoveLinks: true,
                dictDefaultMessage: '<i class="fa fa-cloud-upload"></i> \
         <span class="main-text"><b>Clic</b> para  subir la imagen</span> <br /> \
         <span class="sub-text"></span> \
        ',
                dictResponseError: 'Server not Configured'
            };

            "use strict";

            // Init Theme Core      
            Core.init({
                sbm: "sb-l-c",
            });

            // Init Demo JS
            Demo.init();

            var Stacks = {
                stack_top_right: {
                    "dir1": "down",
                    "dir2": "left",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_top_left: {
                    "dir1": "down",
                    "dir2": "right",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_bottom_left: {
                    "dir1": "right",
                    "dir2": "up",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_bottom_right: {
                    "dir1": "left",
                    "dir2": "up",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_bar_top: {
                    "dir1": "down",
                    "dir2": "right",
                    "push": "top",
                    "spacing1": 0,
                    "spacing2": 0
                },
                stack_bar_bottom: {
                    "dir1": "up",
                    "dir2": "right",
                    "spacing1": 0,
                    "spacing2": 0
                },
                stack_context: {
                    "dir1": "down",
                    "dir2": "left",
                    "context": $("#stack-context")
                },
            }

            // PNotify Plugin Event Init
            $('.notification').click(function(e) {
                var noteStyle = $(this).data('note-style');
                var noteShadow = $(this).data('note-shadow');
                var noteOpacity = $(this).data('note-opacity');
                var noteStack = $(this).data('note-stack');
                var width = "290px";

                var noteStack = noteStack ? noteStack : "stack_top_right";
                var noteOpacity = noteOpacity ? noteOpacity : "1";

                function findWidth() {
                    if (noteStack == "stack_bar_top") {
                        return "100%";
                    }
                    if (noteStack == "stack_bar_bottom") {
                        return "70%";
                    } else {
                        return "290px";
                    }
                }

                 new PNotify({
                    title: 'Cambios aplicados',
                    text: '',
                    shadow: noteShadow,
                    opacity: noteOpacity,
                    addclass: noteStack,
                    type: noteStyle,
                    stack: Stacks[noteStack],
                    width: findWidth(),
                    delay: 1400
                });

            });
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
