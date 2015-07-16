<!DOCTYPE html>
<html>

 <?php include 'layout/header.php' ?>

<body class="charts-highcharts-page" data-spy="scroll" data-target="#nav-spy" data-offset="100">


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

                    <h2 class="lh30 mtn text-center">Reporte de <b class="text-primary">Usuarios</b></h2>
                    <br>
                    <!-- Stats Top Graph Bot -->
                    <div class="panel" id="pchart8">
                        <div class="panel-heading">
                            <span class="panel-title text-primary fw700"><i class="fa fa-pencil hidden"></i>Reporte de Usuarios</span>
                        </div>
                        <div class="panel-menu">
                            <div class="chart-legend" data-chart-id="#high-line3">
                                <a type="button" data-chart-id="1" class="legend-item btn btn-sm btn-primary mr10">Data 1</a>
                                <a type="button" data-chart-id="0" class="legend-item btn btn-danger btn-sm mr10">Data 2</a>
                                <a type="button" class="disabled legend-item btn btn-dark btn-sm mr10" style="float: right;">Cantidad de Usuarios: 60</a>
                            </div>
                        </div>
                        <div class="panel-body pn">
                            <div id="high-line3" style="width: 100%; height: 210px; margin: 0 auto"></div>
                        </div>
                    </div>
                </div>


            </section>
            <!-- End: Content -->

                <div class="row">
                    <div class="col-md-offset-9">
                        <button class="btn active btn-primary" type="button">Generar PDF</button>
                        <button class="btn active btn-danger" type="button">Cancelar</button>
                    </div>
                </div>

        </section>

        <!-- End: Right Sidebar -->

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
