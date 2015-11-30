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
            <h3 class="pull-left"><i class="fa fa-bar-chart-o"></i>Reportes</h3>  
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
             

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade active in" id="search">
                <h4>Seleccionar periodo</h4>
                <!-- Search users -->   
                <div class="container-fluid">
                <?php echo validation_errors(); ?>
                <?php echo form_open('reportes/show_periodo2', 'get'); ?>
    
    <div class="col-md-12 form-group">
      <div class="col-md-2" style="padding-right: 5px; width: 75px;">
        <label for="nombre" class="control-label">De:</label>
      </div>

      <div class="col-md-4">
      <input type="date" name="date1" class="form-control" id="date1" style="border-top-width: 1.111; border-top-width: 2px; padding-left: 6px; padding-right: 6px; margin-top: 8px;">
      </div>

      <div class="col-md-2" style="padding-left: 10px; width: 75px;padding-right: 5px;">
        <label for="Fecha 2" class="control-label" style="padding-left: 25px;">a:</label>
      </div>

      <div class="col-md-4" style="margin-bottom: 30px;">
      <input type="date" name="date2" class="form-control" id="date2" style="border-top-width: 1.111; border-top-width: 2px; padding-left: 6px; padding-right: 6px; margin-top: 8px;">
      </div>

      <div>
        <input type="submit" value="Enviar" class="btn btn-success" style="margin-bottom: 10px; margin-left: 20px;margin-top: 5px;">
      </div>
    </div>
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

      <!-- Scroll to top -->
      <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
    
    
  </body> 
</section>