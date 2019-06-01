<?php $pageTitle = 'Blank'; ?>
<?php include 'init.php'; ?>

<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php'; ?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content mt-0" role="main">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-4 offset-sm-4">
        <div class="mb-5">
          <img src="<?php echo $img; ?>logo/logo-color.svg" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <div class="map mb-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13823.33951594902!2d31.165311550000006!3d29.984175049999997!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1557709287309!5m2!1sen!2seg" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <h4 class="mb-4 text-primary">Contact Us Now</h4>
        <form class="" action="#" method="POST">
          <div class="form-row mb-3">
            <div class="col-12">
              <div class="input-group">
                <input class="form-control form-control-lg" name="email" id="" type="text" placeholder="E-Mail Address">
              </div>
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col-12">
              <div class="input-group">
                <input class="form-control form-control-lg" name="phone" id="" type="text" placeholder="Phone Number">
              </div>
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col-12">
              <div class="input-group">
                <textarea class="form-control form-control-lg" name="" id="" cols="30" rows="6" placeholder="Message"></textarea>
              </div>
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col-12">
              <button class="btn btn-primary btn-block btn-lg" type="submit">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<!--=============== Main End ==================-->


<?php include $tpl . 'footer.php'; ?>

<?php include $tpl . 'end.php'; ?>