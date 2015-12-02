<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Ciudadanos</title>
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
            padding-top: 70px;
            text-align: center;
            font-family: Lucida Grande, Verdana, Sans-serif;
            font-size: 22px;
            color: #3B0B17;
        }

    </style>
    </head>

    <body>
      <h2 id=" top title">Reporte Generado</h2>
    <h3>Reporte de <?php echo $denuncias[0]['dependencia'] ?></h3>
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
              Recepcion
            </th>
            <th>
              Direccion
            </th>
            <th>
              Asunto
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
                  <?php echo $denuncia['ciudadano'] ?>
                </td>
                <td>
                  <?php echo $denuncia['estatus'] ?>
                </td>
                <td>
                  <?php echo $denuncia['recepcion'] ?>
                </td>
                <td>
                  <?php echo $denuncia['direccion'] ?>
                </td>
                <td>
                  <?php echo $denuncia['asunto'] ?>
                </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
</body>
</html>