<?php
require_once "model/BaseModel.php";

class Controller{

    function loadView($view, $data = []){
        $model = new BaseModel;
        $menu = $model->selectMenu();
        
        include_once 'view/layout.view.php';
        
    }   
}


// $c = new Controller;
// return $c->loadView('home'); //load home page
// return $c->loadView('detail'); //load detail page


?>