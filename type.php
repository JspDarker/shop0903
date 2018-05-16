<?php

echo $_GET['type'];

die;
include_once "controller/TypeController.php";

$c = new TypeController;
return $c->loadPageType();

?>