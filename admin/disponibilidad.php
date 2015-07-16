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
            <div class="admin-form">
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
                            <br>
                            <div class="panel-body pn">
                            <div class="col-md-12">
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
                                                    <div class="col-md-2">
                                                        <img src="assets/img/logos/combo1.jpg" height="1983" width="2700" class="img-responsive thumbnail mr25">
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h3>Combo Nombre</h3><br>
                                                        <p>Descripción</p>
                                                        <textarea rows="4" cols="50">
                                                        </textarea>
                                                        <h6>
                                                        <div class="col-md-12">
                                                            <label class="switch block mt15">
                                                                <input type="checkbox" name="tools" id="t1" value="disponible">
                                                                <label for="t1" data-on="SI" data-off="NO"></label>
                                                                <span>Disponible</span>
                                                            </label>
                                                        </div>
                                                        <br><br><br><br><br><br>
                                                        <div class="section mv15">
                                                            <div class="option-group field">
                                                                <b><h3>Tamaño del combo</h3></b>
                                                                <label class="option">
                                                                    <input type="checkbox" name="checked" value="checked">
                                                                    <span class="checkbox"></span>Pequeño</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="disabled" value="disabled">
                                                                    <span class="checkbox"></span>Mediano</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Grande</label>
                                                            </div>
                                                        </div>
                                                        <div class="section mv15">
                                                            <div class="option-group field">
                                                                <b><h3>Ingredientes extras</h3></b>
                                                                <label class="option">
                                                                    <input type="checkbox" name="checked" value="checked">
                                                                    <span class="checkbox"></span>Tocineta</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="disabled" value="disabled">
                                                                    <span class="checkbox"></span>Cebolla dulce</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Queso tipo americano</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">                                                        
                                                        <div class="section mv15">
                                                            <b><h3>Descuentos</h3></b>
                                                             <label class="switch block mt15">
                                                                <input type="checkbox" name="descuento" id="t2" value="descuento">
                                                                <label for="t2" data-on="SI" data-off="NO"></label>
                                                                <span>Activado</span>
                                                            </label>
                                                            <br>
                                                            <input type="text" id="amount" readonly="" value="0%">
                                                            <div class="col-md-3 col-md-offset-1">
                                                                <div class="slider-wrapper slider-success">
                                                                    <div id="slider2"></div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="section mv15 col-md-offset-1">
                                                            <div class="option-group field">
                                                                <b><p>Días disponibles en la semana</p></b>
                                                                <label class="option">
                                                                    <input type="checkbox" name="checked" value="checked">
                                                                    <span class="checkbox"></span>Lunes</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="disabled" value="disabled">
                                                                    <span class="checkbox"></span>Martes</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Miercoles</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Jueves</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Viernes</label>
                                                            </div>
                                                        </div>
                                                        <div class="section mv15 col-md-offset-1">
                                                            <div class="option-group field">
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Sabados</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Domingos</label>
                                                            </div>
                                                        </div>
                                                        <div class="section mv15 col-md-offset-1">
                                                            <b><p>Horario en que estará disponible</p></b>
                                                            <p>Inicio</p>
                                                            <label for="timepicker2" class="field prepend-picker-icon">
                                                                <input type="text" id="timepicker2" name="timepicker2" class="gui-input hasDatepicker" placeholder="Hora Inicial">
                                                                <button type="button" class="ui-datepicker-trigger"><i class="fa fa-clock-o"></i></button>
                                                            </label>
                                                            <br>
                                                            <p>Final</p>
                                                            <label for="timepicker" class="field prepend-picker-icon">
                                                                <input type="text" id="timepicker" name="timepicker" class="gui-input hasDatepicker" placeholder="Hora Final">
                                                                <button type="button" class="ui-datepicker-trigger"><i class="fa fa-clock-o"></i></button>
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <div class="section mv15">
                                                            <b><h3>Promoción 2x1</h3></b>
                                                             <label class="switch block mt15">
                                                                <input type="checkbox" name="descuento" id="t3" value="descuento">
                                                                <label for="t3" data-on="SI" data-off="NO"></label>
                                                                <span>Activado</span>
                                                            </label>
                                                            <br>
                                                                                                                        
                                                        </div>

                                                        <div class="section mv15 col-md-offset-1">
                                                            <div class="option-group field">
                                                                <b><p>Días disponibles en la semana</p></b>
                                                                <label class="option">
                                                                    <input type="checkbox" name="checked" value="checked">
                                                                    <span class="checkbox"></span>Lunes</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="disabled" value="disabled">
                                                                    <span class="checkbox"></span>Martes</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Miercoles</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Jueves</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Viernes</label>
                                                            </div>
                                                        </div>
                                                        <div class="section mv15 col-md-offset-1">
                                                            <div class="option-group field">
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Sabados</label>
                                                                <label class="option">
                                                                    <input type="checkbox" name="mobileos" value="CH">
                                                                    <span class="checkbox"></span>Domingos</label>
                                                            </div>
                                                        </div>
                                                        <div class="section mv15 col-md-offset-1">
                                                            <b><p>Horario en que estará disponible</p></b>
                                                            <p>Inicio</p>
                                                            <label for="timepicker3" class="field prepend-picker-icon">
                                                                <input type="text" id="timepicker3" name="timepicker3" class="gui-input hasDatepicker" placeholder="Hora Inicial">
                                                                <button type="button" class="ui-datepicker-trigger"><i class="fa fa-clock-o"></i></button>
                                                            </label>
                                                            <br>
                                                            <p>Final</p>
                                                            <label for="timepicker4" class="field prepend-picker-icon">
                                                                <input type="text" id="timepicker4" name="timepicker4" class="gui-input hasDatepicker" placeholder="Hora Final">
                                                                <button type="button" class="ui-datepicker-trigger"><i class="fa fa-clock-o"></i></button>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>                                    
                                            </div>
                                        </div>
                                    </div>
                            </div>
                </section>
                <!-- End: Content -->
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

        <!-- Forms Javascript -->
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-tcm-month.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-timepicker.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery.spectrum.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery.stepper.min.js"></script>

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

            $("#slider2").slider({
                range: "min",
                min: 0,
                max: 100,
                value: 0,
                slide: function( event, ui ) {
                   $( "#amount" ).val( ui.value + "%" );
                }
            });

            $('#timepicker').timepicker({
                showOn: 'both',
                buttonText: '<i class="fa fa-clock-o"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#timepicker2').timepicker({
                showOn: 'both',
                buttonText: '<i class="fa fa-clock-o"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#timepicker3').timepicker({
                showOn: 'both',
                buttonText: '<i class="fa fa-clock-o"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#timepicker4').timepicker({
                showOn: 'both',
                buttonText: '<i class="fa fa-clock-o"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
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
