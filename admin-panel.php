<?php $pageTitle = 'الملف الشخصي'; ?>
<?php include 'init.php'; ?>


<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php';?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content" role="main">
  <section class="admin-panel-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 p-l-r-5">
          <?php include $tpl . 'sidebar.php';?>
        </div>
        <div class="col-sm-9">
          <div class="statistics mb-4">
            <div class="row">
              <div class="col-sm-4 p-l-r-5">
                <div class="card text-white bg-0aef71 text-center mb-3">
                  <div class="card-body p-4">
                    <h1 class="card-title xl-font"><strong>250</strong></h1>
                    <h3 class="card-text">طلب جديد</h3>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 p-l-r-5">
                <div class="card text-white bg-primary text-center mb-3">
                  <div class="card-body p-4">
                    <h1 class="card-title xl-font"><strong>300</strong></h1>
                    <h3 class="card-text">أشترو الخدمة</h3>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 p-l-r-5">
                <div class="card text-white bg-ffeb65 text-center mb-3">
                  <div class="card-body p-4">
                    <h1 class="card-title xl-font"><strong>350</strong></h1>
                    <h3 class="card-text">منتج</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="inbox-order">
            <div class="row">
              <div class="col-12">
                <h4 class="text-primary mb-3">الطلبات الواردة</h4>
              </div>
            </div>
            <div class="row">
              <!-- Order_box -->
              <div class="col-md-4 col-sm-6 p-l-r-5">
                <div class="inner__card shadow-sm order-box">
                  <div class="card-body order-details">
                    <div class="row">
                      <div class="col-3 p-l-r-5">
                        <div class="rounded-img">
                          <img src="<?php echo $img; ?>profile.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-9 p-l-r-5">
                        <div class="">
                          <div class="name-statu">
                            <span class="name float-left text-left">
                              رجب شعبان رمضان
                            </span>
                            <span class="statu float-right text-right light-green-text">
                              جديد
                            </span>
                          </div>
                          <div class="service-type">
                            <span>طلب خدمة مهنية</span>
                          </div>
                          <div class="price-code">
                            <strong class="price float-left text-left text-primary">
                              150 جنيه
                            </strong>
                            <strong class="code float-right text-right text-primary">
                              #012345678
                            </strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="date">
                          <i class="fas fa-calendar"></i>
                          مارس 2019 الساعة 12:44
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="address">
                          <i class="fas fa-home"></i>
                          مدينة نصر -شارع عباس العقاد - القاهرة
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="line"></div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="actions">
                          <a href="#" class="float-left text-left refused">إلغاء</a>
                          <a href="#" class="float-right text-right accept">قبول الطلب</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- //Order_box -->

              <!-- Order_box -->
              <div class="col-md-4 col-sm-6 p-l-r-5">
                <div class="inner__card shadow-sm order-box">
                  <div class="card-body order-details">
                    <div class="row">
                      <div class="col-3 p-l-r-5">
                        <div class="rounded-img">
                          <img src="<?php echo $img; ?>profile.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-9 p-l-r-5">
                        <div class="">
                          <div class="name-statu">
                            <span class="name float-left text-left">
                              رجب شعبان رمضان
                            </span>
                            <span class="statu float-right text-right light-green-text">
                              جديد
                            </span>
                          </div>
                          <div class="service-type">
                            <span>طلب خدمة مهنية</span>
                          </div>
                          <div class="price-code">
                            <strong class="price float-left text-left text-primary">
                              150 جنيه
                            </strong>
                            <strong class="code float-right text-right text-primary">
                              #012345678
                            </strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="date">
                          <i class="fas fa-calendar"></i>
                          مارس 2019 الساعة 12:44
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="address">
                          <i class="fas fa-home"></i>
                          مدينة نصر -شارع عباس العقاد - القاهرة
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="line"></div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="actions">
                          <a href="#" class="float-left text-left refused">إلغاء</a>
                          <a href="#" class="float-right text-right accept">قبول الطلب</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- //Order_box -->

              <!-- Order_box -->
              <div class="col-md-4 col-sm-6 p-l-r-5">
                <div class="inner__card shadow-sm order-box">
                  <div class="card-body order-details">
                    <div class="row">
                      <div class="col-3 p-l-r-5">
                        <div class="rounded-img">
                          <img src="<?php echo $img; ?>profile.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-9 p-l-r-5">
                        <div class="">
                          <div class="name-statu">
                            <span class="name float-left text-left">
                              رجب شعبان رمضان
                            </span>
                            <span class="statu float-right text-right light-green-text">
                              جديد
                            </span>
                          </div>
                          <div class="service-type">
                            <span>طلب خدمة مهنية</span>
                          </div>
                          <div class="price-code">
                            <strong class="price float-left text-left text-primary">
                              150 جنيه
                            </strong>
                            <strong class="code float-right text-right text-primary">
                              #012345678
                            </strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="date">
                          <i class="fas fa-calendar"></i>
                          مارس 2019 الساعة 12:44
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="address">
                          <i class="fas fa-home"></i>
                          مدينة نصر -شارع عباس العقاد - القاهرة
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="line"></div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="actions">
                          <a href="#" class="float-left text-left refused">إلغاء</a>
                          <a href="#" class="float-right text-right accept">قبول الطلب</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- //Order_box -->

              <!-- Order_box -->
              <div class="col-md-4 col-sm-6 p-l-r-5">
                <div class="inner__card shadow-sm order-box">
                  <div class="card-body order-details">
                    <div class="row">
                      <div class="col-3 p-l-r-5">
                        <div class="rounded-img">
                          <img src="<?php echo $img; ?>profile.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-9 p-l-r-5">
                        <div class="">
                          <div class="name-statu">
                            <span class="name float-left text-left">
                              رجب شعبان رمضان
                            </span>
                            <span class="statu float-right text-right light-green-text">
                              جديد
                            </span>
                          </div>
                          <div class="service-type">
                            <span>طلب خدمة مهنية</span>
                          </div>
                          <div class="price-code">
                            <strong class="price float-left text-left text-primary">
                              150 جنيه
                            </strong>
                            <strong class="code float-right text-right text-primary">
                              #012345678
                            </strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="date">
                          <i class="fas fa-calendar"></i>
                          مارس 2019 الساعة 12:44
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="address">
                          <i class="fas fa-home"></i>
                          مدينة نصر -شارع عباس العقاد - القاهرة
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="line"></div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="actions">
                          <a href="#" class="float-left text-left refused">إلغاء</a>
                          <a href="#" class="float-right text-right accept">قبول الطلب</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- //Order_box -->

              <!-- Order_box -->
              <div class="col-md-4 col-sm-6 p-l-r-5">
                <div class="inner__card shadow-sm order-box">
                  <div class="card-body order-details">
                    <div class="row">
                      <div class="col-3 p-l-r-5">
                        <div class="rounded-img">
                          <img src="<?php echo $img; ?>profile.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-9 p-l-r-5">
                        <div class="">
                          <div class="name-statu">
                            <span class="name float-left text-left">
                              رجب شعبان رمضان
                            </span>
                            <span class="statu float-right text-right light-green-text">
                              جديد
                            </span>
                          </div>
                          <div class="service-type">
                            <span>طلب خدمة مهنية</span>
                          </div>
                          <div class="price-code">
                            <strong class="price float-left text-left text-primary">
                              150 جنيه
                            </strong>
                            <strong class="code float-right text-right text-primary">
                              #012345678
                            </strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="date">
                          <i class="fas fa-calendar"></i>
                          مارس 2019 الساعة 12:44
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="address">
                          <i class="fas fa-home"></i>
                          مدينة نصر -شارع عباس العقاد - القاهرة
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="line"></div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="actions">
                          <a href="#" class="float-left text-left refused">إلغاء</a>
                          <a href="#" class="float-right text-right accept">قبول الطلب</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- //Order_box -->

              <!-- Order_box -->
              <div class="col-md-4 col-sm-6 p-l-r-5">
                <div class="inner__card shadow-sm order-box">
                  <div class="card-body order-details">
                    <div class="row">
                      <div class="col-3 p-l-r-5">
                        <div class="rounded-img">
                          <img src="<?php echo $img; ?>profile.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-9 p-l-r-5">
                        <div class="">
                          <div class="name-statu">
                            <span class="name float-left text-left">
                              رجب شعبان رمضان
                            </span>
                            <span class="statu float-right text-right light-green-text">
                              جديد
                            </span>
                          </div>
                          <div class="service-type">
                            <span>طلب خدمة مهنية</span>
                          </div>
                          <div class="price-code">
                            <strong class="price float-left text-left text-primary">
                              150 جنيه
                            </strong>
                            <strong class="code float-right text-right text-primary">
                              #012345678
                            </strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="date">
                          <i class="fas fa-calendar"></i>
                          مارس 2019 الساعة 12:44
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="address">
                          <i class="fas fa-home"></i>
                          مدينة نصر -شارع عباس العقاد - القاهرة
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="line"></div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="actions">
                          <a href="#" class="float-left text-left refused">إلغاء</a>
                          <a href="#" class="float-right text-right accept">قبول الطلب</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- //Order_box -->

              <!-- Order_box -->
              <div class="col-md-4 col-sm-6 p-l-r-5">
                <div class="inner__card shadow-sm order-box">
                  <div class="card-body order-details">
                    <div class="row">
                      <div class="col-3 p-l-r-5">
                        <div class="rounded-img">
                          <img src="<?php echo $img; ?>profile.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-9 p-l-r-5">
                        <div class="">
                          <div class="name-statu">
                            <span class="name float-left text-left">
                              رجب شعبان رمضان
                            </span>
                            <span class="statu float-right text-right light-green-text">
                              جديد
                            </span>
                          </div>
                          <div class="service-type">
                            <span>طلب خدمة مهنية</span>
                          </div>
                          <div class="price-code">
                            <strong class="price float-left text-left text-primary">
                              150 جنيه
                            </strong>
                            <strong class="code float-right text-right text-primary">
                              #012345678
                            </strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="date">
                          <i class="fas fa-calendar"></i>
                          مارس 2019 الساعة 12:44
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="address">
                          <i class="fas fa-home"></i>
                          مدينة نصر -شارع عباس العقاد - القاهرة
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="line"></div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="actions">
                          <a href="#" class="float-left text-left refused">إلغاء</a>
                          <a href="#" class="float-right text-right accept">قبول الطلب</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- //Order_box -->
              <!-- Order_box -->
              <div class="col-md-4 col-sm-6 p-l-r-5">
                <div class="inner__card shadow-sm order-box">
                  <div class="card-body order-details">
                    <div class="row">
                      <div class="col-3 p-l-r-5">
                        <div class="rounded-img">
                          <img src="<?php echo $img; ?>profile.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-9 p-l-r-5">
                        <div class="">
                          <div class="name-statu">
                            <span class="name float-left text-left">
                              رجب شعبان رمضان
                            </span>
                            <span class="statu float-right text-right light-green-text">
                              جديد
                            </span>
                          </div>
                          <div class="service-type">
                            <span>طلب خدمة مهنية</span>
                          </div>
                          <div class="price-code">
                            <strong class="price float-left text-left text-primary">
                              150 جنيه
                            </strong>
                            <strong class="code float-right text-right text-primary">
                              #012345678
                            </strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="date">
                          <i class="fas fa-calendar"></i>
                          مارس 2019 الساعة 12:44
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="address">
                          <i class="fas fa-home"></i>
                          مدينة نصر -شارع عباس العقاد - القاهرة
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="line"></div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="actions">
                          <a href="#" class="float-left text-left refused">إلغاء</a>
                          <a href="#" class="float-right text-right accept">قبول الطلب</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- //Order_box -->
              <!-- Order_box -->
              <div class="col-md-4 col-sm-6 p-l-r-5">
                <div class="inner__card shadow-sm order-box">
                  <div class="card-body order-details">
                    <div class="row">
                      <div class="col-3 p-l-r-5">
                        <div class="rounded-img">
                          <img src="<?php echo $img; ?>profile.jpg" alt="">
                        </div>
                      </div>

                      <div class="col-9 p-l-r-5">
                        <div class="">
                          <div class="name-statu">
                            <span class="name float-left text-left">
                              رجب شعبان رمضان
                            </span>
                            <span class="statu float-right text-right light-green-text">
                              جديد
                            </span>
                          </div>
                          <div class="service-type">
                            <span>طلب خدمة مهنية</span>
                          </div>
                          <div class="price-code">
                            <strong class="price float-left text-left text-primary">
                              150 جنيه
                            </strong>
                            <strong class="code float-right text-right text-primary">
                              #012345678
                            </strong>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="date">
                          <i class="fas fa-calendar"></i>
                          مارس 2019 الساعة 12:44
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="address">
                          <i class="fas fa-home"></i>
                          مدينة نصر -شارع عباس العقاد - القاهرة
                        </div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="line"></div>
                      </div>
                      <div class="col-12 p-l-r-5">
                        <div class="actions">
                          <a href="#" class="float-left text-left refused">إلغاء</a>
                          <a href="#" class="float-right text-right accept">قبول الطلب</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- //Order_box -->
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="">
                <button class="btn btn-primary float-right no-border-radius w-150" type="submit">المزيد</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!--=============== Main End ==================-->


<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'end.php'; ?>