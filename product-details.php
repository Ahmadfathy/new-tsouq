<?php $pageTitle = 'موبايلات'; ?>
<?php include 'init.php'; ?>

<link rel="stylesheet" href="<?php echo $css; ?>lightslider.css" />

<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php'; ?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content" role="main">
  <div class="container">
    <div class="pt-80">
      <div class="row">

        <div class="col-12 col-sm-8">
          <div class="inner__card shadow-sm mb-3">
            <div class="card-body product-view profile-details">
              <div class="row">
                <div class="col-10">
                  <h4 class="product-brief color-0099bc font-weight-bold mb-3">آبل أيفون Plus8 مع فيس تايم, 64جيجا, الجيل الرابع ال تي اي ,رمادي</h4>
                  <div class="rating mb-4">
                    <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <p><span>200</span> شخص قيم المنتج</p>
                  </div>
                </div>
                <div class="col-2">
                  <div class="wish float-right">
                    <a href="javascript:void(0)" class="text-right wish-heart red-color">
                      <i class="far fa-heart fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="product-slider">
                    <ul id="imageGallery" class="gallery list-unstyled">
                      <li data-thumb="<?php echo $img; ?>slider/1_tb.jpg" data-src="http://sachinchoolur.github.io/lightslider/<?php echo $img; ?>slider/1.jpg">
                        <img src="<?php echo $img; ?>slider/1.jpg" />
                      </li>
                      <li data-thumb="<?php echo $img; ?>slider/2_tb.jpg" data-src="http://sachinchoolur.github.io/lightslider/<?php echo $img; ?>slider/2.jpg">
                        <img src="<?php echo $img; ?>slider/2.jpg" />
                      </li>
                      <li data-thumb="<?php echo $img; ?>slider/3_tb.jpg" data-src="http://sachinchoolur.github.io/lightslider/<?php echo $img; ?>slider/3.jpg">
                        <img src="<?php echo $img; ?>slider/3.jpg" />
                      </li>
                      <li data-thumb="<?php echo $img; ?>slider/4_tb.jpg" data-src="http://sachinchoolur.github.io/lightslider/<?php echo $img; ?>slider/4.jpg">
                        <img src="<?php echo $img; ?>slider/4.jpg" />
                      </li>
                      <li data-thumb="<?php echo $img; ?>slider/5_tb.jpg" data-src="http://sachinchoolur.github.io/lightslider/<?php echo $img; ?>slider/5.jpg">
                        <img src="<?php echo $img; ?>slider/5.jpg" />
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="inner__card shadow-sm my-4">
            <div class="card-body profile-ratings">
              <h5 class="text-primary box-title">التقييمات</h5>
              <ul class="list-unstyled">
                <li class="media mb-4">
                  <img src="<?php echo $img; ?>user.png" style="width:80px ;height:80px" class="mr-3" alt="...">
                  <div class="media-body">
                    <div class="mb-3">
                      <h5 class="mt-0 mb-1 text-primary">احمد علي</h5>
                      <div class="rates float-right">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                    </div>
                    <form action="#" method="post">
                      <div class="form-row mb-3">
                        <div class="col-12">
                          <textarea class="form-control form-control-lg" name="" id="" cols="30" rows="3" placeholder="About You?"></textarea>
                        </div>
                      </div>
                      <div class="form-row mb-3">
                        <div class="col-12">
                          <button class="float-right btn btn-primary" type="submit">أضف تعليقك</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
                <li class="media">
                  <img src="<?php echo $img; ?>user.png" style="width:80px ;height:80px" class="align-self-center mr-3" alt="...">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1 text-primary">احمد علي</h5>
                    <div class="rates">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.</p>
                  </div>
                </li>
                <li class="media my-4">
                  <img src="<?php echo $img; ?>user.png" style="width:80px ;height:80px" class="align-self-center mr-3" alt="...">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1 text-primary">احمد علي</h5>
                    <div class="rates">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.</p>
                  </div>
                </li>
                <li class="media">
                  <img src="<?php echo $img; ?>user.png" style="width:80px ;height:80px" class="align-self-center mr-3" alt="...">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1 text-primary">احمد علي</h5>
                    <div class="rates">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-4">
          <div class="product-alldetails mb-5">
            <div class="row mb-3">
              <div class="col-6">
                <div class="after-discount float-left mb-3">
                  <h3 class="text-primary"><strong>13,500,00 جنيه</strong></h3>
                </div>
              </div>
              <div class="col-6">
                <div class="before-discount float-right mb-3">
                  <h4>14,500,00 جنيه</h4>
                </div>
              </div>
              <div class="col-12">
                <p class="mb-4">الشحن مجاني</p>
              </div>
              <div class="col-12">
                <p class="mb-4 color-ff5891">متوفر <span>20</span> قطعة فقط</p>
              </div>
              <div class="col-12">
                <button class="btn btn-primary btn-block btn-lg" type="submit">أضف إلي العربة</button>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="product-detail">
                  <h6 class="text-primary">حجم الرام</h6>
                  <p>3 جيجا رام</p>
                </div>
                <div class="product-detail">
                  <h6 class="text-primary">الحجم</h6>
                  <p>
                    <span>صغير</span>
                    <span>متوسط</span>
                    <span>كبير</span>
                  </p>
                </div>
                <div class="product-detail mb-5">
                  <h6 class="text-primary">التفاصيل</h6>
                  <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                </div>
                <a href="#">تصفح المنتجات الخاصة بالبائع</a>
              </div>
            </div>
          </div>
          <div class="related-products">
            <div class="row">
              <div class="col-12">
                <h4 class="mb-2 text-primary">منتجات مشابهة</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card shadow-sm my-2">
                  <div class="card-body font-md">
                    <div class="row">
                      <div class="col-12">
                        <img src="<?php echo $img; ?>labtop.jpg" class="mb-3 rounded-5" alt="">
                      </div>
                      <div class="col-3">
                        <div class="rounded-img">
                          <img src="<?php echo $img; ?>doc.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-9 pl0">
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-9">
                              <h3><a href="javascript:void(0)">عمران محمد</a></h3>
                              <p>منتجات الحاسب الآلي و الكمبيوتر</p>
                              <div class="rating">
                                <div class="stars">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="far fa-star"></i>
                                </div>
                                <p><span>500</span> شخص قيم الدكتور </p>
                              </div>
                            </div>
                            <div class="col-3 pl0 text-center">
                              <h6>تاجر جملة</h6>
                            </div>
                          </div>
                          <p class="text-primary profile-location">
                            <i class="fas fa-map-marker-alt"></i>
                            مدينة نصر - شارع عباس العقاد - القاهرة
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card shadow-sm my-2">
                  <div class="card-body font-md">
                    <div class="row">
                      <div class="col-12">
                        <img src="<?php echo $img; ?>labtop.jpg" class="mb-3 rounded-5" alt="">
                      </div>
                      <div class="col-3">
                        <div class="rounded-img">
                          <img src="<?php echo $img; ?>doc.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-9 pl0">
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-9">
                              <h3><a href="javascript:void(0)">عمران محمد</a></h3>
                              <p>منتجات الحاسب الآلي و الكمبيوتر</p>
                              <div class="rating">
                                <div class="stars">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="far fa-star"></i>
                                </div>
                                <p><span>500</span> شخص قيم الدكتور </p>
                              </div>
                            </div>
                            <div class="col-3 pl0 text-center">
                              <h6>تاجر جملة</h6>
                            </div>
                          </div>
                          <p class="text-primary profile-location">
                            <i class="fas fa-map-marker-alt"></i>
                            مدينة نصر - شارع عباس العقاد - القاهرة
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
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

<script src="<?php echo $js; ?>lightslider.js"></script>
<script>
  $(document).ready(function() {
    $('#imageGallery').lightSlider({
      gallery: true,
      item: 1,
      vertical: true,
      verticalHeight: 400,
      vThumbWidth: 100,
      thumbItem: 5,
      thumbMargin: 4,
      slideMargin: 0
    });
  });
</script>
<script>
  $(document).ready(function() {
    $("a.wish-heart").click(function() {
      $(this).toggleClass("active-red-color") & $(this).children('i.far').toggleClass('fas');
    });
  });
</script>

<?php include $tpl . 'end.php'; ?>