<?php
class Ctemas{
 private $id;
 private $id_disco;
 private $numero;
 private $nombre_i;
 private $nombre_e;
 private $minutos;
 private $segundos;

    public function getId()
    {
        return $this->id;
    }

    public function getId_disco()
    {
        return $this->id_disco;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getNombre_i()
    {
        return $this->nombre_i;
    }

    public function getNombre_e()
    {
        return $this->nombre_e;
    }

    public function getMinutos()
    {
        return $this->minutos;
    }

    public function getSegundos()
    {
        return $this->segundos;
    }

    
    
}
?>