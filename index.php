<?php
    include 'includes/header.php';
?>


<main> 
<?php
require 'app/router.php';
$rout = new Router($url);
$rout->View();
?>



</main>




<?php



?>