<!doctype html>
<html lang="en">
<head>
    <title>Canciones | Musica</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://bootswatch.com/4/slate/bootstrap.min.css">
</head>
<body>
<?php require_once 'templates/master.php'; ?>
<?php require_once '../controllers/DaoEstilo.php'; ?>
<?php require_once '../controllers/DaoArtista.php'; ?>
<?php require_once '../controllers/DaoAlbum.php'; ?>
<?php
if (isset($_SESSION['usuario'])) {
    $dao_e = new DaoEstilo();
    $estilos = $dao_e->MostrarEstilos();

    $dao_a = new DaoArtista();
    $artistas = $dao_a->MostrarArtistas();

    $dao_al = new DaoAlbum();
    $albums = $dao_al->MostrarAlbums();
}else {
    header("location: index.php?msg=ACCESO DENEGADO, SOLO USUARIOS REGISTRADOS!!");
}
?>
<div class="container">
    <?php if (isset($_GET['msg'])) { ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong><?php echo $_GET['msg']; ?></strong>
        </div>
    <?php } ?>
    <form action="../controllers/Transacciones.php" method="post" style="width: 400px; margin: auto;">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required id="nombre" class="form-control" placeholder="Ingrese el nombre de la cancion">
        </div>
        <div class="form-group">
            <label for="estilo">Estilo musical</label>
            <select name="estilo" required id="estilo" class="form-control">
                <?php while ($estilo = $estilos->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $estilo['nombre']; ?>"><?php echo $estilo['nombre']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="artista">Artista</label>
            <select name="artista" required id="artista" class="form-control">
                <?php while ($artista = $artistas->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $artista['nombre']; ?>"><?php echo $artista['nombre']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="album">Albums</label>
            <select name="album" required id="album" class="form-control">
                <?php while ($album = $albums->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $album['nombre']; ?>"><?php echo $album['nombre']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="video">Video</label>
            <input type="text" required name="video" id="video" class="form-control" placeholder="Ingrese el video de la cancion">
        </div>
        <button type="submit" name="insertar" class="btn btn-primary btn-lg btn-block">Agregar cancion</button>
    </form>
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