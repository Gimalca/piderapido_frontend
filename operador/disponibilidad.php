<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicon1s, etc. -->
    <meta charset="utf-8">
    <title>Zona Operadores - Pide Rápido</title>
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

    <!-- favicon1 -->
    <link rel="shortcut icon" href="assets/img/favicon1.png">
	
	<link rel="stylesheet" type="text/css" href="vendor/plugins/datepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/tagmanager/tagmanager.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="dashboard-page sb-l-o sb-r-c">
    <div id="main">
        <!-- Start: Header -->
		<?php include ('layouts/header.php');?>
        <!-- End: Header -->
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
            <section id="content" class="animated fadeIn">
				<h2 class="lh30 mt15 text-center">
					Disponibilidad de 
					<b class="text-primary">Combos</b>
				</h2>
                <br>
                <div class="col-md-12">
                    <div class="admin-form">
                        <div id="p1" class="panel heading-border">
                            <div class="panel-body bg-light">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-divider mt40 mb25" id="spy4">
                                            <span>Búqueda</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-4 col-md-4">
                                        <div class="section">
                                            <label class="field select">
                                                <select id="country" name="country">
                                                    <option value="">Buscar por Combo</option>
                                                    <option value="AL">Combo #1</option>
                                                    <option value="DZ">Combo #2</option>
                                                </select>
                                                <i class="arrow"></i>
                                            </label>
                                        </div>
    								</div>
    								
    								<!--div class="col-md-4">
                                        <div class="section">
                                            <label class="field select">
                                                <select id="country" name="country">
                                                    <option value="">Buscar por Grupos</option>
                                                    <option value="AL">Opcion #1</option>
                                                    <option value="DZ">Opcion #1</option>
                                                </select>
                                                <i class="arrow"></i>
                                            </label>
                                        </div>
                                    </div>
    								
    								<div class="col-md-4">
                                        <div class="section">
                                            <label class="field select">
                                                <select id="country" name="country">
                                                    <option value="">Buscar por Estado</option>
                                                    <option value="AL">Opcion #1</option>
                                                    <option value="DZ">Opcion #1</option>
                                                </select>
                                                <i class="arrow"></i>
                                            </label>
                                        </div>
                                    </div-->
    								
    								<div class="col-md-12 text-center">
    									<center>
    										<button class="button btn-primary" type="submit">Buscar</button>
    									</center>
    								</div>      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>					
				</br>					
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
                            <span class="panel-title">
                            <span class="glyphicons glyphicons-fast_food"></span>Combo Nombre #1</span>
                        </div>
						<div class="panel-body pn" id="tableCenter">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th><b><center>Disponibilidad</center></b></th>
                                        <th><b><center>Nombre de combo</center></b></th>
                                        <th><b><center>Cantidad vendida</center></b></th>                                        
                                        <th><b><center>Detalle</center></b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="assets/img/stock/combo1.jpg" class="responsive" id="imgCombo"></td>
                                        <td>
                                            <label class="switch block mt15">
                                                <div class="switch switch-success round switch-inline">
                                                    <input id="exampleCheckboxSwitch1" type="checkbox">
                                                    <label for="exampleCheckboxSwitch1" data-on="SI" data-off="NO"></label>
                                                    <!--span>Disponible</span-->
                                                </div>
                                            </label>
                                        </td>                                        
                                        <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="Big Mac">Big Mac</button></td>                                        
                                        <td>5545</td>
                                        <td><a href="detalle.php">Ver Detalle</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/img/stock/combo1.jpg" class="responsive" id="imgCombo"></td>
                                        <td>
                                            <label class="switch block mt15">
                                                <div class="switch switch-success round switch-inline">
                                                    <input id="exampleCheckboxSwitch2" type="checkbox">
                                                    <label for="exampleCheckboxSwitch2" data-on="SI" data-off="NO"></label>
                                                    <!--span>Activado</span-->
                                                </div>
                                            </label>
                                        </td>                                        
                                        <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModa2" data-whatever="Cuarto de libra">Cuarto de libra</button></td>                                        
                                        <td>2054</td>
                                        <td><a href="detalle.php">Ver Detalle</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
					</div>
				</div>             
            </section>
            <!-- End: Content -->
            

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

            <div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div><!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Page Plugins via CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

    <!-- via local files 
    <script type="text/javascript" src="vendor/plugins/globalize/src/core.js"></script>
    <script type="text/javascript" src="vendor/plugins/moment/moment.min.js"></script> -->

    <!-- Page Plugins -->
    <script type="text/javascript" src="vendor/plugins/daterange/daterangepicker.js"></script>
    <script type="text/javascript" src="vendor/plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/jquerymask/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/tagmanager/tagmanager.js"></script>

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

            $('#exampleModal').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-title').text(recipient)
            });
            $('#exampleModa2').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-title').text(recipient)
            });


            // daterange plugin options
            var rangeOptions = {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                },
                startDate: moment().subtract('days', 29),
                endDate: moment()
            }

            // Init daterange plugin
            $('#daterangepicker1').daterangepicker();

            // Init daterange plugin
            $('#daterangepicker2').daterangepicker(
                rangeOptions,
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
            );

            // Init daterange plugin
            $('#inline-daterange').daterangepicker(
                rangeOptions,
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
            );

            // Init datetimepicker - fields
            $('#datetimepicker1').datetimepicker();
            $('#datetimepicker2').datetimepicker();


            // Init datetimepicker - inline + range detection
            $('#datetimepicker3').datetimepicker({
                defaultDate: "9/4/2014",
                inline: true,
            });

            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker5').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
            });
            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker6').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
            });
            // Init datetimepicker - inline + Date disabled (only time picker)
            $('#datetimepicker7').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
                inline: true
            });

            // Init colorpicker plugin
            $('#demo_apidemo').colorpicker({
                color: bgPrimary
            });
            $('.demo-auto').colorpicker();

            // Init jQuery Tags Manager 
            $(".tm-input").tagsManager({
                tagsContainer: '.tags',
                prefilled: ["Miley Cyrus", "Apple", "A Long Tag", "Na uh"],
                tagClass: 'tm-tag-info',
            });

            // Init Boostrap Multiselect
            $('#multiselect1').multiselect();
            $('#multiselect2').multiselect({
                includeSelectAllOption: true
            });
            $('#multiselect3').multiselect();
            $('#multiselect4').multiselect({
                enableFiltering: true,
            });
            $('#multiselect5').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-primary'
            });
            $('#multiselect6').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-info'
            });
            $('#multiselect7').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-success'
            });
            $('#multiselect8').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-warning'
            });

            // Init jQuery spinner init - default
            $("#spinner1").spinner();

            // Init jQuery spinner init - currency 
            $("#spinner2").spinner({
                min: 5,
                max: 2500,
                step: 25,
                start: 1000,
                //numberFormat: "C"
            });

            // Init jQuery spinner init - decimal  
            $("#spinner3").spinner({
                step: 0.01,
                numberFormat: "n"
            });

            // jQuery Time Spinner settings
            $.widget("ui.timespinner", $.ui.spinner, {
                options: {
                    // seconds
                    step: 60 * 1000,
                    // hours
                    page: 60
                },
                _parse: function(value) {
                    if (typeof value === "string") {
                        // already a timestamp
                        if (Number(value) == value) {
                            return Number(value);
                        }
                        return +Globalize.parseDate(value);
                    }
                    return value;
                },

                _format: function(value) {
                    return Globalize.format(new Date(value), "t");
                }
            });
            // Init jQuery Time Spinner
            $("#spinner4").timespinner();


            // Init jQuery masked inputs
            $('.date').mask('99/99/9999');
            $('.time').mask('99:99:99');
            $('.date_time').mask('99/99/9999 99:99:99');
            $('.zip').mask('99999-999');
            $('.phone').mask('(999) 999-9999');
            $('.phoneext').mask("(999) 999-9999 x99999");
            $(".money").mask("999,999,999.999");
            $(".product").mask("999.999.999.999");
            $(".tin").mask("99-9999999");
            $(".ssn").mask("999-99-9999");
            $(".ip").mask("9ZZ.9ZZ.9ZZ.9ZZ");
            $(".eyescript").mask("~9.99 ~9.99 999");
            $(".custom").mask("9.99.999.9999");

        });
    </script>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->
</body>
</html>
