
<?php

require 'app/lib/getRoute.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
    <link rel="stylesheet" href="public/scss/style.css">
  
</head>
<body>
    
</body>
</html>

<nav class="row padding-y-1 bg-g-platinum">

    <a class="btn <?php activeLink($url,'register') ?>" href="register">Registro</a>


    <a href="login" class="btn <?php activeLink($url,'login') ?>">Ingresar</a>


    <a href="planes" class="btn <?php activeLink($url,'planes') ?>">Planes</a>



    <a href="dashboard" class="btn <?php activeLink($url,'dashboard') ?>">Dashboard</a>

</nav>