<?php
include_once 'Controller.php';
include_once 'model/DetailModel.php';
include_once 'helper/Cart.php';
session_start();

class CartController extends Controller{

    function loadShoppingCart(){
        $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
        $cart = new Cart($oldCart);
        return $this->loadView('shopping-cart',$cart,"Giỏ hàng của bạn");
    }

    function addToCart(){
        $id = $_POST['id'];
        $qty =  isset($_POST['qty']) ? (int)$_POST['qty'] : 1;
        $model = new DetailModel;
        $product = $model->selectProductById($id);
        
        $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$qty);
        $_SESSION['cart'] = $cart;
        echo $cart->items[$id]['item']->name;
    }

    function deleteCart(){
        echo $_POST['id'];
        
    }
    function updateCart(){
        
    }
}



?>