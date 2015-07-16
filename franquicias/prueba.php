<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>AdminDesigns - SHARED ON THEMELOCK.COM</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/plugins/magnific/magnific-popup.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Admin Modals CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-plugins/admin-modal/adminmodal.css">

    <link rel="stylesheet" type="text/css" href="vendor/plugins/datepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/tagmanager/tagmanager.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon1.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="admin-modals-page">

    <!-- Start: Main -->
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

                <?php include('layouts/menu.php'); ?>

            </div>
        </aside>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">

                <div class="animated-delay" data-animate='["100","fadeIn"]'>
                    <h2 class="lh30 mt15 text-center">We have created a <b class="text-primary">Modal</b> System you will love</h2>
                    <p class="lead mb30 text-center">Packed with all the CSS3 animations you crave.</p>
                </div>

                <div class="row animated-delay" data-animate='["100","fadeIn"]'>
                    <div class="row">
                        <div class="admin-form">
                            <div class="col-md-12">
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
                            </br>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-12">                           
                            <div class="panel">
                                 <div class="panel-heading">
                                    <span class="panel-title">
                                        <h4>Resultado de la Búsqueda</h4>
                                    </span>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nombre de combo</th>
                                                <th>Disponibilidad</th>
                                                <th>Detalle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Big Mac</td>
                                                <td>Si</td>
                                                <td><a href="detalle.php">Ver Detalle</a></td>
                                            </tr>
                                            <tr>
                                                <td>Cuarto de libra</td>
                                                <td>No</td>
                                                 <td><a href="detalle.php">Ver Detalle</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-10">

                        <div class="row table-layout" id="modal-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="holder-style p15 mb20" href="#modal-form">
                                            <span class="fa fa-pencil-square-o fs40 holder-icon"></span>
                                            <br> Form
                                        </a>
                                    </div>
                                </div>
                            <div class="col-xs-8 br-a br-light bg-light dark va-t p10">
                                <h5 class="text-muted mb30 hidden">Select a Modal Animation</h5>

                                <div id="animation-switcher" class="ph20">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <h5 class="text-muted mb15">Flip Effects</h5>
                                            <button class="btn btn-system btn-alt btn-block" data-effect="mfp-flipInY">Flip In Y</button>
                                            <button class="btn btn-system btn-alt btn-block" data-effect="mfp-flipInX">Flip In X</button>
                                        </div>
                                        <div class="col-xs-6">
                                            <h5 class="text-muted mb15">Zoom Effects</h5>
                                            <button class="btn btn-primary btn-alt btn-block" data-effect="mfp-zoomIn">Zoom In</button>
                                            <button class="btn btn-primary btn-alt btn-block" data-effect="mfp-zoomOut">Zoom Out</button>
                                        </div>
                                    </div>
                                    <div class="row mt10">
                                        <div class="col-xs-6">
                                            <h5 class="text-muted mb15">Rotate Effects</h5>
                                            <button class="btn btn-alert btn-alt btn-block" data-effect="mfp-rotateUp">Rotate Up</button>
                                            <button class="btn btn-alert btn-alt btn-block" data-effect="mfp-rotateDown">Rotate Down</button>
                                            <button class="btn btn-alert btn-alt btn-block" data-effect="mfp-rotateLeft">Rotate Left</button>
                                            <button class="btn btn-alert btn-alt btn-block" data-effect="mfp-rotateRight">Rotate Right</button>
                                        </div>
                                        <div class="col-xs-6">
                                            <h5 class="text-muted mb15">Slide Effects</h5>
                                            <button class="btn btn-info btn-alt btn-block" data-effect="mfp-slideUp">Slide Up</button>
                                            <button class="btn btn-info btn-alt btn-block" data-effect="mfp-slideDown">Slide Down</button>
                                            <button class="btn btn-info btn-alt btn-block" data-effect="mfp-slideLeft">Slide Left</button>
                                            <button class="btn btn-info btn-alt btn-block" data-effect="mfp-slideRight">Slide Right</button>
                                        </div>
                                    </div>
                                    <div class="row mt10">
                                        <div class="col-xs-6">
                                            <h5 class="text-muted mb15">Special Effects</h5>
                                            <button class="btn btn-warning btn-alt btn-block" data-effect="mfp-sign">Sign Flip</button>
                                            <button class="btn btn-warning btn-alt btn-block" data-effect="mfp-newspaper">Newspaper</button>
                                        </div>
                                        <div class="col-xs-6">
                                            <h5 class="text-muted mb15">Normal Effects</h5>
                                            <button class="btn btn-danger btn-alt btn-block" data-effect="mfp-fullscale">Fullscale</button>
                                            <button class="btn btn-danger btn-alt btn-block" data-effect="mfp-with-fade">Fade</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- HTML popup -->
                <div id="modal-text" class="popup-basic p25 mfp-with-anim mfp-hide">You may put any HTML here. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.</div>

                <!-- Image popup -->
                <div id="modal-image" class="popup-basic popup-lg mfp-with-anim mfp-hide">
                    <img class="img-responsive" src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg">
                </div>

                <!-- Video popup -->
                <div id="modal-video" class="popup-basic bg-none popup-lg mfp-with-anim mfp-hide">
                    <iframe width="100%" height="500" src="http://www.youtube.com/embed/r1ROBlsOhwc?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- Panel popup -->
                <div id="modal-panel" class="popup-basic bg-none mfp-with-anim mfp-hide">

                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-icon"><i class="fa fa-pencil"></i>
                            </span>
                            <span class="panel-title"> A Super Awesome Panel</span>
                        </div>
                        <div class="panel-body">
                            <h3 class="mt5"> I'm a panel title, Hear me Roar.</h3>
                            <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature. </p>
                            <hr class="short alt">
                            <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes </p>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-primary" type="button">Primary Btn</button>
                        </div>
                    </div>
                </div>

                <!-- Image popup -->
                <div id="modal-map" class="popup-basic popup-lg mfp-with-anim mfp-hide">
                    <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Disneyland%20Park%2C%20Disneyland%20Drive%2C%20Anaheim%2C%20CA%2C%20United%20States&key=AIzaSyBqf9cjsPAh3rGJPKLCsYL2IeAveGhGJTw"></iframe>
                </div>

                <!-- Admin Form Popup -->
                <div id="modal-form" class=" popup-basic admin-form mfp-with-anim mfp-hide">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title"><i class="fa fa-rocket"></i>Leave a comment</span>
                        </div>
                        <!-- end .panel-heading section -->

                        <form method="post" action="/" id="comment">
                            <div class="panel-body p25">
                                <div class="section row">
                                    <div class="col-md-6">
                                        <label for="firstname" class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="First name...">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="col-md-6">
                                        <label for="lastname" class="field prepend-icon">
                                            <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Last name...">
                                            <label for="lastname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                </div>
                                <!-- end section row section -->

                                <div class="section row">
                                    <div class="col-md-6">
                                        <label for="email" class="field prepend-icon">
                                            <input type="email" name="email" id="email" class="gui-input" placeholder="Email address">
                                            <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="col-md-6">
                                        <label for="website" class="field prepend-icon">
                                            <input type="url" name="website" id="lastname" class="gui-input" placeholder="Website url...">
                                            <label for="website" class="field-icon"><i class="fa fa-globe"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                </div>
                                <!-- end section row section -->

                                <div class="section">
                                    <label for="comment" class="field prepend-icon">
                                        <textarea class="gui-textarea" id="comment" name="comment" placeholder="Your comment"></textarea>
                                        <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                        </label>
                                        <span class="input-footer">
                                            <strong>Hey You:</strong> We expect a great comment...</span>
                                    </label>
                                </div>
                                <!-- end section -->

                            </div>
                            <!-- end .form-body section -->

                            <div class="panel-footer">
                                <button type="submit" class="button btn-primary">Post Comment</button>
                            </div>
                            <!-- end .form-footer section -->
                        </form>
                    </div>
                    <!-- end: .panel -->
                </div>
                <!-- end: .admin-form -->

                <div class="popup-gallery hidden">
                    <a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg" title="The Cleaner">
                        <img src="vendor/plugins/magnific/example_thumbs/4.jpg" width="75" height="75">
                    </a>
                    <a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg" title="Winter Dance">
                        <img src="vendor/plugins/magnific/example_thumbs/5.jpg" width="75" height="75">
                    </a>
                    <a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg" title="The Uninvited Guest">
                        <img src="vendor/plugins/magnific/example_thumbs/6.jpg" width="75" height="75">
                    </a>
                    <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg" title="Oh no, not again!">
                        <img src="vendor/plugins/magnific/example_thumbs/7.jpg" width="75" height="75">
                    </a>
                    <a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg" title="Swan Lake">
                        <img src="vendor/plugins/magnific/example_thumbs/8.jpg" width="75" height="75">
                    </a>
                    <a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg" title="The Shake">
                        <img src="vendor/plugins/magnific/example_thumbs/3.jpg" width="75" height="75">
                    </a>
                    <a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg" title="Who&#39;s that, mommy?">
                        <img src="vendor/plugins/magnific/example_thumbs/9.jpg" width="75" height="75">
                    </a>
                </div>

            </section>
            <!-- End: Content -->

        </section>

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

    <style>
    html,
    body.admin-modals-page {
        margin-right: 0 !important;
        overflow: hidden !important;
    }
    </style>

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Page Plugins via CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="vendor/plugins/magnific/jquery.magnific-popup.js"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="vendor/plugins/daterange/daterangepicker.js"></script>
    <script type="text/javascript" src="vendor/plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/jquerymask/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/tagmanager/tagmanager.js"></script>

    <!-- Admin Forms Javascript -->
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-monthpicker.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-timepicker.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery.spectrum.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery.stepper.min.js"></script>

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

            var modalContent = $('#modal-content');

            modalContent.on('click', '.holder-style', function(e) {
                e.preventDefault();

                modalContent.find('.holder-style').removeClass('holder-active');
                $(this).addClass('holder-active');
            });

            function findActive() {
                var activeModal = modalContent.find('.holder-active').attr('href');
                return activeModal;
            };

            // Form Skin Switcher
            $('#animation-switcher button').on('click', function() {
                $('#animation-switcher').find('button').removeClass('active-animation');
                $(this).addClass('active-animation item-checked');

                // Inline Admin-Form example 
                $.magnificPopup.open({
                    removalDelay: 500, //delay removal by X to allow out-animation,
                    items: {
                        src: findActive()
                    },
                    // overflowY: 'hidden', // 
                    callbacks: {
                        beforeOpen: function(e) {
                            var Animation = $("#animation-switcher").find('.active-animation').attr('data-effect');
                            this.st.mainClass = Animation;
                        }
                    },
                    midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
                });

            });


        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
