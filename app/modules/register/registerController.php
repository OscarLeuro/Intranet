<?php


    include 'registerModel.php';
    require 'app/lib/session.php';
    include 'app/lib/actions.php';
   
    

    class registerController{


  

        public function action($action){

          
            if($action =='crear'){

                header('Location:register');
                return registerModel::Create($action);

                

            }

            elseif($action == 'editar'){

                include 'app/lib/session.php';
                return registerModel::Edit($id);


            }
            elseif($action == 'eliminar'){

              
                return registerModel::Delete($action); 


            }
            elseif($action == 'guardar'){

                include 'app/lib/session.php';
                return registerModel::Edit($id);


            }
            

            

            

        }

        public function data($id){

          
            return registerModel::Read($id);

            

        }


    }


 



?>