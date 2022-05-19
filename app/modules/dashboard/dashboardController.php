<?php


include 'dashboardModel.php';


class dashboardController {

    public function read(){


        return dashboardModel::data();



    }


}




?>