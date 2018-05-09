<?php
class Controller{

    function loadView($view, $data = []){

        include_once 'view/layout.view.php';
        
    }   
}


// $c = new Controller;
// return $c->loadView('home'); //load home page
// return $c->loadView('detail'); //load detail page


?>