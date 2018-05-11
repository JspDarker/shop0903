<?php
include_once "controller/ShoppingCartController.php";

$c = new ShoppingCartController;
return $c->loadShoppingCart();

?>