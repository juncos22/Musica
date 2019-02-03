<?php

require_once '../models/Album.php';
require_once '../models/database/conexion.php';

class DaoAlbum {

    private $conn;

    public function __construct() {
        $this->conn = new Conexion();
    }

    public function InsertarAlbum(Album $album)
    {
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $parameters = array(
                ':nombre' => $album->getNombre(), 
                ':artista' => $album->getArtista(),
                ':portada' => $album->getPortada());
            $this->conn->ejecutar("INSERT INTO album (nombre, artista, portada) VALUES (:nombre, :artista, :portada)", $parameters);

        } catch (Exception $e) {
            return $e->getMessage();
        }

        return "Album agregado";
    }

    public function MostrarAlbums(){
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn->ejecutarSelect("SELECT * FROM album ORDER BY nombre ASC");
        }catch (Exception $e){
            echo "ERROR: ".$e->getMessage();
        }
    }
}