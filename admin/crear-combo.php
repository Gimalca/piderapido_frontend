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

        <section id="content_wrapper">

            <!-- Begin: Content -->
            <div id="content" class="animated fadeIn">
                
                <div class="row">

                    <div class="col-md-12">

                            <div class="panel">
                                
                                <div class="col-md-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-title">
                                            <span class="glyphicons glyphicons-fast_food"></span>Combo Nombre #1</span>
                                        </div>
                                        <div class="panel-body">
                                            <div class="clearfix"></div>
                                            <div class="tab-content br-n pn">
                                                <div id="tab17_1" class="tab-pane active">
                                                    <div id="p1" class="panel heading-border panel-primary">

                                                        <div class="panel-body">
                                                          
                                                            <div class="col-md-4">
                                                                <div class="tray-bin pl10 mb10" style="height: 250px;">
                                                                       <br>
                                                                       <form action="/file-upload" class="dropzone dropzone-sm" id="dropZone">
                                                                             <div class="fallback">
                                                                                 <input name="file" type="file" multiple />
                                                                              </div>
                                                                       </form>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-8">
                                                                <form class="form-horizontal" role="form">
                                                                    <div class="form-group">
                                                                        <label for="inputStandard" class="col-lg-3 control-label">Nombre del ingrediente:
                                                                        </label>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" id="inputStandard" class="form-control" placeholder="Nombre del ingrediente">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-3 control-label" for="textArea2">Descripción:</label>
                                                                        <div class="col-lg-9">
                                                                            <textarea class="form-control" id="textArea2" rows="3" placeholder="Descripción"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="admin-form">
                                                                        <div class="form-group">
                                                                            <label class="col-lg-3 control-label" for="textArea2">Sucursal:</label>
                                                                            <div class="col-lg-9">
                                                                                <label class="field select ">
                                                                                        <select id="location" name="location">
                                                                                            <option value="">Sucursal</option>
                                                                                            <option value="AL">Sucursal KFC las Merces</option>
                                                                                            <option value="DZ">Sucursal KFC los Naranjos</option>
                                                                                        </select>
                                                                                        <i class="arrow double"></i>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                     <div class="form-group">

                                                                        <div class="col-md-offset-7">
                                                                            <button type="button"class="btn btn-primary notification" data-note-style="success" type="submit">Guardar Cambios</button>
                                                                            <button class="btn active btn-danger" type="button">Cancelar</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <hr>
                                                    
                                                            </div>                                                           
                                                       
                                                        <div class="row">
                                                    <div class="panel-group" id="accordiong" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingOneg">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordiong" href="#collapseOneg" aria-expanded="false" aria-controls="collapseOneg">
                                                                      Disponibilidad
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOneg" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOneg">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="col-xs-2">
                                                                                <label class="switch block mt15">
                                                                                    <div class="switch switch-success round switch-inline">
                                                                                        <input id="exampleCheckboxSwitch1" type="checkbox">
                                                                                        <label for="exampleCheckboxSwitch1" data-on="SI" data-off="NO"></label>
                                                                                        <span>Disponible</span>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                            <div class="panel-group col-xs-5" id="accordion" role="tablist" aria-multiselectable="true">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                                                        <h4 class="panel-title">
                                                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                                              Combo pequeño:
                                                                                            </a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                                        <div class="panel-body">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label class="col-md-4">Precio: </label>
                                                                                                        <div class="input-group col-md-8">                                                                    
                                                                                                            <input class="form-control" type="text" placeholder="0">
                                                                                                            <span class="input-group-addon">Bs.</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label class="col-md-4">Ingredientes extras: </label>
                                                                                                        <div class="input-group col-md-8">                                                                    
                                                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="Ingredientes extras">Cambiar precio</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                                                        <h4 class="panel-title">
                                                                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                                              Combo mediano:
                                                                                            </a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                                        <div class="panel-body">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label class="col-md-4">Precio: </label>
                                                                                                        <div class="input-group col-md-8">                                                                    
                                                                                                            <input class="form-control" type="text" placeholder="0">
                                                                                                            <span class="input-group-addon">Bs.</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label class="col-md-4">Ingredientes extras: </label>
                                                                                                        <div class="input-group col-md-8">                                                                    
                                                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="Ingredientes extras">Cambiar precio</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                                                        <h4 class="panel-title">
                                                                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                                              Combo grande:
                                                                                            </a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                                        <div class="panel-body">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label class="col-md-4">Precio: </label>
                                                                                                        <div class="input-group col-md-8">                                                                    
                                                                                                            <input class="form-control" type="text" placeholder="0">
                                                                                                            <span class="input-group-addon">Bs.</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group">
                                                                                                        <label class="col-md-4">Ingredientes extras: </label>
                                                                                                        <div class="input-group col-md-8">                                                                    
                                                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="Ingredientes extras">Cambiar precio</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-xs-5" >
                                                                                <div class="form-group" id="extras">
                                                                                    <label for="multiselect10" class="col-md-4 control-label" id="extras">Tamaño del combo</label>
                                                                                    <div class="col-md-8" id="extras">
                                                                                        <select id="multiselect10" multiple="multiple">
                                                                                            <option value="cheese">Pequeño</option>
                                                                                            <option value="tomatoes">Mediano</option>
                                                                                            <option value="mozarella">Grande</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group" id="extras">
                                                                                    <label for="multiselect20" class="col-md-4 control-label" id="extras">Ingredientes extras</label>
                                                                                    <div class="col-md-8" id="extras">
                                                                                        <select id="multiselect20" multiple="multiple">
                                                                                            <option value="cheese">Queso</option>
                                                                                            <option value="tomatoes">Tocineta</option>
                                                                                            <option value="mozarella">Cebolla dulce</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group" id="extras">
                                                                                    <label for="multiselect50" class="col-md-4 control-label" id="extras">Sabor de la bebida</label>
                                                                                    <div class="col-md-8" id="extras">
                                                                                        <select id="multiselect50" multiple="multiple">
                                                                                            <option value="cheese">Coca-Cola</option>
                                                                                            <option value="tomatoes">Hit - Naranja</option>
                                                                                            <option value="mozarella">Hit - Uva</option>
                                                                                            <option value="cheese">Golden - Manzanita</option>
                                                                                            <option value="tomatoes">Frescolita</option>
                                                                                            <option value="mozarella">Pepsi</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group" >
                                                                                    <label for="multiselect60" class="col-md-4 control-label" id="extras">Acompañante</label>
                                                                                    <div class="col-md-8" id="extras">
                                                                                        <select id="multiselect60" multiple="multiple">
                                                                                            <option value="cheese">Yuca</option>
                                                                                            <option value="tomatoes">Papas Fritas</option>
                                                                                            <option value="mozarella">Pan</option>
                                                                                            <option value="cheese">Buisquit</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                                
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingTwog">
                                                              <h4 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordiong" href="#collapseTwog" aria-expanded="false" aria-controls="collapseTwog">
                                                                  Descuento
                                                                </a>
                                                              </h4>
                                                            </div>
                                                            <div id="collapseTwog" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwog">
                                                              <div class="panel-body">
                                                                <div class="col-xs-6">
                                                                     <label class="switch block mt15">
                                                                        <div class="switch switch-success round switch-inline">
                                                                            <input id="exampleCheckboxSwitch2" type="checkbox">
                                                                            <label for="exampleCheckboxSwitch2" data-on="SI" data-off="NO"></label>
                                                                            <span>Activado</span>
                                                                        </div>
                                                                    </label>
                                                                    <div class="form-group" id="porcentaje">
                                                                        <div id="move">
                                                                            <label for="spinner2" class="col-xs-4 control-label">Indique porcentaje</label>
                                                                            <div class="col-xs-4">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">%</span>
                                                                                    <input id="spinner2" class="form-control ui-spinner-input" name="spinner" value="35" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>
                                                                <div class="col-xs-6">                                                  
                                                                    <div id="dia_descuento">
                                                                        <div>
                                                                            <div class="form-group">
                                                                                <label for="multiselect30" class="col-md-4 control-label">Días disponibles</label>
                                                                                <div class="col-md-8">
                                                                                    <select id="multiselect30" multiple="multiple">
                                                                                        <option value="cheese">Lunes</option>
                                                                                        <option value="tomatoes">Martes</option>
                                                                                        <option value="mozarella">Miercoles</option>
                                                                                        <option value="cheese">Jueves</option>
                                                                                        <option value="tomatoes">Viernes</option>
                                                                                        <option value="mozarella">Sabados</option>
                                                                                        <option value="mozarella">Domingos</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="horario_descuento">
                                                                        <div id="move3">
                                                                            <h4><p>Horario en que estará disponible</p></h4>
                                                                            <br>
                                                                            <div class="form-group col-xs-12">
                                                                                <label class="col-xs-3 control-label" for="datetimepicker1">Inicio</label>
                                                                                <div class="col-xs-6">
                                                                                    <div class="input-group date" id="datetimepicker1">
                                                                                        <span class="input-group-addon cursor"><i class="fa fa-clock-o"></i>
                                                                                        </span>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-xs-12">
                                                                                <label class="col-xs-3 control-label" for="datetimepicker2">Final</label>
                                                                                <div class="col-xs-6">
                                                                                    <div class="input-group date" id="datetimepicker2">
                                                                                        <span class="input-group-addon cursor"><i class="fa fa-clock-o"></i>
                                                                                        </span>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingThreeg">
                                                              <h4 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordiong" href="#collapseThreeg" aria-expanded="false" aria-controls="collapseThreeg">
                                                                  Promoción 2X1
                                                                </a>
                                                              </h4>
                                                            </div>
                                                            <div id="collapseThreeg" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreeg">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-xs-6">
                                                                            <label class="switch block mt15">
                                                                                <div class="switch switch-success round switch-inline">
                                                                                    <input id="exampleCheckboxSwitch3" type="checkbox">
                                                                                    <label for="exampleCheckboxSwitch3" data-on="SI" data-off="NO"></label>
                                                                                    <span>Activado</span>
                                                                                </div>
                                                                            </label>
                                                                            <div class="form-group">
                                                                                <div id="move4">
                                                                                    <label for="multiselect40" class="col-xs-4 control-label">Días disponibles</label>
                                                                                    <div class="col-xs-8">
                                                                                        <select id="multiselect40" multiple="multiple">
                                                                                            <option value="cheese">Lunes</option>
                                                                                            <option value="tomatoes">Martes</option>
                                                                                            <option value="mozarella">Miercoles</option>
                                                                                            <option value="cheese">Jueves</option>
                                                                                            <option value="tomatoes">Viernes</option>
                                                                                            <option value="mozarella">Sabados</option>
                                                                                            <option value="mozarella">Domingos</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                            <div id="horario_promocion">
                                                                                <div id="move5">
                                                                                    <h4><p>Horario en que estará disponible</p></h4>
                                                                                    <br>
                                                                                    <div class="form-group col-xs-12">
                                                                                        <label class="col-xs-3 control-label" for="datetimepicker3">Inicio</label>
                                                                                        <div class="col-xs-6">
                                                                                            <div class="input-group date" id="datetimepicker3">
                                                                                                <span class="input-group-addon cursor"><i class="fa fa-clock-o"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-xs-12">
                                                                                        <label class="col-xs-3 control-label" for="datetimepicker4">Final</label>
                                                                                        <div class="col-xs-6">
                                                                                            <div class="input-group date" id="datetimepicker4">
                                                                                                <span class="input-group-addon cursor"><i class="fa fa-clock-o"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                                    </div>                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>

                </div>

            </div>
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
                        <div class="row">
                              <div class="form-group col-xs-6">
                                <label for="tamaño-combo" class="control-label">Queso: </label>
                                <div class="input-group">                                                                    
                                    <input class="form-control" type="text" placeholder="0">
                                    <span class="input-group-addon">Bs.</span>
                                </div>
                              </div>
                              <div class="form-group col-xs-6">
                                <label for="ingredientes-extras" class="control-label">Tocineta: </label>
                                <div class="input-group">                                                                    
                                    <input class="form-control" type="text" placeholder="0">
                                    <span class="input-group-addon">Bs.</span>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                              <div class="form-group col-xs-6">
                                <label for="descuento" class="control-label">Jamón: </label>
                                <div class="input-group">                                                                    
                                    <input class="form-control" type="text" placeholder="0">
                                    <span class="input-group-addon">Bs.</span>
                                </div>
                              </div>
                              <div class="form-group col-xs-6">
                                <label for="dias" class="control-label">Maíz: </label>
                                <div class="input-group">                                                                    
                                    <input class="form-control" type="text" placeholder="0">
                                    <span class="input-group-addon">Bs.</span>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                              <div class="form-group col-xs-6">
                                <label for="horario" class="control-label">Champiñones: </label>
                                <div class="input-group">                                                                    
                                    <input class="form-control" type="text" placeholder="0">
                                    <span class="input-group-addon">Bs.</span>
                                </div>
                              </div>
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary notification" data-dismiss="modal" data-note-style="success" type="submit">Aplicar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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

    </div>
    <!-- End: Main -->

    <style>
    
    /*demo styles*/
        
    /*demo buttons*/
    .contextual-demo a {
        padding: 9px 4px;
        width: 9.5%;
    }
    .contextual-demo a + a {
        margin-left: 0.5%;
    }
    .contextual-demo-alt a {
        padding: 9px 4px;
        width: 15%;
    }
    .contextual-demo-alt a + a {
        margin-left: 0.5%;
    }
    </style>

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

    <!-- via local files 
    <script type="text/javascript" src="vendor/plugins/globalize/src/core.js"></script>
    <script type="text/javascript" src="vendor/plugins/moment/moment.min.js"></script> -->

    <!-- Dropzone JS -->
    <script type="text/javascript" src="vendor/plugins/dropzone/dropzone.min.js"></script>

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
            // 
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

            $('#exampleModal').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-title').text(recipient)
            });

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

            $('.notification2').click(function(e) {
                var noteStyle = $(this).data('note-style');
                var noteShadow = $(this).data('note-shadow');
                var noteOpacity = $(this).data('note-opacity');
                var noteStack = $(this).data('note-stack');
                var width = "290px";

                var noteStack = noteStack ? noteStack : "stack_bar_top";
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
            $( "#exampleCheckboxSwitch1" ).click(function() {
                $( "#todo" ).slideToggle("slow");
            });

            Dropzone.options.dropZone = {
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 0, // MB

                addRemoveLinks: true,
                dictDefaultMessage: '<i class="fa fa-cloud-upload"></i> \
         <span class="main-text"><b>Clic</b> para  subir la imagen</span> <br /> \
         <span class="sub-text"></span> \
        ',
                dictResponseError: 'Server not Configured'
            };
            

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

            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker1').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
            });
            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker2').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
            });
            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker3').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
            });
            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker4').datetimepicker({
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

            $('#multiselect10').multiselect({
                includeSelectAllOption: true
            });
            $('#multiselect20').multiselect({
                includeSelectAllOption: true
            });



            $('#multiselect30').multiselect({
                includeSelectAllOption: true
            });
            $('#multiselect40').multiselect({
                includeSelectAllOption: true
            });
            $('#multiselect50').multiselect({
                includeSelectAllOption: true
            });
            $('#multiselect60').multiselect({
                includeSelectAllOption: true
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
</body>

</html>
