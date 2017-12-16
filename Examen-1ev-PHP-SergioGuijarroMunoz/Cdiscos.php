<?php
class Cdiscos{
    private $id;
    private $nombre;
    private $year;
    private $tipo;
    private $sec;
    private $imagen;
    private $discografica;
    private $discografica_e;
    private $soporte;
    private $texto;
    

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getSec()
    {
        return $this->sec;
    }

    public function getImagen()
    {
        return "<img src='img/$this->imagen.jpg'height=100px width=90px>";
    }

    public function getDiscografica()
    {
        return $this->discografica;
    }


    public function getDiscografica_e()
    {
        return $this->discografica_e;
    }

    public function getSoporte()
    {
        return $this->soporte;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    
    
    
    
}
?>