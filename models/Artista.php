<?php 

class Artista {

    private $id;
    private $nombre;
    private $estilo;
    private $portada;
    
    public function __construct($nombre, $estilo, $portada)
    {
        $this->nombre = $nombre;
        $this->estilo = $estilo;
        $this->portada = $portada;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEstilo()
    {
        return $this->estilo;
    }

    /**
     * @return mixed
     */
    public function getPortada()
    {
        return $this->portada;
    }
}