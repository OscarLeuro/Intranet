<?php





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