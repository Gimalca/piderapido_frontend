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

           
            <!-- Start: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="table-layout animated fadeIn">

                <!-- begin: .tray-center -->
                <div class="tray tray-center p40 va-t posr">

                     <h2 class="lh30 mtn text-center">Reporte de <b class="text-primary">Franquicias TOP 5</b></h2>
                     <br>

                    <!-- Filterable Column Chart -->
                    <div class="panel" id="pchart3">

                        <div class="panel-heading">
                            <span class="panel-title text-primary fw700"><i class="fa fa-pencil hidden"></i>Franquicias TOP 5</span>
                        </div>
                        <div class="panel-menu hidden">
                            <div class="chart-legend" data-chart-id="#high-line">
                                <button type="button" data-chart-id="0" class="legend-item btn btn-sm btn-primary mr10">Data 1</button>
                                <button type="button" data-chart-id="1" class="legend-item btn btn-info btn-sm">Data 2</button>
                            </div>
                        </div>
                        <div class="panel-body pn">
                            <div id="high-line" style="width: 100%; height: 275px; margin: 0 auto"></div>

                            <div class="p15 pt5 mt15 bg-light br-t">
                                <table class="table mbn admin-form fs13 table-legend" data-chart-id="#high-line">
                                    <thead>
                                        <tr class="">
                                            <th class="w30">#</th>
                                            <th class="w50">Visualizar</th>
                                            <th>Franquicia</th>
                                            <th class="text-right">Promedio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fs15 fw700">1.</td>
                                            <td>
                                                <label class="switch switch-custom block mbn">
                                                    <input type="checkbox" class="legend-switch" name="features" id="s1" value="0">
                                                    <label for="s1" data-on="SI" data-off="NO"></label>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="va-m fw600 text-muted">
                                                KFC
                                            </td>
                                            <td class="fs15 fw700 text-right">18,625</td>
                                        </tr>
                                        <tr>
                                            <td class="fs15 fw700">2.</td>
                                            <td>
                                                <label class="switch switch-custom block mbn">
                                                    <input type="checkbox" class="legend-switch" name="features" id="s2" value="1">
                                                    <label for="s2" data-on="SI" data-off="NO"></label>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="va-m fw600 text-muted">
                                                Mc Donalds
                                            </td>
                                            <td class="fs15 fw700 text-right">11,812</td>
                                        </tr>
                                        <tr>
                                            <td class="fs15 fw700">3.</td>
                                            <td>
                                                <label class="switch switch-custom block mbn">
                                                    <input type="checkbox" class="legend-switch" name="features" id="s3" value="2">
                                                    <label for="s3" data-on="SI" data-off="NO"></label>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="va-m fw600 text-muted">
                                                Subway
                                            </td>
                                            <td class="fs15 fw700 text-right">6,149</td>
                                        </tr>
                                        <tr>
                                            <td class="fs15 fw700">4.</td>
                                            <td>
                                                <label class="switch switch-custom block mbn">
                                                    <input type="checkbox" class="legend-switch" name="features" id="s4" value="3">
                                                    <label for="s4" data-on="SI" data-off="NO"></label>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="va-m fw600 text-muted">
                                                Church Chicken
                                            </td>
                                            <td class="fs15 fw700 text-right">2,525</td>
                                        </tr>
                                        <tr>
                                            <td class="fs15 fw700">5.</td>
                                            <td>
                                                <label class="switch switch-custom block mbn">
                                                    <input type="checkbox" class="legend-switch" name="features" id="s5" value="4">
                                                    <label for="s5" data-on="SI" data-off="NO"></label>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="va-m fw600 text-muted">
                                                Churrasquería Freddy's
                                            </td>
                                            <td class="fs15 fw700 text-right">2,525</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end: .tray-center -->

            </section>
            
            
                <div class="row">
                    <div class="col-md-offset-9">
                        <button class="btn active btn-primary" type="button">Generar PDF</button>
                        <button class="btn active btn-danger" type="button">Cancelar</button>
                    </div>
                </div>

        </section>


    </div>
    <!-- End: Main -->

    <style>
    
    /* nav fixed settings */
    ul.tray-nav.affix {
        width: 319px;
        top: 80px;
    }
    </style>

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Sparklines CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <!-- Charts JS -->
    <script type="text/javascript" src="vendor/plugins/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="vendor/plugins/circles/circles.js"></script>
    <script type="text/javascript" src="vendor/plugins/raphael/raphael.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript" src="assets/js/pages/charts/highcharts.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Theme Core    
            Demo.init();

            // This page contains more Initilization Javascript than normal.
            // As a result it has its own js page. See charts.js for more info
            demoHighCharts.init();

            // Init tray navigation smooth scroll
            $('.tray-nav a').smoothScroll({
                offset: -70
            });


        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
