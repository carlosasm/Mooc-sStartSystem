<?php


class ItemController {

    public function __construct() {
        $this->view = new View();
    }

    public function call_listar(){
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listado']=$items->listar();
        $this->view->show("listar.php",$data);
    }
    //Método para listar y devolver una lista tabla
    public function listar() {
       
    }


}
