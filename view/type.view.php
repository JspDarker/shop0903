<?php
$products = $data['products'];
$allType = $data['allType'];
// print_r($allType);
// die;

?>
<!-- Main Container -->
<div class="main-container col2-left-layout">
      <div class="container">
        <div class="row">
          <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
            <div class="category-description std">
              <div class="slider-items-products">
                <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                    <!-- Item -->
                    <div class="item">
                      <a href="#x">
                        <img alt="" src="public/source/images/cat-slider-img1.jpg">
                      </a>
                      <div class="inner-info">
                        <div class="cat-img-title">
                          <span>Our new range of</span>
                          <h2 class="cat-heading">
                            <strong>Smartphone</strong>
                          </h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                          <a class="info" href="#">Shop Now</a>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="item">
                      <a href="#x">
                        <img alt="" src="public/source/images/cat-slider-img2.jpg">
                      </a>
                    </div>

                    <!-- End Item -->

                  </div>
                </div>
              </div>
            </div>
            <div class="shop-inner">
              <div class="page-title">
                <h2><?=$data['nametype']?></h2>
              </div>

              <div class="product-grid-area">
                <ul class="products-grid">
                  <?php foreach($products as $p):?>
                  <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 " style="height:350px">
                    <div class="product-item">
                      <div class="item-inner">
                          <div class="product-thumbnail">
                            <?php if($p->promotion_price != 0):?>
                            <div class="icon-sale-label sale-left">Sale</div>
                            <?php endif?>
                            <?php if($p->new == 1):?>
                            <div class="icon-new-label new-right">New</div>
                            <?php endif?>

                            <div class="pr-img-area">
                              <!-- detail.php?alias=iphone-x-64gb&id=2 -->
                              <a title="<?=$p->name?>" href="<?=$p->url?>-<?=$p->id?>">
                                <figure>
                                  <img class="first-img" src="public/source/images/products/<?=$p->image?>" alt="html template">
                                  <img class="hover-img" src="public/source/images/products/<?=$p->image?>" alt="html template">
                                </figure>
                              </a>
                              <button type="button" class="add-to-cart-mt">
                                <i class="fa fa-shopping-cart"></i>
                                <span> Add to Cart</span>
                              </button>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a title="<?=$p->name?>" href="<?=$p->url?>-<?=$p->id?>"><?=$p->name?></a>
                              </div>
                              <div class="item-content">
                              <div class="item-price">
                                <div class="price-box">
                                  <?php if($p->promotion_price != 0):?>
                                  <p class="special-price">
                                    <span class="price"> <?=number_format($p->promotion_price)?> </span>
                                  </p>
                                  <p class="old-price">
                                    <span class="price"> <?=number_format($p->price) ?></span>
                                  </p>
                                  <?php else :?>
                                  <p class="special-price">
                                    <span class="price"> <?=number_format($p->price)?> </span>
                                  </p>
                                  <?php endif ?>
                                </div>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </li>
                  <?php endforeach?>

                </ul>
              </div>
              <div class="pagination-area ">
                <?=$data['pagination']?>
              </div>
            </div>
          </div>
          <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
            
            <div class="block shop-by-side">
              <div class="sidebar-bar-title">
                <h3>Shop By</h3>
              </div>
              
              <div class="block-content">
                <p class="block-subtitle">Shopping Options</p>
                <div class="layered-Category">
                  <h2 class="saider-bar-title">Categories</h2>
                  <div class="layered-content">
                    <ul class="check-box-list">
                      <?php foreach($allType as $type):?>
                        <li>
                            <input type="checkbox" id="<?=$type->url?>" name="jtvc">
                            <label class="cate-list" for="<?=$type->url?>">
                            <span class="button"></span><?=$type->name?>
                            <span class="count">(<?=$type->soluong?>)</span>
                            </label>
                        </li>
                      <?php endforeach?>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
            <div class="block product-price-range ">
              <div class="sidebar-bar-title">
                <h3>Price</h3>
              </div>
              <div class="block-content">
                <div class="slider-range">
                  <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$" class="slider-range-price" data-value-min="50"
                    data-value-max="350"></div>
                  <div class="amount-range-price">Range: $10 - $550</div>
                  <ul class="check-box-list">
                    <li>
                      <input type="checkbox" id="p1" name="cc" />
                      <label for="p1">
                        <span class="button"></span> $20 - $50
                        <span class="count">(0)</span>
                      </label>
                    </li>
                    <li>
                      <input type="checkbox" id="p2" name="cc" />
                      <label for="p2">
                        <span class="button"></span> $50 - $100
                        <span class="count">(0)</span>
                      </label>
                    </li>
                    <li>
                      <input type="checkbox" id="p3" name="cc" />
                      <label for="p3">
                        <span class="button"></span> $100 - $250
                        <span class="count">(0)</span>
                      </label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="block sidebar-cart">
              <div class="sidebar-bar-title">
                <h3>My Cart</h3>
              </div>
              <div class="block-content">
                <p class="amount">There are
                  <a href="shopping_cart.html">2 items</a> in your cart.</p>
                <ul>
                  <li class="item">
                    <a href="shopping_cart.html" title="Sample Product" class="product-image">
                      <img src="public/source/images/products/img07.jpg" alt="Sample Product ">
                    </a>
                    <div class="product-details">
                      <div class="access">
                        <a href="#" title="Remove This Item" class="remove-cart">
                          <i class="icon-close"></i>
                        </a>
                      </div>
                      <p class="product-name">
                        <a href="shopping_cart.html">Lorem ipsum dolor sit amet Consectetur</a>
                      </p>
                      <strong>1</strong> x
                      <span class="price">$19.99</span>
                    </div>
                  </li>
                  <li class="item last">
                    <a href="#" title="Sample Product" class="product-image">
                      <img src="public/source/images/products/img08.jpg" alt="Sample Product">
                    </a>
                    <div class="product-details">
                      <div class="access">
                        <a href="#" title="Remove This Item" class="remove-cart">
                          <i class="icon-close"></i>
                        </a>
                      </div>
                      <p class="product-name">
                        <a href="shopping_cart.html">Consectetur utes anet adipisicing elit</a>
                      </p>
                      <strong>1</strong> x
                      <span class="price">$8.00</span>
                      <!--access clearfix-->
                    </div>
                  </li>
                </ul>
                <div class="summary">
                  <p class="subtotal">
                    <span class="label">Cart Subtotal:</span>
                    <span class="price">$27.99</span>
                  </p>
                </div>
                <div class="cart-checkout">
                  <button class="button button-checkout" title="Submit" type="submit">
                    <i class="fa fa-check"></i>
                    <span>Checkout</span>
                  </button>
                </div>
              </div>
            </div>


            <div class="single-img-add sidebar-add-slider ">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="public/source/images/add-slide1.jpg" alt="slide1">
                    <div class="carousel-caption">
                      <h3>
                        <a href="single_product.html" title=" Sample Product">Sale Up to 50% off</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <a href="#" class="info">shopping Now</a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="public/source/images/add-slide2.jpg" alt="slide2">
                    <div class="carousel-caption">
                      <h3>
                        <a href="single_product.html" title=" Sample Product">Smartwatch Collection</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <a href="#" class="info">All Collection</a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="public/source/images/add-slide3.jpg" alt="slide3">
                    <div class="carousel-caption">
                      <h3>
                        <a href="single_product.html" title=" Sample Product">Summer Sale</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="block special-product">
              <div class="sidebar-bar-title">
                <h3>Special Products</h3>
              </div>
              <div class="block-content">
                <ul>
                  <li class="item">
                    <div class="products-block-left">
                      <a href="single_product.html" title="Sample Product" class="product-image">
                        <img src="public/source/images/products/img01.jpg" alt="Sample Product ">
                      </a>
                    </div>
                    <div class="products-block-right">
                      <p class="product-name">
                        <a href="single_product.html">Lorem ipsum dolor sit amet Consectetur</a>
                      </p>
                      <span class="price">$19.99</span>
                      <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="products-block-left">
                      <a href="single_product.html" title="Sample Product" class="product-image">
                        <img src="public/source/images/products/img02.jpg" alt="Sample Product ">
                      </a>
                    </div>
                    <div class="products-block-right">
                      <p class="product-name">
                        <a href="single_product.html">Consectetur utes anet adipisicing elit</a>
                      </p>
                      <span class="price">$89.99</span>
                      <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                    </div>
                  </li>
                </ul>
                <a class="link-all" href="shop_grid.html">All Products</a>
              </div>
            </div>


          </aside>
        </div>
      </div>
    </div>
    <!-- Main Container End -->
  
<!-- jquery js -->
<script type="text/javascript" src="public/source/js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.cate-list').click(function(){
            var tenkhongdau = $(this).attr('for')
            $.ajax({
                url:"ajax-categories.php",
                type: "GET",
                data:{
                    alias: tenkhongdau // $_GET['alias']
                },
                success:function(response){
                    console.log(response) 
                },
                error:function(error){
                    console.log(error)
                }
            })
        })
    })

</script>