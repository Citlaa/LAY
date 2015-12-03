  <section>
<body>
    <!-- Quick setting box starts -->
      <div class="quick-slide hidden-xs"></div>
      <div class="out-container">
         <div class="outer">
            <!-- Sidebar starts -->
            <!-- Sidebar ends -->

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
            <h3 class="pull-left"><i class="fa fa-bar-chart-o"></i>Reportes</h3>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- Black block ends -->

        <!-- Content starts -->

        <div class="container">
          <div class="page-content">
            <!-- Content starts -->

        <div class="container">
          <!-- Nav tabs -->
  <ul class="nav nav-tabs page-content li" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ciudadano</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Dependencia</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Colonia</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Fecha</a></li>
    <li role="presentation"><a href="#periodo" aria-controls="periodo" role="tab" data-toggle="tab">Periodo</a></li>
    <li role="presentation"><a href="#estatus" aria-controls="estatus" role="tab" data-toggle="tab">Estatus</a></li>
    <li role="presentation"><a href="#recepcion" aria-controls="recepcion" role="tab" data-toggle="tab">Modo de recepción</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <h1>Denuncias por ciudadano</h1>
      <input type="hidden" name="idCiudadano" id="idCiudadano">
      <input type="text" name="nombrei" class="form-control" id="nombrei">
      <br>
      <button id="buscarDenCiu" class="btn btn-enter btn-lg"> Buscar denuncias PDF</button>
      <button id="buscarDenCiuW" class="btn btn-enter btn-lg"> Buscar denuncias Word</button>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <h1>Denuncias por dependencia</h1>
      <input type="hidden" name="idDependencia" id="idDependencia">
      <input type="text" name="dependenciai" class="form-control" id="dependenciai">
      <br>
      <button id="buscarDenDep" class="btn btn-enter btn-lg"> Buscar denuncias PDF</button>
      <button id="buscarDenDepW" class="btn btn-enter btn-lg"> Buscar denuncias Word</button>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
      <h1>Denuncias por colonia</h1>
      <input type="text" name="coloniai" class="form-control" id="coloniai">
      <br>
      <button id="buscarDenCol" class="btn btn-enter btn-lg"> Buscar denuncias PDF</button>
      <button id="buscarDenColW" class="btn btn-enter btn-lg"> Buscar denuncias Word</button>
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">
      <h1>Denuncias por fecha</h1>
      <input type="date" name="fechai" class="form-control date" id="fechai">
      <br>
      <button id="buscarDenFecha" class="btn btn-enter btn-lg"> Buscar denuncias PDF</button>
      <button id="buscarDenFechaW" class="btn btn-enter btn-lg"> Buscar denuncias Word</button>
    </div>
    <div role="tabpanel" class="tab-pane" id="periodo">
      <h1>Denuncias por periodo</h1>
      <form class="form-inline">
        <div class="form-group">
          <input type="date" class="form-control" id="periodoi">
        </div>
        <div class="form-group">
          <input type="date" class="form-control" id="periodof">
        </div>
      </form>
      <br>
      <button id="buscarDenPeriodo" class="btn btn-enter btn-lg"> Buscar denuncias PDF</button>
      <button id="buscarDenPeriodoW" class="btn btn-enter btn-lg"> Buscar denuncias Word</button>
    </div>
    <div role="tabpanel" class="tab-pane" id="estatus">
      <h1>Denuncias por estatus</h1>
      <div class="col-md-12">
      <select class="col-md-4 form-control" id="idEstatus">
      <?php foreach ($estatuses as $estatus): ?>
        <option value="<?php echo $estatus['idEstatus'] ?>"><?php echo $estatus['descripcion'] ?></option>
      <?php endforeach ?>
      </select>
      </div>
      <div>
      <br>
      </div>
      <button id="buscarDenEst" class="btn btn-enter btn-lg"> Buscar denuncias PDF</button>
       <button id="buscarDenEstW" class="btn btn-enter btn-lg"> Buscar denuncias Word</button>
    </div>
    <div role="tabpanel" class="tab-pane" id="recepcion">
      <h1>Denuncias por recepcion</h1>
      <div class="col-md-12">
      <select class="col-md-4" class="form-control" id="idRecepcion">
      <?php foreach ($recepciones as $recepcion): ?>
        <option value="<?php echo $recepcion['idRecepcion'] ?>"><?php echo $recepcion['descripcion'] ?></option>
      <?php endforeach ?>
      </select>
      </div>
      <div>
      <br>
      </div>
      <button id="buscarDenRec" class="btn btn-enter btn-lg"> Buscar denuncias PDF</button>
      <button id="buscarDenRecW" class="btn btn-enter btn-lg"> Buscar denuncias Word</button>
    </div>
  </div>

        <div class="page-content page-users">
            <div class="page-tabs">
              <!-- Nav tabs -->


              <!-- Tab panes -->
                </div>
                  <div>

                </div>
                </div>

