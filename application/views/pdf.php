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
            align-items: center;
        }
        #topTable{
            padding-top: 30px;
        }

    </style>
    </head>

    <body>
    <div class="table" id="top">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              Fecha
            </th>
            <th>
              Dependencia
            </th>
            <th>
              Estatus
            </th>
            <th>
              Recepción
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($denuncias as $denuncia): ?>
            <tr>
                <td>
                  <?php echo $denuncia['fecha'] ?>
                </td>
                <td>
                  <?php echo $denuncia['idDependencia'] ?>
                </td>
                <td>
                  <?php echo $denuncia['idEstatus'] ?>
                </td>
                <td>
                  <?php echo $denuncia['calle'] ?>
                </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</body>
</html>
