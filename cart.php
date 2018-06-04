<?php

include_once 'controller/CartController.php';
$c = new CartController;

if(isset($_POST['action']) && $_POST['action'] == "delete"){
    return $c->deleteCart();
}
elseif(isset($_POST['action']) && $_POST['action'] == "update"){
    return $c->updateCart();
} 
else return $c->addToCart();
?>


