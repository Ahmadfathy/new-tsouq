<?php $pageTitle = 'مقدم خدمة مهنية'; ?>
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
          <div class="card-header">
            <h4 class="text-primary text-capitalize font-weight-bold mb-4 pt-3">مقدم خدمة مهنية</h4>
          </div>
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <form action="#" method="POST">
                    <div class="form-row mb-3">
                      <div class="col-4"><a class="btn btn-facebook btn-block btn-lg font-weight-light text-capitalize" href="#"><span class="icon-facebook mr-4"></span>فيس بوك</a></div>
                      <div class="col-4"><a class="btn btn-twitter btn-block btn-lg font-weight-light text-capitalize" href="#"><span class="icon-twitter mr-4"></span>تويتر</a></div>
                      <div class="col-4"><a class="btn btn-google btn-block btn-lg font-weight-light text-capitalize text-red" href="#"><span class="icon-gmail mr-4"><span class="path2"></span><span class="path3"></span></span>جي ميل</a></div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_full_name_prepend"><span class="icon-male-user"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_full_name" type="text" aria-describedby="registeration_input_full_name_prepend" placeholder="الإسم بالكامل">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_email_prepend"><span class="icon-envelope"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_email" type="email" aria-describedby="registeration_input_email_prepend" placeholder="البريد الإلكتروني">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="lregisteration_input_password_prepend"><span class="icon-key"></span></span></div>
                          <input class="form-control form-control-lg border-right-0" id="lregisteration_input_password" type="password" aria-describedby="lregisteration_input_password_prepend" placeholder="الرقم السري">
                          <div class="input-group-append show-password"><span class="input-group-text" id="lregisteration_input_password_append"><i class="fas fa-eye"></i></span></div>
                        </div>
                      </div>
                    </div>
                    <ul class="form-row mb-3 radio-btn">
                      <li class="col-6">
                        <input type="radio" id="option-1" name="gender">
                        <label for="option-1">دكر</label>
                        <div class="check"></div>
                      </li>
                      <li class="col-6">
                        <input type="radio" id="option-2" name="gender">
                        <label for="option-2">نتاية</label>
                        <div class="check">
                          <div class="inside"></div>
                        </div>
                      </li>
                    </ul>
                    <div class="form-row mb-3">
                      <div class="col-9">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_phone_number_prepend"><span class="icon-call-answer"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_phone_number" type="number" aria-describedby="registeration_input_phone_number_prepend" placeholder="رقم الهاتف">
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
                          <input class="form-control form-control-lg" id="registeration_input_country" type="text" aria-describedby="registeration_input_country_prepend" placeholder="الدولة">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_government_prepend"><span class="icon-maps-pin"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_government" type="text" aria-describedby="registeration_input_government_prepend" placeholder="المحافظة">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_city_prepend"><span class="icon-maps-pin"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_city" type="text" aria-describedby="registeration_input_city_prepend" placeholder="المدينة">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_id_prepend"><span class="icon-maps-pin"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_id" type="text" aria-describedby="registeration_input_id_prepend" placeholder="الرقم التعريفي">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="form-check form-check-inline checkbox">
                          <input id="checkbox1" type="checkbox">
                          <label for="checkbox1"><a href="polices-condition.php">أوافق على سياسة الشروط و الأحكام</a></label>
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <button class="btn btn-primary btn-block btn-lg" type="submit">دخول</button>
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