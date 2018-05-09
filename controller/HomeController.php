<?php
include_once 'Controller.php';
class HomeController extends Controller{

    function getHomePage(){
        return $this->loadView('home');
    }
}

?>