<?php
include_once "Controller.php";
include_once 'model/CheckoutModel.php';
include_once 'helper/Cart.php';
session_start();

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
        
        $model = new CheckoutModel();
        $idCustomer = $model->saveCustomer($name, $email, $address, $phone);
        if($idCustomer){
            //save bill
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
            if($cart==null){
                header('location:index.php'); 
                return;
            }
            // print_r($cart);
            // die;
            $dateOrder = date('Y-m-d',time());
            $promtPrice = $cart->promtPrice;
            $total = $cart->totalPrice;

            $token = "";
            $tokenDate = date('Y-m-d H:i:s',time());

            $idBill = $model->saveBill($idCustomer, $dateOrder,$promtPrice, $total, $note,$token, $tokenDate);


        }
        else{
            $_SESSION['error'] = "Có lỗi xảy ra, vui lòng thử lại";
            header('location:checkout.php');
            return;
        }
    }
}



?>