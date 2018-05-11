<?php
/**
 * 
 * 
 * SELECT c1.name as name1, pu.url as url1, c2.name as name2, c2.url as url2
    FROM `categories` c1
    LEFT JOIN (
        SELECT c.*, p.url
        FROM `categories` c
        INNER JOIN page_url p
        ON p.id = c.id_url
        WHERE c.id_parent is NOT NULL
    ) c2
    ON c1.id = c2.id_parent
    INNER JOIN page_url pu 
    ON pu.id = c1.id_url
    WHERE c1.id_parent is NULL
 */



?>