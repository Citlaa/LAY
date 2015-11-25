<section>
  <h2>Edición de ciudadano</h2>
  <div class="container-fluid">

    <?php echo validation_errors(); ?>
    <?php echo form_open('ciudadanos/editar_ciudadano', array('class'=>'form-horizontal')); ?>
    <input type="hidden" name="idCiudadano" value="<?php echo $ciudadano[0]['idCiudadano'];?>">
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" name="nombre" class="form-control" value="<?php echo $ciudadano[0]['nombre']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="apellidoPa" class="col-sm-2 control-label">Apellido paterno:</label>
      <div class="col-sm-10">
        <input type="text" name="apellidoPa" class="form-control" value="<?php echo $ciudadano[0]['apellidoPa']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="apellidoMa" class="col-sm-2 control-label" >Apellido materno:</label>
      <div class="col-sm-10">
        <input type="text" name="apellidoMa" class="form-control" value="<?php echo $ciudadano[0]['apellidoMa']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="tel1" class="col-sm-2 control-label">Teléfono:</label>
      <div class="col-sm-10">
        <input type="text" name="tel1" class="form-control" value="<?php echo $ciudadano[0]['tel1']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="tel1" class="col-sm-2 control-label">Teléfono alt:</label>
      <div class="col-sm-10">
        <input type="text" name="tel2" class="form-control" value="<?php echo $ciudadano[0]['tel2']; ?>">
      </div>
    </div>
    <button type="submit" class="btn btn-success">Editar</button>
    <a  href="<?php echo site_url('regidenu/mostrar_busqueda');?>" class="btn btn-danger">Cancelar</a>
  </form>
</div>

</section>
