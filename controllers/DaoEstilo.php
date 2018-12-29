<?php 

require_once '../models/database/conexion.php';
require_once '../models/Estilo.php';

class DaoEstilo {

    private $conn;

    public function __construct() {
        $this->conn = new Conexion();
    }

    public function InsertarEstilo(Estilo $estilo)
    {
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $parameters = array(':nombre' => $estilo->getNombre());
            $this->conn->ejecutar("INSERT INTO estilos (nombre) VALUES (:nombre)", $parameters);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return "Estilo almacenado";
    }

    public function MostrarEstilos(){
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn->ejecutarSelect("SELECT * FROM estilos");
        }catch (Exception $e){
            echo "ERROR: ".$e->getMessage();
            return null;
        }
    }
}