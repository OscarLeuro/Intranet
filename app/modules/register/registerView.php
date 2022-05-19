

<?php
    include 'registerController.php';
    $data = registerController::data($action);

?>

    



<form action="register" method="POST">

    <label for="">Prueba</label><br>
    <input type="text" name="prueba"><br>
   
    <input type="hidden" name="action" value="crear">
    <input type="submit" value="Registrar">

</form>

<?= $data['Prueba']?>