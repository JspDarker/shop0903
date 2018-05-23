<?php

// function a($data=1){
//     echo $data;
// }
// $result = 2;
// a($result);
// die;


include_once 'controller/HomeController.php';

$c = new HomeController;
return $c->getHomePage();





?>