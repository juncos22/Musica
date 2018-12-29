<?php

class Cancion
{
    private $id;
    private $nombre;
    private $estilo;
    private $artista;
    private $album;
    private $video;

    public function __construct($id, $nombre, $estilo, $artista, $album, $video)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->estilo = $estilo;
        $this->artista = $artista;
        $this->album = $album;
        $this->video = $video;
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

    public function getArtista()
    {
        return $this->artista;
    }

    public function getAlbum()
    {
        return $this->album;
    }

    public function getVideo()
    {
        return $this->video;
    }
}
