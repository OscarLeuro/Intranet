<?php


    include 'registerModel.php';
   
    

    class registerController{


  

        public function action($action){

          
            if($action =='crear'){

                header('Location:register');
                return registerModel::CreateRegister($action);

                

            }

            elseif($action == 'editar'){

                include 'app/lib/session.php';
                return registerModel::EditRegister($id);


            }
            elseif($action == 'eliminar'){

                include 'app/lib/session.php';
                return registerModel::Delete($action); 


            }
            

            

            

        }

        public function data(){

          
            return registerModel::readData();

            

        }


    }


 



?>