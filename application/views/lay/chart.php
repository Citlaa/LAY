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
          </div>00
        </div>
        <!-- Page heading ends -->
        
              
        <!-- Black block starts -->
        <div class="blue-block">
          <div class="page-title">
            <h3 class="pull-left"><i class="fa fa-desktop"></i>Chart</h3>                        
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
                <h3 class="pull-left">Dependencias</h3>           
                <canvas id="chart-area3" width="600" height="200"></canvas>
               
                </div>
              </div>
            </div>
        <!-- Content ends -->       
          </div>
      
        </div>

        <script src="Chart.js"></script>


        

<script>
  var barChartData = {
    labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio"],
    datasets : [
      
      {
        fillColor : "#e9e225",
        strokeColor : "#ffffff",
        highlightFill : "#ee7f49",
        highlightStroke : "#ffffff",
        data : [40,50,70,40,85,55,15]
      }
    ]

  } 
    
var ctx3 = document.getElementById("chart-area3").getContext("2d");
      
window.myPie = new Chart(ctx3).Bar(barChartData, {responsive:true});

</script>




  </body> 

</section>