<?php
include_once "DBConnect.php";
class HomeModel extends DBConnect{

    function selectSlide(){
        $sql = "SELECT * FROM slide WHERE status=1";
        return $this->loadMoreRows($sql);
    }

    function selectFeaturedProduct(){
        $sql = "SELECT p.*, u.url
                FROM products p
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE p.status=1";
        return $this->loadMoreRows($sql);   
    }
    function selectBestSeller(){
        $sql = "SELECT p.*, u.url, sum(d.quantity) as qty
                FROM products p 
                INNER JOIN bill_detail d 
                ON p.id = d.id_product
                INNER JOIN page_url u 
                ON u.id = p.id_url
                GROUP BY d.id_product
                ORDER BY qty DESC
                LIMIT 0,10";
        return $this->loadMoreRows($sql);   
            
    }
}


?>