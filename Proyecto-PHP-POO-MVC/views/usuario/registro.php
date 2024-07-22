<h1>Registro de USUARIO</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register']=='complete'): ?>
    <strong class="alert_green">Registro completado CORRECTAMENTE</strong>
<?php elseif (isset($_SESSION['register']) && $_SESSION['register']=='failed'):?>
    <strong class="alert_red">Registro FALLIDO, introduce los datos CORRECTAMENTE</strong>
<?php endif;?>
<?php Utils::deleteSession(('register'));?>

<form action="<?=base_url?>usuario/save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"/>

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" />

    <label for="email">Email</label>
    <input type="email" name="email" />

    <label for="password">Password</label>
    <input type="password" name="password" />

    <input type="submit" value="Registrarse" />
</form>