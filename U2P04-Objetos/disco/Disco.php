<?php
Class Disco{
    private $cantante;
    private $titulo;
    private $ventas;
    public function __construct($cantante,$titulo,$ventas){
        $this->cantante=$cantante;
        $this->titulo=$titulo;
        $this->ventas=$ventas;
    }
    public function getCantante(){
        return $this->cantante;
    }
    public function setCantante($cantante){
        $this->cantante=$cantante;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getVentas()
    {
        return $this->ventas;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setVentas($ventas)
    {
        $this->ventas = $ventas;
    }
}
Class Tienda extends Disco{
    private $storage;
    private $genero;
    private $cantante;
    private $titulo;
    private $ventas;
    /*El super no se porque no tira y tengo un  cacao importante con esto
    Y he tenenido que apañar la clase de abajo con cosas de las de arriba 
    el problema lo tengo porque no se que funcion tiene el extends 
    (Creo que no es mas que un error de sintaxis) porfavor ayudame con esto Gracias! ante todo
    */
    public function __construct($cantante,$titulo,$ventas,$storage,$genero){
      //  super($cantante,$titulo,$ventas);
        $this->genero=$genero;
        $this->storage=$storage;
        $this->cantante=$cantante;
        $this->titulo=$titulo;
        $this->ventas=$ventas;
    }
    public function getCantante(){
        return $this->cantante;
    }
    public function setCantante($cantante){
        $this->cantante=$cantante;
    }
    
    public function getTitulo()
    {
        return $this->titulo;
    }
    
    public function getVentas()
    {
        return $this->ventas;
    }
    
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setVentas($ventas)
    {
        $this->ventas = $ventas;
    }
    public function getStorage(){
        return $this->storage;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function setStorage($storage){
        $this->storage = $storage;
    }
    public function setGenero($genero){
        $this->genero = $genero;
    }
    public function __toString(){
        return "El cantante".$this->getCantante()."Tiene un disco con el titulo".$this->getTitulo()."Que ha sido vendido ".$this->getVentas()." veces y a demas en nuestra tienda tenemos ".$this->storage." ejemplares de ellos . este disco pertenece al genero de :".$this->genero;
    }
    public function __destruct(){
        print "¡¡¡¡¡¡Te quemo la tienda !!!!!!!";
    }

}
?>