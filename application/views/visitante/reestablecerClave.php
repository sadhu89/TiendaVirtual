Formulario para reestablecer contraseņa
<form action="<?= base_url().'cliente/nuevaClave' ?>" method="post">
    Escribe tu constraseņa : <input type="password" name="password" /><br>
    Vuelve a introducir tu contraseņa : <input type="password" name="repassword" />
    <input type="hidden" value="<?= $email?>" name="email" />
    <br><input type="submit" value="Cambiar Contraseņa" />
</form>