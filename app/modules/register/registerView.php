

<?php
    include 'registerController.php';
   
    registerController::action($action);
    $data = registerController::data(null);
   
 
   
?>






<div class="container">
   

    <div class="row">

        <div class="c3  border-1 border-platinum">

        <div class="row bg-g-blue padding-1 border-radius-1">

            <h3 class="text-white">Registrar Usuario</h3>

        </div>

        <div class="row">

            <div class="c12 padding-1">

            <form action="register" method="POST"  >

                <div class="input-group-column">

                <label for="">Nombre </label>
                 <input type="text" name="name">

                </div>
                    
                <div class="input-group-column">

                <label for="">Apellido </label>
                      <input type="text" name="apellido">

                </div>

                <div class="input-group-column">

                <label for="">DNI </label>
                    <input type="number" name="dni">

                </div> 

                <div class="input-group-column">

                <label for="">Teléfono </label>
                     <input type="tel" name="tel">

                </div>
                
                <div class="input-group-column">

                <label for="">Correo </label>
                     <input type="email" name="email">

                </div>

                <div class="input-group-column">

                <label for="">Rol del Usuario</label>
                     <select name="rol" id="">

                    <option value="admin">Admin</option>
                    <option value="cliente">Cliente</option>

                 </select>  

                </div>    
 
   
                <input type="hidden" name="action" value="crear">
                 <input type="submit" class="btn btn-blue btn-full" value="Registrar" >

            </form>


            </div>
                     
        </div>

        </div>

        <div class="c9 padding-1">

                 <table class="table table-blue ">

            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Rol</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Actions</th>
                 
             </thead>

            <tbody>
        
        
        <?php 

        while($row = mysqli_fetch_array($data)){?>


 
             <tr> 
             <td> <?= $row['ID']?> </td>
            
             <td> <?= $row['NOMBRE'] ?></td>
             <td> <?= $row['APELLIDO'] ?></td>
             <td> <?= $row['DNI'] ?></td>
             <td> <?= $row['ROL'] ?></td>
             <td> <?= $row['TEL'] ?></td>
             <td> <?= $row['CORREO'] ?></td>

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

           


   
    

        <?php	} ?>

        </tbody>

    
        </table>    

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




