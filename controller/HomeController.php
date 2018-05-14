<?php
include_once 'Controller.php';
include_once 'model/HomeModel.php';

class HomeController extends Controller{

    function getHomePage(){
        $model = new HomeModel;
        $slides = $model->selectSlide();
        $featuredProduct = $model->selectFeaturedProduct();
        $data = [
            'slides'=>$slides,
            'featuredProduct'=>$featuredProduct
        ];
        return $this->loadView('home',$data);
    }
}

?>