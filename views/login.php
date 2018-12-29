<!doctype html>
<html lang="en">
<head>
    <title>Login | Musica</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://bootswatch.com/4/slate/bootstrap.min.css">
</head>
<body>
<?php require_once 'templates/master.php'; ?>
<div class="container mt-5">
    <form action="../controllers/Transacciones.php" method="post" style="width: 400px; margin: auto;">
        <div class="form-group">
            <label for="email">EMAIL</label>
            <input type="email" name="email" required id="email" class="form-control" placeholder="Ingrese su Email">
        </div>
        <div class="form-group">
            <label for="contrasenia">CONTRASEÑA</label>
            <input type="password" name="contrasenia" required id="contrasenia" class="form-control"
                   placeholder="Ingrese su Contraseña">
        </div>
        <div class="form-group">
            <button type="submit" name="login" value="login" class="btn btn-primary btn-lg btn-block">Login</button>
        </div>
        <div class="form-group text-center">
            <a href="usuarios.php" class="text-success text-center">No tiene una cuenta?</a>
        </div>
    </form>
    <?php if (isset($_GET['msg'])) { ?>
        <div class="alert alert-warning alert-dismissible fade show"
             role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong><?php echo $_GET['msg']; ?></strong>
        </div>
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