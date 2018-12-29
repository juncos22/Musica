<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Musica</title>
    <link rel="stylesheet"
          href="https://bootswatch.com/4/slate/bootstrap.min.css">
</head>
<body>
<?php include "templates/master.php"; ?>
<?php require_once '../controllers/DaoAlbum.php'; ?>

<div class="container">
    <?php if (isset($_GET['msg'])) { ?>
        <div class="alert alert-primary alert-dismissible fade show"
             role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong><?php echo $_GET['msg']; ?></strong>
        </div>
    <?php } ?>
    <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" height="400" src="http://images2.fanpop.com/image/photos/10500000/Nine-Inch-Nails-nine-inch-nails-10561428-1680-1050.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="400" src="https://wallpapercave.com/wp/wp1866931.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="400" src="https://images8.alphacoders.com/400/400957.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="400" src="https://wallpapercave.com/wp/wp1914814.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="400" src="https://prensarock.com/wp-content/uploads/2018/04/7c8a239b6619403ea8120b49e9e7c73a.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="400" src="http://iec.bg/images/news/event-stone-sour-1111.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="400" src="https://cdn.hipwallpaper.com/i/55/13/RHT4XB.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <?php
    $dao = new DaoAlbum();
    $albums = $dao->MostrarAlbums();
    ?>
    <div class="row mt-5">
        <?php while ($album = $albums->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="column m-3">
                <div class="card text-center" style="width: 300px; height: 450px">
                    <img class="img-thumbnail" width="300" src="<?php echo $album['portada']; ?>" alt="portada">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $album['nombre']; ?></h4>
                        <p class="card-text"><?php echo $album['artista']; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
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