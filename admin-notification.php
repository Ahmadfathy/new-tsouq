<?php $pageTitle = 'التنبيهات'; ?>
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
        <div class="pt-80">
          <h4 class="mb-5 text-primary">التنبيهات</h4>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>قام أحد الزوار بشراء توكتوك ب 3 عجلات</p>
            <button class="close" data-dismiss="alert" type="button" aria-label="Close"><i class="material-icons" aria-hidden="true">close</i></button>
          </div>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>قام أحد الزوار بشراء توكتوك ب 3 عجلات</p>
            <button class="close" data-dismiss="alert" type="button" aria-label="Close"><i class="material-icons" aria-hidden="true">close</i></button>
          </div>
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <p>قام أحد الزوار بشراء توكتوك ب 3 عجلات</p>
            <button class="close" data-dismiss="alert" type="button" aria-label="Close"><i class="material-icons" aria-hidden="true">close</i></button>
          </div>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p>قام أحد الزوار بشراء توكتوك ب 3 عجلات</p>
            <button class="close" data-dismiss="alert" type="button" aria-label="Close"><i class="material-icons" aria-hidden="true">close</i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--=============== Main End ==================-->


<?php include $tpl . 'footer.php'; ?>

<?php include $tpl . 'end.php'; ?>