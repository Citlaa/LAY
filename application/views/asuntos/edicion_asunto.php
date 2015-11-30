<section>
<head>
    <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js')?>"></script>
</head> 
<style>
.btn-success {
    background: #29c635;
    color: #fff !important;
    border: 1px solid #1fae29 !important;
}

.btn-danger{
   background:#8B103E;
   color:#fff !important;
   border:1px solid #700d19 !important;
}
</style>               
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
  <h2>Edición de asunto</h2>
  <div class="container-fluid">

    <?php echo validation_errors(); ?>
    <?php echo form_open('asuntos/editar_asunto', array('class'=>'form-horizontal')); ?>
    <input type="hidden" name="idAsunto" value="<?php echo $asunto[0]['idAsunto'];?>" id="idAsunto">
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Descripción:</label>
      <div class="col-sm-10">
        <input type="text" name="descripcion" class="form-control" value="<?php echo $asunto[0]['descripcion']; ?>" id="descripcion" required>
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
    var idAsunto = $("#idAsunto").val();
    var descripcion = $("#descripcion").val();

    if(descripcion){

    $.ajax({
    type: "GET",
    url: "<?php echo site_url(); ?>" + "asuntos/edicion_asunto_ajax",
    dataType: 'json',
    data: {
      'idAsunto': idAsunto, 
      'descripcion': descripcion, 
    },
    success: function(res) {
      alert('Asunto actualizado');
      location.href="<?php echo site_url('regidenu/mostrar_busqueda')?>"
    },
    error: function(res){
      alert('salió mal');
    }
  });
  }else{
    alert('El campo Descripción es necesario');
  }
  });
})
</script>  
</section>