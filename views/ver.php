<!doctype html>
<html lang="en">
<head>
    <title>Mi perfil | Musica</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://bootswatch.com/4/slate/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php require_once 'templates/master.php'; ?>
<?php
if (isset($_SESSION['usuario'])){
    $nombre = $_SESSION['usuario']['nombre'];
    $apellido = $_SESSION['usuario']['apellido'];
    $email = $_SESSION['usuario']['email'];
    $contrasenia = $_SESSION['usuario']['contrasenia'];
}else {
    header("location: index.php?msg=ACCESO DENEGADO, SOLO USUARIOS REGISTRADOS!!!");
}
?>

<div class="container text-center mt-5">
    <div class="card text-left">
        <div class="card-body">
            <h2 class="card-title"><i class="fa fa-user"
                                      aria-hidden="true"></i> Perfil de usuario <a name="editarUsuario" class="btn btn-secondary" href="ver.php?nombre_usuario=<?php echo
                    $nombre ." ". $apellido; ?>&email=<?php echo $email; ?>&contrasenia=<?php echo $contrasenia; ?>" role="button">Editar datos</a></h2>
            <p class="card-text">
                <h5>Nombre completo: <?php echo $nombre ." ". $apellido; ?></h5>
                <br>
                <h5>Email: <?php echo $email; ?></h5><br>
                <h5>Contraseña: <?php echo $contrasenia; ?></h5><br>
            </p>
        </div>
    </div>
    <?php
    if (isset($_GET['nombre_usuario'])){
        $usuario = mb_split(' ', $_GET['nombre_usuario']);
        $nombreUsuario = $usuario[0];
        $apellidoUsuario = $usuario[1];
        $emailUsuario = $_GET['email'];
        $contraUsuario = $_GET['contrasenia']; ?>
        <form action="../controllers/Transacciones.php" method="post" style="width: 300px; margin: auto;">
            <div class="form-group">
                <input type="hidden" class="form-control" name="dni" value="<?php echo $_SESSION['usuario']['dni']; ?>">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $nombreUsuario; ?>" id="nombre" class="form-control" placeholder="Actualizar nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" value="<?php echo $apellidoUsuario; ?>" id="apellido" class="form-control" placeholder="Actualizar apellido">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $emailUsuario; ?>" id="email" class="form-control" placeholder="Actualizar email">
            </div>
            <div class="form-group">
                <label for="contrasenia">Contraseña</label>
                <input type="password" name="contrasenia" value="<?php echo $contraUsuario; ?>" id="contrasenia" class="form-control" placeholder="Actualizar contraseña">
            </div>
            <button type="submit" name="actualizar" class="btn btn-primary btn-lg btn-block">Actualizar perfil</button>
        </form>
    <?php } ?>


</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>