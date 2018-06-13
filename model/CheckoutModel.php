<?php
require_once 'DBConnect.php';

class CheckoutModel extends DBConnect{
    function saveCustomer($name, $email, $address, $phone){
        $sql = "INSERT INTO customers(name,email,address,phone)
                VALUES ('$name','$email','$address','$phone')";
        $result = $this->executeQuery($sql);
        return $result ? $this->getLastId() : false;
    }

    function saveBill($idCustomer, $dateOrder, $promtPrice, $total, $note,$token, $tokenDate){

        $sql = "INSERT INTO bills(id_customer,date_order, promt_price, total, note, token, token_date)
                VALUES ($idCustomer, '$dateOrder', $promtPrice, $total, '$note','$token', '$tokenDate')";
        $result = $this->executeQuery($sql);
        return $result ? $this->getLastId() : false;
        
    }

    function saveBillDetail($idBill,$idProduct, $qty, $price){
        $sql = "INSERT INTO bill_detail(id_bill,id_product,quantity,price)
                VALUES($idBill,$idProduct, $qty, $price)";
        return $this->executeQuery($sql); 
    }
}




?>