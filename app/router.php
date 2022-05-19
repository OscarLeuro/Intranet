<?php






class Router{

    public $URL = "hola";
        public function __construct()
        {
         
        
        }
      

        public function View($url){
            if($url !==''){
                include 'app/modules/'.$url.'/'.$url.'View.php'  ;
                
               
            }
            else {return 0;};}


   
        


     }

    
   





?>