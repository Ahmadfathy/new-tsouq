<?php $pageTitle = 'المطاعم و الكافيهات'; ?>
<?php include 'init.php'; ?>

<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php'; ?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content" role="main">
  <div class="container">
    <div class="row">

      <!-- Content Here -->
      <div class="col-12">
        <div class="inner__card shadow-sm mb-4">
          <div class="card-body rest-menu">
            <div class="row">
              <div class="col-12 col-sm-2">
                <div class="img">
                  <img class="img-full" src="<?php echo $img; ?>img-1.png" alt="">
                </div>
              </div>
              <div class="col-12 col-sm-8">
                <div class="profile-details mt-3">
                  <h5 class="mb-3"><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                  <p class="mb-4">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم</p>
                  <p class="text-primary profile-location">
                    <i class="fas fa-map-marker-alt"></i>
                    مدينة نصر -شارع عباس العقاد - القاهرة
                  </p>
                </div>
              </div>
              <div class="col-12 col-sm-2">
                <div class="left-box mt-4 text-center">
                  <div class="rating mb-4">
                    <div class="rateYo mb-4"></div>
                    <h6> <span>500</span> شخص قيم هذا المطعم </h6>
                  </div>
                  <ul class="navbar__social">
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mt-5">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="restaurant_menu-tab" data-toggle="pill" href="#restaurant_menu" role="tab" aria-controls="restaurant_menu" aria-selected="true">قائمة الطعام</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="restaurant_info-tab" data-toggle="pill" href="#restaurant_info" role="tab" aria-controls="restaurant_info" aria-selected="false">معلومات المطعم</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="restaurant_rate-tab" data-toggle="pill" href="#restaurant_rate" role="tab" aria-controls="restaurant_rate" aria-selected="false">التقييمات</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="restaurant_menu" role="tabpanel" aria-labelledby="restaurant_menu-tab">
              <div class="row">
                <div class="col-12 col-sm-3">
                  <aside class="widget-menu-sidebar text-center shadow-sm">
                    <h4>أصناف الطعام</h4>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-grilled-tab" data-toggle="pill" href="#v-pills-grilled" role="tab" aria-controls="v-pills-grilled" aria-selected="true">مشويات</a>
                      <a class="nav-link" id="v-pills-sweetes-tab" data-toggle="pill" href="#v-pills-sweetes" role="tab" aria-controls="v-pills-sweetes" aria-selected="false">حلويات</a>
                      <a class="nav-link" id="v-pills-italian_bizza-tab" data-toggle="pill" href="#v-pills-italian_bizza" role="tab" aria-controls="v-pills-italian_bizza" aria-selected="false">بيتزا إيطالي</a>
                      <a class="nav-link" id="v-pills-italian_orintel-tab" data-toggle="pill" href="#v-pills-italian_orintel" role="tab" aria-controls="v-pills-italian_orintel" aria-selected="false">بيتزا شرقي</a>
                      <a class="nav-link" id="v-pills-juice-tab" data-toggle="pill" href="#v-pills-juice" role="tab" aria-controls="v-pills-juice" aria-selected="false">بيتزا إيطالي</a>
                      <a class="nav-link" id="v-pills-hot_drikes-tab" data-toggle="pill" href="#v-pills-hot_drikes" role="tab" aria-controls="v-pills-hot_drikes" aria-selected="false">بيتزا شرقي</a>
                    </div>
                  </aside>
                </div>
                <div class="col-12 col-sm-9">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-grilled" role="tabpanel" aria-labelledby="v-pills-grilled-tab">
                      <div class="rest-all-menu">
                        <div class="row">
                          <div class="col-6">
                          </div>
                          <div class="col-6">
                            <div class="grid-list-switcher float-right">
                              <a href="javascript:void(0)" class="switch-grid active"><i class="fas fa-th"></i></a>
                              <a href="javascript:void(0)" class="switch-list"><i class="fas fa-th-list"></i></a>
                            </div>
                          </div>
                        </div>

                        <div class="box-grid-list" class="grid">
                          <div class="grid-view">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list-view">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
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

                        <div class="row">
                          <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                            <div class="text-center pagination-custom">
                              <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                      <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                    </a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                  <li class="page-item"><a class="page-link active" href="javascript:void(0)">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                      <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-sweetes" role="tabpanel" aria-labelledby="v-pills-sweetes-tab">
                      <div class="rest-all-menu">
                        <div class="row">
                          <div class="col-6">
                          </div>
                          <div class="col-6">
                            <div class="grid-list-switcher float-right">
                              <a href="javascript:void(0)" class="switch-grid active"><i class="fas fa-th"></i></a>
                              <a href="javascript:void(0)" class="switch-list"><i class="fas fa-th-list"></i></a>
                            </div>
                          </div>
                        </div>

                        <div class="box-grid-list" class="grid">
                          <div class="grid-view">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list-view">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
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

                        <div class="row">
                          <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                            <div class="text-center pagination-custom">
                              <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                      <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                    </a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                  <li class="page-item"><a class="page-link active" href="javascript:void(0)">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                      <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-italian_bizza" role="tabpanel" aria-labelledby="v-pills-italian_bizza-tab">
                      <div class="rest-all-menu">
                        <div class="row">
                          <div class="col-6">
                          </div>
                          <div class="col-6">
                            <div class="grid-list-switcher float-right">
                              <a href="javascript:void(0)" class="switch-grid active"><i class="fas fa-th"></i></a>
                              <a href="javascript:void(0)" class="switch-list"><i class="fas fa-th-list"></i></a>
                            </div>
                          </div>
                        </div>

                        <div class="box-grid-list" class="grid">
                          <div class="grid-view">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list-view">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
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

                        <div class="row">
                          <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                            <div class="text-center pagination-custom">
                              <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                      <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                    </a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                  <li class="page-item"><a class="page-link active" href="javascript:void(0)">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                      <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-italian_orintel" role="tabpanel" aria-labelledby="v-pills-italian_orintel-tab">
                      <div class="rest-all-menu">
                        <div class="row">
                          <div class="col-6">
                          </div>
                          <div class="col-6">
                            <div class="grid-list-switcher float-right">
                              <a href="javascript:void(0)" class="switch-grid active"><i class="fas fa-th"></i></a>
                              <a href="javascript:void(0)" class="switch-list"><i class="fas fa-th-list"></i></a>
                            </div>
                          </div>
                        </div>

                        <div class="box-grid-list" class="grid">
                          <div class="grid-view">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list-view">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
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

                        <div class="row">
                          <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                            <div class="text-center pagination-custom">
                              <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                      <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                    </a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                  <li class="page-item"><a class="page-link active" href="javascript:void(0)">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                      <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-juice" role="tabpanel" aria-labelledby="v-pills-juice-tab">
                      <div class="rest-all-menu">
                        <div class="row">
                          <div class="col-6">
                          </div>
                          <div class="col-6">
                            <div class="grid-list-switcher float-right">
                              <a href="javascript:void(0)" class="switch-grid active"><i class="fas fa-th"></i></a>
                              <a href="javascript:void(0)" class="switch-list"><i class="fas fa-th-list"></i></a>
                            </div>
                          </div>
                        </div>

                        <div class="box-grid-list" class="grid">
                          <div class="grid-view">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list-view">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
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

                        <div class="row">
                          <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                            <div class="text-center pagination-custom">
                              <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                      <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                    </a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                  <li class="page-item"><a class="page-link active" href="javascript:void(0)">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                      <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-hot_drikes" role="tabpanel" aria-labelledby="v-pills-hot_drikes-tab">
                      <div class="rest-all-menu">
                        <div class="row">
                          <div class="col-6">
                          </div>
                          <div class="col-6">
                            <div class="grid-list-switcher float-right">
                              <a href="javascript:void(0)" class="switch-grid active"><i class="fas fa-th"></i></a>
                              <a href="javascript:void(0)" class="switch-list"><i class="fas fa-th-list"></i></a>
                            </div>
                          </div>
                        </div>

                        <div class="box-grid-list" class="grid">
                          <div class="grid-view">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body font-sm">
                                    <div class="row">
                                      <div class="col-12">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <h5><a href="javascript:void(0)">مطعم المدينة الدولي</a></h5>
                                          <p>مشويات - حلوبات - اكل سورى</p>
                                          <div class="rating">
                                            <div class="rateYo"></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <div class="img">
                                          <img src="<?php echo $img; ?>img-1.png" alt="">
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <p class="text-primary profile-location">
                                          <i class="fas fa-map-marker-alt"></i>
                                          عباس العقاد-مدينة نصر- القاهرة
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list-view">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card shadow-sm my-2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-4">
                                        <img src="<?php echo $img; ?>img-2.jpg" class="mb-3 rounded-5" alt="">
                                      </div>
                                      <div class="col-8">
                                        <div class="profile-details">
                                          <div class="row">
                                            <div class="col-9">
                                              <h5><a href="#">مطعم المدينة الدولي</a></h5>
                                              <p>مشويات - حلوبات - اكل سورى</p>
                                              <div class="rating">
                                                <div class="rateYo"></div>
                                                <h6> <span>500</span> شخص قيمو هذا المطعم </h6>
                                              </div>
                                            </div>
                                            <div class="col-3 pl0 text-center">
                                              <div class="rounded-img mb-2">
                                                <img src="<?php echo $img; ?>img-1.png" alt="">
                                              </div>
                                            </div>
                                          </div>

                                          <p class="text-primary profile-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                            عباس العقاد-مدينة نصر- القاهرة
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

                        <div class="row">
                          <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                            <div class="text-center pagination-custom">
                              <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                      <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                    </a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                  <li class="page-item"><a class="page-link active" href="javascript:void(0)">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                      <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="inner__card shadow-sm">
                <div class="card-body">

                </div>
              </div>
            </div><!--  #1 tab-pane -->
            <div class="tab-pane fade" id="restaurant_info" role="tabpanel" aria-labelledby="restaurant_info-tab">
              <div class="inner__card shadow-sm mb-4">
                <div class="card-body">
                  <div class="rest-info">
                    <h3 class="text-primary mb-4">نبذة عن المطعم</h3>
                    <p>
                      هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات من قاموس يحوي على أكثر من 200 كلمة لا تينية، مضاف إليها مجموعة من الجمل النموذجية، لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص الناتح خالي من التكرار، أو أي كلمات أو عبارات غير لائقة أو ما شابه. وهذا ما يجعله أول مولّد نص لوريم إيبسوم حقيقي على الإنترنت.
                    </p>
                  </div>
                </div>
              </div>
              <div class="inner__card shadow-sm mb-3">
                <div class="card-body">
                  <div class="rest-branchs">
                    <h3 class="text-primary mb-4">فروع المطعم</h3>
                    <ul>
                      <li>
                        <span class="address">
                          <i class="fas fa-map-marker-alt"></i>
                          مدينة نصر شارع عباس العقاد - القاهرة
                        </span>
                        <span class="phone">
                          <i class="fas fa-phone"></i>
                          +696 123456789
                        </span>
                      </li>
                      <li>
                        <span class="address">
                          <i class="fas fa-map-marker-alt"></i>
                          مدينة نصر شارع عباس العقاد - القاهرة
                        </span>
                        <span class="phone">
                          <i class="fas fa-phone"></i>
                          +696 123456789
                        </span>
                      </li>
                      <li>
                        <span class="address">
                          <i class="fas fa-map-marker-alt"></i>
                          مدينة نصر شارع عباس العقاد - القاهرة
                        </span>
                        <span class="phone">
                          <i class="fas fa-phone"></i>
                          +696 123456789
                        </span>
                      </li>
                      <li>
                        <span class="address">
                          <i class="fas fa-map-marker-alt"></i>
                          مدينة نصر شارع عباس العقاد - القاهرة
                        </span>
                        <span class="phone">
                          <i class="fas fa-phone"></i>
                          +696 123456789
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!--  #2 tab-pane -->
            <div class="tab-pane fade" id="restaurant_rate" role="tabpanel" aria-labelledby="restaurant_rate-tab">
              <div class="inner__card shadow-sm">
                <div class="card-body profile-ratings">
                  <h5 class="text-primary box-title">التقييمات</h5>
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
                      <img src="<?php echo $img; ?>user.png" style="width:80px ;height:80px" class="align-self-center mr-3" alt="...">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1 text-primary">احمد علي</h5>
                        <div class="rates">
                          <div class="rateYo"></div>
                        </div>
                        <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.</p>
                      </div>
                    </li>
                    <li class="media my-4">
                      <img src="<?php echo $img; ?>user.png" style="width:80px ;height:80px" class="align-self-center mr-3" alt="...">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1 text-primary">احمد علي</h5>
                        <div class="rates">
                          <div class="rateYo"></div>
                        </div>
                        <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.</p>
                      </div>
                    </li>
                    <li class="media">
                      <img src="<?php echo $img; ?>user.png" style="width:80px ;height:80px" class="align-self-center mr-3" alt="...">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1 text-primary">احمد علي</h5>
                        <div class="rates">
                          <div class="rateYo"></div>
                        </div>
                        <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div><!--  #3 tab-pane -->
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--=============== Main End ==================-->


<?php include $tpl . 'footer.php'; ?>
<script>
  $('.switch-list').click(function() {
    $('.box-grid-list').removeClass('grid').addClass('list');
  });
  $('.switch-grid').click(function() {
    $('.box-grid-list').removeClass('list').addClass('grid');
  });
  $('.grid-list-switcher a').click(function() {
    $(this).addClass('active').siblings('a').removeClass('active');
  });
</script>
<?php include $tpl . 'end.php'; ?>