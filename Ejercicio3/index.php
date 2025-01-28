<?php

class Usuario{

    private $name;
    private $age;

    public function __set($name,$value){
        if ($name === "name") {
                $this->$name = $value; 
            }
        else if ($name === "age") {
             $this->$name = $value;  
        }
        else {
            echo "Error: Propiedad '$name' no válida.".PHP_EOL;
        }

    }

    public function __get($value){
        if ($value === "name") {
                echo "El nombre del usuario es: ".$this->$value.PHP_EOL; 
            }
        else if ($value === "age") {
            echo "La edad del usuario es: ".$this->$value.PHP_EOL;  
        }
        else {
            echo "Error: Propiedad '$value' no válida.".PHP_EOL;
        }
    }
}

$usuario1 = new Usuario;
$usuario1->name="Cris";
$usuario1->age = 21;
echo PHP_EOL;
echo $usuario1->name;
echo $usuario1->age;
echo $usuario1->surname;


?>