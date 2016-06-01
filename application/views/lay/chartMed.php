<section>
<body>                      
                              
    <!-- Quick setting box starts -->      
      <div class="out-container">
         <!--<div class="outer">-->                      
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
            <h3 class="pull-left"><i class="fa fa-bar-chart-o"></i>Gráfica</h3>
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
                <div class="text-center">             
                <h3 class="pull-left">Cantidad de denuncias por medio</h3>           
                <canvas id="chart-area3" width="600" height="200"></canvas>
               
                </div>
              </div>
            </div>
        <!-- Content ends -->       
          </div>
      
        </div>

        <script src="Chart.js"></script>

<?php if ($denuncias): ?>
      
<?php else: ?>
  <body>
    <br>
  <h2 id="title">No se encontraron registros</h1>
  </body>
<?php endif; ?>


  <?php foreach ($denuncias as $denu): ?>
    <?php $arrayPHP[]= array($denu['descripcion']); ?>
    <?php $arrayNum[]= array($denu['total_denuncias']); ?>
   <?php endforeach; ?> 


  

<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayJS=<?php echo json_encode($arrayPHP);?>;
    var arrayJSNum=<?php echo json_encode($arrayNum);?>;
 
    // Mostramos los valores del array
    

</script>

<script type="text/javascript">  

  var barChartData = {
   //  labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio"],
    labels : arrayJS,
    datasets : [
      
      {
        fillColor : "#e9e225",
        strokeColor : "#ffffff",
        highlightFill : "#ee7f49",
        highlightStroke : "#ffffff",
        //data : [40,50,70,40,85,55,15]
        data : arrayJSNum
      }
    ]

  } 
var ctx3 = document.getElementById("chart-area3").getContext("2d");
      
window.myPie = new Chart(ctx3).Bar(barChartData, {responsive:true});

</script>

  </body> 

</section>