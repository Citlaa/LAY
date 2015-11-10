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
                     <img src="img/LogoLAY.jpg" widht="178px" height="180px">
                  </div>
                  <!-- Logo ends -->
                  
                  <!-- Sidebar buttons starts -->
                  <div class="sidebar-buttons text-center">
                     <!-- User button -->
                     <div class="btn-group">
                       <a href="profile.html" class="btn btn-black btn-xs"><i class="fa fa-user"></i></a>
                       <a href="profile.html" class="btn btn-danger btn-xs">Usuario</a>
                     </div>
                     <!-- Lock button -->
                     <div class="btn-group">
                       <a href="lock.html" class="btn btn-black btn-xs"><i class="fa fa-lock"></i></a>
                       <a href="lock.html" class="btn btn-danger btn-xs">Bloquear</a>
                     </div>
                     <!-- Logout button -->
                     <div class="btn-group">
                       <a href="login.html" class="btn btn-black btn-xs"><i class="fa fa-power-off"></i></a>
                       <a href="login.html" class="btn btn-danger btn-xs">Salir</a>
                     </div>
                  </div>
                  <!-- Sidebar buttons ends -->
                    
                  <!-- Sidebar navigation starts -->
          <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
          
                  <div class="sidey">
                     <ul class="nav">
                         <!-- Main navigation. Refer Notes.txt files for reference. -->
                         
                         <!-- Use the class "current" in main menu to hightlight current main menu -->
                         <li><a href="index.html"><i class="fa fa-desktop"></i>Menú</a></li>
                         <li><a href="registros.html"><i class="fa fa-group"></i>Registros</a></li>
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

             <li><a href="reportes.html"><i class="fa fa-bar-chart-o"></i>Reportes</a></li>
                                                  
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
            <h3 class="pull-left"><i class="fa fa-university"></i>Dependencias</h3>  
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
                <li  class="active"><a href="#search" data-toggle="tab">Dependencias</a></li>                
                <li><a href="#addnew" data-toggle="tab">Añadir nueva dependencia</a></li>
                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade active in" id="search">
          
                  <div class="widget">
                           <div class="widget-head">
                    <h5><i class="fa fa-university"></i>Dependencias</h5>
                  </div>
                           <div id="data-table_filter" class="dataTables_filter">
                              <label>Buscar:<input type="search" class placeholder aria-controls="data-table">
                              </label>
                           </div>
                           <div class="widget-body no-padd">
                <div class="table-responsive">
                  <table class="table table-hover table-bordered ">
                   <thead>
                   <tr>
                     <th>Nº</th>
                     <th>Dependencia</th>
                     <th>Titular</th>
                     <th>Calle</th>
                     <th>Número</th>
                     <th>Colonia</th>
                     <th>Localidad</th>
                     <th>C.P</th>
                     <th>Teléfono 1</th>
                     <th>Teléfono 2</th>
                     <th>Opciones</th>
                   </tr>
                   </thead>
                   <tbody>

                   <tr>
                     <td>1</td>
                     <td>Salud</td>
                     <td>Diana Laura Saucedo López</td>
                     <td>Revolución</td>
                     <td>95</td>
                     <td>Los Sauces</td>
                     <td>Encarnación</td>
                     <td>47285</td>
                     <td>234567</td>
                     <td>345678</td>
                     <td>
                       <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                       <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>                     
                     </td>
                   </tr>

                   <tr>
                     <td>2</td>
                     <td>Educación</td>
                     <td>Diana Laura Saucedo López</td>
                     <td>Revolución</td>
                     <td>95</td>
                     <td>Los Sauces</td>
                     <td>Encarnación</td>
                     <td>47285</td>
                     <td>234567</td>
                     <td>345678</td>
                     <td>
                       <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                       <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>                     
                     </td>
                   </tr>
                   </tbody>
                 </table>
                             </div>
                           </div>
               
               <div class="widget-foot">
              
                <ul class="pagination pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                              </ul>
                               
                               <div class="clearfix"></div>           
               </div>
            
                    <div class="pull-right">
                      <button type="button" class="btn btn-info">Nueva Dependencia</button>
                    </div>
                    <div class="clearfix"></div>                  
                </div>                                     
                </div>
                
