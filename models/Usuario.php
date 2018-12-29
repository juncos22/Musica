<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 12/28/2018
 * Time: 02:29
 */

class Usuario
{
    private $dni;
    private $nombre;
    private $apellido;
    private $email;
    private $contrasenia;

    /**
     * Usuario constructor.
     * @param $dni
     * @param $nombre
     * @param $apellido
     * @param $email
     * @param $contrasenia
     */
    public function __construct($dni, $nombre, $apellido, $email, $contrasenia)
    {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->contrasenia = $contrasenia;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getContrasenia()
    {
        return $this->contrasenia;
    }


}