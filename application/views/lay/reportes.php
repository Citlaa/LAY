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
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ciudadano</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Dependencia</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Colonia</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Fecha</a></li>
    <li role="presentation"><a href="#settings" aria-controls="periodo" role="tab" data-toggle="tab">Periodo</a></li>
    <li role="presentation"><a href="#settings" aria-controls="estatus" role="tab" data-toggle="tab">Estatus</a></li>
    <li role="presentation"><a href="#settings" aria-controls="recepcion" role="tab" data-toggle="tab">Modo de recepción</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <h1>Denuncias por ciudadano</h1>
      <input type="hidden" name="idCiudadano" id="idCiudadano">
      <input type="text" name="nombrei" class="form-control" id="nombrei">
      <button id="buscarDenCiu" class="btn btn-primary btn-lg text-center"> Buscar denuncias</button>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <h1>Denuncias por denuncias</h1>
      <input type="text" name="dependenciai" class="form-control" id="dependenciai">
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
      <h1>Denuncias por colonia</h1>
      <input type="text" name="coloniai" class="form-control" id="coloniai">
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">
      <h1>Denuncias por fecha</h1>
      <input type="text" name="fechai" class="form-control" id="fechai">
    </div>
    <div role="tabpanel" class="tab-pane" id="periodo">
      <h1>Denuncias por periodo</h1>
      <input type="text" name="periodoi" class="form-control" id="periodoi">
    </div>
    <div role="tabpanel" class="tab-pane" id="estatus">
      <h1>Denuncias por estatus</h1>
      <input type="text" name="estatusi" class="form-control" id="estatusi">
    </div>
    <div role="tabpanel" class="tab-pane" id="recepcion">
      <h1>Denuncias por recepcion</h1>
      <input type="text" name="recepcioni" class="form-control" id="recepcioni">
    </div>
  </div>

        <div class="page-content page-users">
            <div class="page-tabs">
              <!-- Nav tabs -->


              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade active in" id="search">
                  <div class="row">
                <div class="col-md-1">
                <a type="button" name="button" class="btn btn-enter" href="<?php echo base_url('reportes/periodo');?>">Periodo</a></div>
                <div class="col-md-2" style="width: 130px;">
                <a type="button" name="button" class="btn btn-enter" href="<?php echo base_url('pdf_ci');?>">Exportar a PDF</a></div>
                <div class="col-md-2">
                <a type="button" name="button" class="btn btn-enter" href="<?php echo base_url('reportes/periodo');?>">Exportar a DOC</a></div>
                </div>
                <div class="widget">
                           <div class="widget-head">
                    <h5><i class="fa fa-university"></i>Reportes</h5>
                  </div>
                <!-- Search users -->

                <!-- <iframe src="<?php echo base_url('reportes/mostrar_reportes2');?>" width="900px" height="700px">
                  </iframe>  -->
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
        // var idCiudadano = $('#idCiudadano').val();
      });
      $('#buscarDenCiu').click(function () {
        // console.log($('#idCiudadano').val());
        window.location.replace("http://localhost:82/lay/pdf_ciudadano/index/"+  $('#idCiudadano').val());
      });
    });
  </script>
</section>
