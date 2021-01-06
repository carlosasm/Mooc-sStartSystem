<?php
class ItemModel {

    /*

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }*/

//constructor

    public function listar() {
        $resulado=json_decode(file_get_contents('https://serverless.dabrin.vercel.app/api/meals'), true );
        return $resulado;
    }//listar

    //método para registar en la bd
    

}
