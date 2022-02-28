<?php

/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres 
l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin 
respectivament l'àrea de la forma area().A l'arxiu main defineix dos objectes, un triangle i un 
rectangle i truca al mètode area de cadascun.*/

class Shape{

    public $ample;
    public $alt;

    public function __construct($ample, $alt){
        $this->ample = $ample;
        $this->alt = $alt;
    }

}

class Triangle extends Shape{

    public function area(){
        return ($this->ample*$this->alt)/2;
    }



}


class Rectangle extends Shape{

    public function area(){
        return $this->ample*$this->alt;
    }


}



$triangulo = new Triangle(2,3);

echo "El area del triangulo es: " . $triangulo->area() . "\n";

$rectangulo = new Rectangle(2,3);

echo "El area del rectangulo es: " . $rectangulo->area() . "\n";


?>