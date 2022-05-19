<?php

 
    

    include 'planesModel.php';
    


    class planesController{




        public function data(){


            return planesModel::planesData();



        }




    }


?>