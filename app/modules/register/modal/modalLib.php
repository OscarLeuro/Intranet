<?php


include '../../../lib/session.php';



class ModalInfo{
    
    
            public function Read($id){

                include '../../../lib/config/connect.php';

    if(isset($id)){

        $SQL = "SELECT * FROM prueba WHERE ID = '$id'";

    } 
    
  
    
    $QUERY = mysqli_query($connect,$SQL);
    return $QUERY;}




    public function Edit($id,$data){

        include '../../../lib/config/connect.php';
      
        

        $SQL  = "UPDATE prueba SET USER = '$data' WHERE ID = '$id'";

        mysqli_query($connect, $SQL);

        echo 'Registro Editado';
       


    }




}




if(isset($_POST['data'])){



    $data = $_POST['data'];
    $id = $_POST['id'];

       ModalInfo::Edit($id,$data);



}





?>