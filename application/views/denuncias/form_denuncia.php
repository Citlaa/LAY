<section>
<head>
    <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js')?>"></script>  
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
                    <h2>Nueva denuncia</h2>  
                    <?php echo validation_errors(); ?>                                
                    <?php echo form_open('regidenu/add_denuncia', array('class'=>'form-horizontal')); ?>    
                      <div class="form-group">
                        <label for="nombre" class="col-md-4 control-label" style="padding-left: 10px; width: 125px;padding-right: 5px;">Nombre:</label>
                          <div class="col-md-6" style="margin-top: 15px;">
                           <input type="text" name="nombre" class="form-control" value="<?php echo $ciudadano[0]['nombre']; ?>" id="nombre">
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="apellidoPa" class="col-md-4 control-label" style="padding-left: 5px; width: 125px;padding-right: 5px;">Apellido Paterno:</label>
                          <div class="col-md-6" style="margin-top: 15px;">
                            <input type="text" name="apellidoPa" class="form-control" value="<?php echo $ciudadano[0]['apellidoPa']; ?>" id="apellidoPa">
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="apellidoMa" class="col-md-4 control-label" style="padding-left: 5px; width: 125px;padding-right: 5px;">Apellido Materno:</label>
                          <div class="col-md-6" style="margin-top: 15px;">
                            <input type="text" name="apellidoMa" class="form-control" value="<?php echo $ciudadano[0]['apellidoMa']; ?>" id="apellidoMa">
                          </div>
                      </div>

                      <div class="col-md-12 row">
                        <label for="calle" class="col-md-2 control-label" style="padding-left: 10px; width: 110px; padding-right: 5px;">Calle:</label>
                          <div class="col-md-3" style="margin-top: 15px;">
                            <input type="text" style="width: 226px;" class="form-control" name="calle" placeholder="Calle" id="calle">
                          </div>

                        <label for="noExt" class="col-md-3 control-label" style= "width: 145px; padding-right: 5px; padding-left: 30px;">Núm. exterior:</label>
                          <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;width: 100px;">
                            <input type="text" class="form-control" name="noExt" placeholder="Número interior" id="noExt">
                          </div>

                        <label for="noInt" class="col-md-3 control-label" style= "width: 100px; padding-right: 5px; padding-left: 5px;">Núm. interior:</label>
                          <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;width: 100px;">
                            <input type="text" class="form-control" name="noInt" placeholder="Número interior" id="noInt">
                          </div>
                      </div>

                      <div class="col-md-12 row">
                         <label for="cp" class="col-md-2 control-label" style= "width: 110px; padding-right: 5px; padding-left: 50px;">CP:</label>
                          <div class="col-md-2" style="margin-top: 15px;padding-left: 15px;width: 150px;">
                            <input type="text" class="form-control" name="cp" placeholder="CP" id="cp">
                          </div>

                        <label for="colonia" class="col-md-2 control-label" style="padding-left: 5px; width: 71px;padding-right: 11px;">Colonia:</label>
                          <div class="col-md-4" style="margin-top: 15px;padding-left: 5px;">
                            <input type="text" class="form-control" name="colonia" placeholder="Colonia" id="colonia">
                          </div>
                      </div>
                      <div class="col-md-12 row">
                        <label for="localidad" class="col-md-2 control-label" style="padding-left: 35px; width: 111px;padding-right: 5px;">Localidad:</label>
                          <div class="col-md-3" style="margin-top: 15px;">
                            <input type="text" class="form-control" name="localidad" value="Aguascalientes" id="localidad">
                          </div>

                        <label for="t1" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 1:</label>
                          <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
                            <input type="text" name="tel1" class="form-control" value="<?php echo $ciudadano[0]['tel1']; ?>">
                          </div>

                        <label for="t2" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 2:</label>
                          <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
                            <input type="text" name="tel2" class="form-control" value="<?php echo $ciudadano[0]['tel2']; ?>">
                          </div>
                      </div>
                      <div class="col-md-12 row">
                        <label for="asunto" class="col-md-2 control-label" style= "width: 115px; padding-right: 10px; padding-left: 45px;margin-top: 5px;">Asunto:</label>
                          <div class="col-md-10" style="margin-top: 15px;padding-left: 10px;">
                            <textarea type="text"  row="3"class="form-control" name="asunto" placeholder="Asunto" id="asunto"></textarea>
                          </div>
                      </div>
                      <div class="col-md-12 row">
                        <div class="col-md-2" style="width: 125px;padding-right: 5px;padding-left: 40px;margin-top: 10px;">
                          <label for="recepcion">Recepción:</label>
                        </div>
                        <div class="col-md-6" style="padding-left: 0px;width: 165px;margin-top: 5px;">
                          <select class="form-control" name="idRecepcion" style="margin-top: 15px;padding-left: 5px; weight: 150px;">
                            <?php foreach ($recepcion as $recepcion_item): ?>
                            <option value="<?php echo $recepcion_item['idRecepcion']?>"><?php echo $recepcion_item['descripcion']?></option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-12 row">
                        <div class="col-md-2" style="width: 120px;padding-right: 10px;padding-left: 22px;margin-top: 5px;">
                          <label for="dependencia">Dependencia:</label>
                        </div>
                          <div class="col-md-6" style="padding-left: 5px;width: 165px;">
                            <select class="form-control" name="idDependencia" style="margin-top: 15px;padding-left: 5px; weight: 150px;">
                              <?php foreach ($dependencias as $dependencia_item): ?>
                              <option value="<?php echo $dependencia_item['idDependencia']?>"><?php echo $dependencia_item['dependencia']?></option>
                              <?php endforeach;?>
                            </select>
                          </div>
                      </div>
                          <input type="hidden" name="idEstatus" value="<?php echo$estatus[0]['idEstatus']?>">
                      </div>
                      </form>
                      <button class="btn btn-success" id="enviar">Agregar</button>
                      <a href="<?php echo site_url('regidenu/mostrar_busqueda');?>" class="btn btn-danger">Cancelar</a>
                
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
  <script type="text/javascript">
$(document).ready(function() {
  $("#enviar").click(function() {
    var idCiudadano = $("#idCiudadano").val();    
    var idDenuncia = $("#idDenuncia").val();
    var calle = $("#calle").val();
    var noExt = $("#noExt").val();
    var noInt = $("noInt").val();
    var cp = $("#cp").val();
    var colonia = $("#colonia").val();
    var asunto = $("#asunto").val();
    var recepcion = $("#recepcion").val();
    var dependencia = $("#dependencia").val();
    
    $.ajax({
    type: "update",
    url: "<?php echo site_url(); ?>" + "ciudadanos/agregar_denuncia_ajax",
    dataType: 'json',
    data: {
      'idCiudadano': idCiudadano, 
      'idDenuncia': idDenuncia, 
      'calle': calle, 
      'noExt': noExt, 
      'noInt': noInt,
      'cp': cp,
      'colonia': colonia,
      'asunto': asunto,
      'recepcion': recepcion,
      'dependencia': dependencia,
    },
    success: function(res) {
      alert('Denuncia agregada');
      location.href="<?php echo site_url('regidenu/mostrar_busqueda')?>"
    },
    error: function(res){
      alert('salió mal');
    }
  });
  });
})
</script>    
</section>