<!-- Add new Registro -->
                <div class="tab-pane fade" id="addnew">
                <h4>Nueva Dependencia</h4>
                
                
                <!--<form class="form-horizontal" role="form">-->
                <?php echo form_open('dependencias/dependencia_validation');?>
                <?php echo validation_errors();?>

                  <div class="form-group row">
                    <label for="id" class="col-md-2 control-label">Id de registro:</label>
                    <div class="col-md-2" style="margin-top: 15px">
                      <input type="text" class="form-control" id="id" placeholder="ID" disabled>
                    </div>                
                  </div>

                  <div class="form-group">
                    <label for="dependencia" class="col-md-2 control-label" style="padding-left: 10px; width: 125px;">Dependencia:</label>
                    <div class="col-md-6" style="margin-top: 15px;">                      
                      <?php echo form_input('dependencia','',"class='form-control'", $this->input->post('dependencia'));?>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="titular" class="col-md-2 control-label" style="padding-left: 10px; width: 125px;padding-right: 11px;">Titular:</label>
                    <div class="col-md-6" style="margin-top: 15px;">                      
                      <?php echo form_input('titular','',"class='form-control'", $this->input->post('titular'));?>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="calle" class="col-md-2 control-label" style="padding-left: 10px; width: 125px;">Calle:</label>
                    <div class="col-md-3" style="margin-top: 15px;">                      
                      <?php echo form_input('calle','',"class='form-control'", $this->input->post('calle'));?>
                    </div>


                    <label for="calle" class="col-md-2 control-label" style= "width: 25px; padding-right: 5px; padding-left: 5px;">Nº:</label>
                    <div class="col-md-1" style="margin-top: 15px;padding-left: 5px;">
                      <?php echo form_input('numExt','',"class='form-control'", $this->input->post('numExt'));?>
                    </div>

                    <label for="calle" class="col-md-2 control-label" style= "width: 25px; padding-right: 5px; padding-left: 5px;">Nº interior:</label>
                    <div class="col-md-1" style="margin-top: 15px;padding-left: 5px;">
                      <?php echo form_input('numInt','',"class='form-control'", $this->input->post('numInt'));?>
                    </div>

                    <label for="colonia" class="col-md-2 control-label" style= "width: 60px; padding-right: 5px; padding-left: 5px;">Colonia:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
                      <?php echo form_input('colonia','',"class='form-control'", $this->input->post('colonia'));?>
                    </div>

                    <label for="calle" class="col-md-2 control-label" style= "width: 25px; padding-right: 5px; padding-left: 5px;">CP:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
                      <?php echo form_input('cp','',"class='form-control'", $this->input->post('cp'));?>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="localidad" class="col-md-2 control-label" style="padding-left: 10px; width: 125px;padding-right: 11px;">Localidad:</label>
                    <div class="col-md-2" style="margin-top: 15px;">                      
                      <?php echo form_input('localidad','',"class='form-control'", $this->input->post('localidad'));?>
                    </div>

                    <label for="t1" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 1:</label>                                          
                      <?php echo form_input('tel1','',"class='form-control'", $this->input->post('tel1'));?>
                    </div>

                    <label for="t2" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 2:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">                      
                      <?php echo form_input('tel2','',"class='form-control'", $this->input->post('tel2'));?>
                    </div>
                  </div>
                  
                  <div class="form-group" style="padding-left: 665px;">
                  <div class="col-md-offset-2 col-md-10">                    
                    <?php echo form_submit('dependencia_submit','Aceptar',"class='btn btn-info'"); ?>                    
                    <button type="buton" value="cancel" class="btn btn-default" onClick="<?php echo base_url()."dependencias"?>">Cancelar</button>
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