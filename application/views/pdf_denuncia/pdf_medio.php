<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Medio</title>
    <style type="text/css">
       body{
        font-family: sans-serif;
        font-size: 10pt;
        background: url("plantilla.png");
        background-position: 0px 0px;
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
      <h2 id="title">Reporte Generado</h2>
      <h3>Reporte de denuncias por <?php echo utf8_decode($denuncias[0]['medio']); ?></h3>
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
                <?php echo utf8_decode($denuncia['dependencia']); ?>
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
                <?php echo utf8_decode($denuncia['asunto']); ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</body>
</html>
