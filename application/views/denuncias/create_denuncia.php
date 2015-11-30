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
            <h3 class="pull-left"><i class="fa fa-university"></i>Denuncias</h3>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- Black block ends -->

        <!-- Content starts -->

        <div class="container">
          <div class="page-content">
            <!-- Content starts -->

        <div class="container">
        <div class="page-content page-users">
            <div class="page-tabs">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li  class="active"><a href="#addnew" data-toggle="tab">Nueva Denuncia</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade active in" id="search">

                  <div class="widget">



                    <div class="clearfix"></div>

                    <?php echo validation_errors(); ?>
                    <?php echo form_open('regidenu/add_denuncia', array('class'=>'form-horizontal')); ?>
                      <div class="form-group">
                        <label for="nombre" class="col-md-4 control-label" style="padding-left: 10px; width: 125px;padding-right: 5px;">Nombre:</label>
                          <div class="col-md-6" style="margin-top: 15px;">
                           <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre">
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="apellidoPa" class="col-md-4 control-label" style="padding-left: 5px; width: 125px;padding-right: 5px;">Apellido Paterno:</label>
                          <div class="col-md-6" style="margin-top: 15px;">
                            <input type="text" class="form-control" name="apellidoPa" placeholder="Apellidos">
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="apellidoMa" class="col-md-4 control-label" style="padding-left: 5px; width: 125px;padding-right: 5px;">Apellido Materno:</label>
                          <div class="col-md-6" style="margin-top: 15px;">
                            <input type="text" class="form-control" name="apellidoMa" placeholder="Apellidos">
                          </div>
                      </div>

                      <div class="col-md-12 row">
                        <label for="calle" class="col-md-2 control-label" style="padding-left: 10px; width: 110px; padding-right: 5px;">Calle:</label>
                          <div class="col-md-3" style="margin-top: 15px;">
                            <input type="text" style="width: 226px;" class="form-control" name="calle" placeholder="Calle">
                          </div>

                        <label for="noExt" class="col-md-3 control-label" style= "width: 145px; padding-right: 5px; padding-left: 30px;">No. Exterior:</label>
                          <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;width: 100px;">
                            <input type="text" class="form-control" name="noExt" placeholder="Número interior">
                          </div>

                        <label for="noInt" class="col-md-3 control-label" style= "width: 100px; padding-right: 5px; padding-left: 5px;">No. Interior:</label>
                          <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;width: 100px;">
                            <input type="text" class="form-control" name="noInt" placeholder="Número interior">
                          </div>
                      </div>

                      <div class="col-md-12 row">
                         <label for="cp" class="col-md-2 control-label" style= "width: 110px; padding-right: 5px; padding-left: 50px;">CP:</label>
                          <div class="col-md-2" style="margin-top: 15px;padding-left: 15px;width: 150px;">
                            <input type="text" class="form-control" name="cp" placeholder="CP">
                          </div>

                        <label for="colonia" class="col-md-2 control-label" style="padding-left: 5px; width: 71px;padding-right: 11px;">Colonia:</label>
                          <div class="col-md-4" style="margin-top: 15px;padding-left: 5px;">
                            <input type="text" class="form-control" name="colonia" placeholder="Colonia">
                          </div>
                      </div>
                      <div class="col-md-12 row">
                        <label for="localidad" class="col-md-2 control-label" style="padding-left: 35px; width: 111px;padding-right: 5px;">Localidad:</label>
                          <div class="col-md-3" style="margin-top: 15px;">
                            <input type="text" class="form-control" name="localidad" value="Aguascalientes">
                          </div>

                        <label for="t1" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 1:</label>
                          <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
                            <input type="text" class="form-control" name="tel1" placeholder="Teléfono 1">
                          </div>

                        <label for="t2" class="col-md-2 control-label" style= "width: 85px; padding-right: 5px; padding-left: 5px;">Teléfono 2:</label>
                          <div class="col-md-2" style="margin-top: 15px;padding-left: 5px;">
                            <input type="text" class="form-control" name="tel2" placeholder="Teléfono 2">
                          </div>
                      </div>
                      <div class="col-md-12 row">
                        <label for="asunto" class="col-md-2 control-label" style= "width: 115px; padding-right: 10px; padding-left: 45px;margin-top: 5px;">Asunto:</label>
                          <div class="col-md-10" style="margin-top: 15px;padding-left: 10px;">
                            <textarea type="text"  row="3"class="form-control" name="asunto" placeholder="Asunto"></textarea>
                          </div>
                      </div>
                      <div class="col-md-12 row">
                        <div class="col-md-2" style="width: 125px;padding-right: 5px;padding-left: 40px;margin-top: 10px;">
                          <label for="recepcion">Recepción:</label>
                        </div>
                        <div class="col-md-6" style="padding-left: 0px;width: 165px;margin-top: 5px;">
                          <select class="form-control" name="idRecepcion" style="margin-top: 15px;padding-left: 5px; weight: 150px;">
                            <?php foreach ($recepcion as $recepcion_item): ?>
                            <option value="<?php echo $recepcion_item['idRecepcion']?>"><?php echo $recepcion_item['descripcion']?></option>
                            <?php endforeach;?>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-12 row">
                        <div class="col-md-2" style="width: 120px;padding-right: 10px;padding-left: 22px;margin-top: 5px;">
                          <label for="dependencia">Dependencia:</label>
                        </div>
                          <div class="col-md-6" style="padding-left: 5px;width: 165px;">
                            <select class="form-control" name="idDependencia" style="margin-top: 15px;padding-left: 5px; weight: 150px;">
                              <?php foreach ($dependencias as $dependencia_item): ?>
                              <option value="<?php echo $dependencia_item['idDependencia']?>"><?php echo $dependencia_item['dependencia']?></option>
                              <?php endforeach;?>
                            </select>
                          </div>
                      </div>
                          <input type="hidden" name="idEstatus" value="<?php echo$estatus[0]['idEstatus']?>">
                      </div>
                      <input type="submit" value="Enviar" class="btn btn-success">
                        <a class="btn btn-danger" href="<?php echo site_url('regidenu/buscar')?>">Cancelar</a>
                </form>
                </div>
                </div>

<!-- Add new Registro -->
                <div class="tab-pane fade" id="addnew">
                <h4>Nueva Dependencia</h4>


                <!--<form class="form-horizontal" role="form">-->


                </div>

<!--hasta aqui -->

              </div>
            </div>
          </div>
      </div>
          </div>
        </div>
        <!-- Content ends -->
        </div>
            <!-- Mainbar ends -->

            <div class="clearfix"></div>
         </div>
      </div>


  </body>
  <script type="text/javascript">
    $(function(){
      $("#nombre").autocomplete({
        source: function (request, response) {
           $.ajax({
             url:"/lay/ciudadanos/autocomplete_ciudadanos",
             dadtaType: 'json',
             data: request,
             success: function (data) {
               var out = $.parseJSON(data);
                       response($.each(out, function(i, item) {

                          return {

                              label: item.nombre,
                              value: item.idCiudadano
                          };
                      }));
             },
            //  response:function (data) {
            //    response(data);
            //  }
           });
        },
      });
    });
  </script>
</section>
