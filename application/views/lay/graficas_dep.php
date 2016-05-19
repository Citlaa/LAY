<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
    <title>Dependencias</title>
    <style type="text/css">
       body{
        font-family: "sans-serif", monospace;
        font-size: 10pt;
        background: url("plantilla.png") no-repeat fixed center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
       }
       #title{
        padding-top: 30px;
        text-align: center;
        font-family: Lucida Grande, Verdana, Sans-serif;
        font-size: 22px;
        color: #3B0B17;
      }

    </style>
    </head>
    <body>
                             
<!-- Quick setting box starts -->
<div class="quick-slide hidden-xs"></div>         
<div class="out-container">
<!-- Sidebar ends -->
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
<h3 class="pull-left"><i class="fa fa-group"></i>Total denuncias por dependencia</h3>  
<div class="clearfix"></div>
</div>
</div>
<div class="container">
<div class="page-content">
<div class="container">
<div class="page-content page-users">
<div class="page-tabs">
<div class="tab-content">
<div class="tab-pane fade active in" id="search">
<div class="widget">

<h3>Total_denuncias</h3>
<?php if ($denuncias): ?>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              Dependencia
            </th>
            <th>
              total_denuncias
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($denuncias as $denuncia): ?>
            <tr>
                <td>
                  <?php echo utf8_decode($denuncia['dependencia']); ?>
                </td>
                <td>
                  <?php echo utf8_decode($denuncia['total_denuncias']); ?>
                </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
<?php else: ?>
  <body>
    <br>
  <h2 id="title">No se encontraron registros</h1>
  </body>
<?php endif; ?>
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
</div>        
</body>
</html>