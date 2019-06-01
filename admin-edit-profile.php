<?php $pageTitle = 'الملف الشخصي'; ?>
<?php include 'init.php'; ?>

<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php'; ?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content" role="main">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 p-l-r-5">
        <?php include $tpl . 'sidebar.php'; ?>
      </div>
      <div class="col-sm-9">
        <div class="card shadow-sm">
          <div class="card-body">
            <h4 class="mb-5 mt-5 text-primary text-center">الملف الشخصي</h4>
            <form class="p-4" action="#" method="POST">
              <div class="form-row mb-3">
                <div class="col-12">
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-male-user"></span></span></div>
                    <input class="form-control form-control-lg" id="" type="text" placeholder="الإسم بالكامل">
                  </div>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-12">
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-envelope"></span></span></div>
                    <input class="form-control form-control-lg" id="" type="email" placeholder="البريد الإلكتروني">
                  </div>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-12">
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-key"></span></span></div>
                    <input class="form-control form-control-lg border-right-0" id="" type="password" placeholder="الرقم السري">
                    <div class="input-group-append show-password"><span class="input-group-text" id=""><i class="fas fa-eye"></i></span></div>
                  </div>
                </div>
              </div>
              <ul class="form-row mb-3 radio-btn">
                <li class="col-6">
                  <input type="radio" id="option-1" name="gender">
                  <label for="option-1">ذكر</label>
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
              <div class="row">
                <div class="col-12 col-sm-6">
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
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-row mb-3">
                    <div class="col-12">
                      <div class="input-group">
                        <input class="form-control form-control-lg" name="" id="" type="text" placeholder="فيس بوك">
                      </div>
                    </div>
                  </div>
                  <div class="form-row mb-3">
                    <div class="col-12">
                      <div class="input-group">
                        <input class="form-control form-control-lg" name="" id="" type="text" placeholder="تويتر">
                      </div>
                    </div>
                  </div>
                  <div class="form-row mb-3">
                    <div class="col-12">
                      <div class="input-group">
                        <input class="form-control form-control-lg" name="" id="" type="text" placeholder="إنستجرام">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-12">
                  <div class="input-group">
                    <textarea class="form-control form-control-lg" name="" id="" cols="30" rows="6" placeholder="نبذة عنك"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-12">
                  <button class="btn btn-primary btn-block btn-lg" type="submit">تعديل</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--=============== Main End ==================-->


<?php include $tpl . 'footer.php'; ?>

<?php include $tpl . 'end.php'; ?>