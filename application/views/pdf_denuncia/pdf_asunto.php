<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Ciudadanos</title>
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
      <?php if ($denuncias): ?>

    <h2 id="title">Reporte Generado</h2>
    <div class="table">
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
              <?php echo utf8_decode('Recepción'); ?>
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
                  <?php echo $denuncia['direccion'] ?>
                </td>
                <td>
                  <?php echo $denuncia['fecha'] ?>
                </td>
                <td>
                  <?php echo $denuncia['estatus'] ?>
                </td>
                <td>
                  <?php echo $denuncia['recepcion'] ?>
                </td>
                <td>
                  <?php echo $denuncia['asuntos'] ?>
                </td>
                <td>
                  <?php echo $denuncia['dependencia'] ?>
                </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</body>
<?php else: ?>
  <h1>No se encontraron registros</h1>
<?php endif; ?>
</html>
