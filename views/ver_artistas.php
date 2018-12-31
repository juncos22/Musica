<!doctype html>
<html lang="en">
<head>
    <title>Lista de artistas | Musica</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://bootswatch.com/4/slate/bootstrap.min.css">
</head>
<body>
<?php require_once 'templates/master.php'; ?>
<?php require_once '../controllers/DaoArtista.php'; ?>

<div class="container">
    <?php $dao = new DaoArtista(); ?>
    <?php $artistas = $dao->MostrarArtistas(); ?>

    <div class="row" style="margin: auto;">
        <?php while ($artista = $artistas->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="col-md-1-12" style="margin: auto; padding: 20px;">
                <div class="card text-dark text-center bg-info">
                    <img src="<?php echo $artista['portada']; ?>" alt="portada"
                         class="img-thumbnail" width="300" height="300">
                    <div class="card-body">
                        <h4 class="card-title">Banda: <?php echo $artista['nombre']; ?></h4>
                        <p class="card-text">Estilo: <?php echo $artista['estilo']; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
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