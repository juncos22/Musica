<?php

include_once 'config.php';

class Conexion extends PDO {

    public function __construct() {
        parent::__construct("mysql:host=".SERVER."; dbname=".DATABASE, USER, PASSWORD);
    }

    public function ejecutar($query, $parameters=array())
    {
        $cmd = $this->prepare($query);
        $cmd->execute($parameters);
    }

    public function ejecutarSelect($query, $parameters=array())
    {
        $cmd = $this->prepare($query);
        $cmd->execute($parameters);
        return $cmd;
    }
}