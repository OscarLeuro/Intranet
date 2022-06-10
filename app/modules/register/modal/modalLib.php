<?php


include '../../../lib/session.php';



class ModalInfo{
    
    
            public function Read($id){

                include '../../../lib/config/connect.php';

    if(isset($id)){

        $SQL = "SELECT * FROM prueba WHERE ID = '$id'";

    } 
    else{$SQL = 'SELECT * FROM prueba ORDER BY ID DESC';}
  
    
    $QUERY = mysqli_query($connect,$SQL);
    return $QUERY;}




    public function Edit($id,$data){

        include '../../../lib/config/connect.php';
      
        

        $SQL  = "UPDATE prueba SET USER = '$data' WHERE ID = '$id'";

        mysqli_query($connect, $SQL);

       


    }




}




if(isset($_POST['data'])){



    $data = $_POST['data'];
    $id = $_POST['id'];

       ModalInfo::Edit($id,$data);



}

echo 'Registro Editado';



?>