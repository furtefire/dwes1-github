<?php
Class Disco{
    private $cod_disco;
    private $nombre_disco;
    private $fecha_salida;
    private $descripcion;
    private $autor;
    private $img_diso;
    private $nombre_dj;
  
    public function getNombre_dj()
    {
        return $this->nombre_dj;
    }

    public function getCod_disco()
    {
        return $this->cod_disco;
    }

    public function getNombre_disco()
    {
        return $this->nombre_disco;
    }

    public function getFecha_salida()
    {
        return $this->fecha_salida;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
 function getAutor()
    {
        return $this->autor;
    }

    public function getImg_diso()
    {
        return "<img src='img/$this->img_disco'height=100px width=90px>";
    }

    public function __toString(){
        return "El codigo del disco es " .$this->getCod_disco(). "nombre".$this->getNombre_disco()." Salio el ".$this->getFecha_salida()."El autor del disco es ".$this->getAutor()." La descripcion del disco es <br>".$this->getDescripcion()." Y este es el disco".$this->getImg_diso()."";
    }
    
}
?>