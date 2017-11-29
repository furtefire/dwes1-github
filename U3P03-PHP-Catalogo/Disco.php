<?php
Class Disco{
    private $cod_disco;
    private $nombre_disco;
    private $fecha_salida;
    private $descripcion;
    private $autor;
    private $img_diso;
  
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
        return $this->img_diso;
    }

    public function setCod_disco($cod_disco)
    {
        $this->cod_disco = $cod_disco;
    }

    public function setNombre_disco($nombre_disco)
    {
        $this->nombre_disco = $nombre_disco;
    }

    public function setFecha_salida($fecha_salida)
    {
        $this->fecha_salida = $fecha_salida;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function setImg_diso($img_diso)
    {
        $this->img_diso = $img_diso;
    }
    public function __toString(){
        return "El codigo del disco es " .$this->getCod_disco(). "nombre".$this->getNombre_disco()." Salio el ".$this->getFecha_salida()."El autor del disco es ".$this->getAutor()." La descripcion del disco es <br>".$this->getDescripcion()." Y este es el disco <p><img src='img/".$this->imagen."'width=100 heigth=100/></p>"."";
    }
    
}
?>