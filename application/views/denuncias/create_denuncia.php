<section>

<body>                      
                              
    <!-- Quick setting box starts -->
      <div class="quick-slide hidden-xs"></div>         
      <div class="out-container">
         <div class="outer">
            <!-- Sidebar starts -->
            
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
                <li  class="active"><a href="#addnew" data-toggle="tab">Dependencias</a></li>                                              
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade active in" id="search">
          
                  <div class="widget">
                  
                    
              
                    <div class="clearfix"></div>    

                    <?php echo validation_errors(); ?>                                
                                <?php echo form_open('regidenu/add_denuncia', array('class'=>'form-horizontal')); ?>                                
                                <div class="form-group">
                                  <label for="nombre" class="col-md-4 control-label" style="padding-left: 10px; width: 125px;">Nombre:</label>
                                   <div class="col-md-6" style="margin-top: 15px;">
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="apellidoPa" class="col-md-4 control-label" style="padding-left: 5px; width: 125px;padding-right: 5px;">Apellido Paterno:</label>
                                  <div class="col-md-6" style="margin-top: 15px;">
                                    <input type="text" class="form-control" name="apellidoPa" placeholder="Apellidos">
                                  </div>
                                </div>

                                <div class="form-group">
    <label for="apellidoMa" class="col-md-4 control-label" style="padding-left: 5px; width: 125px;padding-right: 5px;">Apellido Materno:</label>
    <div class="col-md-6" style="margin-top: 15px;">
      <input type="text" class="form-control" name="apellidoMa" placeholder="Apellidos">
    </div>
  </div>

  <div class="col-md-12 row">
    <label for="calle" class="col-md-2 control-label" style="padding-left: 10px; width: 125px; ">Calle:</label>
      <div class="col-md-3" style="margin-top: 15px;">
          <input type="text" style="width: 226px;" class="form-control" name="calle" placeholder="Calle">
      </div>
      <label for="noExt" class="col-md-3 control-label" style= "width: 100px; padding-right: 5px; padding-left: 5px;">Núm. interior:</label>
      <div class="col-md-3" style="margin-top: 15px;padding-left: 5px;">
        <input type="text" class="form-control" name="noExt" placeholder="Número interior">
      </div>
    <label for="noInt" class="col-md-3 control-label" style= "width: 100px; padding-right: 5px; padding-left: 5px;">Núm. interior:</label>
    <div class="col-md-3" style="margin-top: 15px;padding-left: 5px;">
      <input type="text" class="form-control" name="noInt" placeholder="Número interior">
    </div>

    <label for="cp" class="col-md-2 control-label" style= "width: 25px; padding-right: 5px; padding-left: 5px;">CP:</label>
    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
      <input type="text" class="form-control" name="cp" placeholder="CP">
    </div>
  </div>
<div class="col-md-12">
  <label for="colonia" class="col-md-2 control-label" style="padding-left: 10px; width: 125px;padding-right: 11px;">Colonia:</label>
  <div class="col-md-2" style="margin-top: 15px;">
    <input type="text" class="form-control" name="colonia" placeholder="Colonia">
  </div>
</div>
  <div class="col-md-12 row">
    <label for="localidad" class="col-md-2 control-label" style="padding-left: 10px; width: 125px;padding-right: 11px;">Localidad:</label>
    <div class="col-md-2" style="margin-top: 15px;">
      <input type="text" class="form-control" name="localidad" placeholder="Localidad">
    </div>

    <label for="t1" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 1:</label>
    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
      <input type="text" class="form-control" name="tel1" placeholder="Teléfono 1">
    </div>

    <label for="t2" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 2:</label>
    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
      <input type="text" class="form-control" name="tel2" placeholder="Teléfono 2">
    </div>
  </div>
  <div class="col-md-12 row">
    <label for="asunto" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Asunto:</label>
    <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
      <input type="text" class="form-control" name="asunto" placeholder="Asunto">
    </div>
  </div>
  <div class="col-md-12">
    <label for="col-md-2 control-label">Recepción:</label>
    <div class="col-md-2">
      <select class="form-control" name="idRecepcion">
        <?php foreach ($recepcion as $recepcion_item): ?>
          <option value="<?php echo $recepcion_item['idRecepcion']?>"><?php echo $recepcion_item['descripcion']?></option>
        <?php endforeach;?>
      </select>
    </div>
  </div>
  <div class="col-md-12">
    <label for="col-md-2 control-label">Dependencia:</label>
    <div class="col-md-2">
      <select class="form-control" name="idDependencia">
        <?php foreach ($dependencias as $dependencia_item): ?>
          <option value="<?php echo $dependencia_item['idDependencia']?>"><?php echo $dependencia_item['dependencia']?></option>
        <?php endforeach;?>
      </select>
    </div>
    <input type="hidden" name="idEstatus" value="<?php echo$estatus[0]['idEstatus']?>">
  </div>
  <input type="submit" value="Enviar" class="btn btn-success">
  <a class="btn btn-danger" href="<?php echo site_url('regidenu/buscar')?>">Cancelar</a>
</form>
              
                </div>                                     
                </div>
                
<!-- Add new Registro -->
                <div class="tab-pane fade" id="addnew">
                <h4>Nueva Dependencia</h4>
                
                
                <!--<form class="form-horizontal" role="form">-->
                
                
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