<section>
<body>

                        
                              
    <!-- Quick setting box starts -->
      <div class="quick-slide hidden-xs"></div>         
      <div class="out-container">
         <div class="outer">
            <!-- Sidebar starts -->
            <div class="sidebar">
                  <!-- Logo starts -->
                  <div class="logo">
                    <img src="<?php echo base_url("assets/img/LogoLAY.jpg");?>" widht="178px" height="180px">
                     
                  </div>
                  <!-- Logo ends -->
                  
                  <!-- Sidebar buttons starts -->
                  <div class="sidebar-buttons text-left">
                     
                     <!-- Logout button -->
                     <div class="btn-group">
                       <a href='<?php echo base_url()."login/logout"?>' class="btn btn-black btn-xs"><i class="fa fa-power-off"></i></a>
                       <a href='<?php echo base_url()."login/logout"?>' class="btn btn-danger btn-xs">Salir</a>
                     </div>
                    
                  </div><!-- Sidebar buttons ends -->
                    
                  <!-- Sidebar navigation starts -->
          <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
          
                  <div class="sidey">
                     <ul class="nav">
                         <!-- Main navigation. Refer Notes.txt files for reference. -->
                         
                         <!-- Use the class "current" in main menu to hightlight current main menu -->
                         <li><a href="<?php echo base_url()."main"?>"><i class="fa fa-desktop"></i>Menú</a></li>
                         <li><a href="<?php echo base_url()."main/registros"?>"><i class="fa fa-group"></i>Denuncias</a></li>
                         <li class="has_submenu">
                             <a href="#">
                                 <i class="fa fa-folder-open"></i>Catálogo
                                 <!-- Icon to show dropdown -->
                                 <span class="caret pull-right"></span>
                             </a>
                             <!-- Sub navigation -->
                             <ul>
                                 <!-- Use the class "active" in sub menu to hightlight current sub menu -->
                                 <li><a href="dependencia.html"><i class="fa fa-angle-double-right"></i>Dependencia</a></li>
                                 <li><a href="ciudadanos.html"><i class="fa fa-angle-double-right"></i>Ciudadanos</a></li>
                             </ul>
                         </li>   

             <li><a href="<?php echo base_url()."main/reportes"?>"><i class="fa fa-bar-chart-o"></i>Reportes</a></li>
                                                  
                     </ul>               
                  </div>
                  <!-- Sidebar navigation ends -->
                  
            </div>
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
        
        <div class="container">
        <div class="page-content page-users">
            <div class="page-tabs">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li  class="active"><a href="#search" data-toggle="tab">Buscar</a></li>                
                
                <li><a href='<?php echo base_url()."regidenu"?>' class="btn btn-danger btn-xs">Añadir nueva denuncia</a></li>               
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade active in" id="search">
                <h4>Buscar registro</h4>
                <!-- Search users -->
                <div class="well">
                  <!-- Advanced search Denuncia-->
                    <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Nombre">
                    </div>
                    
                    <div class="form-group">
                    <label for="apellidoP">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellidoP" placeholder="Apellido Paterno">
                    </div>

                    <div class="form-group">
                    <label for="apellidoM">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellidoM" placeholder="Apellido Materno">
                    </div>

                    <button type="submit" class="btn btn-default">Buscar</button>                  
                  </form>
                  <form id="formbuscar" method="GET" action="<?=base_url()?>regidenu/mostrar_busqueda">
                      <input type="text" id="query" name="query" class="form-control" />
                      <input type="submit" id="buscar" value="Buscar" class="btn btn-default" />
                  </form>
                </div>

                

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