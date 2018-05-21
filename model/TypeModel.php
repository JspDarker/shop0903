<?php
require_once 'DBConnect.php';

class TypeModel extends DBConnect{

    function selectProductLevel1($alias){
        $sql = "SELECT p.*, pu.url
                FROM products p 
                INNER JOIN page_url pu 
                ON p.id_url = pu.id
                WHERE p.id_type IN (
                    SELECT ca.id
                    FROM categories ca 
                    WHERE id_parent = (
                        SELECT c.id
                        FROM categories c 
                        INNER JOIN page_url u 
                        ON c.id_url = u.id
                        WHERE u.url = '$alias'
                    )
                )";
        return $this->loadMoreRows($sql);
    }

    function selectProductLevel2($alias){
        $sql = "SELECT p.* , u.url
                FROM products p 
                INNER JOIN page_url u 
                ON u.id = p.id_url
                WHERE p.id_type = (
                    SELECT c.id 
                    FROM categories c 
                    INNER JOIN page_url u 
                    ON c.id_url = u.id
                    WHERE u.url = '$alias'
                )";
        return $this->loadMoreRows($sql);
    }

    function getNameType($slug){
        $sql = "SELECT c.name
                FROM categories c 
                INNER JOIN page_url u 
                ON c.id_url = u.id
                WHERE u.url = '$slug'";
        return $this->loadOneRow($sql);
    }
}



?>