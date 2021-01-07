<?php


class ProductController {

    public function __construct() {
        $this->view = new View();
    }

    public function call_listar(){
        $this->view->show("listar.php",null);
    }
    //Método para listar y devolver una lista tabla
    public function listar() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listado']=$items->listar();
        $this->view->show("ver_tabla_arts.php", $data);
    }

  
}