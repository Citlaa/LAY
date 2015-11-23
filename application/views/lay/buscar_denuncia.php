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
            <h3 class="pull-left"><i class="fa fa-group"></i>Denuncias</h3>  
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- Black block ends -->
        
        <!-- Content starts -->
        
        <div class="container">
          <div class="page-content">
            <!-- Content starts -->
        
        <form class="form-horizontal" role="form">              
          <div class="form-group">
            <label for="nombre" class="col-md-4 control-label" style="padding-left: 10px; width: 125px;">Nombre:</label>
            <div class="col-md-6" style="margin-top: 15px;">
              <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
          </div>

          <div class="form-group">
            <label for="apellidoPa" class="col-md-4 control-label" style="padding-left: 5px; width: 125px;padding-right: 5px;">Apellido Paterno:</label>
            <div class="col-md-6" style="margin-top: 15px;">
              <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
            </div>
          </div>

          <div class="form-group">
            <label for="apellidoMa" class="col-md-4 control-label" style="padding-left: 5px; width: 125px;padding-right: 5px;">Apellido Materno:</label>
            <div class="col-md-6" style="margin-top: 15px;">
              <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
            </div>
          </div>

          <div class="col-md-12 row">
            <label for="calle" class="col-md-2 control-label" style="padding-left: 10px; width: 125px; ">Calle:</label>
              <div class="col-md-3" style="margin-top: 15px;">
                  <input type="text" style="width: 226px;" class="form-control" id="calle" placeholder="Calle">
              </div>

            <label for="numInt" class="col-md-3 control-label" style= "width: 100px; padding-right: 5px; padding-left: 5px;">Núm. interior:</label>
            <div class="col-md-3" style="margin-top: 15px;padding-left: 5px;">
              <input type="text" class="form-control" id="colonia" placeholder="Número interior">
            </div>

            <label for="cp" class="col-md-2 control-label" style= "width: 25px; padding-right: 5px; padding-left: 5px;">CP:</label>
            <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
              <input type="text" class="form-control" id="cp" placeholder="CP">
            </div>
          </div>

          <div class="col-md-12 row">
            <label for="localidad" class="col-md-2 control-label" style="padding-left: 10px; width: 125px;padding-right: 11px;">Localidad:</label>
            <div class="col-md-2" style="margin-top: 15px;">
              <input type="text" class="form-control" id="localidad" placeholder="Localidad">
            </div>

            <label for="t1" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 1:</label>
            <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
              <input type="text" class="form-control" id="t1" placeholder="Teléfono 1">
            </div>

            <label for="t2" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 2:</label>
            <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
              <input type="text" class="form-control" id="t2" placeholder="Teléfono 2">
            </div>
          </div>
      </form>

        <div class="container">
          <div class="page-content page-users">
          <div class="page-tabs">
              
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li  class="active"><a href="#search" data-toggle="tab">Denuncias</a></li>                
                
              
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade active in" id="search">
                <h3>Denuncias</h3>
                <h5>Busca o inserta un nuevo registro</h5>
                <!-- Search users -->
                <div class="well" align="center">
                  <!-- Advanced search Denuncia-->
                                     
                <iframe src="<?php echo base_url('regidenu/mostrar_busqueda');?>" width="800px" height="700px"></iframe>
                

              </div>
                
<!-- Add new Denuncia -->
                <div class="tab-pane fade" id="addnew">
                                
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