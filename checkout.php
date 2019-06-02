<?php $pageTitle = 'تكملة عملية الدفع'; ?>
<?php include 'init.php'; ?>

<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php'; ?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content" role="main">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
        <div class="inner__card shadow-sm">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-8 offset-2 text-center my-4"><img src="<?php echo $img; ?>icons/shopping-basket-2.svg" alt=""></div>
                <div class="col-12">
                  <form action="#" method="POST">
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-male-user"></span></span></div>
                          <input class="form-control form-control-lg" id="" type="text" placeholder="الإسم بالكامل">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-9">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-call-answer"></span></span></div>
                          <input class="form-control form-control-lg" id="" type="number" placeholder="رقم الهاتف">
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="input-group">
                          <input class="form-control form-control-lg" id="registeration_input_phone_code" type="text" placeholder="+566">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-6">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_country_prepend"><span class="icon-maps-pin"></span></span></div>
                          <select class="form-control form-control-lg" name="" id="">
                            <option value="" readonly>المحافظة</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_government_prepend"><span class="icon-maps-pin"></span></span></div>
                          <select class="form-control form-control-lg" name="" id="">
                            <option value="" readonly>المدينة</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-maps-pin"></span></span></div>
                          <input class="form-control form-control-lg" id="" type="text" placeholder="العنوان">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-1">
                      <div class="col-12">
                        <h6 class="text-primary">طريقة الدفع</h6>
                      </div>
                    </div>
                    <ul class="form-row mb-3 radio-btn">
                      <li class="col-4">
                        <input type="radio" id="option-1" name="payment_method">
                        <label for="option-1">كاش</label>
                        <div class="check"></div>
                      </li>
                      <li class="col-4">
                        <input type="radio" id="option-2" name="payment_method">
                        <label for="option-2">ماستر كارد</label>
                        <div class="check">
                          <div class="inside"></div>
                        </div>
                      </li>
                      <li class="col-4">
                        <input type="radio" id="option-3" name="payment_method">
                        <label for="option-3">باي بال</label>
                        <div class="check">
                          <div class="inside"></div>
                        </div>
                      </li>
                    </ul>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <textarea class="form-control form-control-lg" name="" id="" cols="30" rows="6" placeholder="الملاحظات"></textarea>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <button class="btn btn-primary btn-block btn-lg" type="submit">تم</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--=============== Main End ==================-->


<?php include $tpl . 'footer.php'; ?>

<?php include $tpl . 'end.php'; ?>