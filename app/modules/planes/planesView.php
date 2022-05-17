<?php


include 'planesController.php';

$data = planesController::data();





?>


<h3>Planes que ofrecemos:</h3><br>

<?= $data['plan'] ?><br>
<h4>Precio:</h4><br>
<?= $data['costo'] ?>