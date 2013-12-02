<div class="container">

    <div class="row formulario">
        <div class="col-sm-offset-4 col-sm-4">

            <h2 class="text-center">REGISTRO</h2>
            <form method="post" action="<?= base_url()?>cliente/registrar">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu Nombre" required>
                    <?php echo form_error('nombre'); ?>
                </div>
                <label for="email">Correo Electrónico</label>
                <div class="form-group input-group">
                    
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>                    <input type="email" class="form-control" name="email" placeholder="Ingresa tu Correo Electrónico" required>
                </div>
                <div class="form-group">
                    <label for="clave">Contraseña</label>
                    <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" required>
                    <?php echo form_error('clave'); ?>
                    <label for="clave">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirma_clave" name="confirma_clave" placeholder="Confirmar Contraseña" required >
                    <?php echo form_error('confirma_clave'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        </div>
    </div>

</div>