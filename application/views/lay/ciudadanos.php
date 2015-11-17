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
                     
                     <div class="btn-group">
                       <a href="login.html" class="btn btn-black btn-xs"><i class="fa fa-power-off"></i></a>
                       <a href="login.html" class="btn btn-danger btn-xs">Salir</a>
                     </div>
                  </div>
                  <!-- Sidebar buttons ends -->
                    
                  <!-- Sidebar navigation starts -->
          <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
          
                  <div class="sidey">
                     <ul class="nav">
                         <!-- Main navigation. Refer Notes.txt files for reference. -->
                         
                         <!-- Use the class "current" in main menu to hightlight current main menu -->
                         <li><a href="<?php echo base_url()."main"?>"><i class="fa fa-desktop"></i>Menú</a></li>
                         
                         <li><a href="<?php echo base_url()."regidenu"?>"><i class="fa fa-group"></i>Denuncias</a></li>
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
            <h3 class="pull-left"><i class="fa fa-group"></i>Ciudadanos</h3>  
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

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade active in" id="search">
          
                  <div class="widget">
                           <div class="widget-head">
                    <h5><i class="fa fa-group"></i>Ciudadanos</h5>
                  </div>
                           <div id="data-table_filter" class="dataTables_filter">
                              <label>Buscar:<input type="search" class placeholder aria-controls="data-table">
                              </label>
                           </div>
                           <div class="widget-body no-padd">
                <div class="table-responsive">
                  <table class="table table-hover table-bordered ">
                   <thead>
                   <tr>
                     <th>Nº</th>
                     <th>Nombre</th>
                     <th>Apellido Paterno</th>
                     <th>Apellido Materno</th>
                     <th>Teléfono 1</th>
                     <th>Teléfono 2</th>
                     <th>Opciones</th>
                   </tr>
                   </thead>
                   <tbody>
                   
                   <?php
                   if($ciudadanos != false)
                   {
                      foreach($ciudadanos->result() as $row){
                      echo "<tr>";
                          echo "<td>".$row->idCiudadano."</td>";
                          echo "<td>".$row->nombre."</td>";
                          echo "<td>".$row->apellidoPa."</td>";
                          echo "<td>".$row->apellidoMa."</td>";
                          echo "<td>".$row->tel1."</td>";
                          echo "<td>".$row->tel2."</td>";
                          echo "<td>";                            
                            echo "<a class='btn btn-xs btn-warning' href=".base_url()."dependencias/edit_dependencia/".$row->idCiudadano."><i class='fa fa-pencil'></i> </a> |";
                            echo "<a class='btn btn-xs btn-danger' href=".base_url()."dependencias/delete_dependencia/".$row->idCiudadano."><i class='fa fa-times'></i> </a>";
                            
                          echo "</td>";
                        echo "</tr>";
                    }
                     
                   }else{
                     echo "No hay registros";
                   }
                    

                   ?>


                   </tbody>
                 </table>
                             </div>
                           </div>
               
               <div class="widget-foot">
              
                <ul class="pagination pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                              </ul>
                               
                               <div class="clearfix"></div>           
               </div>
            
                    <div class="pull-right">
                      <a href="registros.html" class="btn btn-info" role="button">Nuevo Cuidadano</a>
                    </div>
                    <div class="clearfix"></div>                  
                </div>                                     
                </div>
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