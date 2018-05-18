<?php
include_once "Controller.php";
include_once "model/TypeModel.php";

class TypeController extends Controller{

    function loadPageType(){
        $alias = $_GET['type'];
        $model = new TypeModel;
        $level2 = $model->selectProductLevel2($alias);
        $data = [
            'level2'=>$level2
        ];

        return $this->loadView('type',$data);
    }
}



?>