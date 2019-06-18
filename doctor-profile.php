<?php $pageTitle = 'الخدمات الطبية'; ?>
<?php include 'init.php'; ?>
<!-- Owl Stylesheets -->
<link rel="stylesheet" href="<?php echo $css; ?>owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo $css; ?>owl.theme.default.min.css">

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
        <h4 class="text-primary text-capitalize font-weight-bold m-0 pt-3 text-center">الخدمات الطبية</h4>
        <p class="text-center my-4">
          هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.
        </p>
      </div>
    </div>
    <div class="row my-4">
      <div class="col-sm-8">
        <div class="inner__card shadow-sm my-4">
          <div class="card-body profile-info">
            <div class="row">
              <div class="col-sm-3">
                <div class="rounded-img">
                  <img src="<?php echo $img; ?>doc.jpg" alt="">
                </div>
              </div>
              <div class="col-sm-9">
                <div class="profile-details">
                  <div class="row">
                    <div class="col-sm-8">
                      <h5><a href="javascript:void(0)">دكتور: أحمد فتحي عياد</a></h5>
                      <p>Lorem ipsum dolor sit amet elit.</p>
                      <div class="rating">
                        <div class="rateYo"></div>
                        <h6> <span>500</span> Person Rating This Doctor </h6>
                      </div>
                      <p class="text-primary profile-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Abbas El Aqqad, Nasr City, cairo
                      </p>
                      <h5 class="profile-price text-primary">سعر الكشف : 500جنيه </h5>
                    </div>
                    <div class="col-sm-4">
                      <div class="float-right">
                        <div class="rest-menu mb-3">
                          <ul class="navbar__social">
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                          </ul>
                        </div>
                        <div class="text-right mb-2">
                          <a href="#" class="send-msg">
                            <i class="fas fa-comment-dots"></i>
                            <small>إرسال رسالة</small>
                          </a>
                        </div>
                        <div class="text-right">
                          <a href="javascript:void(0)"><img src="<?php echo $img; ?>g-map.png" width="40" alt=""></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="inner__card shadow-sm my-4">
          <div class="card-body profile-desc">
            <h5 class="text-primary box-title">Information About The Doctor</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam recusandae, saepe adipisci nostrum ducimus possimus hic deserunt, architecto dolorem quis voluptatem officiis ad provident debitis! Repellendus rem nihil nostrum laboriosam.</p>
          </div>
        </div>
        <div class="inner__card shadow-sm my-4">
          <div class="card-body profile-services">
            <h5 class="text-primary box-title">The Services:</h5>
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
        <div class="inner__card my-4 bg-main-color">
          <div class="">
            <div class="widget-title">
              <h4 class="rouded-border">Booking Now</h4>
            </div>
            <form class="p-4" action="javascript:void(0)" method="javascript:void(0)">
              <div class="form-row mb-3">
                <div class="input-group">
                  <input class="form-control form-control-lg badges-input" id="Patient_name" type="text" name="" aria-describedby="Patient_name" placeholder="Patient Name">
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="input-group">
                  <textarea class="form-control form-control-lg" name="" id="" cols="30" rows="6" placeholder="About Your Complain?"></textarea>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="input-group">
                  <h5 class="white-color text-center p-1 width-100">إختر المعاد</h5>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="input-group">
                  <div class="owl-carousel owl-theme days-slider">
                    <div class="item day-block">
                      <ul class="">
                        <li class="sp-day">Sunday</li>
                        <li>
                          <div class="radiobtn">
                            <input type="radio" id="1_option-1" name="timing" value="" />
                            <label for="1_option-1">12 AM</label>
                          </div>
                        </li>
                        <li>
                          <div class="radiobtn">
                            <input type="radio" id="1_option-2" name="timing" value="" />
                            <label for="1_option-2">01 AM</label>
                          </div>
                        </li>
                        <li>
                          <div class="radiobtn">
                            <input type="radio" id="1_option-3" name="timing" value="" />
                            <label for="1_option-3">02 AM</label>
                          </div>
                        </li>
                        <li>
                          <div class="radiobtn">
                            <input type="radio" id="1_option-4" name="timing" value="" />
                            <label for="1_option-4">04 AM</label>
                          </div>
                        </li>
                        <li>
                          <div class="radiobtn">
                            <input type="radio" id="1_option-5" name="timing" value="" />
                            <label for="1_option-5">05 AM</label>
                          </div>
                        </li>
                        <li>
                          <div class="radiobtn">
                            <input type="radio" id="1_option-6" name="timing" value="" />
                            <label for="1_option-6">06 AM</label>
                          </div>
                        </li>
                        <li>
                          <div class="radiobtn">
                            <input type="radio" id="1_option-7" name="timing" value="" />
                            <label for="1_option-7">07 AM</label>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="item">
                      <div class="day-block day-3">
                        <ul class="">
                          <li class="sp-day">Sunday</li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="2_option-1" name="timing" value="" />
                              <label for="2_option-1">12 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="2_option-2" name="timing" value="" />
                              <label for="2_option-2">01 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="2_option-3" name="timing" value="" />
                              <label for="2_option-3">02 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="2_option-4" name="timing" value="" />
                              <label for="2_option-4">04 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="2_option-5" name="timing" value="" />
                              <label for="2_option-5">05 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="2_option-6" name="timing" value="" />
                              <label for="2_option-6">06 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="2_option-7" name="timing" value="" />
                              <label for="2_option-7">07 AM</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item ">
                      <div class="day-block day-3">
                        <ul class="">
                          <li class="sp-day">Tuesday</li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="3_option-1" name="timing" value="" />
                              <label for="3_option-1">12 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="3_option-2" name="timing" value="" />
                              <label for="3_option-2">01 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="3_option-3" name="timing" value="" />
                              <label for="3_option-3">02 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="3_option-4" name="timing" value="" />
                              <label for="3_option-4">04 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="3_option-5" name="timing" value="" />
                              <label for="3_option-5">05 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="3_option-6" name="timing" value="" />
                              <label for="3_option-6">06 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="3_option-7" name="timing" value="" />
                              <label for="3_option-7">07 AM</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="day-block day-5">
                        <ul class="">
                          <li class="sp-day">Sunday</li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="4_option-1" name="timing" value="" />
                              <label for="4_option-1">12 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="4_option-2" name="timing" value="" />
                              <label for="4_option-2">01 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="4_option-3" name="timing" value="" />
                              <label for="4_option-3">02 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="4_option-4" name="timing" value="" />
                              <label for="4_option-4">04 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="4_option-5" name="timing" value="" />
                              <label for="4_option-5">05 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="4_option-6" name="timing" value="" />
                              <label for="4_option-6">06 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="4_option-7" name="timing" value="" />
                              <label for="4_option-7">07 AM</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="day-block day-4">
                        <ul class="">
                          <li class="sp-day">Sunday</li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="5_option-1" name="timing" value="" />
                              <label for="5_option-1">12 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="5_option-2" name="timing" value="" />
                              <label for="5_option-2">01 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="5_option-3" name="timing" value="" />
                              <label for="5_option-3">02 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="5_option-4" name="timing" value="" />
                              <label for="5_option-4">04 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="5_option-5" name="timing" value="" />
                              <label for="5_option-5">05 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="5_option-6" name="timing" value="" />
                              <label for="5_option-6">06 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="5_option-7" name="timing" value="" />
                              <label for="5_option-7">07 AM</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="day-block day-6">
                        <ul class="">
                          <li class="sp-day">Sunday</li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="6_option-1" name="timing" value="" />
                              <label for="6_option-1">12 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="6_option-2" name="timing" value="" />
                              <label for="6_option-2">01 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="6_option-3" name="timing" value="" />
                              <label for="6_option-3">02 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="6_option-4" name="timing" value="" />
                              <label for="6_option-4">04 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="6_option-5" name="timing" value="" />
                              <label for="6_option-5">05 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="6_option-6" name="timing" value="" />
                              <label for="6_option-6">06 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="6_option-7" name="timing" value="" />
                              <label for="6_option-7">07 AM</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="day-block day-7">
                        <ul class="">
                          <li class="sp-day">Sunday</li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="7_option-1" name="timing" value="" />
                              <label for="7_option-1">12 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="7_option-2" name="timing" value="" />
                              <label for="7_option-2">01 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="7_option-3" name="timing" value="" />
                              <label for="7_option-3">02 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="7_option-4" name="timing" value="" />
                              <label for="7_option-4">04 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="7_option-5" name="timing" value="" />
                              <label for="7_option-5">05 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="7_option-6" name="timing" value="" />
                              <label for="7_option-6">06 AM</label>
                            </div>
                          </li>
                          <li>
                            <div class="radiobtn">
                              <input type="radio" id="7_option-7" name="timing" value="" />
                              <label for="7_option-7">07 AM</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-12">
                  <div class="form-check form-check-inline checkbox">
                    <input id="checkbox1" type="checkbox">
                    <label for="checkbox1"><a class="white-color" href="polices-condition.php">أوافق على سياسة الشروط و الأحكام</a></label>
                  </div>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-12">
                  <button class="btn btn-blue-dark btn-block btn-lg" type="submit">إحجز الآن</button>
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
<script src="<?php echo $js; ?>owl.carousel.min.js"></script>
<script>
  $(document).ready(function() {
    var owl = $('.days-slider');
    owl.owlCarousel({
      dots: false,
      // center: true,
      margin: 10,
      nav: true,
      loop: false,
      responsive: {
        0: {
          items: 3
        },
        600: {
          items: 3
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>
<!-- <script>
  $(document).ready(function() {
    $(".day-block li").click(function() {
      $(this).addClass('active-day').siblings().removeClass('active-day');
    });
    $(".day-block").click(function() {
      $("p").eq(0).css("background-color", "yellow");
      $(this).addClass('active-day').siblings().removeClass('active-day');
    });
  });
</script> -->
<?php include $tpl . 'end.php'; ?>