<?php

    require 'app/lib/getRoute.php';
    include 'registerModel.php';
    require 'app/lib/create.php';
    

    class registerController{


        public function __construct()
        {
            
        }


  

        public function data($action){

          
            return registerModel::CreateRegister($action);

            

        }


    }


 



?>