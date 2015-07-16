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
            <section id="content">
                <h2 class="lh30 mt15 text-center">
                    Generación
                    <b class="text-primary"> de Facturas</b>
                </h2>

                <div class="row">
                    <div class="admin-form">
                        <div id="p1" class="panel heading-border">
                            <div class="panel-body bg-light">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-divider mt40 mb25" id="spy4">
                                            <span>Buscar facturas</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">   
                                        <div class="col-md-4">
                                            <div class="section">                                            
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <div class="section">
                                                                <label for="datepicker1" class="field prepend-icon">
                                                                    <input type="text" id="datepicker1" name="datepicker1" class="gui-input" >
                                                                    <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                                    </label>
                                                                </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>                                          
                                        <div class="col-md-4">
                                            <label class="field select">
                                                <select id="filter-purchases" name="filter-purchases">
                                                    <option value="0" selected>Franquicia</option>
                                                    <option value="0">KFC</option>
                                                    <option value="0">Burger King</option>
                                                    <option value="0">Bonzai Sushi</option>
                                                    <option value="0">McDonalds</option>
                                                </select>
                                                <i class="arrow double"></i>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="field select">
                                                <select id="filter-purchases" name="filter-purchases">
                                                    <option value="0" selected>Sucursal</option>
                                                    <option value="0">KFC</option>
                                                    <option value="0">Burger King</option>
                                                    <option value="0">Bonzai Sushi</option>
                                                    <option value="0">McDonalds</option>
                                                </select>
                                                <i class="arrow double"></i>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 text-center">
                                        <center>
                                            <button class="button btn-primary" type="submit">Generar Búsqueda</button>
                                        </center>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                  
                </br>

                <div class="panel invoice-panel">
                    <div class="panel-heading">
                        <span class="panel-title"> Últimos Pedidos</span>
                    </div>
                    <div class="panel-body p20" id="invoice-item">
                        <div class="row" id="invoice-table">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th><b># Factura</b></th>
                                        <th><b>Fecha</b></th>
                                        <th><b>Status</b></th>
                                        <th><b>Detalle</b></th>
                                        <th class="text-right pr10"><b>P. Unitario</b></th>
                                        <th class="text-right pr10"><b>IVA (12%)</b></th>
                                        <th class="text-right pr10"><b>Subtotal</b></th>
                                        <th class="text-right pr10"><b>Servicio (10%)</b></th>
                                        <th class="text-right pr10"><b>IVA Servicio(12%)</b></th>                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td># 58126332</td>
                                        <td>4/05/15</td>
                                        <td>
                                            <button class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" aria-expanded="false" type="button" disabled>
                                                Por hacer
                                            </button>
                                        </td>
                                        <td><a href="detalle_factura.php">Ver Detalle</a></td>
                                        <td class="text-right pr10">300 Bs</td>
                                        <td class="text-right pr10">35 Bs</td>
                                        <td class="text-right pr10">335 Bs</td>
                                        <td class="text-right pr10">100 Bs</td>
                                        <td class="text-right pr10">10 Bs</td>                                      
                                    </tr>
                                    <tr>
                                        <td># 58126333</td>
                                        <td>25/04/15</td>
                                        <td>
                                            <button class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" aria-expanded="false" type="button" disabled>
                                                Por retirar
                                            </button>
                                        </td>
                                        <td><a href="#">Ver Detalle</a></td>
                                        <td class="text-right pr10">450 Bs</td>
                                        <td class="text-right pr10">50 Bs</td>
                                        <td class="text-right pr10">500 Bs</td>
                                        <td class="text-right pr10">100 Bs</td>
                                        <td class="text-right pr10">10 Bs</td>
                                    </tr>
                                    <tr>
                                        <td># 58126334</td>
                                        <td>24/04/15</td>
                                        <td>
                                            <button class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" aria-expanded="false" type="button" disabled>
                                                Por retirar
                                            </button>
                                        </td>
                                        <td><a href="#">Ver Detalle</a></td>
                                        <td class="text-right pr10">1050 Bs</td>
                                        <td class="text-right pr10">110 Bs</td>
                                        <td class="text-right pr10">1160 Bs</td>
                                        <td class="text-right pr10">100 Bs</td>
                                        <td class="text-right pr10">10 Bs</td>
                                    </tr>
                                    <tr>
                                        <td># 58126335</td>
                                        <td>23/04/15</td>
                                        <td>
                                            <button class="btn btn-success br2 btn-xs fs12 dropdown-toggle" aria-expanded="false" type="button" disabled>
                                                Retirado
                                            </button>
                                        </td>
                                        <td><a href="#">Ver Detalle</a></td>
                                        <td class="text-right pr10">200 Bs</td>
                                        <td class="text-right pr10">25 Bs</td>
                                        <td class="text-right pr10">225 Bs</td>
                                        <td class="text-right pr10">100 Bs</td>
                                        <td class="text-right pr10">10 Bs</td>                                   
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                        <div class="row" id="invoice-footer">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <table class="table" id="invoice-summary">
                                        <thead>
                                            <tr>
                                                <th><b>P. Unitario:</b>
                                                </th>
                                                <th class="text-right pr10" style="width: 80px;">2360 Bs</th>
                                            </tr>
                                            <tr>
                                                <td><b>IVA (12%):</b>
                                                </td>
                                                <td class="text-right pr10">283.2 Bs</td>
                                            </tr>
                                            <tr>
                                                <td><b>Subtotal Sucursal:</b>
                                                </td>
                                                <td class="text-right pr10">2830.2 Bs</td>
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
                                                <td><b>Subtotal PR:</b>
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
        <!-- End: Content-Wrapper -->


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

            $("#datepicker1").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });

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
