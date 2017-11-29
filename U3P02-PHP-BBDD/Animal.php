<?php
class Animal{
    private $chip;
    private $nombre;
    private $especie;
    private $imagen;

    public function getChip()
    {
        return $this->chip;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

  
    public function getEspecie()
    {
        return $this->especie;
    }


    public function getImagen()
    {
        return "<img src='img/$this->imagen'height=100px width=90px>";
    }

    public function setChip($chip)
    {
        $this->chip = $chip;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

 
    public function setEspecie($especie)
    {
        $this->especie = $especie;
    }

    public function __toString(){
        return "El animal " .$this->especie. "Con el chip".$this->chip." se llama ".$this->nombre." Y este es ".$this->getImagen;
    }
    
    
}


?>