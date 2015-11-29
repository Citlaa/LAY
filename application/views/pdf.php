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
       #title{
            text-align: center;
            font-family: Lucida Grande, Verdana, Sans-serif;
            font-size: 22px;
            color: #3B0B17;
        }
        #top{
            padding-top: 150px;
        }
        #topTable{
            padding-top: 30px;
        }
        
    </style>
    </head>

    <body>
    <div id="footer">
        <!--aqui se muestra el numero de la pagina en numeros romanos-->
        <p class="page"></p>
    <h2 id="top title">Reporte Generado</h2>
    <div id="table-responsive topTable">
    <div>  
        <iframe src="<?php echo site_url('reportes/mostrar_repotes2');?>" width="900px" height="700px">hey!</iframe>                                  
    </div>
    </div>
    </div>
</body>
</html>
