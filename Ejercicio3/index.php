<?php
declare(strict_types=1);

class Usuario{

    private string $name;
    private int $age;

    public function __set(string $name, $value){
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

    public function __get(string $name){
        if ($name === "name") {
                echo "El nombre del usuario es: ".$this->$name.PHP_EOL; 
            }
        else if ($name === "age") {
            echo "La edad del usuario es: ".$this->$name.PHP_EOL;  
        }
        else {
            echo "Error: Propiedad '$name' no válida.".PHP_EOL;
        }
    }
}

$usuario1 = new Usuario;
$usuario1->name="Cris";
$usuario1->age = 21;
echo PHP_EOL;
echo $usuario1->name;
echo PHP_EOL;
echo $usuario1->age;
echo PHP_EOL;
echo $usuario1->surname;

?>