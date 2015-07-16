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
				
                <h2 class="lh30 mtn text-center">
                    <b class="text-primary">Crear </b> Sucursal
                </h2>

				<div class="tray tray-center p25 va-t posr">

                    <!-- Store Owner Details -->
                    <div class="panel ">
                        <div class="panel-heading">
                            <span class="panel-title">Sucursal</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">
                                
                                <div class="section row mb10">
                                    <div class="col-md-offset-4 col-md-4 col-md-offset-4 text-center">
                                        <p>Elegir Franquicia</p>
                                            <br>
                                            <div class="section">
                                            <label class="field select">
                                                <select id="language" name="language">
                                                    <option value="">KFC</option>
                                                    <option value="EN">Burger King</option>
                                                    <option value="FR">Arturo's</option>
                                                    <option value="SP">Domino's Pizza</option>
                                                    <option value="CH">Sushi Town</option>
                                                    
                                                </select>
                                                <i class="arrow double"></i>                    
                                            </label>  
                                        </div><!-- end section -->  
                                    </div>
                                    <br><br>
                                </div>

                                <div class="section row mb10">
                                    <label for="sucursal-rif" class="field-label col-md-3 text-center">RIF:</label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="RIF">
                                            <label for="account-name" class="field-icon"><i class="fa fa-male"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-email" class="field-label col-md-3 text-center">Persona de contacto - Nombre</label>
                                    <div class="col-md-9">
                                        <label for="account-email" class="field prepend-icon">
                                            <input type="email" name="account-email" id="account-email" class="gui-input" placeholder="Nombre" >
                                            <label for="account-email" class="field-icon"><i class="fa fa-envelope-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Numero de cada Franquiciado</label>
                                    <div class="col-md-9">
                                        <label for="account-phone" class="field prepend-icon">
                                            <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Telefono"  >
                                            <label for="account-phone" class="field-icon"><i class="fa fa-phone"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Direccion Fiscal</label>
                                    <div class="col-md-9">
                                        <label for="account-phone" class="field prepend-icon">
                                            <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Direccion Fiscal" >
                                            <label for="account-phone" class="field-icon"><i class="fa fa-building"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Direccion Local</label>
                                    <div class="col-md-9">
                                        <label for="account-phone" class="field prepend-icon">
                                            <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Direccion Local" >
                                            <label for="account-phone" class="field-icon"><i class="fa fa-building"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Horario</label>
                                    <div class="col-md-9">
                                        <label for="account-phone" class="field prepend-icon">
                                            <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Direccion" >
                                            <label for="account-phone" class="field-icon"><i class="fa fa-clock-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Pais:</label>
                                    <div class="col-md-9">
                                        <label class="field select">
                                        <select id="filter-purchases" name="filter-purchases">
                                            <option value="0">Pais</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Estado:</label>
                                    <div class="col-md-9">
                                        <label class="field select">
                                        <select id="filter-purchases" name="filter-purchases">
                                            <option value="0">Estado</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Municipio:</label>
                                    <div class="col-md-9">
                                        <label class="field select">
                                        <select id="filter-purchases" name="filter-purchases">
                                            <option value="0">Municipio</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Referencia</label>
                                    <div class="col-md-9">
                                        <label for="account-phone" class="field prepend-icon">
                                            <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Refencia" >
                                            <label for="account-phone" class="field-icon"><i class="fa fa-clock-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Mapa</label>
                                    <div class="col-md-9">
                                        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Lomas%20de%20La%20Lagunita%2C%20Miranda%2C%20Venezuela&key=AIzaSyCVlmJ5_I21mHeSwjwRit-gu5rMfHrnDxI"></iframe>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">ID</label>
                                    <div class="col-md-9">
                                        <label for="account-phone" class="field prepend-icon">
                                            <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="N° 00000000" disabled>
                                            <label for="account-phone" class="field-icon"><i class="fa fa-clock-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Id Dispositivo</label>
                                    <div class="col-md-9">
                                        <label for="account-phone" class="field prepend-icon">
                                            <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="N° 000000" disable>
                                            <label for="account-phone" class="field-icon"><i class="fa fa-clock-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Store Information -->
                    
                    <div class="panel ">
                        <div class="panel-heading">
                            <span class="panel-title">Emails</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">
                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Email de administrador: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Email administrador" >
                                            <label for="account-name" class="field-icon"><i class="fa fa-home"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Usuario operativo: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Usuario" >
                                            <label for="account-name" class="field-icon"><i class="fa fa-globe"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Email Franquicia: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Email Franquicia" >
                                            <label for="account-name" class="field-icon"><i class="fa fa-globe"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="panel ">
                        <div class="panel-heading">
                            <span class="panel-title">Contraseña</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">
                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Contraseña Usuario Administrador: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Contraseña Usuario Administrador">
                                            <label for="account-name" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Repetir Contraseña Administrador: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Contraseña Usuario Administrador">
                                            <label for="account-name" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Contraseña Franquimovil: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Contraseña Franquimovil">
                                            <label for="account-name" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Repetir Contraseña Franquimovil: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Repita Contraseña Franquimovil">
                                            <label for="city" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-9">
                                       <button type="button"class="btn btn-primary notification" data-note-style="success" type="submit">Guardar Cambios</button>
                         <input class="btn btn-danger" type="button" value="Cancelar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
    
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
                    title: 'Bootstrap Themed',
                    text: 'Look at my beautiful styling! ^_^',
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
