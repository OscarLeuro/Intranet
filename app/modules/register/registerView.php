

<?php
    include 'registerController.php';
   
    registerController::action($action);
    $data = registerController::data(null);
    $dataEdit = registerController::data($id);
 
   
?>




<form action="register" method="POST"  >

    <label for="">Prueba </label><br>
    <input type="text" name="prueba"><br>
   
    <input type="hidden" name="action" value="crear">
    <input type="submit" value="Registrar" >

</form>

<div class="container">
    <div class="row">
        <div class="c4 padding-y-2">
        <?php 

        while($row = mysqli_fetch_array($data)){?>

         <table class="table table-blue ">

            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Actions</th>
                 
             </thead>

            <tbody>
 
             <tr> 
             <td> <?= $row['ID']?> </td>
            
             <td> <?= $row['USER'] ?></td>

             <td><form action="register" method="POST">

                <input type="hidden" name="action" value="Editar">
                <input type="hidden" name="ID" value="<?=$row['ID']?>">

                <input type="submit" value="Editar">

             </form>

             <form action="register" method="POST">

                <input type="hidden" name="action" value="eliminar">
                <input type="hidden" name="ID" value="<?=$row['ID']?>">

                <input type="submit" value="Delete">

             </form>
            
            </td>


             </tr>

            </tbody>

    
         </table>


   
    

        <?php	} ?>


        </div>


    </div>
    
    <div class="row">


    <?php 
    

while($row = mysqli_fetch_array($dataEdit)){?>

 <table class="table table-blue ">

    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Actions</th>
         
     </thead>

    <tbody>

     <tr> 
     <td> <?= $row['ID']?> </td>
    
     <td> <div class="input-group">

     <input type="text" value="<?= $row['USER'] ?>" name="USER">

     </div> </td>

     <td><form action="register" method="POST">

        <input type="hidden" name="action" value="guardar">
        <input type="hidden" name="ID" value="<?=$row['ID']?>">

        <input type="submit" value="Editar">

     </form>

     <form action="register" method="POST">

        <input type="hidden" name="action" value="eliminar">
        <input type="hidden" name="ID" value="<?=$row['ID']?>">

        <input type="submit" value="Delete">

     </form>
    
    </td>


     </tr>

    </tbody>


 </table>





<?php	} ?>



    </div>


</div>




