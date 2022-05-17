

<?php

    include 'loginController.php';

    $data = loginController::data();


?>

<h1> <?= $data['nombre'] ?> </h1><br>
<a>Inicia Sesión</a>

<div class="row padding-2">


<div class="c4">

<form action="">

    <div class="input-group-column">

    <label for="">Usuariosasa:</label>
    <input type="text">

    </div>




    <div class="input-group-column">

    <label for="">Contraseña:</label>
    <input type="text">


    </div>

    <div class="input-group-column padding-y-1">


    <input type="submit" value="Iniciar Sesión" class="btn btn-blue btn-large">

    </div>



</form>



</div>