<?php

require 'app/lib/create.php';
require 'app/lib/getRoute.php';
require 'loginModel.php';


    class loginController{

    


        public function data(){


            return loginModel::login();

        }

    }







?>