

<?php

    include 'registerController.php';
    registerController::action($action);

    $data = registerController::data();





?>

    



<form action="register" method="POST">

    <label for="">Prueba</label><br>
    <input type="text" name="prueba"><br>
   
    <input type="hidden" name="action" value="crear">
    <input type="submit" value="Registrar">

</form>

<div class="container">


    <div class="row">

        <div class="c4 padding-y-2">

        <?php 

while($row = mysqli_fetch_array($data)){?>

    <table class="table table-blue ">

    <thead>

        <th>Nombre</th>
        <th>ID</th>

    </thead>

    <tbody>
 
     <tr> 
             
         <td> <?= $row['USER'] ?></td>
         
         <td> <a href="<?= $row['ID']?>"> Edital </a></td>
        
   
   
    </tr>

    </tbody>

    
    </table>


   
    

<?php	} ?>


        </div>


    </div>


</div>