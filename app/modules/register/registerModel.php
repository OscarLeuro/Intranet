<?php




class registerModel{
    
   
    


    public function Create($action){
        
    include 'app/lib/config/connect.php';

    if($action == 'crear'){


            $name = $_POST['name'];
            $apellido = $_POST['apellido'];
            $tel = $_POST['tel'];
            $dni = $_POST['dni'];
            $correo = $_POST['email'];
            $rol = $_POST['rol'];

            $sql = "INSERT INTO users(NOMBRE, APELLIDO, DNI, TEL, CORREO, ROL) VALUES('$name', '$apellido', '$dni','$tel','$correo','$rol')";
            mysqli_query($connect,$sql);}

    }
    

    

public function Read($id){
    include 'app/lib/config/connect.php';


    if(isset($id)){

        $SQL = "SELECT * FROM users WHERE ID = '$id'";

    } 
    else{$SQL = 'SELECT * FROM users ORDER BY ID DESC';}
  
    
    $QUERY = mysqli_query($connect,$SQL);
    return $QUERY;}




    public function Edit($id,$data){

        include 'app/lib/config/connect.php';
      
        

        $SQL  = "UPDATE users SET USER = '$USER' WHERE ID = '$id'";

        mysqli_query($connect, $SQL);

        


    }

    public function Delete($action){


        include 'app/lib/config/connect.php';
        
        

        if($action == 'eliminar'){


            $user = $_POST['ID'];

            $sql = "DELETE FROM users WHERE ID = '$user'";
            mysqli_query($connect,$sql);}


    }



}




?>