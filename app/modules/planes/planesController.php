<?php

 
    include 'app/lib/create.php';
    include 'app/lib/getRoute.php';
    include 'planesModel.php';
    


    class planesController{




        public function data(){


            return planesModel::planesData();



        }




    }


?>