<section>
<body>

                        
                              
    <!-- Quick setting box starts -->
      <div class="quick-slide hidden-xs"></div>         
      <div class="out-container">
         <div class="outer">
            <!-- Sidebar starts -->
            <div class="sidebar">
                  <!-- Logo starts -->
                  <div class="logo">
                    <img src="<?php echo base_url("assets/img/LogoLAY.jpg");?>" widht="178px" height="180px">
                     
                  </div>
                  <!-- Logo ends -->
                  
                  <!-- Sidebar buttons starts -->
                  <div class="sidebar-buttons text-left">
                     
                     <!-- Logout button -->
                     <div class="btn-group">
                       <a href='<?php echo base_url()."login/logout"?>' class="btn btn-black btn-xs"><i class="fa fa-power-off"></i></a>
                       <a href='<?php echo base_url()."login/logout"?>' class="btn btn-danger btn-xs">Salir</a>
                     </div>
                    
                  </div><!-- Sidebar buttons ends -->
                    
                  <!-- Sidebar navigation starts -->
          <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
          
                  <div class="sidey">
                     <ul class="nav">
                         <!-- Main navigation. Refer Notes.txt files for reference. -->
                         
                         <!-- Use the class "current" in main menu to hightlight current main menu -->
                         <li><a href="<?php echo base_url()."main"?>"><i class="fa fa-desktop"></i>Menú</a></li>
                         <li><a href="<?php echo base_url()."main/registros"?>"><i class="fa fa-group"></i>Denuncias</a></li>
                         <li class="has_submenu">
                             <a href="#">
                                 <i class="fa fa-folder-open"></i>Catálogo
                                 <!-- Icon to show dropdown -->
                                 <span class="caret pull-right"></span>
                             </a>
                             <!-- Sub navigation -->
                             <ul>
                                 <!-- Use the class "active" in sub menu to hightlight current sub menu -->
                                 <li><a href="dependencia.html"><i class="fa fa-angle-double-right"></i>Dependencia</a></li>
                                 <li><a href="ciudadanos.html"><i class="fa fa-angle-double-right"></i>Ciudadanos</a></li>
                             </ul>
                         </li>   

             <li><a href="<?php echo base_url()."main/reportes"?>"><i class="fa fa-bar-chart-o"></i>Reportes</a></li>
                                                  
                     </ul>               
                  </div>
                  <!-- Sidebar navigation ends -->
                  
            </div>
            <!-- Sidebar ends -->
            
            <!-- Mainbar starts -->
            <div class="mainbar">
               
          <!-- Page heading starts -->
        <div class="page-head">
          <div class="container">
            <div class="row">
              <!-- Page heading -->
              <div class="col-md-3 col-sm-6 col-xs-6">
                <h2><i class="fa fa-desktop"></i>LAY</h2>
              </div>
          </div>
        </div>
        <!-- Page heading ends -->
        
              
        <!-- Black block starts -->
        <div class="blue-block">
          <div class="page-title">
            <h3 class="pull-left"><i class="fa fa-group"></i>Denuncias</h3>  
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- Black block ends -->
        
        <!-- Content starts -->
        
        <div class="container">
          <div class="page-content">
            <!-- Content starts -->
        
        <div class="container">
        <div class="page-content page-users">
            <div class="page-tabs">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li  class="active"><a href="#search" data-toggle="tab">Buscar</a></li>                
                <li><a href="#addnew" data-toggle="tab">Añadir nueva denuncia</a></li>
                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade active in" id="search">
                <h4>Buscar registro</h4>
                <!-- Search users -->
                <div class="well">
                  <!-- Advanced search Denuncia-->
                    <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Nombre">
                    </div>
                    
                    <div class="form-group">
                    <label for="apellidoP">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellidoP" placeholder="Apellido Paterno">
                    </div>

                    <div class="form-group">
                    <label for="apellidoM">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellidoM" placeholder="Apellido Materno">
                    </div>

                    <button type="submit" class="btn btn-default">Buscar</button>                  
                  </form>
                </div>
                </div>
                
