<?php

/*Crea una classe Employee defineix com a atributs el seu nom i sou.
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha 
 o no pagar impostos (si el sou supera 6000 paga impostos).*/

class Employee{

    public $nom;
    public $sou;


    public function __construct($var_nom, $var_sou){
        $this->nom = $var_nom;
        $this->sou = $var_sou;
    }


    public function print_properties(){
        echo $this->nom . " ";
        if ($this->sou > 6000){
            echo "paga impuestos\n";
        }
        else{
            echo "no paga impuestos\n";
        }

    }


}

$empleado = new Employee("Angel", 5000);
$empleado2 = new Employee("Olga", 7000);
$empleado->print_properties();
$empleado2->print_properties();


?>