<?php
include_once "Controller.php";

class TypeController extends Controller{

    function loadPageType(){
        return $this->loadView('type');
    }
}



?>