<!-- Main Container -->
<section class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <div class="col-main col-sm-12 col-xs-12">
        <div class="page-content checkout-page"><div class="page-title">
          <h2>Đặt hàng</h2>
          <?php if(isset($_SESSION['success'])):?>
            <div class="alert alert-success">
                <?=$_SESSION['success']; unset($_SESSION['success'])?>
            </div>
          <?php endif?>
          <?php if(isset($_SESSION['error'])):?>
            <div class="alert alert-danger">
                <?=$_SESSION['error']; unset($_SESSION['error'])?>
            </div>
          <?php endif?>
        </div>
            <form method="POST" >
                <div class="box-border">
                    <ul>
                        <li class="row">
                            <div class="col-sm-6">
                                <label for="last_name" class="required">Họ tên</label>
                                <input type="text" name="fullname" class="input form-control" id="last_name" required>
                            </div><!--/ [col] -->
                            <div class="col-sm-6">
                                <label for="email_address" class="required">Email </label>
                                <input type="email" class="input form-control" name="email" id="email_address" required>
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                        <li class="row"> 
                            <div class="col-xs-6">

                                <label for="address" class="required">Address</label>
                                <input type="text" class="input form-control" name="address" id="address" required>

                            </div><!--/ [col] -->
                            <div class="col-sm-6">
                                <label for="telephone" class="required">Điện thoại</label>
                                <input class="input form-control" type="text" name="phone" id="telephone" required>
                            </div><!--/ [col] -->
                        </li><!-- / .row -->
                        <li class="row">
                            <div class="col-sm-12">
                                <label for="fax">Ghi chú</label>
                                <textarea class="input form-control" name="note" id="note"></textarea>
                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li>
                            <button type="submit" name="btnCheckout" class="button"><i class="fa fa-angle-double-right"></i>&nbsp; <span>Đặt hàng</span></button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
  </section>
  <!-- Main Container End -->