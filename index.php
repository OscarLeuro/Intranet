<?php
    include 'includes/header.php';
    require 'app/router.php';

?>


<main class="padding-2"> 

        <?php Router::View($url);?>

</main>



<script src="public/js/frame.js"></script>
<script src="public/js/modal.js"></script>


<?php

    include 'includes/footer.php';

?>

