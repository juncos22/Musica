<nav class="nav nav-fill">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
    </li>
    <?php
    session_start();
    if (isset($_SESSION['usuario'])) { ?>
        <li class="nav-item">
            <a class="nav-link" href="artistas.php">Artistas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Canciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="albums.php">Albums</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cerrar.php">Cerrar sesion</a>
        </li>
    <?php }else { ?>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Iniciar sesion</a>
        </li>
    <?php } ?>
</nav>