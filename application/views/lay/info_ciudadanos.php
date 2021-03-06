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
                        <li><a href="<?php echo base_url()."regidenu"?>"><i class="fa fa-group"></i>Denuncias</a></li>
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
                <li  class="active"><a href="#addnew" data-toggle="tab">Información</a></li>                                
                <!--<li><a href="<?php echo base_url()."regidenu/buscar"?>" data-toggle="tab">Buscar</a></li> -->
                <li><a href='<?php echo base_url()."regidenu/buscar"?>' class="btn btn-danger btn-xs">Buscar</a></li>               
                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade" id="search">
                
                </div>                

              </div>
                
<!-- Add new Denuncia -->
                <div class="tab-pane fade active in" id="addnew">
                <h4>Información del Ciudadano</h4>
                                
                <?php echo form_open('regidenu/denuncia_validation');?>
                <?php echo validation_errors();?>
                <from class="form-horizontal" role="form">              

                  <div class="form-group">
                    <label for="nombre" class="col-md-2 control-label" style="padding-left: 10px; width: 120px;padding-right: 11px;">Nombre:</label>
                    <div class="col-md-6" style="margin-top: 15px;">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="apellidoP" class="col-md-2 control-label" style="padding-left: 10px; width: 171px;padding-right: 11px;">Apellido Paterno:</label>
                    <div class="col-md-6" style="margin-top: 15px;">
                      <?php echo form_input('apellidoPa','',"class='form-control'", $this->input->post('apellidoPa'));?>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="apellidoM" class="col-md-2 control-label" style="padding-left: 10px; width: 176px;padding-right: 11px;">Apellido Materno:</label>
                    <div class="col-md-6" style="margin-top: 15px;">                      
                      <?php echo form_input('apellidoMa','',"class='form-control'", $this->input->post('apellidoMa'));?>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="calle" class="col-md-2 control-label" style="padding-left: 10px; width: 100px;">Calle:</label>
                    <div class="col-md-3" style="margin-top: 15px;">                      
                      <?php echo form_input('calle','',"class='form-control'", $this->input->post('calle'));?>
                    </div>

                    <label for="noExt" class="col-md-2 control-label" style= "width: 60px; padding-right: 5px; padding-left: 5px;">Nº Ext:</label>
                    <div class="col-md-1" style="margin-top: 15px;padding-left: 5px;">                      
                      <?php echo form_input('noExt','',"class='form-control'", $this->input->post('noExt'));?>
                    </div>

                    <label for="nInt" class="col-md-2 control-label" style= "width: 60px; padding-right: 5px; padding-left: 5px;">Nº Int:</label>
                    <div class="col-md-1" style="margin-top: 15px;padding-left: 5px;">
                      <?php echo form_input('noInt','',"class='form-control'", $this->input->post('noInt'));?>
                    </div>

                    <label for="colonia" class="col-md-2 control-label" style= "width: 60px; padding-right: 5px; padding-left: 5px;">Colonia:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
                      <?php echo form_input('colonia','',"class='form-control'", $this->input->post('colonia'));?>
                    </div>

                    </div>


                  <div class="form-group row">
                     <label for="calle" class="col-md-2 control-label" style= "padding-left: 10px; width: 90px;">C.P:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;padding-right: 5px;width: 130px;">                      
                      <?php echo form_input('cp','',"class='form-control'", $this->input->post('cp'));?>
                    </div>

                    <label for="localidad" class="col-md-2 control-label" style="padding-left: 5px; width: 70px;padding-right: 5px;">Localidad:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 10px;padding-right: 10px;">                  
                      <?php echo form_input('localidad','',"class='form-control'", $this->input->post('localidad'));?>
                    </div>

                    <label for="t1" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 1:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;padding-right: 0px">                      
                      <?php echo form_input('tel1','',"class='form-control'", $this->input->post('tel1'));?>
                    </div>

                    <label for="t2" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 2:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
                      <?php echo form_input('tel2','',"class='form-control'", $this->input->post('tel2'));?>
                    </div>
                  </div>
                  
                  <div class="form-group" style="padding-left: 665px;">
                  <div class="col-md-offset-2 col-md-10">                    
                   <!-- <?php echo form_submit('denuncia_submit','Aceptar',"class='btn btn-info'"); ?> -->                    
                    <?php echo form_submit('denuncia_submit','Aceptar',"class='btn btn-info'"); ?>                                     
                    <button type="buton" value="cancel" class="btn btn-default" onClick="<?php echo base_url()."registros"?>">Cancelar</button>
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