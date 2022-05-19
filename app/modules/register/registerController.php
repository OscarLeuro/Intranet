<?php


    include 'registerModel.php';
   
    

    class registerController{


        public function __construct()
        {
            
        }


  

        public function data($action){

          
            return registerModel::CreateRegister($action);

            

        }


    }


 



?>