<!-- Add new Denuncia -->
                <div class="tab-pane fade" id="addnew">
                <h4>Nueva Denuncia</h4>
                
                <form class="form-horizontal" role="form">

                  <div class="form-group row">
                    <label for="id" class="col-md-2 control-label">Id de registro:</label>
                    <div class="col-md-2" style="margin-top: 20px">
                      <input type="text" class="form-control" id="id" placeholder="ID" disabled>
                    </div>
 
                    <div class="col-md-1" style="margin-top: 5px; padding-left: 5x; width: 25px;padding-right: 8px;">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <div class="col-md-3">
                      <input type="date" class="form-control" id="fecha" style="margin-top: 15px;padding-left: 35px;padding-right: 10px;">
                    </div>
          
                    <label for="dependencia" class="col-md-2 control-label" style="width: 110px; padding-right: 5px;">Dependencia:</label>
                      <div class="col-md-3" style="margin-top: 15px; padding-left: 5px;">
                        
                        <select class="form-control">
                          <?php
                            foreach ($dependecias->result() as $row) {
                              echo "<option>".$row->dependencia."</option>";                              
                                                      
                            }

                          ?>
                          
                        </select>

                        
                      </div>
                  </div>


                  <div class="form-group row">
                    <label for="estatus" class="col-md-2 control-label" style="width: 110px; padding-right: 5px;">Estatus:</label>
                    <div class="col-md-3" style="margin-top: 15px; padding-left: 5px;">
                      <select class="form-control">
                        <option>Resuelto</option>
                        <option>Pendiente</option>                      
                      </select>
                    </div>

                    <label for="modr" class="col-md-2 control-label" style="width: 170px; padding-right: 5px;">Modo de recepción:</label>
                    <div class="col-md-3" style="margin-top: 15px; padding-left: 5px;">
                      <select class="form-control">
                        <option>Llamada</option>
                        <option>WhatsApp</option>                      
                        <option>SMS</option>
                        <option>Otros</option> 
                      </select>
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label for="nombre" class="col-md-2 control-label" style="padding-left: 10px; width: 125px;">Nombre:</label>
                    <div class="col-md-6" style="margin-top: 15px;">
                      <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="apellidoP" class="col-md-2 control-label" style="padding-left: 10px; width: 176px;padding-right: 11px;">Apellido Paterno:</label>
                    <div class="col-md-6" style="margin-top: 15px;">
                      <input type="text" class="form-control" id="apellidoP" placeholder="Apellido Paterno">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="apellidoM" class="col-md-2 control-label" style="padding-left: 10px; width: 176px;padding-right: 11px;">Apellido Materno:</label>
                    <div class="col-md-6" style="margin-top: 15px;">
                      <input type="text" class="form-control" id="apellidoM" placeholder="Apellido Materno">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="calle" class="col-md-2 control-label" style="padding-left: 10px; width: 100px;">Calle:</label>
                    <div class="col-md-3" style="margin-top: 15px;">
                      <input type="text" class="form-control" id="calle" placeholder="Calle">
                    </div>

                    <label for="nExt" class="col-md-2 control-label" style= "width: 60px; padding-right: 5px; padding-left: 5px;">Nº Ext:</label>
                    <div class="col-md-1" style="margin-top: 15px;padding-left: 5px;">
                      <input type="text" class="form-control" id="nExt" placeholder="Ext">
                    </div>

                    <label for="nInt" class="col-md-2 control-label" style= "width: 60px; padding-right: 5px; padding-left: 5px;">Nº Int:</label>
                    <div class="col-md-1" style="margin-top: 15px;padding-left: 5px;">
                      <input type="text" class="form-control" id="nInt" placeholder="Int">
                    </div>

                    <label for="colonia" class="col-md-2 control-label" style= "width: 60px; padding-right: 5px; padding-left: 5px;">Colonia:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
                      <input type="text" class="form-control" id="colonia" placeholder="Colonia">
                    </div>

                    </div>


                  <div class="form-group row">
                     <label for="calle" class="col-md-2 control-label" style= "padding-left: 10px; width: 90px;">C.P:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;padding-right: 5px;width: 130px;">
                      <input type="text" class="form-control" id="cp" placeholder="CP">
                    </div>

                    <label for="localidad" class="col-md-2 control-label" style="padding-left: 5px; width: 70px;padding-right: 5px;">Localidad:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 10px;padding-right: 10px;">
                      <input type="text" class="form-control" id="localidad" placeholder="Localidad">
                    </div>

                    <label for="t1" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 1:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;padding-right: 0px">
                      <input type="text" class="form-control" id="t1" placeholder="Teléfono 1">
                    </div>

                    <label for="t2" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 2:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
                      <input type="text" class="form-control" id="t2" placeholder="Teléfono 2">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-md-2 control-label" style="padding-left: 10px; width: 115px;">Asunto:</label>
                    <div class="col-md-10">
                      <textarea class="form-control" rows="3" placeholder="Asunto"></textarea>
                    </div>
                    <div style="padding-left: 770px;">
                        <button type="submit" class="btn btn-success">Nuevo asunto</button>
                    </div>
                  </div>

                  
                  <div class="form-group" style="padding-left: 665px;">
                  <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-info">Aceptar</button>
                    <button type="submit" class="btn btn-default">Cancelar</button>
                  </div>
                  </div>
                </form>
                
                </div>

<!--hasta aqui -->

              </div>
            </div>
          </div>
      </div>
          </div>
        </div>
        <!-- Content ends -->       
        </div>
            <!-- Mainbar ends -->
            
            <div class="clearfix"></div>
         </div>
      </div>  
     
  </body> 
</section>