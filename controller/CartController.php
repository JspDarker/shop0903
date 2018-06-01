<?php
include_once 'model/DetailModel.php';

class CartController{

    function addToCart(){
        $id = $_POST['id'];
        $model = new DetailModel;
        $product = $model->selectProductById($id);
        print_r($product);
    
    }
}



?>