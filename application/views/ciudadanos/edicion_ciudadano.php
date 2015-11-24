<section>
  <h2>Edición de ciudadano</h2>
  <div class="container-fluid">

    <?php echo validation_errors(); ?>
    <?php echo form_open('regidenu/add_denuncia', array('class'=>'form-horizontal')); ?>
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" name="nombre" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="apellidoPa" class="col-sm-2 control-label">Apellido paterno:</label>
      <div class="col-sm-10">
        <input type="text" name="apellidoPa" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="apellidoMa" class="col-sm-2 control-label">Apellido materno:</label>
      <div class="col-sm-10">
        <input type="text" name="apellidoMa" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="tel1" class="col-sm-2 control-label">Teléfono:</label>
      <div class="col-sm-10">
        <input type="text" name="tel1" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="tel1" class="col-sm-2 control-label">Teléfono alt:</label>
      <div class="col-sm-10">
        <input type="text" name="tel1" class="form-control">
      </div>
    </div>
    <button type="submit" class="btn btn-success">Editar</button>
    <a  href="<?php echo site_url('regidenu/mostrar_busqueda');?>" class="btn btn-danger">Cancelar</a>
  </form>
</div>

</section>
