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
                <h4>Buscar reporte</h4>
                <!-- Search users -->   <div class="container-fluid">
    <?php echo validation_errors(); ?>
    <?php echo form_open('reportes/show_periodo2'); ?>
    
    <div class="col-md-8" style="margin-bottom: 30px;">
      <div class="col-md-4">
        <label for="nombre" class="control-label">Fecha 1:</label>
      </div>

      <div class="col-md-4">
      <input type="date" name="date1" class="form-control" id="date1">
      </div>
    </div>

    <div class="col-md-8">
      <div class="col-md-4">
        <label for="nombre" class="control-label">Fecha 2:</label>
      </div>

      <div class="col-md-4" style="margin-bottom: 30px;">
      <input type="date" name="date2" class="form-control" id="date2">
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
      </div>
      <div class="col-md-4">
          <input type="submit" value="Enviar" class="btn btn-success">
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