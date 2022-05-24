<?php


    include 'registerModel.php';
   
    

    class registerController{


        public function __construct()
        {
            
        }


  

        public function action($action){

          
            return registerModel::CreateRegister($action);

            

        }

        public function data(){

          
            return registerModel::readData();

            

        }


    }


 



?>