<?php


class UserController {

    public function __construct() {
        $this->view = new View();
    }

   
    public function inicio_sesion(){
        $this->view->show("indexView.php",null);
    }

}