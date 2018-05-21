<?php
include_once "Controller.php";
include_once "model/TypeModel.php";

class TypeController extends Controller{

    function loadPageType(){
        $alias = isset($_GET['type']) ? $_GET['type'] : '';
        if($alias == ''){
            header('Location:404.apsx'); // apsx xem .htaccess
            return;
        }
        $model = new TypeModel;
        $type = $model->getNameType($alias);
        $products = $model->selectProductLevel2($alias);
        $data = [
            'products'=>$products,
            'nametype'=>$type->name
        ];

        return $this->loadView('type',$data);
    }
}



?>