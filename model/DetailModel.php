<?php
include_once 'DBConnect.php';

class DetailModel extends DBConnect{

    function getDetailProduct($alias, $id){
        $sql = "SELECT p.* 
                FROM products p
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE u.url = '$alias'
                AND p.id = $id";
        return $this->loadOneRow($sql);
    }
}

?>