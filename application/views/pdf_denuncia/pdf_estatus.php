<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Estatus</title>
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
          margin-top: 130px;
          margin-bottom: 100px;
        }
    </style>
    </head>

    <body>
      <h2 id=" top title">Reporte Generado</h2>
    <div class="table" id="topTable">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              Nombre
            </th>
            <th>
              Direccion
            </th>
            <th>
              Fecha
            </th>
            <th>
              Estatus
            </th>
            <th>
              Recepcion
            </th>
            <th>
              Asunto
            </th>
            <th>
              Dependencia
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($denuncias as $denuncia): ?>
            <tr>
                <td>
                  <?php echo $denuncia['nombre'] ?>
                </td>
                <td>
                  <?php echo $denuncia['colonia'] ?>
                </td>
                <td>
                  <?php echo $denuncia['fecha'] ?>
                </td>
                <td>
                  <?php echo $denuncia['descripcion'] ?>
                </td>
                <td>
                  <?php echo $denuncia['descripcion'] ?>
                </td>
                <td>
                  <?php echo $denuncia['descripcion'] ?>
                </td>
                <td>
                  <?php echo $denuncia['descripcion'] ?>
                </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</body>
</html>
