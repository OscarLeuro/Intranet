<?php



include 'app/lib/config/connect.php';
include 'app/lib/actions.php';


class registerModel{
    
    private $SQL;
    


    public function CreateRegister($action){
        
        include 'app/lib/config/connect.php';
        $data = null;

        if($action == 'crear'){


            $user = $_POST['prueba'];

            $sql = "INSERT INTO prueba(USER) VALUES('$user')";
            mysqli_query($connect,$sql);



                                 }

                               

                   


    }



public function readData(){


    include 'app/lib/config/connect.php';
    

    $data= [];
    $SQL = 'SELECT * FROM prueba';
    $QUERY = mysqli_query($connect,$SQL);
   
    return $QUERY;




}

}










?>