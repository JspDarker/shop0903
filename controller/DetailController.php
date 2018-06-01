<?php
require_once 'Controller.php';
require_once 'model/DetailModel.php';

class DetailController extends Controller {
    
    function getDetailPage(){
        
        $alias = $_GET['alias'];
        $id = $_GET['id'];

        $model = new DetailModel();
        $product = $model->getDetailProduct($alias, $id);

        $type = $product->id_type;
        $relatedProducts = $model->selectProductByType($type,$id);
        //print_r($relatedProducts); die;
        if($product == ''){
            header('location:404.php');
        }
        $data = [
            'product'=>$product,
            'relatedProducts'=>$relatedProducts
        ];
        $this->loadView('detail',$data, $product->name);
    }

}







?>