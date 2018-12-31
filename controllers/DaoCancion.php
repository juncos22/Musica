<?php
require_once '../models/database/conexion.php';
require_once '../models/Cancion.php';

class DaoCancion {

    private $conn;

    public function __construct() {
        $this->conn = new Conexion();
    }

    public function InsertarCancion(Cancion $cancion)
    {
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $parameters = array(
                    ':nombre' => $cancion->getNombre(), 
                    ':estilo' => $cancion->getEstilo(), 
                    ':artista' => $cancion->getArtista(),
                    ':album' => $cancion->getAlbum(),
                    ':video' => $cancion->getVideo());
            $this->conn->ejecutar("INSERT INTO canciones (nombre, estilo, artista, album, video) VALUES (:nombre, :estilo, :artista, :album, :video)", $parameters);

        } catch (Exception $e) {
            return $e->getMessage();
        }

        return "Cancion agregada";
    }

    public function MostrarCanciones(){
        try{
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn->ejecutarSelect("SELECT * FROM canciones");

        }catch (Exception $e){
            echo "ERROR: ".$e->getMessage();
            return null;
        }
    }
}