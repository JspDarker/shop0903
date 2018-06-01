<?php
$product = $data['product'];
$relatedProducts = $data['relatedProducts'];
?>
<!-- Main Container -->
<div class="main-container col1-layout">
      <div class="container">
        <div class="row">
          <div class="col-main">
            <div class="product-view-area">
              <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                <div class="icon-sale-label sale-left">Sale</div>
                <div class="large-image">
                  <a href="public/source/images/products/<?=$product->image?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20">
                    <img class="zoom-img" src="public/source/images/products/<?=$product->image?>" alt="products"> </a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">

                <div class="product-name">
                  <h1><?=$product->name?></h1>
                </div>
                <div class="price-box">
                  <?php if($product->promotion_price!=0):?>
                  <p class="special-price">
                    <span class="price-label">Giá khuyến mãi</span>
                    <span class="price"> <?=number_format($product->promotion_price)?> vnđ</span>
                  </p>
                  <p class="old-price">
                    <span class="price-label">Giá gốc:</span>
                    <span class="price"> <?=number_format($product->price)?> vnđ </span>
                  </p>
                  <?php else:?>
                  <p class="special-price">
                    <span class="price-label">Đơn giá</span>
                    <span class="price"> <?=number_format($product->price)?> vnđ </span>
                  </p>
                  <?php endif?>
                </div>

                <div class="short-description">
                  <h2>Thông tin chi tiết</h2>
                  <?=$product->detail?>

                </div>

                <div class="product-variation">
                  <form action="#" method="post">
                    <div class="cart-plus-minus">
                      <label for="qty">Quantity:</label>
                      <div class="numbers-row">
                        <div   class="dec qtybutton">
                          <i class="fa fa-minus">&nbsp;</i>
                        </div>
                        <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                          class="inc qtybutton">
                          <i class="fa fa-plus">&nbsp;</i>
                        </div>
                      </div>
                    </div>
                    <button class="button pro-add-to-cart" title="Add to Cart" type="button">
                      <span>
                        <i class="fa fa-shopping-cart"></i> Add to Cart</span>
                    </button>
                  </form>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Main Container End -->
    <!-- Related Product Slider -->
    <section class="upsell-product-area">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">

            <div class="page-header">
              <h2>Sản phẩm cùng loại</h2>
            </div>
            <div class="slider-items-products">
              <div id="upsell-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                  <?php foreach($relatedProducts as $p):?>
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
                                  <button id-sp="<?=$p->id?>" type="button" class="add-to-cart-mt">
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
                  <?php endforeach?>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Related Product Slider End -->
