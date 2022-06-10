<?php




class registerModel{
    
   
    


    public function Create($action)
    
    {include 'app/lib/config/connect.php';

    if($action == 'crear'){


            $user = $_POST['prueba'];

            $sql = "INSERT INTO prueba(USER) VALUES('$user')";
            mysqli_query($connect,$sql);}

    }
    

    
    
    
    


public function Read($id){
    include 'app/lib/config/connect.php';


    if(isset($id)){

        $SQL = "SELECT * FROM prueba WHERE ID = '$id'";

    } 
    else{$SQL = 'SELECT * FROM prueba ORDER BY ID DESC';}
  
    
    $QUERY = mysqli_query($connect,$SQL);
    return $QUERY;}




    public function Edit($id,$data){

        include 'app/lib/config/connect.php';
      
        

        $SQL  = "UPDATE prueba SET USER = '$USER' WHERE ID = '$id'";

        mysqli_query($connect, $SQL);

        


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