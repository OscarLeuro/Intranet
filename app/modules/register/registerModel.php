<?php




include 'app/lib/create.php';


class registerModel{
    
    


    public function CreateRegister($action){
        
        $data = null;

        if($action == 'crear'){


            $user = $_POST['prueba'];

            $sql = "INSERT INTO prueba(USER) VALUES('$user')";
            $query = mysqli_query($conn,$sql);



                 $data = ['nombre' => 'Oscar Leuro', 'edad' => 26] ;

       
                 return $data;
                                 }

                               

                   


    }


}










?>