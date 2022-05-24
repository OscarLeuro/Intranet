<?php
    include 'includes/header.php';
    require 'app/router.php';

?>


<main class="padding-2"> 

        <?php Router::View($url);?>

    </main>




<?php

    include 'includes/footer.php';

?>

