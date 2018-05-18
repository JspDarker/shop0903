<?php
include_once 'Controller.php';
include_once 'model/HomeModel.php';

class HomeController extends Controller{

    function getHomePage(){
        $model = new HomeModel;
        $slides = $model->selectSlide();
        $featuredProduct = $model->selectFeaturedProduct();
        $bestSellers = $model->selectBestSeller();
        $newProducts = $model->selectNewProduct();
        $data = [
            'slides'=>$slides,
            'featuredProduct'=>$featuredProduct,
            'bestSellers' => $bestSellers,
            'newProducts' => $newProducts
        ];
        return $this->loadView('home',$data);
    }
}

?>