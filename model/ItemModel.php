<?php
class ItemModel {

    public function listar() {
        $url="https://us-central1-mooc-sstartsystems.cloudfunctions.net/app/api/products";
        $response=json_decode(file_get_contents($url), true );
        return $response;
    }//listar

  
}
