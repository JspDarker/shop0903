<?php
require_once 'Controller.php';
require_once 'model/DetailModel.php';

class DetailController extends Controller {
    
    function getDetailPage(){
        
        $alias = $_GET['alias'];
        $id = $_GET['id'];

        $model = new DetailModel();
        $product = $model->getDetailProduct($alias, $id);
        if($product == ''){
            header('location:404.php');
        }
        $data = [
            'product'=>$product
        ];
        $this->loadView('detail',$data, $product->name);
    }

}







?>