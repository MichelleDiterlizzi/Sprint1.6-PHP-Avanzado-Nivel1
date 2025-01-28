<?php

class Prueba{

    public function pruebaFile(){
        echo "En la línea " . __LINE__. " dentro de la función \"". __FUNCTION__. "\" de la clase \"". __CLASS__. "\" utilizamos la constante FILE, que nos devuelve la ruta completa de este archivo: ". __FILE__.PHP_EOL;
    }

    public function pruebaDir(){
        echo "En la línea " . __LINE__. " dentro de la función \"". __FUNCTION__. "\" de la clase \"". __CLASS__."\" utilizamos la constante DIR, que nos devuelve la ruta del archivo donde se encuentra nuestra carpeta: ". __DIR__;
    }
}

$prueba1 = new Prueba;

echo $prueba1->pruebaDir();
echo PHP_EOL;
echo $prueba1->pruebaFile();

?>