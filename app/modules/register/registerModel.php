<?php




include 'app/lib/actions.php';


class registerModel{
    
   
    


    public function CreateRegister($action){
        
        include 'app/lib/config/connect.php';

        if($action == 'crear'){


            $user = $_POST['prueba'];

            $sql = "INSERT INTO prueba(USER) VALUES('$user')";
            mysqli_query($connect,$sql);}

            }
    
    
    
    
    public function readData(){
    include 'app/lib/config/connect.php';
  
    $SQL = 'SELECT * FROM prueba ORDER BY ID DESC';
    $QUERY = mysqli_query($connect,$SQL);
    return $QUERY;}




    public function EditRegister($id){

        include 'app/lib/config/connect.php';
      
        

        $SQL  = "SELECT * FROM prueba WHERE ID = '$id'";

        $QUERY = mysqli_query($connect, $SQL);

        return $QUERY;


    }

    public function Delete($action){


        include 'app/lib/config/connect.php';
        
        

        if($action == 'eliminar'){


            $user = $_POST['ID'];

            $sql = "DELETE FROM prueba WHERE ID = '$user'";
            mysqli_query($connect,$sql);}


    }



}




?>