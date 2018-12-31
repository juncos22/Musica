<nav class="nav nav-fill mt-5">
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
            <a class="nav-link" href="canciones.php">Canciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="albums.php">Albums</a>
        </li>
        <li class="nav-item">
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle" type="button"
                        id="triggerId" data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                    MI PERFIL
                </button>
                <div class="dropdown-menu dropdown-menu-right"
                     aria-labelledby="triggerId">
                    <a class="dropdown-item" href="ver.php">Ver perfil</a>
                    <a class="dropdown-item" href="ver_canciones.php">Ver canciones</a>
                    <a class="dropdown-item" href="ver_artistas.php">Ver artistas</a>
                    <a class="dropdown-item" href="cerrar.php">Cerrar sesion</a>
                </div>
            </div>
        </li>
    <?php }else { ?>
        <li class="nav-item">
            <a class="nav-link" href="ver_artistas.php">Artistas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ver_canciones.php">Canciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Iniciar sesion</a>
        </li>
    <?php } ?>
</nav>