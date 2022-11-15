<?php


require 'loginModel.php';


    class loginController{

        
        public function login(){

            if(isset($_POST['user']) & isset($_POST['pass'])){


                    $user = $_POST['user'];
                    $pass = $_POST['pass'];


            }



        }


        public function data(){


            return loginModel::login();

        }

    }







?>