<!-- Add new Registro -->



<!--hasta aqui -->

              </div>
            </div>
          </div>
      </div>
          </div>
        </div>
        <!-- Content ends -->
        </div>
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- Scroll to top -->
  </body>
  <script type="text/javascript">
    $(function () {      
      $('#nombrei').autocomplete({
        source:'/lay/ciudadanos/autocomplete_ciudadanos_nombre',
        select: function (event, ui) {
          $('#idCiudadano').val(ui.item.id);
        }
      });
      $('#buscarDenCiu').click(function () {
        var nombrei = $("#nombrei").val();
        if(nombrei){
          window.location.replace("http://localhost:80/lay/pdf_ciudadano/index/"+  $('#idCiudadano').val());
        }  
      });
       $('#buscarDenCiuW').click(function () {
        var nombrei = $("#nombrei").val();
        if(nombrei){
          window.location.replace("http://localhost:80/lay/word_ciudadanos/index/"+  $('#idCiudadano').val());
        }  
      });



      $('#dependenciai').autocomplete({
        source:'/lay/dependencias/dependencia_autocomplete_descripcion',
        select: function (event, ui) {
          $('#idDependencia').val(ui.item.id);
        }
      });
      $('#buscarDenDep').click(function () {
        var dependenciai = $("#dependenciai").val();
        if(dependenciai){
        window.location.replace("http://localhost:80/lay/pdf_dependencia/index/"+  $('#idDependencia').val());
        }
      });

      $('#buscarDenDepW').click(function () {
        var dependenciai = $("#dependenciai").val();
        if(dependenciai){
        window.location.replace("http://localhost:80/lay/word_dependencias/index/"+  $('#idDependencia').val());
        }
      });




      $('#buscarDenCol').click(function () {
        var coloniai = $("#coloniai").val();
        if(coloniai){
        window.location.replace("http://localhost:80/lay/pdf_direccion/index/"+  $('#coloniai').val());
        }
      });

      $('#buscarDenColW').click(function () {
        var coloniai = $("#coloniai").val();
        if(coloniai){
        window.location.replace("http://localhost:80/lay/word_colonia/index/"+  $('#coloniai').val());
        }
      });




      $('#buscarDenFecha').click(function () {
        var fechai = $("#fechai").val();
        if(fechai){
        window.location.replace("http://localhost:80/lay/pdf_fecha/index/"+  $('#fechai').val());
       }
      });

      $('#buscarDenFechaW').click(function () {
        var fechai = $("#fechai").val();
        if(fechai){
        window.location.replace("http://localhost:80/lay/word_fecha/index/"+  $('#fechai').val());
       }
      });




      $('#buscarDenPeriodo').click(function () {
        var periodoi = $("#periodoi").val();
        var periodof = $("#periodof").val();
        if(periodoi && periodof){
        console.log('clic');
        window.location.replace("http://localhost:80/lay/pdf_periodo/index/"+  $('#periodoi').val()+"/"+$('#periodof').val());
      }
      });

      $('#buscarDenPeriodoW').click(function () {
        var periodoi = $("#periodoi").val();
        var periodof = $("#periodof").val();
        if(periodoi && periodof){
        console.log('clic');
        window.location.replace("http://localhost:80/lay/word_periodo/index/"+  $('#periodoi').val()+"/"+$('#periodof').val());
      }
      });




      $('#buscarDenEst').click(function () {
        
        window.location.replace("http://localhost:80/lay/pdf_estatus/index/"+  $('#idEstatus').val());
      });

      $('#buscarDenEstW').click(function () {
        
        window.location.replace("http://localhost:80/lay/word_estatus/index/"+  $('#idEstatus').val());
      });




      $('#buscarDenRec').click(function () {
        // console.log($('#idCiudadano').val());
        window.location.replace("http://localhost:80/lay/pdf_recepcion/index/"+  $('#idRecepcion').val());
      });

      $('#buscarDenRecW').click(function () {
        // console.log($('#idCiudadano').val());
        window.location.replace("http://localhost:80/lay/word_recepcion/index/"+  $('#idRecepcion').val());
      });
    });
  </script>
</section>
