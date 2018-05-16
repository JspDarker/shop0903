<?php

echo $_GET['alias'];
echo "<br>";
echo $_GET['id'];
die;


require_once 'controller/DetailController.php';

$c = new DetailController;
return $c->getDetailPage();


?>