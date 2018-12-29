<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 12/28/2018
 * Time: 02:38
 */

require_once '../models/Usuario.php';
require_once '../models/database/conexion.php';

class DaoUsuario
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Conexion();
    }

    public function AgregarUsuario(Usuario $usuario){
        try{
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $parameters = array(
                ':dni' => $usuario->getDni(),
                ':nombre' => $usuario->getNombre(),
                ':apellido' => $usuario->getApellido(),
                ':email' => $usuario->getEmail(),
                ':contrasenia' => $usuario->getContrasenia());

            $this->conn->ejecutar("INSERT INTO usuarios (dni, nombre, apellido, email, contrasenia) "
                ."VALUES (:dni, :nombre, :apellido, :email, :contrasenia)", $parameters);

        }catch (Exception $e){
            return $e->getMessage();
        }

        return "Usuario agregado";
    }

    public function BuscarUsuario($email, $contrasenia){
        try{
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $parameters = array(
                ':email' => $email,
                ':contrasenia' => $contrasenia);
            return $this->conn->ejecutarSelect("SELECT * FROM usuarios WHERE email = :email AND contrasenia = :contrasenia", $parameters);
        }catch (Exception $e){
            return $e->getMessage();
        }
    }
}