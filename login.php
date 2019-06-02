<?php $pageTitle = 'تسجيل الدخول'; ?>
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
          <div class="card-header"><img src="<?php echo $img; ?>icons/employee.svg" alt=""></div>
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <form action="#" method="POST">
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="login_input_email_prepend"><span class="icon-male-user"></span></span></div>
                          <input class="form-control form-control-lg" id="login_input_email" type="email" placeholder="البريد الإلكتروني" aria-describedby="login_input_email_prepend">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="login_input_password_prepend"><span class="icon-key"></span></span></div>
                          <input class="form-control form-control-lg border-right-0" id="login_input_password" type="password" placeholder="الرقم السري" aria-describedby="login_input_password_prepend">
                          <div class="input-group-append show-password"><span class="input-group-text" id="login_input_password_append"><i class="fas fa-eye"></i></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-6 d-flex align-items-center">
                        <a class="btn btn-link p-0 text-capitalize" href="forget-pass-1.php">نسيت كلمة المرور</a>
                      </div>
                      <div class="col-6 d-flex align-items-center justify-content-end">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" id="login_input_remember_me" type="checkbox">
                          <label class="custom-control-label text-primary text-capitalize" for="login_input_remember_me">تذكرني</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <button class="btn btn-primary btn-block btn-lg" type="submit">دخول</button>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-4"><a class="btn btn-facebook btn-block btn-lg font-weight-light text-capitalize" href="#"><span class="icon-facebook mr-4"></span>فيس بوك</a></div>
                      <div class="col-4"><a class="btn btn-twitter btn-block btn-lg font-weight-light text-capitalize" href="#"><span class="icon-twitter mr-4"></span>تويتر</a></div>
                      <div class="col-4"><a class="btn btn-google btn-block btn-lg font-weight-light text-capitalize text-red" href="#"><span class="icon-gmail mr-4"><span class="path2"></span><span class="path3"></span></span>جي ميل</a></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-link btn-block" type="button" data-toggle="modal" data-target="#loginAsProvider"><span class="icon-service"></span>سجل لتقديم خدمتك</button>
            <button class="btn btn-link btn-block" type="button"><span class="icon-user"></span>مستخدم جديد</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--=============== Main End ==================-->


<?php include $tpl . 'footer.php'; ?>

<?php include $tpl . 'end.php'; ?>