<?php
Class Autor{
    private $cod_DJ;
    private $nombre_dj;
    private $nacionalidad;
    private $descripcion;
    private $genero_musical;
    private $img_autor;
    public function getCod_DJ()
    {
        return $this->cod_DJ;
    }
    public function getNombre_dj()
    {
        return $this->nombre_dj;
    }
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getGenero_musical()
    {
        return $this->genero_musical;
    }

    public function getImg_autor()
    {
        return "<img src='img/$this->img_autor' height=100px width=90px>";
    } 
}


?>