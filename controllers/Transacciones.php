<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 12/28/2018
 * Time: 17:51
 */

require_once '../models/Usuario.php';
require_once '../models/Album.php';
require_once '../models/Artista.php';

require_once 'DaoUsuario.php';
require_once 'DaoAlbum.php';
require_once 'DaoArtista.php';

if (isset($_POST['enviar'])){
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contrasenia = $_POST['contrasenia'];

    $usuario = new Usuario($dni, $nombre, $apellido, $email, $contrasenia);

    $dao = new DaoUsuario();
    $msg = $dao->AgregarUsuario($usuario);
    header("location: ../views/index.php?msg=$msg");
}elseif (isset($_POST['login'])) {
    $email = $_POST['email'];
    $contrasenia = $_POST['contrasenia'];

    $dao = new DaoUsuario();
    $resultado = $dao->BuscarUsuario($email, $contrasenia);

    if ($usuario = $resultado->fetch(PDO::FETCH_ASSOC)){
       session_start();
        $_SESSION['usuario'] = $usuario;
        header("location: ../views/index.php");
    }else {
        header("location: ../views/login.php?msg=Email o contrasenia incorrectos");
    }
}elseif (isset($_POST['agregar'])){
    $nombre = $_POST['nombre'];
    $artista = $_POST['artista'];
    $portada = $_POST['portada'];

    $dao = new DaoAlbum();
    $album = new Album($nombre, $artista, $portada);
    $msg = $dao->InsertarAlbum($album);
    header("location: ../views/albums.php?msg=$msg");
}elseif (isset($_POST['nuevo_artista'])){
    $nombre = $_POST['nombre'];
    $estilo = $_POST['estilo'];
    $portada = $_POST['portada'];

    $dao = new DaoArtista();
    $artista = new Artista($nombre, $estilo, $portada);
    $msg = $dao->InsertarArtista($artista);
    header("location: ../views/artistas.php?msg=$msg");
}