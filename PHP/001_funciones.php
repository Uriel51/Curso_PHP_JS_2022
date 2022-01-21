<?php

function saludar(){
return 'Hola mundo ';

}

function saludaMe($nombre){

    return'hola' .$nombre;
}

//llamda de funcion

echo saludar();
echo '<br/>'; //etiqueta html que da salto de linea
echo saludaMe('uriel');


?>



