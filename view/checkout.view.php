<!-- Main Container -->
<section class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <div class="col-main col-sm-12 col-xs-12">
        <div class="page-content checkout-page"><div class="page-title">
          <h2>Checkout</h2>
        </div>
            <div class="box-border">
                <ul>
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="first_name" class="required">First Name</label>
                            <input type="text" class="input form-control" name="" id="first_name">
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="last_name" class="required">Last Name</label>
                            <input type="text" name="" class="input form-control" id="last_name">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="" class="input form-control" id="company_name">
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="email_address" class="required">Email Address</label>
                            <input type="text" class="input form-control" name="" id="email_address">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row"> 
                        <div class="col-xs-12">

                            <label for="address" class="required">Address</label>
                            <input type="text" class="input form-control" name="" id="address">

                        </div><!--/ [col] -->

                    </li><!-- / .row -->

                    <li class="row">

                        <div class="col-sm-6">
                            
                            <label for="city" class="required">City</label>
                            <input class="input form-control" type="text" name="" id="city">

                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            <label class="required">State/Province</label>
                                <select class="input form-control" name="">
                                    <option value="Alabama">Alabama</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Kansas">Kansas</option>
                            </select>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->

                    <li class="row">

                        <div class="col-sm-6">

                            <label for="postal_code" class="required">Zip/Postal Code</label>
                            <input class="input form-control" type="text" name="" id="postal_code">
                        </div><!--/ [col] -->

                        <div  class="col-sm-6">
                            <label class="required">Country</label>
                            <select class="input form-control" name="">
                                <option value="USA">USA</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="telephone" class="required">Telephone</label>
                            <input class="input form-control" type="text" name="" id="telephone">
                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            <label for="fax">Fax</label>
                            <input class="input form-control" type="text" name="" id="fax">
                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">
                        <div class="col-sm-6">
                            <label for="password" class="required">Password</label>
                            <input class="input form-control" type="password" name="" id="password">
                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            <label for="confirm" class="required">Confirm Password</label>
                            <input class="input form-control" type="password" name="" id="confirm">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li>
                        <button class="button"><i class="fa fa-angle-double-right"></i>&nbsp; <span>Continue</span></button>
                    </li>
                </ul>
            </div>
            
            <h4 class="checkout-sep last">Order Review</h4>
            <div class="box-border">
            <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Description</th>
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="public/source/images/products/img02.jpg" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#">Frederique Constant </a></p>
                                 <small><a href="#">Color : Beige</a></small><br>   
                                <small><a href="#">Size : S</a></small>
                            </td>
                            <td class="cart_avail"><span class="label label-success">In stock</span></td>
                            <td class="price"><span>$60.99 </span></td>
                            <td class="qty">
                                <input class="form-control input-sm" type="text" value="1">
                              
                            </td>
                            <td class="price">
                                <span>$60.99 </span>
                            </td>
                            <td class="action">
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="public/source/images/products/img01.jpg" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#">Frederique Constant </a></p>
                                <small><a href="#">Color : Beige</a></small><br>   
                                <small><a href="#">Size : S</a></small>
                            </td>
                            <td class="cart_avail"><span class="label label-success">In stock</span></td>
                            <td class="price"><span>$99.19 </span></td>
                            <td class="qty">
                                <input class="form-control input-sm" type="text" value="1">
                            
                            </td>
                            <td class="price">
                                <span>$99.19 </span>
                            </td>
                            <td class="action">
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="2"></td>
                            <td colspan="3">Total products (tax incl.)</td>
                            <td colspan="2">$160.88 </td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2"><strong>$160.88 </strong></td>
                        </tr>
                    </tfoot>    
                </table></div>
                <button class="button pull-right"><span>Place Order</span></button>
            </div>
        </div>
      </div>
      
    </div>
  </div>
  </section>
  <!-- Main Container End -->