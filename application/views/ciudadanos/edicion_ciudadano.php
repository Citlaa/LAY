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
                    <h2>Edición de ciudadano</h2>
  <div class="container-fluid">

    <?php echo validation_errors(); ?>
    <form class="form-horizontal">
    <input type="hidden" name="idCiudadano" value="<?php echo $ciudadano[0]['idCiudadano'];?>" id="idCiudadano">
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">Nombre:</label>
      <div class="col-sm-10">
        <input type="text" name="nombre" class="form-control" value="<?php echo $ciudadano[0]['nombre']; ?>" id="nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="apellidoPa" class="col-sm-2 control-label">Apellido paterno:</label>
      <div class="col-sm-10">
        <input type="text" name="apellidoPa" class="form-control" value="<?php echo $ciudadano[0]['apellidoPa']; ?>" id="apellidoPa">
      </div>
    </div>
    <div class="form-group">
      <label for="apellidoMa" class="col-sm-2 control-label" >Apellido materno:</label>
      <div class="col-sm-10">
        <input type="text" name="apellidoMa" class="form-control" value="<?php echo $ciudadano[0]['apellidoMa']; ?>" id="apellidoMa">
      </div>
    </div>
    <div class="form-group">
      <label for="tel1" class="col-sm-2 control-label">Teléfono:</label>
      <div class="col-sm-10">
        <input type="text" name="tel1" class="form-control" value="<?php echo $ciudadano[0]['tel1']; ?>" id="tel1">
      </div>
    </div>
    <div class="form-group">
      <label for="tel1" class="col-sm-2 control-label">Teléfono alt:</label>
      <div class="col-sm-10">
        <input type="text" name="tel2" class="form-control" value="<?php echo $ciudadano[0]['tel2']; ?>" id="tel2">
      </div>
    </div>
  </form>
    <button class="btn btn-success" id="enviar">Editar</button>
    <a  href="<?php echo site_url('regidenu/mostrar_busqueda');?>" class="btn btn-danger">Cancelar</a>
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
  <script type="text/javascript">
$(document).ready(function() {
  $("#enviar").click(function() {
    var idCiudadano = $("#idCiudadano").val();
    var nombre = $("#nombre").val();
    var apellidoPa = $("#apellidoPa").val();
    var apellidoMa = $("#apellidoMa").val();
    var tel1 = $("#tel1").val();
    var tel2 = $("#tel2").val();

    console.log(idCiudadano);


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