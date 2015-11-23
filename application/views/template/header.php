<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login/Register </title>
    
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">

     
    <!--jQuery-->
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <!--<script src="<?php echo base_url("assets/js/jquery-ui.min.js");?>"></script>   -->
    <script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>   

    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap-switch.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/fullcalendar.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/font-awesome.min.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/jquery-ui.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/jquery.gritter.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/jquery.dataTables.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/prettyPhoto.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/rateit.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css");?>"/>
    
        
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
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
                         <li><a href="<?php echo base_url()."regidenu/buscar"?>"><i class="fa fa-group"></i>Denuncias</a></li>
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
    </div>
    </div>
  </body>
