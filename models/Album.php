<?php

class Album {

    private $id;
    private $nombre;
    private $artista;
    private $portada;

    public function __construct($nombre, $artista, $portada)
    {
        $this->nombre = $nombre;
        $this->artista = $artista;
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

    public function getArtista()
    {
        return $this->artista;
    }

    /**
     * @return mixed
     */
    public function getPortada()
    {
        return $this->portada;
    }
}