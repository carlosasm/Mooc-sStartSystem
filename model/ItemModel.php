<?php
class ItemModel {

    public function listar() {
        $url="https://us-central1-mooc-sstartsystems.cloudfunctions.net/app/api/products";
        $response=json_decode(file_get_contents($url), true );
        return $response;
    }//listar

    public function insertData(){
    $data=array( 
        "codigo"=>$_POST["codigo"], 
        "description"=>$_POST["description"], 
        "cost_price"=>$_POST["cost_price"], 
        "id"=>$_POST["id"], 
        "img_url"=>$_POST["img_url"], 
        "name"=>$_POST["name"], 
        "profit_percentage"=>$_POST["profit_percentage"], 
        "quantity"=>$_POST["quantity"], 
            "sale_price"=>$_POST["sale_price"]
    );
    $url = 'https://us-central1-mooc-sstartsystems.cloudfunctions.net/app/api/products';
    $opciones = array('https' =>
        array(
             'method'  => 'POST',
                'mode'=> 'cors',
             'header'  => 'Content-Type:application/json',
             'body' => $data
         )
     );
    
    $contexto = stream_context_create($opciones);
    $resultado = file_get_contents('https://us-central1-mooc-sstartsystems.cloudfunctions.net/app/api/products', false, $contexto);

    }
}
