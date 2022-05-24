<?php

//**Contiene las variables pasadas por la URL para el Routeador como para las acciones */




$url ="";
if(isset($_GET['URL'])){
        $url = $_GET['URL']; }
else {$url = '';}



function activeLink($url, $slug){
        if($url == $slug){
                echo 'btn-dark';
        }
    }


?>