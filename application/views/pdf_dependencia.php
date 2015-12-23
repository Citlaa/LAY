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
<?php if ($denuncias): ?>
    <body>
    <h2 id=" top title">Reporte Generado</h2>
    <h3>Reporte de <?php echo utf8_decode($denuncias[0]['dependencia']); ?></h3>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              Fecha
            </th>
            <th>
              Ciudadano
            </th>
            <th>
              Estatus
            </th>
            <th>
              <?php echo utf8_decode('Recepción'); ?>
            </th>
            <th>
              <?php echo utf8_decode('Dirección'); ?>
            </th>
            <th>
              Medio
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
                  <?php echo utf8_decode($denuncia['fecha']); ?>
                </td>
                <td>
                  <?php echo utf8_decode($denuncia['ciudadano']); ?>
                </td>
                <td>
                  <?php echo utf8_decode($denuncia['estatus']); ?>
                </td>
                <td>
                  <?php echo utf8_decode($denuncia['recepcion']); ?>
                </td>
                <td>
                  <?php echo utf8_decode($denuncia['direccion']); ?>
                </td>
                <td>
                  <?php echo utf8_decode($denuncia['medio']); ?>
                </td>
                <td>
                  <?php echo utf8_decode($denuncia['asunto']); ?>
                </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
</body>
</body>
<?php else: ?>
  <body>
  <h2 id="title">No se encontraron registros</h1>
  </body>
<?php endif; ?>
</html>