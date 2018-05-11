<?php
include_once "Controller.php";

class ShoppingCartController extends Controller{

    function loadShoppingCart(){
        return $this->loadView('shopping-cart');
    }
}



?>