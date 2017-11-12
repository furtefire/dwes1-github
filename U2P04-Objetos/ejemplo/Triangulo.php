<?php
class Triangulo{
    public $base;
    private $altura;
    
    public function __construct($base,$altura){
        $this->base=$base;
        $this->altura=$altura;
    }

    public function getBase(){
        return $this->base;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura=$altura;
    }
    public function calcularArea(){
        return $this->base * $this->altura / 2;
    }
    public function __toString(){
        return "Triangulo de base ".$this->base." y la altura ".$this->altura;
    }
    public function __destruct(){
        print "<p>Destruyendo triangulo</p>";
    }
}
?>