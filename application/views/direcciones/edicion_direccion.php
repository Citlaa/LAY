<section>
<head>
    <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">
  

</head>               
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
        <!-- Page heading ends -->
        <!-- Black block ends -->
        
        <!-- Content starts -->
        
        <div class="container">
          <div class="page-content">
            <!-- Content starts -->
        
        <div class="container">
        <div class="page-content page-users">
            <div class="page-tabs">

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade active in" id="search">
          
                  <div class="widget">
                  
                    
              
                    <div class="clearfix"></div>    
  <div class="container-fluid">
  <h2>Editar de direccion</h2>
  <div class="container-fluid">

    <?php echo validation_errors(); ?>
    <?php echo form_open('direcciones/editar_direccion', array('class'=>'form-horizontal')); ?>
    <input type="hidden" name="idDireccion" value="<?php echo $direccion[0]['idDireccion'];?>">
    <div class="form-group">
      <label for="calle" class="col-sm-2 control-label">Calle</label>
      <div class="col-sm-10">
        <input type="text" name="calle" class="form-control" value="<?php echo $direccion[0]['calle']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="noExt" class="col-sm-2 control-label">No. Exterior:</label>
      <div class="col-sm-10">
        <input type="text" name="noExt" class="form-control" value="<?php echo $direccion[0]['noExt']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="noInt" class="col-sm-2 control-label" >No. Int:</label>
      <div class="col-sm-10">
        <input type="text" name="noInt" class="form-control" value="<?php echo $direccion[0]['noInt']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="colonia" class="col-sm-2 control-label">Colonia:</label>
      <div class="col-sm-10">
        <input type="text" name="colonia" class="form-control" value="<?php echo $direccion[0]['colonia']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="localidad" class="col-sm-2 control-label">Localidad:</label>
      <div class="col-sm-10">
        <input type="text" name="localidad" class="form-control" value="<?php echo $direccion[0]['localidad']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="cp" class="col-sm-2 control-label">cp:</label>
      <div class="col-sm-10">
        <input type="text" name="cp" class="form-control" value="<?php echo $direccion[0]['cp']; ?>">
      </div>
    </div>
    <button type="submit" class="btn btn-success">Editar</button>
    <a  href="<?php echo site_url('regidenu/mostrar_busqueda');?>" class="btn btn-danger">Cancelar</a>
  </form>
</div>
            
                </div>                                     
                </div>
                
<!-- Add new Registro -->

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