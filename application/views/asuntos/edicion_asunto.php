<section>
  <h2>Edición de asunto</h2>
  <div class="container-fluid">

    <?php echo validation_errors(); ?>
    <?php echo form_open('asuntos/editar_asunto', array('class'=>'form-horizontal')); ?>
    <input type="hidden" name="idAsunto" value="<?php echo $asunto[0]['idAsunto'];?>">
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Descripcion:</label>
      <div class="col-sm-10">
        <input type="text" name="descripcion" class="form-control" value="<?php echo $asunto[0]['descripcion']; ?>">
      </div>
    </div>
    
    <button type="submit" class="btn btn-success">Editar</button>
    <a  href="<?php echo site_url('regidenu/mostrar_busqueda');?>" class="btn btn-danger">Cancelar</a>
  </form>
</div>

</section>
