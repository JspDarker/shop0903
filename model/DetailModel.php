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

    function selectProductByType($idType,$id){
        $sql = "SELECT p.*, u.url
                FROM products p
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE p.id_type = $idType
                AND p.id != $id";
        return $this->loadMoreRows($sql);
    }

    function selectProductById($id){
        $sql = "SELECT id, name, price, promotion_price, image
                FROM products 
                WHERE id=$id";
        return $this->loadOneRow($sql);
    }

}

?>