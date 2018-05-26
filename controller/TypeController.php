<?php
include_once "Controller.php";
include_once "model/TypeModel.php";
include_once 'helper/Pager.php';

class TypeController extends Controller{

    function loadPageType(){
        $alias = isset($_GET['type']) ? $_GET['type'] : '';
        $page = isset($_GET['page']) && $_GET['page']>0 && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $qty = 9;
        $pageShow = 5;
        $position = ($page -1)*$qty;

        
        if($alias == ''){
            header('Location:404.apsx'); // apsx xem .htaccess
            return;
        }
        $model = new TypeModel;
        $type = $model->getNameType($alias);
        $products = $model->selectProductLevel2($alias,$position,$qty);
        $totalProduct = count($model->selectProductLevel2($alias,-1,-1));
        
        
        if(count($products) == 0){
            $products = $model->selectProductLevel1($alias,$position,$qty);
            $totalProduct = count($model->selectProductLevel1($alias,-1,-1));
        
        }
        $pager = new Pager($totalProduct,$page,$qty,$pageShow);
        $pagination = $pager->showPagination();
        //print_r($products);die;

        $allType = $model->selectAllType();
        
        $result = [
            'allType'=>$allType,
            'products'=>$products,
            'nametype'=>$type->name,
            'pagination'=>$pagination
        ];

        return $this->loadView('type',$result);
    }

    function AjaxCategories(){
        $alias = $_GET['alias'];
        $model = new TypeModel;
        $products = $model->selectProductLevel2($alias,-1,-1);
        $data = [
            'products'=>$products,
            'alias'=>$alias
        ];
        return $this->loadViewAjax('category',$data);
        
    }
}



?>