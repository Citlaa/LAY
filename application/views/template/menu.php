<body>
  <div class="out-container">
    <div class="outer">
        <div class="sidebar">
                  <!-- Logo starts -->
                  <div class="logo">
                    <img src="<?php echo base_url("assets/img/LogoLAY.jpg");?>" widht="178px" height="180px">
                     
                  </div>
                  <!-- Logo ends -->
                  
                  <!-- Sidebar buttons starts -->
                  Hola, <strong><?php echo $username; ?></strong>! 
                  <div class="sidebar-buttons text-left">
                     
                     <!-- Logout button -->
                     
                     <div class="btn-group">                                         
                       <a href='<?php echo base_url()."auth/logout"?>' class="btn btn-black btn-xs"><i class="fa fa-power-off"></i></a>
                       <a href='<?php echo base_url()."auth/logout"?>' class="btn btn-danger btn-xs">Salir</a>
                     </div>
                    
                  </div>
                  <!-- Sidebar buttons ends -->
                    
                  <!-- Sidebar navigation starts -->
          
          
                  <div class="sidey">
                     <ul class="nav">
                         <!-- Main navigation. Refer Notes.txt files for reference. -->
                         
                         <!-- Use the class "current" in main menu to hightlight current main menu -->
                          
                         <li><a href="<?php echo base_url()."main"?>"><i class="fa fa-desktop"></i>Menú</a></li>
                         <li><a href="<?php echo base_url()."regidenu/buscar"?>"><i class="fa fa-group"></i>Denuncias</a></li>
                         <li class="has_submenu">
                             <a href="#">
                                 <i class="fa fa-folder-open"></i>Catálogo
                                 <!-- Icon to show dropdown -->
                                 <span class="caret pull-right"></span>
                             </a>
                             <!-- Sub navigation -->
                             <ul>
                                 <!-- Use the class "active" in sub menu to hightlight current sub menu -->
                                 <li><a href="<?php echo site_url('dependencias/show_dependencias')?>"><i class="fa fa-angle-double-right"></i>Dependencia</a></li>
                                 <li><a href="<?php echo site_url('ciudadanos/mostrar_ciudadanos')?>"><i class="fa fa-angle-double-right"></i>Ciudadanos</a></li>
                             </ul>

                         </li>  
                         <!--<li><a href="<?php echo base_url()."dependencias/show_dependencias"?>"><i class="fa fa-group"></i>Dependencias</a></li>
                         <li><a href="<?php echo base_url()."main/ciudadanos"?>"><i class="fa fa-group"></i>Ciudadanos</a></li> -->
                         <li><a href="<?php echo base_url()."reportes"?>"><i class="fa fa-bar-chart-o"></i>Reportes</a></li>
                      </ul>               
                  </div>
                  <!-- Sidebar navigation ends -->
        </div>
    </div>
    </div>
  </body>
