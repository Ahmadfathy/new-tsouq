<?php $pageTitle = 'الخدمات التجارية'; ?>
<?php include 'init.php'; ?>

<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php'; ?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content bg-light-blue" role="main">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="inner__card shadow-sm">
          <div class="card-body">
            <form class="" action="javascript:void(0)" method="POST">
              <div class="form-row">
                <div class="col-sm-3">
                  <div class="input-group">
                    <select class="form-control form-control-lg" name="" id="">
                      <option value="" readonly>إختر الخدمة</option>
                      <option value="">Option 1</option>
                      <option value="">Option 2</option>
                      <option value="">Option 3</option>
                      <option value="">Option 4</option>
                      <option value="">Option 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="input-group">
                    <select class="form-control form-control-lg" name="" id="">
                      <option value="" readonly>إختر الدولة</option>
                      <option value="">Option 1</option>
                      <option value="">Option 2</option>
                      <option value="">Option 3</option>
                      <option value="">Option 4</option>
                      <option value="">Option 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    <select class="form-control form-control-lg" name="" id="">
                      <option value="" readonly>إختر المحافظة</option>
                      <option value="">Option 1</option>
                      <option value="">Option 2</option>
                      <option value="">Option 3</option>
                      <option value="">Option 4</option>
                      <option value="">Option 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    <select class="form-control form-control-lg" name="" id="">
                      <option value="" readonly>إختر المدينة</option>
                      <option value="">Option 1</option>
                      <option value="">Option 2</option>
                      <option value="">Option 3</option>
                      <option value="">Option 4</option>
                      <option value="">Option 5</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="input-group">
                    <button class="btn btn-primary btn-block btn-lg" type="submit">عرض النتائج</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-12 offset-sm-0 col-md-6 offset-md-3">
        <h4 class="text-primary text-capitalize font-weight-bold m-0 pt-3 text-center">Commercial Services</h4>
        <p class="text-center my-4">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
        </p>
      </div>
    </div>
    <div class="row my-4">
      <div class="col-sm-8">
        <div class="inner__card shadow-sm my-4 border-rds-1">
          <div class="profile-info">
            <div class="bd-example">
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?php echo $img; ?>backgrounds/bg-1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $img; ?>backgrounds/bg-1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $img; ?>backgrounds/bg-1.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="inner__card shadow-sm my-4">
          <div class="card-body profile-desc">
            <h5 class="text-primary box-title">معلومات عن هذا الدكتور</h5>
            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
          </div>
        </div>
        <div class="inner__card shadow-sm my-4">
          <div class="card-body profile-services">
            <h5 class="text-primary box-title">الخدمات:</h5>
            <span>Service #1</span>
            <span>Service #2</span>
            <span>Service #3</span>
            <span>Service #4</span>
            <span>Service #5</span>
            <span>Service #6</span>
            <span>Service #7</span>
            <span>Service #8</span>
            <span>Service #9</span>
            <span>Service #10</span>
          </div>
        </div>
        <div class="inner__card shadow-sm my-4">
          <div class="card-body profile-ratings">
            <h5 class="text-primary box-title">التقييمات:</h5>
            <ul class="list-unstyled">
              <li class="media mb-4">
                <img src="<?php echo $img; ?>user.png" style="width:80px ;height:80px" class="mr-3" alt="...">
                <div class="media-body">
                  <div class="mb-3">
                    <h5 class="mt-0 mb-1 text-primary">احمد علي</h5>
                    <div class="rates float-right">
                      <div class="rateYo"></div>
                    </div>
                  </div>
                  <form action="#" method="post">
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <textarea class="form-control form-control-lg" name="" id="" cols="30" rows="3" placeholder="أكتب تقييمك عن المنتج"></textarea>
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
                <img src="<?php echo $img; ?>user.png" width="80" height="80" class="align-self-center mr-3" alt="...">
                <div class="media-body">
                  <h5 class="mt-0 mb-1 text-primary">احمد علي</h5>
                  <div class="rates">
                    <div class="rateYo"></div>
                  </div>
                  <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                </div>
              </li>
              <li class="media my-4">
                <img src="<?php echo $img; ?>user.png" width="80" height="80" class="align-self-center mr-3" alt="...">
                <div class="media-body">
                  <h5 class="mt-0 mb-1 text-primary">احمد علي</h5>
                  <div class="rates">
                    <div class="rateYo"></div>
                  </div>
                  <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                </div>
              </li>
              <li class="media">
                <img src="<?php echo $img; ?>user.png" width="80" height="80" class="align-self-center mr-3" alt="...">
                <div class="media-body">
                  <h5 class="mt-0 mb-1 text-primary">احمد علي</h5>
                  <div class="rates">
                    <div class="rateYo"></div>
                  </div>
                  <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="inner__card shadow-sm my-4">
          <div class="card-body services-provider text-center">
            <div class="row">
              <div class="col-3">
                <div class="text-left">
                  <a href="#" class="send-msg">
                    <i class="fas fa-comment-dots"></i>
                    <small>إرسال رسالة</small>
                  </a>
                </div>
              </div>
              <div class="col-6">
                <div class="rounded-img mb-2">
                  <img src="<?php echo $img; ?>doc.jpg" alt="">
                </div>
              </div>
              <div class="col-3">
                <div class="text-right">
                  <a href="#"><img src="<?php echo $img; ?>g-map.png" width="40" alt=""></a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="profile-details">
                  <h5 class="mb-1"><a href="#">Dr. Ahmad Fathy Ayad</a></h5>
                  <p>Lorem ipsum dolor sit amet elit.</p>
                  <div class="rating">
                    <div class="rateYo"></div>
                    <h6> <span>500</span> Person Rating This Doctor </h6>
                  </div>
                </div>
                <p class="text-primary profile-location">
                  <i class="fas fa-map-marker-alt"></i>
                  Abbas El Aqqad, Nasr City, cairo
                </p>
                <div class="rest-menu mb-3">
                  <ul class="navbar__social">
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary btn-block btn-lg" type="submit">Browse The Products</button>
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