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
                    <h2>peridod</h2>
  <div class="container-fluid">

    <?php echo validation_errors(); ?>
    <?php echo form_open('reportes/periodo2'); ?>

    
    
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">fecha 1:</label>
      <div class="col-sm-10">
        <input type="date" name="date1" class="form-control" id="date1">
      </div>
    </div>
    <div class="form-group">
      <label for="apellidoPa" class="col-sm-2 control-label">fecha2:</label>
      <div class="col-sm-10">
        <input type="date" name="date2" class="form-control"  id="date2">
      </div>
    </div>
    
  
    <!--<button class="btn btn-success" id="enviar">Buscar</button>-->
    <input type="submit" value="Enviar" class="btn btn-success">
    <!--<a href="<?php echo site_url('regidenu/mostrar_busqueda');?>" class="btn btn-danger">Cancelar</a>-->
    </form>
</div>

            <!--<iframe src="<?php echo site_url('reportes/periodo2');?>" width="900px" height="700px"></iframe>-->
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
    var nombre = $("#nombre").val();
    var apellidoPa = $("#apellidoPa").val();
    var apellidoMa = $("#apellidoMa").val();
    var tel1 = $("#tel1").val();
    var tel2 = $("#tel2").val();

    $.ajax({
    type: "GET",
    url: "<?php echo site_url(); ?>" + "ciudadanos/edicion_ciudadano_ajax",
    dataType: 'json',
    data: {
      'idCiudadano': idCiudadano, 
      'nombre': nombre,
      'apellidoPa': apellidoPa, 
      'apellidoMa': apellidoMa,
      'tel1': tel1, 
      'tel2': tel2, 
    },
    success: function(res) {
      alert('Ciudadano actualizado');
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