<?php



    include 'registerModel.php';
    include 'app/lib/session.php';
    include 'app/lib/actions.php';
   
    

    class registerController{


  

        public function action($action){

          
            if($action =='crear'){

                header('Location:register');
                return registerModel::Create($action);

                

            }

         /**   elseif($action == 'editar'){

                include 'app/lib/session.php';
                return registerModel::Edit($id);
            } */

            
            elseif($action == 'eliminar'){

              
                return registerModel::Delete($action); 


            }
    
            

            

            

        }

        public function data($id){

          
            return registerModel::Read($id);

            

        }


    }


 



?>