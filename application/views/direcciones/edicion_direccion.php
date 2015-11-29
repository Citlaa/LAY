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
  <div class="container-fluid">
  <h2>Editar de direccion</h2>
  <div class="container-fluid">

    <?php echo validation_errors(); ?>
    <form class="form-horizontal">
    <input type="hidden" name="idDireccion" value="<?php echo $direccion[0]['idDireccion'];?>" id="idDireccion">
    <div class="form-group">
      <label for="calle" class="col-sm-2 control-label">Calle:</label>
      <div class="col-sm-10">
        <input type="text" name="calle" class="form-control" value="<?php echo $direccion[0]['calle']; ?>" id="calle">
      </div>
    </div>
    <div class="form-group">
      <label for="noExt" class="col-sm-2 control-label">No. Exterior:</label>
      <div class="col-sm-10">
        <input type="text" name="noExt" class="form-control" value="<?php echo $direccion[0]['noExt']; ?>" id="noExt">
      </div>
    </div>
    <div class="form-group">
      <label for="noInt" class="col-sm-2 control-label" >No. Interior:</label>
      <div class="col-sm-10">
        <input type="text" name="noInt" class="form-control" value="<?php echo $direccion[0]['noInt']; ?>" id="noInt">
      </div>
    </div>
    <div class="form-group">
      <label for="colonia" class="col-sm-2 control-label">Colonia:</label>
      <div class="col-sm-10">
        <input type="text" name="colonia" class="form-control" value="<?php echo $direccion[0]['colonia']; ?>" id="colonia">
      </div>
    </div>
    <div class="form-group">
      <label for="localidad" class="col-sm-2 control-label">Localidad:</label>
      <div class="col-sm-10">
        <input type="text" name="localidad" class="form-control" value="<?php echo $direccion[0]['localidad']; ?>" id="localidad">
      </div>
    </div>
    <div class="form-group">
      <label for="cp" class="col-sm-2 control-label">CP:</label>
      <div class="col-sm-10">
        <input type="text" name="cp" class="form-control" value="<?php echo $direccion[0]['cp']; ?>" id="cp">
      </div>
    </div>
    </form>
    <button class="btn btn-success" id="enviar">Editar</button>
    <a href="<?php echo site_url('regidenu/mostrar_busqueda');?>" class="btn btn-danger">Cancelar</a>
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
    var idDireccion = $("#idDireccion").val();
    var calle = $("#calle").val();
    var noExt = $("#noExt").val();
    var noInt = $("#noInt").val();
    var colonia = $("#colonia").val();
    var localidad = $("#localidad").val();
    var cp = $("#cp").val();

    if(calle&&noExt&&colonia&&localidad&&cp){

    $.ajax({
    type: "GET",
    url: "<?php echo site_url(); ?>" + "direcciones/edicion_direccion_ajax",
    dataType: 'json',
    data: {
      'idDireccion': idDireccion, 
      'calle': calle,
      'noExt': noExt, 
      'noInt': noInt,
      'colonia': colonia, 
      'localidad': localidad, 
      'cp': cp, 
    },
    success: function(res) {
      alert('Dirección actualizada');
      location.href="<?php echo site_url('regidenu/mostrar_busqueda')?>"
    },
    error: function(res){
      alert('salió mal');
    }
  });
  }else{
    if(!calle){
      alert('El campo Calle es necesario');
    }if(!noExt){
      alert('El campo Num. Exterior es necesario');
    }if(!cp){
      alert('El campo C.P. es necesario');
    } if(!colonia){
      alert('El campo Colonia es necesario');
    }
  }
  });
})
</script>     
</section>