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
                <div class="col-8 offset-2 text-center my-4"><img src="<?php echo $img; ?>icons/pills (1).svg" alt=""></div>
                <div class="col-8 offset-2 text-center my-4">
                  <p>تم إكتمال عملية الشراء <br> تتبع طلبك الآن</p>
                </div>
                <div class="col-8 offset-2 text-center my-4">
                  <a class="btn btn-primary btn-block btn-lg text-capitalize" href="#">تم</a>
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