<section>


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Highcharts lib examples</title>
  <style type="text/css">
    a, a:link, a:visited {
      color: #444;
      text-decoration: none;
    }
    a:hover {
      color: #000;
    }
    .left {
      float: left;
    }
    #menu {
      width: 20%;
    }
    #g_render {
      width: 80%;
    }
    li {
      margin-bottom: 1em;
    }
  </style>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load("jquery", "1.4.4");
  </script>
  <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
</head>


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
            <div class="text-center">

          </div>
      </div>
      <?php echo $pen?>
      <?php echo $aten?>
          </div>
        </div>
        <!-- Content ends -->       
        </div>
            <!-- Mainbar ends -->
            
            <div class="clearfix"></div>
         </div>
     <!-- </div>         -->

     <div id="g_render"  class="left">
    <?php if (isset($charts)) echo $charts; ?>
    <?php if (isset($json)): ?>
      <h3>Json string output: associative array with global options and 'local options' (for each graph)</h3>
      <pre><?php echo print_r($json); ?></pre>
    <?php endif; if (isset($array)): ?>
      <h3>Array output: associative array with global options and 'local options' (for each graph)</h3>
      <pre><?php echo print_r($array); ?></pre>
    <?php endif; ?>
  </div>

  </body>   
</section>