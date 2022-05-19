<?php

require 'config/connect.php';


if(isset($_POST['action'])){
    $action = $_POST['action'];
} 

else {$action = "";}


$conn = $connect;



?>