<?php


    if(isset($_GET['URL'])){

        $url = $_GET['URL'];

    }

    else {$url = '';}


    class Router{

        public function __construct($route){


            
            $this->URL = $route ;



        }
      

        public function View(){


            if($this->URL !==''){

                include 'app/modules/register/'.$this->URL.'.php'  ;


            } 

            else {

                return 0;

            }

           ;
                
            



        }
    



    }

    






?>