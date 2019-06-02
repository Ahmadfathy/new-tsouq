<?php $pageTitle = 'إعادة تعيين كلمة المرور'; ?>
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
                          <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-key"></span></span></div>
                          <input class="form-control form-control-lg" id="" type="password" placeholder="الرقم السري">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-key"></span></span></div>
                          <input class="form-control form-control-lg" id="" type="password" placeholder="تأكيد الرقم السري">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <button class="btn btn-primary btn-block btn-lg" type="submit">تغيير الرقم الان</button>
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