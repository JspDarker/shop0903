<?php
require_once 'Controller.php';

class DetailController extends Controller {
    
    function getDetailPage(){
        $data = [
            'name'=>'Huong'
        ];
        $this->loadView('detail',$data);
    }

}







?>