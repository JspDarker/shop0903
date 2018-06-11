<?php
require_once 'DBConnect.php';

class CheckoutModel extends DBConnect{
    function saveCustomer($name, $email, $address, $phone){
        $sql = "INSERT INTO customers(name,email,address,phone)
                VALUES ('$name','$email','$address','$phone')";
        $result = $this->executeQuery($sql);
        return $result ? getLastId() : false;
    }

    function saveBill($idCustomer, $dateOrder, $total, $note,$token, $tokenDate){

        $sql = "INSERT INTO bills(id_customer,date_order,total, note, token, token_date)
                VALUES ($idCustomer, '$dateOrder', $total, '$note','$token', '$tokenDate')";
        $result = $this->executeQuery($sql);
        return $result ? getLastId() : false;
        
    }
    function saveBillDetail(){
        
    }
}




?>