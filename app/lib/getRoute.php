<?php

//**Contiene las variables pasadas por la URL para el Routeador como para las acciones */




$url ="";
if(isset($_GET['URL'])){
        $url = $_GET['URL']; }
else {$url = '';}


/**Función para marcar la pestaña activa, la URL hace referencia a la dirección que se encuentra en el navegador y Slug al nombre de la pestaña; ambas deben coincidir para que se active. echo imprime la clase css que marcará la pestaña activa. */
function activeLink($url, $slug){
        if($url == $slug){
                echo 'btn-dark';
        }
    }


?>