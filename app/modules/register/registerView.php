

<?php
    include 'registerController.php';
   
    registerController::action($action);
    $data = registerController::data(null);
   
 
   
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

             <td><form action="modal.php" method="POST" id="action_form">

                <input type="hidden" name="action" value="Editar" >
                <input type="hidden" name="ID" value="<?=$row['ID']?>" class="id_value">

                <input type="submit" value="Editar" class="editModal" onclick="edit(event,<?=$row['ID']?>)">

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


              <div class="modal" >

      
               


 

                     <div class="modal__body" >

                     <div class="modal__title bg-blue padding-y-1" > <h3>Editar Registro</h3> <button class="modal__close">X</button></div>


                     <div class="modal__content" id="container_ajax">



                     </div>



                     </div>




           
            
    

               </div>



       </div>


</div>




