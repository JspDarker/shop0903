<?php
include_once 'model/DetailModel.php';
include_once 'helper/Cart.php';
session_start();

class CartController{

    function addToCart(){
        $id = $_POST['id'];
        $qty = 1;
        $model = new DetailModel;
        $product = $model->selectProductById($id);
        
        $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$qty);
        $_SESSION['cart'] = $cart;
        echo $cart->items[$id]['item']->name;
    }
}



?>