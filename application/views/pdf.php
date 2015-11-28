<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
       body{
        font-family: sans-serif;
        font-size: 10pt;
        background: url("plantilla.png") no-repeat fixed center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
       }
       .title{
            text-align: center;
            font-family: Lucida Grande, Verdana, Sans-serif;
            font-size: 18px;
            color: #4F5155;
        }
        .top{
            padding-top: 120px;
        }
        
    </style>
    </head>

    <body>
    <!--header para cada pagina-->
    <div id="header">
    </div>
    <!--footer para cada pagina-->
    <div id="footer">
    <h2 class="top title">Reporte Generado</h2>    

    <div class="table-responsive">
                     
        <iframe src="<?php echo site_url('pdf_ci/mostrar_reportes2');?>" width="900px" height="700px"></iframe>                                  

    </div>
    </div>
</body>
</html>
