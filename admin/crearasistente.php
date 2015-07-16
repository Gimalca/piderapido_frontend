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
                
                <h2 class="lh30 mt15 text-center"> Crear <b class="text-primary"> Asistentes </b></h2>
                <br>
                
                <div class="panel">
                        
                        <div class="admin-form theme-primary">

                            <div id="p1" class="panel heading-border panel-primary">

                                <form class="form-horizontal" role="form">
                                    
                                    <div class="panel-body bg-light">
                                        
                                        <div class="row">

                                            <div class="admin-form tab-pane" id="register1" role="tabpanel">
                               
                                    <!-- end .form-header section -->

                                    <form method="post" action="/" id="form-register1">
                                        <div class="panel-body p25">
                                            <label for="names" class="field-label">Nombres del asistente</label>
                                            <div class="section row">
                                                <div class="col-md-6">
                                                    <label for="firstname" class="field prepend-icon">
                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Nombres">
                                                    </label>
                                                </div>
                                                <!-- end section -->

                                                <div class="col-md-6">
                                                    <label for="lastname" class="field prepend-icon">
                                                        <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Apellidos">
                                                       
                                                    </label>
                                                </div>
                                                <!-- end section -->

                                            </div>
                                          
                                            <div class="section">
                                                <label for="password" class="field-label">Contraseña</label>
                                                <label for="password" class="field prepend-icon">
                                                    <input type="password" name="password" id="password" class="gui-input">
                                                    
                                                </label>
                                            </div>
                                            <!-- end section -->

                                            <div class="section">
                                                <label for="confirmPassword" class="field-label">Confirmar contraseña</label>
                                                <label for="confirmPassword" class="field prepend-icon">
                                                    <input type="password" name="confirmPassword" id="confirmPassword" class="gui-input">
                                                    
                                                </label>
                                            </div>
                                            <!-- end section -->

                                            <label for="birthday" class="field-label">Fecha de nacimiento</label>
                                            <div class="section row">
                                                <div class="col-md-4">
                                                    <label for="month" class="field select">
                                                        <select id="month" name="month">
                                                            <option value="01">01 - Jan</option>
                                                            <option value="02">02 - Feb</option>
                                                            <option value="03">03 - Mar</option>
                                                            <option value="04">04 - Apr</option>
                                                            <option value="05">05 - May</option>
                                                            <option value="06">06 - Jun</option>
                                                            <option value="07">07 - Jul</option>
                                                            <option value="08">08 - Aug</option>
                                                            <option value="09">09 - Sep</option>
                                                            <option value="10">10 - Oct</option>
                                                            <option value="11">11 - Nov</option>
                                                            <option value="12">12 - Dec</option>
                                                        </select>
                                                        <i class="arrow double"></i>
                                                    </label>
                                                </div>
                                                <!-- end section -->

                                                <div class="col-md-4">
                                                    <label for="day" class="field">
                                                        <input type="text" name="day" id="day" class="gui-input" placeholder="Día">
                                                    </label>
                                                </div>
                                                <!-- end section -->

                                                <div class="col-md-4">
                                                    <label for="year" class="field">
                                                        <input type="text" name="year" id="year" class="gui-input" placeholder="Año">
                                                    </label>
                                                </div>
                                                <!-- end section -->

                                            </div>
                                            <!-- end .section row section -->

                                            <!-- end section -->

                                            <div class="section">
                                                <label for="email" class="field-label">Correo electrónico</label>
                                                <label for="email" class="field prepend-icon">
                                                    <input type="email" name="email" id="email" class="gui-input" placeholder="example@domain.com...">
                                                   
                                                </label>
                                            </div>
                                            <!-- end section -->

                                            <div class="section">
                                                <label for="mobile" class="field-label">Telefono Celular</label>
                                                <label for="mobile" class="field prepend-icon">
                                                    <input type="tel" name="mobile" id="mobile" class="gui-input" placeholder="+584149108744">
                                                </label>
                                            </div>
                                            
                                        </div>
                                        <!-- end .form-body section -->
                                        <div class="panel-footer text-right">
                                            <button type="button"class="btn btn-primary notification" data-note-style="success" type="submit">Guardar Cambios</button>
                                            <input class="btn btn-danger" type="button" value="Cancelar">
                                        </div>
                                        <!-- end .form-footer section -->
                                    </form>
                                </div>
                                <!-- end .admin-form section -->
                            </div>
                                            

                                        </div>

                                    </div>

                                </form>

                            </div>
                        </div>

                </div>


            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->
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
