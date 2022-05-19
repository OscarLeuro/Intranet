

<?php


include 'dashboardController.php';



$data = dashboardController::read();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?=$data['Perfil']?><br>
    <?=$data['Foto']?> <br>
    
</body>
</html>