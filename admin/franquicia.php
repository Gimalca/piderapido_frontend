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
            <section id="content" class=" pnanimated fadeIn">
                
                    <div class="table-layout">
                        <div class="w00 text-center pr30 hidden-xs" id="imagen">
                            <img src="assets/img/logos/kfclogo.png" class="responsive">
                            
                        </div>
                        <div class="va-t m30" id="texto" style="padding-top: 40px;">

                            <h2 class=""> Franquicia </h2>
                            <p class="fs15 mb20">Descripción breve de la franquicia o frase introductoria</p>
                            <h5 class="fs15 mb20">RIF: J-2525445</h5>


                        </div>
                    </div>
                
                <!-- Admin-panels -->
                <div class="admin-panels fade-onload sb-l-o-full">

                    <div class="row">

                    <div class="tray tray-center p25 va-t posr">

                    <!-- Store Owner Details -->
                    <div class="panel ">
                        <div class="panel-heading">
                            <span class="panel-title">Franquicia</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form col-xs-6">
                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Nombre:</label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Nombre" >
                                            <label for="account-name" class="field-icon"><i class="fa fa-male"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-email" class="field-label col-md-3 text-center">RIF:</label>
                                    <div class="col-md-9">
                                        <label for="account-email" class="field prepend-icon">
                                            <input type="email" name="account-email" id="account-email" class="gui-input" placeholder="RIF" >
                                            <label for="account-email" class="field-icon"><i class="fa fa-envelope-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Categoria</label>
                                    <div class="col-md-9">
                                        <label for="account-phone" class="field prepend-icon">
                                            <input type="text" name="account-phone" id="account-phone" class="gui-input" placeholder="Categoria"  >
                                            <label for="account-phone" class="field-icon"><i class="fa fa-phone"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Dirección Fiscal: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Dirección" >
                                            <label for="account-name" class="field-icon"><i class="fa fa-home"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="admin-form col-xs-6">
                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">País: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="País" >
                                            <label for="account-name" class="field-icon"><i class="fa fa-globe"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Estado: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Estado" >
                                            <label for="city" class="field-icon"><i class="fa fa-building-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Municipio: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Municipio" >
                                            <label for="zip" class="field-icon"><i class="fa fa-home"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Referencia: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Referencia" >
                                            <label for="zip" class="field-icon"><i class="fa fa-home"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="admin-form col-xs-12">
                                <div class="section row mb10">
                                    <label class="field prepend-icon append-button file">
                                        <span class="button">Choose File</span>
                                        <input type="file" class="gui-file" name="file1" id="file1" onChange="document.getElementById('uploader1').value = this.value;">
                                        <input type="text" class="gui-input" id="uploader1" placeholder="Cambiar Logo">
                                        <label class="field-icon"><i class="fa fa-upload"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-primary panel-border top mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Cambio de Contraseña</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form ">                                        
                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Nueva Contraseña: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Nueva Contraseña">
                                            <label for="account-name" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Repita la Nueva Contraseña: </label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                           <input type="text" name="account-name" id="account-name" class="gui-input" placeholder="Repita la Nueva Contraseña">
                                            <label for="city" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-offset-9">

                         <button type="button"class="btn btn-primary notification" data-note-style="success" type="submit">Guardar Cambios</button>
                         <input class="btn btn-danger" type="button" value="Cancelar">
                    </div>    
                </div>
                        
            </div>
        
		</div>
                         
        </section> 
    </section>
            
    </div>
       
    <!-- End: Main -->
<style>
    
    /* demo page styles */
    body {
        min-height: 2300px;
    }
    .affix-pane.affix {
        top: 80px;
    }
    .admin-form .panel.heading-border:before,
    .admin-form .panel .heading-border:before {
        transition: all 0.7s ease;
    }
    .custom-nav-animation li {
        display: none;
    }
    .custom-nav-animation li.animated {
        display: block;
    }
    </style>
    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
    
        <!-- Admin Panels  -->
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>
    <!-- Page Plugins via CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

    <!-- Sparklines CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="vendor/plugins/daterange/daterangepicker.js"></script>
    <script type="text/javascript" src="vendor/plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/jquerymask/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/tagmanager/tagmanager.js"></script>

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

            
             // Init Theme Core    
            Demo.init();

            $('input').on('click',function() {
                alert($(this).prop('checked'));
            });

            // Init custom page animation
            setTimeout(function() {
                $('.custom-nav-animation li').each(function(i, e) {
                    var This = $(this);
                    var timer = setTimeout(function() {
                        This.addClass('animated animated-short zoomIn');
                    }, 50 * i);
                });
            }, 500);

            // Init tray navigation smooth scroll
            $('.tray-nav a').smoothScroll({
                offset: -145
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


            // Init Theme Core    
            Core.init();

            // Init Theme Core    
            Demo.init();


        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>

