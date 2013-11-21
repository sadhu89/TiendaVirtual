<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title"><span class="bold">NUEVO LIBRO</span></h3>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="row-fluid">
                <form method="post" action="<?= base_url()?>admin/catalogo/agregar">
                    <div class="span2">
                        <div class="form-group">
                            <label for="titulo">Imagen</label>
                            <div class="thumbnail" style="width: 150px; height: 150px;"><img src="http://www.placehold.it/150x150/EFEFEF/AAAAAA&text=no+image"></div><br>
                            <a class="file-input-wrapper btn btn-info ">Seleccionar imagen<input type="file" title="Seleccionar imagen"></a>
                            <span class="file-input-name"></span>
                        </div>
                    </div>
                    <div class="span10">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa el Titulo" required>
                            <?php echo form_error('titulo'); ?>
                        </div>
                        <label for="titulo">Categoria</label>
                        <select class="form-control">
                            <option value="none">Seleccione una categor�a</option>
                            <option value="categoria1">Categor�a 1</option>
                            <option value="categoria2">Categor�a 2</option>
                            <option value="categoria3">Categor�a 3</option>                        
                        </select>

                        <div class="form-group">
                            <label for="autor">Autor</label>
                            <input type="text" class="form-control" id="autor" name="autor" placeholder="Ingresa el Autor" required>
                            <?php echo form_error('autor'); ?>
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la Descripcion" required>
                            <?php echo form_error('descripcion'); ?>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Precio</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la Descripcion" required>
                            <?php echo form_error('descripcion'); ?>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Cantidad</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la Descripcion" required>
                            <?php echo form_error('descripcion'); ?>
                        </div>
                        <div class="actions">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar</button>&nbsp;<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-floppy-remove"></span> Cancelar</button>
                        </div><br>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

