<?php

require 'app/lib/getRoute.php';




class Router{
        public function __construct($route)
        {
            $this->URL = $route ;
        
        }
      

        public function View(){
            if($this->URL !==''){
                include 'app/modules/'.$this->URL.'/'.$this->URL.'View.php'  ;
                

            }
            else {return 0;};}
     }

    






?>