<?php
include_once "Controller.php";

class CheckoutController extends Controller{

    function loadCheckoutPage(){
        return $this->loadView('checkout');
    }
}



?>