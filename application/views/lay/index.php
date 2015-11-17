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
                    
                  </div>
                  <!-- Sidebar buttons ends -->
                    
                  <!-- Sidebar navigation starts -->
          
          
                  <div class="sidey">
                     <ul class="nav">
                         <!-- Main navigation. Refer Notes.txt files for reference. -->
                         
                         <!-- Use the class "current" in main menu to hightlight current main menu -->
                         <li><a href="<?php echo base_url()."main"?>"><i class="fa fa-desktop"></i>Menú</a></li>
                         <li><a href="<?php echo base_url()."regidenu"?>"><i class="fa fa-group"></i>Denuncias</a></li>
                         <li class="has_submenu">
                             <a href="<?php echo base_url()."main/catalogo"?>">
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
                         <li><a href="<?php echo base_url()."dependencias/show_dependencias"?>"><i class="fa fa-group"></i>Dependencias</a></li>
                         <li><a href="<?php echo base_url()."main/ciudadanos"?>"><i class="fa fa-group"></i>Ciudadanos</a></li>
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
            <h3 class="pull-left"><i class="fa fa-desktop"></i>Menú</h3>  
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- Black block ends -->
        
        <!-- Content starts -->
        
        <div class="container">
          <div class="page-content">
            <!-- Content starts -->
        
        <div class="container">
          <div class="page-content page-statement">
            <div class="row">

              <div class="col-md-4 col-sm-4">
<<<<<<< Updated upstream
                <a href="<?php echo base_url()."regidenu"?>">
=======
                <a href="<?php echo base_url()."registros_denuncias"?>">
>>>>>>> Stashed changes
              <div class="well br-red">
                  <i class="fa fa-group"></i>
                <h2>Denuncias</h2>                
              </div>
                </a>
              </div>

              <div class="col-md-4 col-sm-4">
                <a href="index.html">
              <div class="well br-lblue">
                  <i class="fa fa-folder-open"></i>
                <h2>Catálogo</h2>                
              </div>
                </a>
              </div>

              <div class="col-md-4 col-sm-4">
                <a href="<?php echo base_url(). "main/reportes"?>">
              <div class="well br-green">
                <i class="fa fa-bar-chart-o"></i>
                <h2>Reportes</h2>                
              </div>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
              <hr />
              <hr />
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