
<!-- HEADER -->
<div class="header">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo base_url(); ?>home/" class="navbar-brand"><strong>Tienda Virtual</strong></a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse color1" role="navigation" >
            <ul class="nav navbar-nav navbar-right">
                <!--visitante-->
                <?php if ($this->session->userdata('cliente') == FALSE) { ?>
                    <li class="<?= $activo == 'registro' ? 'active' : '' ?>"><a href="<?php echo base_url(); ?>cliente/registro"> Reg�strate</a></li>
                    <li class="dropdown">
                        <a href="<?= base_url()?>cliente/showLogin" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>  Iniciar Sesi�n <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu">
                            <form method="post" action="<?php echo base_url(); ?>cliente/login">
                                <input class="form-control" type="email" placeholder="E-mail" id="email" name="email" required />
                                <input class="form-control" type="password" placeholder="Contrase�a" id="password" name="password" required>
                                <label>
                                    <input type="checkbox" name="recordar"> Recordarme
                                </label>
                                <input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
                            </form>
                        </div>
                    </li>
                    <?php
                } else {
                    $array_sesion = $this->session->userdata('cliente');
                    ?>
                    <!--logueado-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>  <?= $array_sesion['nombre']?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mi perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Configuraci�n</a></li>
                            <li><a href="<?php echo base_url(); ?>cliente/logout">Cerrar Sesi�n</a></li>
                        </ul>
                    </li>

                <?php } ?> 
            </ul>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse color2 redondear" role="navigation" ">
            <ul class="nav navbar-nav navbar-left">
                <li class="<?= $activo == 'inicio' ? 'active' : '' ?>"><a href="<?php echo base_url(); ?>home/"> <span class="glyphicon glyphicon-home"></span> INICIO</a></li>
                <li class="<?= $activo == 'nosotros' ? 'active' : '' ?>"><a href="<?php echo base_url(); ?>nosotros"> <span class="glyphicon glyphicon-briefcase"></span> NOSOTROS</a></li>
                <li class="<?= $activo == 'catalogo' ? 'active' : '' ?>"><a href="<?php echo base_url(); ?>catalogo"> <span class="glyphicon glyphicon-book"></span> CAT�LOGO</a></li>
                <li class="<?= $activo == 'carrito' ? 'active' : '' ?>"><a href="<?php echo base_url(); ?>carrito"> <span class="glyphicon glyphicon-shopping-cart"></span> CARRITO</a></li>
                <li class="<?= $activo == 'contacto' ? 'active' : '' ?>"><a href="<?php echo base_url(); ?>contacto"> <span class="glyphicon glyphicon-edit"></span> CONTACTO</a></li>
            </ul>
        </div>

</div>
