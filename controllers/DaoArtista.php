<?php 

require_once '../models/Artista.php';
require_once '../models/database/conexion.php';

class DaoArtista {

    private $conn;

    public function __construct() {
        $this->conn = new Conexion();
    }

    public function InsertarArtista(Artista $artista)
    {
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $parameters = array(
                ':nombre' => $artista->getNombre(), 
                ':estilo' => $artista->getEstilo(),
                ':portada' => $artista->getPortada());
            $this->conn->ejecutar("INSERT INTO artistas (nombre, estilo, portada) VALUES (:nombre, :estilo, :portada)", $parameters);

        } catch (Exception $e) {
            return $e->getMessage();
        }

        return "Artista agregado";
    }

    public function MostrarArtistas()
    {
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn->ejecutarSelect("SELECT * FROM artistas ORDER BY nombre ASC");
        } catch (Exception $e) {
            echo "ERROR: ".$e->getMessage();
            return null;
        }
    }
}