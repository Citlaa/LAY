  <section>
<body>
    <!-- Quick setting box starts -->
      <div class="quick-slide hidden-xs"></div>
      <div class="out-container">

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
  <ul class="nav nav-tabs page-content li" role="tablist" id="myTab">    
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ciudadano</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Dependencia</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Colonia</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Fecha</a></li>
    <li role="presentation"><a href="#periodo" aria-controls="periodo" role="tab" data-toggle="tab">Periodo</a></li>
    <li role="presentation"><a href="#estatus" aria-controls="estatus" role="tab" data-toggle="tab">Estatus</a></li>
    <li role="presentation"><a href="#recepcion" aria-controls="recepcion" role="tab" data-toggle="tab">Modo de recepción</a></li>
    <li role="presentation"><a href="#medios" aria-controls="medios" role="tab" data-toggle="tab">Medios</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <h1>Denuncias por ciudadano</h1>
      <input type="hidden" name="idCiudadano" id="idCiudadano">     

      <?php echo form_open('reportes/checkboxes', array('class'=>'form-horizontal'), 'get'); ?>
        <input type="checkbox" name="check" value="Ciudadano" id="fancy-checkbox-default" autocomplete="off" />
        <label for="fancy-checkbox-default" class="[ btn btn-default active ]">
          Denuncias por Ciudadanos
        </label>        
        <input type="submit" value="Enviar" class="btn btn-success">
      </form>

      <input type="text" name="nombrei" class="form-control" id="nombrei" style="margin-top: 10px;width: 486px;">      

      
      <hr style="border-bottom-width: 0px;">
      
            
      <!--<button id="buscarDenCiu" class="btn btn-enter btn-lg"> <span class="fa fa-file-pdf-o"></span> Buscar denuncias PDF</button>
      <button id="buscarDenCiuW" class="btn btn-enter btn-lg"><span class="fa fa-file-word-o"></span> Buscar denuncias Word</button>-->
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <h1>Denuncias por dependencia</h1>
      <input type="hidden" name="idDependencia" id="idDependencia">
      <?php echo form_open('reportes/checkboxes', array('class'=>'form-horizontal'), 'get'); ?>
        <input type="checkbox" name="check" value="dependencia" id="fancy-checkbox-default" autocomplete="off" />
        <label for="fancy-checkbox-default" class="[ btn btn-default active ]">
          Denuncias por Dependencias
        </label>
        <input type="submit" value="Enviar" class="btn btn-success">
      </form>

      <input type="text" name="dependenciai" class="form-control" id="dependenciai" style="margin-top: 10px;width: 486px;">
      
      

      <hr style="border-bottom-width: 0px;"> 
      <!--<button id="buscarDenDep" class="btn btn-enter btn-lg"><span class="fa fa-file-pdf-o"></span> Buscar denuncias PDF</button>
      <button id="buscarDenDepW" class="btn btn-enter btn-lg"><span class="fa fa-file-word-o"></span> Buscar denuncias Word</button>-->
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
      <h1>Denuncias por colonia</h1>
      <?php echo form_open('reportes/checkboxes', array('class'=>'form-horizontal'), 'get'); ?>
        <input type="checkbox" name="check" value="colonia" id="fancy-checkbox-default" autocomplete="off" />
        <label for="fancy-checkbox-default" class="[ btn btn-default active ]">
          Denuncias por Colonia
        </label>
        <input type="submit" value="Enviar" class="btn btn-success">
      </form>
        <input type="text" name="coloniai" class="form-control" id="coloniai" style="margin-top: 10px;width: 486px;">      
        
      <hr style="border-bottom-width: 0px;">
      <!--<button id="buscarDenCol" class="btn btn-enter btn-lg"><span class="fa fa-file-pdf-o"></span> Buscar denuncias PDF</button>
      <button id="buscarDenColW" class="btn btn-enter btn-lg"><span class="fa fa-file-word-o"></span> Buscar denuncias Word</button>-->
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">
      <h1>Denuncias por fecha</h1>
      <?php echo form_open('reportes/checkboxes', array('class'=>'form-horizontal'), 'get'); ?>
        <input type="checkbox" name="check" value="fecha" id="fancy-checkbox-default" autocomplete="off" />
        <label for="fancy-checkbox-default" class="[ btn btn-default active ]">
          Denuncias por Fecha
        </label>
        <input type="submit" value="Enviar" class="btn btn-success">
      </form>

        <input type="date" name="fechai" class="form-control date" id="fechai" style="margin-top: 10px;width: 200px;">          

      <hr style="border-bottom-width: 0px;">
      <!--<button id="buscarDenFecha" class="btn btn-enter btn-lg"><span class="fa fa-file-pdf-o"></span> Buscar denuncias PDF</button>
      <button id="buscarDenFechaW" class="btn btn-enter btn-lg"><span class="fa fa-file-word-o"></span> Buscar denuncias Word</button>-->
    </div>
    <div role="tabpanel" class="tab-pane" id="periodo">
      <h1>Denuncias por periodo</h1>
      <?php echo form_open('reportes/checkboxes', array('class'=>'form-horizontal'), 'get'); ?>
        <input type="checkbox" name="check" value="periodo" id="fancy-checkbox-default" autocomplete="off" />
        <label for="fancy-checkbox-default" class="[ btn btn-default active ]">
          Denuncias por Periodo
        </label>
        <input type="submit" value="Enviar" class="btn btn-success">
      </form>
      <form class="form-inline">
        <div class="form-group">
          <input type="date" class="form-control" id="periodoi">
        </div>
        <div class="form-group">
          <input type="date" class="form-control" id="periodof">
        </div>
      </form>
      <!--<button id="buscarDenPeriodo" class="btn btn-enter btn-lg"><span class="fa fa-file-pdf-o"></span> Buscar denuncias PDF</button>
      <button id="buscarDenPeriodoW" class="btn btn-enter btn-lg"><span class="fa fa-file-word-o"></span> Buscar denuncias Word</button>-->
    </div>
    <div role="tabpanel" class="tab-pane" id="estatus">
      <h1>Denuncias por estatus</h1>
      <?php echo form_open('reportes/checkboxes', array('class'=>'form-horizontal'), 'get'); ?>
        <input type="checkbox" name="check" value="estatus" id="fancy-checkbox-default" autocomplete="off" />
      <label for="fancy-checkbox-default" class="[ btn btn-default active ]">
        Denuncias por Estatus
      </label>
        <input type="submit" value="Enviar" class="btn btn-success">
      </form>
          
      <div class="col-md-3">
      <select class="col-md-4 form-control" id="idEstatus" style="margin-top: 10px;">
      <?php foreach ($estatuses as $estatus): ?>
        <option value="<?php echo $estatus['idEstatus'] ?>"><?php echo $estatus['descripcion'] ?></option>
      <?php endforeach ?>
      </select>
      </div>
      <div>
      <br>
      </div>
      <!--<button id="buscarDenEst" class="btn btn-enter btn-lg"><span class="fa fa-file-pdf-o"></span> Buscar denuncias PDF</button>
       <button id="buscarDenEstW" class="btn btn-enter btn-lg"><span class="fa fa-file-word-o"></span> Buscar denuncias Word</button>-->
    </div>
    <div role="tabpanel" class="tab-pane" id="recepcion">
      <h1>Denuncias por recepción</h1>
      <?php echo form_open('reportes/checkboxes', array('class'=>'form-horizontal'), 'get'); ?>
      <input type="checkbox" name="check" value="recepcion" id="fancy-checkbox-default" autocomplete="off" />
      <label for="fancy-checkbox-default" class="[ btn btn-default active ]">
        Denuncias por Recepción
      </label>
      <input type="submit" value="Enviar" class="btn btn-success">
      </form>
      
      <div class="col-md-3">
      <select class="col-md-4 form-control" id="idRecepcion" style="margin-top: 10px;">
      <?php foreach ($recepciones as $recepcion): ?>
        <option value="<?php echo $recepcion['idRecepcion'] ?>"><?php echo $recepcion['descripcion'] ?></option>
      <?php endforeach ?>
      </select>
      </div>
      <div>
      <br>
      </div>
      <!--<button id="buscarDenRec" class="btn btn-enter btn-lg"><span class="fa fa-file-pdf-o"></span> Buscar denuncias PDF</button>
      <button id="buscarDenRecW" class="btn btn-enter btn-lg"><span class="fa fa-file-word-o"></span> Buscar denuncias Word</button>-->
    </div>
    <div role="tabpanel" class="tab-pane" id="medios">
      <h1>Denuncias por medios</h1>
      <?php echo form_open('reportes/checkboxes', array('class'=>'form-horizontal'), 'get'); ?>
      <input type="checkbox" name="check" value="medios" id="fancy-checkbox-default" autocomplete="off" />
      <label for="fancy-checkbox-default" class="[ btn btn-default active ]">
        Denuncias por Medios
      </label>
      <input type="submit" value="Enviar" class="btn btn-success">
      </form>
      <div class="col-md-3">
      <select class="col-md-4 form-control" id="idMedios" style="margin-top: 10px;">
      <?php foreach ($medioses as $medios): ?>
        <option value="<?php echo $medios['idMedios'] ?>"><?php echo $medios['descripcion'] ?></option>
      <?php endforeach ?>
      </select>
      </div>
      <div>
      <br>
      </div>
      <!--<button id="buscarDenMed" class="btn btn-enter btn-lg"><span class="fa fa-file-pdf-o"></span> Buscar denuncias PDF</button>
      <button id="buscarDenMedW" class="btn btn-enter btn-lg"><span class="fa fa-file-word-o"></span> Buscar denuncias Word</button>-->
    </div>

    <div style="text-align:right">
      <button id="buscarDenMed" class="btn btn-enter btn-lg"><span class="fa fa-file-pdf-o"></span> Buscar denuncias PDF</button>
      <button id="buscarDenMedW" class="btn btn-enter btn-lg"><span class="fa fa-file-word-o"></span> Buscar denuncias Word</button>
    </div>
    
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

  $('#myTab li').click(function (e) {
 // e.preventDefault();
    $(this).find('a').tab('show');
 // $(this).tab('show');
     $(this).closest('ul').find('input[type="checkbox"]').prop('checked','');
     $(this).closest('li').find('input[type="checkbox"]').prop('checked','checked');

});



    $(function () {
      console.log($('#nombrei').val());
      $('#nombrei').autocomplete({
        source:'/lay/ciudadanos/autocomplete_ciudadanos_nombre',
        select: function (event, ui) {
          $('#idCiudadano').val(ui.item.id);
        }
      });



      $('#buscarDenCiu').click(function () {
        
        if(nombrei){
          window.location.replace("/lay/pdf_ciudadano/index/"+  $('#idCiudadano').val());
        }  
      });
       $('#buscarDenCiuW').click(function () {
        var nombrei = $("#nombrei").val();
        if(nombrei){
          window.location.replace("/lay/word_ciudadanos/index/"+  $('#idCiudadano').val());
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
        window.location.replace("/lay/pdf_dependencia/index/"+  $('#idDependencia').val());
        }
      });

      $('#buscarDenDepW').click(function () {
        var dependenciai = $("#dependenciai").val();
        if(dependenciai){
        window.location.replace("/lay/word_dependencias/index/"+  $('#idDependencia').val());
        }
      });


      $('#buscarDenCol').click(function () {
        var coloniai = $("#coloniai").val();
        if(coloniai){
        window.location.replace("/lay/pdf_direccion/index/"+  $('#coloniai').val());
        }
      });

      $('#buscarDenColW').click(function () {
        var coloniai = $("#coloniai").val();
        if(coloniai){
        window.location.replace("/lay/word_colonia/index/"+  $('#coloniai').val());
        }
      });


      $('#buscarDenFecha').click(function () {
        var fechai = $("#fechai").val();
        if(fechai){
        window.location.replace("/lay/pdf_fecha/index/"+  $('#fechai').val());
       }
      });

      $('#buscarDenFechaW').click(function () {
        var fechai = $("#fechai").val();
        if(fechai){
        window.location.replace("/lay/word_fecha/index/"+  $('#fechai').val());
       }
      });


      $('#buscarDenPeriodo').click(function () {
        var periodoi = $("#periodoi").val();
        var periodof = $("#periodof").val();
        if(periodoi && periodof){
        console.log('clic');
        window.location.replace("/lay/pdf_periodo/index/"+  $('#periodoi').val()+"/"+$('#periodof').val());
      }
      });


      $('#buscarDenPeriodoW').click(function () {
        var periodoi = $("#periodoi").val();
        var periodof = $("#periodof").val();
        if(periodoi && periodof){
        console.log('clic');
        window.location.replace("/lay/word_periodo/index/"+  $('#periodoi').val()+"/"+$('#periodof').val());
      }
      });


      $('#buscarDenEst').click(function () {
        
        window.location.replace("/lay/pdf_estatus/index/"+  $('#idEstatus').val());
      });

      $('#buscarDenEstW').click(function () {
        
        window.location.replace("/lay/word_estatus/index/"+  $('#idEstatus').val());
      });


      $('#buscarDenRec').click(function () {
        // console.log($('#idCiudadano').val());
        window.location.replace("/lay/pdf_recepcion/index/"+  $('#idRecepcion').val());
      });

      $('#buscarDenRecW').click(function () {
        // console.log($('#idCiudadano').val());
        window.location.replace("/lay/word_recepcion/index/"+  $('#idRecepcion').val());
      });


      $('#buscarDenMed').click(function () {
        
        window.location.replace("/lay/pdf_medio/index/"+  $('#idMedios').val());
      });

      $('#buscarDenMedW').click(function () {
        
        window.location.replace("/lay/word_medio/index/"+  $('#idMedios').val());
      });

    });
  </script>
</section>
