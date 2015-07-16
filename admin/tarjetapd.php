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
                
                <h2 class="lh30 mtn text-center">Solicitudes de <b class="text-primary">Tarjetas PideRapido</b></h2>
                <br>

                <div class="panel">
                    
                    <div class="admin-form theme-primary">

                            <div id="p1" class="panel heading-border panel-primary">

                                <div class="panel-body bg-light">
                                    <form method="post" action="" id="form-ui">
                                        
                                        <!-- Multi Selects -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field prepend-icon">
                                                        <input type="email" name="email" id="email" class="gui-input" placeholder="Ingresa Email">
                                                        <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field select">
                                                        <select id="location" name="location">
                                                            <option value="">Seleccione Franquicia</option>
                                                            <option value="AL">KFC</option>
                                                            <option value="DZ">Mc Donalds</option>
                                                        </select>
                                                        <i class="arrow double"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                    
                                                    <div class="input-group date" id="datetimepicker2">
                                                        <span class="input-group-addon cursor"><i class="fa fa-calendar"></i>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Seleccione una Fecha">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <center>
                                                    <button class="button btn-primary" type="button" style="color: #666666;">Generar Búsqueda</button>
                                            </center>
                                        </div>
                                        
                                    </form> 
                                </div>
                            </div>
                        </div>                         
                        </div>                        
                    
                        <div class="col-md-12">

                        <div class="panel">
                            <div class="panel-body pn">
                                        <div class="col-md-12">

                        <div class="panel">
                            <div class="panel-body pn">
                            
                            <table class="table admin-form theme-warning tc-checkbox-1 fs13">

                            </table>
                            
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                        
                            <ul class="nav nav-tabs tabs-border nav-justified">
                                <li class="active">
                                    <a href="#tab15_1" data-toggle="tab" aria-expanded="true">Pendientes</a>
                                </li>
                                <li class="">
                                    <a href="#tab15_2" data-toggle="tab" aria-expanded="false">Aprobadas</a>
                                </li>
                                <li class="">
                                    <a href="#tab15_3" data-toggle="tab" aria-expanded="false">Rechazadas</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab15_1" class="tab-pane active">
                                    <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                                        <thead>
                                        <tr class="bg-light text-center">
                                            <th class="text-center">Seleccionar Todos</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class="text-center">Estatus</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Pendiente
                                                            <span class="caret ml5"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="">
                                                                <a href="#" data-toggle="modal" data-target="#myModal">Aprobado</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Declinado</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                        <thead>
                                            <tr class="bg-light">
                                                <th class="text-center">Seleccionar</th>
                                                <th class="">Nombre</th>
                                                <th class="">Cedula</th>
                                                <th class="">Numero</th>
                                                <th class="">Banco</th>
                                                <th class="text-center">Estatus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Pendiente
                                                            <span class="caret ml5"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="">
                                                                <a href="#" data-toggle="modal" data-target="#myModal">Aprobado</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Declinado</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Pendiente
                                                            <span class="caret ml5"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="">
                                                                <a href="#" data-toggle="modal" data-target="#myModal">Aprobado</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Declinado</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Pendiente
                                                            <span class="caret ml5"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="">
                                                                <a href="#" data-toggle="modal" data-target="#myModal">Aprobado</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Declinado</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Pendiente
                                                            <span class="caret ml5"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="">
                                                                <a href="#" data-toggle="modal" data-target="#myModal">Aprobado</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Declinado</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Pendiente
                                                            <span class="caret ml5"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="">
                                                                <a href="#" data-toggle="modal" data-target="#myModal">Aprobado</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Declinado</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab15_2" class="tab-pane">
                                    <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                                        <thead>
                                        <tr class="bg-light text-center">
                                            <th class="text-center">Seleccionar Todos</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class="text-center">Estatus</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Aprobado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                        <thead>
                                            <tr class="bg-light">
                                                <th class="text-center">Seleccionar</th>
                                                <th class="">Nombre</th>
                                                <th class="">Cedula</th>
                                                <th class="">Numero</th>
                                                <th class="">Banco</th>
                                                <th class="text-center">Estatus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Aprobado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Aprobado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Aprobado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Aprobado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Aprobado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tab15_3" class="tab-pane">
                                    <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                                        <thead>
                                        <tr class="bg-light text-center">
                                            <th class="text-center">Seleccionar Todos</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th class="text-center">Estatus</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Rechazado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                        <thead>
                                            <tr class="bg-light">
                                                <th class="text-center">Seleccionar</th>
                                                <th class="">Nombre</th>
                                                <th class="">Cedula</th>
                                                <th class="">Numero</th>
                                                <th class="">Banco</th>
                                                <th class="text-center">Estatus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Rechazado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Rechazado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Rechazado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Rechazado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <label class="option block mn">
                                                        <input type="checkbox" name="mobileos" value="FR">
                                                        <span class="checkbox mn"></span>
                                                    </label>
                                                </td>
                                                <td class=""><a href="tarjetapdindividual.php">Dave Robert</a></td>
                                                <td class="">10000000</td>
                                                <td class="">Nro. 000001</td>
                                                <td class="">Banesco</td>
                                                <td class="text-center">
                                                    <div class="btn-group text-right">
                                                        <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Rechazado
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        
                    </div>
                            
                            </center>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Confirmación</h4>
                  </div>
                  <div class="modal-body text-center">
                    <p>¿Estás seguro de la activación del saldo P.R?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Activar</button>
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

    <!-- Page Plugins via CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

    <!-- Holder js  -->
    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>

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
            Core.init();

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

    <!-- END: PAGE SCRIPTS -->

</body>

</html>

