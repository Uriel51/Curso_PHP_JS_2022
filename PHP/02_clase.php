<?php

class Vehiculo{

    public $numero_de_llanatas;
    private $kilometraje;

    // esta funcion se manda a llamar cuando instanciamos un objeto
    public function __construct(){
        $this->inicializarkilometraje();

    }

    public function getkilometraje(){

    }

    private function inicializarkilometraje(){
        //aqui hago uso de la variable de mi clase 
        $this->kilometraje = 0;
    }

    protected function setkilometraje($km){

    }
}

$auto =new Vehiculo();
$auto->numero_de_llantas = 4;
echo 'numero de llanatas: ' .$auto->numero_de_llantas;
echo'<br/>';

echo 'el kilometrajees: ' .$auto->getkilometraje(). 'km y soy feliz';

// creo mi clase auto que hereda de vehiculo

class Auto extends Vehiculo{

    public $marca = 'N/A';
    public $anio = 'N/A';
    public $color = 'N/A';

    function  setPropiedades($marcaRe='N/A' , $color,$anioRe='2022'){

        public ->$marca = 'N/A';
    public ->$anio = 'N/A';
    public ->$color = 'N/A';
    }


}
echo '<br/>---------------------<'


?>

