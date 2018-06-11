<?php
include_once "Controller.php";

class CheckoutController extends Controller{

    function loadCheckoutPage(){
        return $this->loadView('checkout');
    }

    function checkOut(){
        $email = $_POST['email'];
        $name = $_POST['fullname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        
    }
}



?>