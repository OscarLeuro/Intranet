<?php


include 'modalLib.php';

$data11 = ModalInfo::Read($id);



if($row = mysqli_fetch_array($data11)){


    $ID = $row['ID'];
    $USER = $row['USER'];
}


?>

<div class="row">
 

    <table class="table table-blue">

        <thead>

            <th>ID</th>
            <th>USER</th>
            <th>ACTION</th>

        </thead>

        <tbody>

        <tr>

            <td><?= $ID?> <input type="hidden" value="<?= $ID?>" id="n_id">  </td>
            <td>

                <div class="input-group-column">

                    <input type="text" name="" id="n_value" value="<?= $USER?>">


                </div>

            </td>
            <td> <button id="edit" onclick="Editar('<?= $ID ?>');">Editar</button> </td>


        </tr>



        </tbody>


    </table>



</div>

<script src="./public/js/editAjax.js"> </script>