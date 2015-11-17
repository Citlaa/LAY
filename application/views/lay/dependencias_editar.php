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
                     <!-- User button -->
                     <div class="btn-group">
                       <a href='<?php echo base_url()."login/logout"?>' class="btn btn-black btn-xs"><i class="fa fa-power-off"></i></a>
                       <a href='<?php echo base_url()."login/logout"?>' class="btn btn-danger btn-xs">Salir</a>
                     </div>
                  </div>
                  <!-- Sidebar buttons ends -->
                    
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
                                 <li><a href="<?php echo base_url()."dependencias/show_dependencias"?>"><i class="fa fa-group"></i>Dependencias</a></li>
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
                <!--<li > <a href="#search" data-toggle="tab">Dependencias</a></li> -->
                <li><a href='<?php echo base_url()."dependencias"?>' class="btn btn-danger btn-xs">Dependencias</a></li>               
                <li class="active"><a href="#addnew" data-toggle="tab">Añadir nueva dependencia</a></li>
                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade" id="search">
          
                                                   
                </div>
                
<!-- Add new Registro -->
                <div class="tab-pane fade active in" id="addnew">
                <h4>Nueva Dependencia</h4>
                
                <?php $id = $this->uri->segment(3);?>
                <!--<form class="form-horizontal" role="form">-->
                <?php echo form_open('dependencias/dependencia_edit_validation/'.$id);?>
                <!--<form id="form" name="fomr" action="<?= base_url()?>dependencias/dependencia_validation/<?=$id?>" method="POST">-->
                <?php echo validation_errors();?>


                  <div class="form-group row">
                    <label for="id" class="col-md-2 control-label" style="padding-left: 40px;padding-top: 7px;">Id de registro:</label>
                    <div class="col-md-2" style="margin-top: 15px">
                      <input type="text" class="form-control" id="id" placeholder="ID" disabled>
                    </div>                
                  </div>

                  <div class="form-group row">
                    <label for="dependencia" class="col-md-2 control-label" style="padding-left: 40px;padding-top: 7px;">Dependencia:</label>
                    <div class="col-md-6" style="margin-top: 15px;">                      
                      <?php echo form_input('dependencia',$dependencia,"class='form-control'", $this->input->post('dependencia'));?>                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="titular" class="col-md-2 control-label" style="padding-left: 40px;padding-top: 7px;">Titular:</label>
                    <div class="col-md-6" style="margin-top: 15px;">                      
                      <?php echo form_input('titular',$titular,"class='form-control'", "value='".$dependencia."'", $this->input->post('titular'));?>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="calle" class="col-md-2 control-label" style="padding-left: 40px;padding-top: 7px;width: 95px;padding-right: 5px;">Calle:</label>
                    <div class="col-md-3" style="margin-top: 15px;">
                      <?php echo form_input('calle',$calle,"class='form-control'", $this->input->post('calle'));?>
                    </div>

                    <label for="calle" class="col-md-2 control-label" style= "width: 60px; padding-right: 5px; padding-left: 5px;padding-top: 7px">Nº Ext:</label>
                    <div class="col-md-1" style="margin-top: 15px;padding-left: 5px;">
                      <?php echo form_input('numExt',$numExt,"class='form-control'", $this->input->post('numExt'));?>
                    </div>

                    <label for="calle" class="col-md-2 control-label" style= "width: 60px; padding-right: 5px; padding-left: 5px;padding-top: 7px">Nº Int:</label>
                    <div class="col-md-1" style="margin-top: 15px;padding-left: 5px;">
                      <?php echo form_input('numInt',$numInt,"class='form-control'", $this->input->post('numInt'));?>
                    </div>

                    <label for="colonia" class="col-md-2 control-label" style= "width: 60px; padding-right: 5px; padding-left: 5px; padding-top: 7px">Colonia:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
                      <?php echo form_input('colonia',$colonia,"class='form-control'", $this->input->post('colonia'));?>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="cp" class="col-md-2 control-label" style= "padding-left: 40px; width: 90px; padding-top: 7px">C.P:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;padding-right: 5px;width: 130px;">
                      <?php echo form_input('cp',$cp,"class='form-control'", $this->input->post('cp'));?>
                    </div>


                    <label for="localidad" class="col-md-2 control-label" style="padding-left: 5px; width: 70px;padding-right: 5px; padding-top: 7px">Localidad:</label>
                    <div class="col-md-2" style="margin-top: 15px;">                      
                      <?php echo form_input('localidad',$localidad,"class='form-control'", $this->input->post('localidad'));?>
                    </div>

                    <label for="t1" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;padding-top: 7px">Teléfono 1:</label>                                          
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;padding-right: 0px">
                      <?php echo form_input('tel1',$tel1,"class='form-control'", $this->input->post('tel1'));?>
                    </div>

                     <label for="t2" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px; padding-top: 7px">Teléfono 2:</label>
                    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">                      
                      <?php echo form_input('tel2',$tel2,"class='form-control'", $this->input->post('tel2'));?>
                    </div>
                  </div>
               
                    <div class="form-group" style="padding-left: 665px;height: 50px;">
                      <div class="col-md-offset-2 col-md-10">
                        <?php echo form_submit('dependencia_submit','Guardar',"class='btn btn-info'"); ?>                    
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