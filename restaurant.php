<?php $pageTitle = 'المطاعم و الكافيهات'; ?>
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
        <h4 class="text-primary text-capitalize font-weight-bold m-0 pt-3 text-center">المطاعم و الكافيهات</h4>
        <p class="text-center my-4">
          هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <div class="float-left">
          <a href="javascript:void(0)" class="btn-filer md-trigger" data-modal="modal-filter">
            <i class="fas fa-filter"></i> فلتر البحث
          </a>
        </div>
      </div>
      <div class="col-6">
        <div class="grid-list-switcher float-right">
          <a href="javascript:void(0)" class="switch-grid active"><i class="fas fa-th"></i></a>
          <a href="javascript:void(0)" class="switch-list"><i class="fas fa-th-list"></i></a>
        </div>
      </div>
    </div>

    <div id="grid-list" class="grid">
      <div class="grid-view">
        <div class="row">
          <div class="col-sm-4">
            <div class="card shadow-sm my-2">
              <div class="card-body">
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
</main>
<!--=============== Main End ==================-->

<div class="md-modal md-effect" id="modal-filter">
  <div class="md-content">
    <div class="filter-popup">
      <a href="javascript:void(0)" class="md-close">X</a>
      <h5 class="title">فلتر نتائج البحث</h5>
      <div class="options">
        <div class="form-check checkbox mb-2">
          <input id="checkbox1" type="checkbox">
          <label for="checkbox1">الأقرب إليك</label>
        </div>
        <div class="form-check checkbox mb-2">
          <input id="checkbox2" type="checkbox">
          <label for="checkbox2">الأحدث</label>
        </div>
        <div class="form-check checkbox mb-2">
          <input id="checkbox3" type="checkbox">
          <label for="checkbox3">الأعلي تقييم</label>
        </div>
        <div class="form-check checkbox mb-2">
          <input id="checkbox4" type="checkbox">
          <label for="checkbox4">الأعلي سعر</label>
        </div>
        <div class="form-check checkbox mb-2">
          <input id="checkbox5" type="checkbox">
          <label for="checkbox5">الأقل سعر</label>
        </div>
        <div class="form-check checkbox mb-2">
          <input id="checkbox6" type="checkbox">
          <label for="checkbox6">المقترح</label>
        </div>
      </div>
      <div class="filter-footer">
        <button class="btn btn-primary" type="submit">مسح الفلتر</button>
      </div>
    </div>
  </div>
</div>
<div class="md-overlay"></div><!-- the overlay element -->


<?php include $tpl . 'footer.php'; ?>

<script src="<?php echo $js; ?>classie.js"></script>
<script src="<?php echo $js; ?>modalEffects.js"></script>
<script>
  $('.switch-list').click(function() {
    $('#grid-list').removeClass('grid').addClass('list');
  });
  $('.switch-grid').click(function() {
    $('#grid-list').removeClass('list').addClass('grid');
  });
  $('.grid-list-switcher a').click(function() {
    $(this).addClass('active').siblings('a').removeClass('active');
  });
  if ($('#grid-list').hasClass('list')) {
    alert('ahmad hi')
  }
</script>

<?php include $tpl . 'end.php'; ?>