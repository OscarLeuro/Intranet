<?php


require 'loginModel.php';


    class loginController{

    


        public function data(){


            return loginModel::login();

        }

    }







?>