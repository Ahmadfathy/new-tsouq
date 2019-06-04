<?php $pageTitle = 'الخدمات الطبية'; ?>
<?php include 'init.php'; ?>

<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php'; ?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content bg-light-blue" role="main">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 offset-sm-0 col-lg-10 offset-lg-1">
        <div class="inner__card shadow-sm">
          <div class="card-body">
            <form class="" action="javascript:void(0)" method="POST">
              <div class="form-row">
                <div class="col-sm-3">
                  <div class="input-group">
                    <select class="form-control form-control-lg" name="" id="">
                      <option value="" readonly>Choose The Specialization</option>
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
                      <option value="" readonly>Choose The Country</option>
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
                      <option value="" readonly>Choose The City</option>
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
                    <button class="btn btn-primary btn-block btn-lg" type="submit">Show Results</button>
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
        <h4 class="text-primary text-capitalize font-weight-bold m-0 pt-3 text-center">Midecal Services</h4>
        <p class="text-center my-4">
          It is a long established fact that a reader will be distracted by the readable content of a page when
          looking at its layout.
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
              <div class="card-body font-sm">
                <div class="row">
                  <div class="col-12">
                    <img src="<?php echo $img; ?>doc.jpg" class="mb-3 rounded-5" alt="">
                  </div>
                  <div class="col-12">
                    <div class="profile-details">
                      <div class="row">
                        <div class="col-10">
                          <h5><a href="javascript:void(0)">Dr. Ahmad Fathy Ayad</a></h5>
                          <p>Lorem ipsum dolor sit amet elit.</p>
                          <div class="rating">
                            <div class="rateYo"></div>
                            <p><span>500</span> Person Rating This Doctor </p>
                          </div>
                        </div>
                        <div class="col-2 text-center">
                          <a href="javascript:void(0)" class="wish-heart red-color">
                            <i class="far fa-heart fa-2x"></i>
                          </a>
                        </div>
                      </div>
                      <p class="text-primary profile-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Abbas El Aqqad, Nasr City, cairo
                      </p>
                    </div>
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
                    <img src="<?php echo $img; ?>doc.jpg" class="mb-3 rounded-5" alt="">
                  </div>
                  <div class="col-12">
                    <div class="profile-details">
                      <div class="row">
                        <div class="col-10">
                          <h5><a href="javascript:void(0)">Dr. Ahmad Fathy Ayad</a></h5>
                          <p>Lorem ipsum dolor sit amet elit.</p>
                          <div class="rating">
                            <div class="rateYo"></div>
                            <p><span>500</span> Person Rating This Doctor </p>
                          </div>
                        </div>
                        <div class="col-2 text-center">
                          <a href="javascript:void(0)" class="wish-heart red-color">
                            <i class="far fa-heart fa-2x"></i>
                          </a>
                        </div>
                      </div>
                      <p class="text-primary profile-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Abbas El Aqqad, Nasr City, cairo
                      </p>
                    </div>
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
                    <img src="<?php echo $img; ?>doc.jpg" class="mb-3 rounded-5" alt="">
                  </div>
                  <div class="col-12">
                    <div class="profile-details">
                      <div class="row">
                        <div class="col-10">
                          <h5><a href="javascript:void(0)">Dr. Ahmad Fathy Ayad</a></h5>
                          <p>Lorem ipsum dolor sit amet elit.</p>
                          <div class="rating">
                            <div class="rateYo"></div>
                            <p><span>500</span> Person Rating This Doctor </p>
                          </div>
                        </div>
                        <div class="col-2 text-center">
                          <a href="javascript:void(0)" class="wish-heart red-color">
                            <i class="far fa-heart fa-2x"></i>
                          </a>
                        </div>
                      </div>
                      <p class="text-primary profile-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Abbas El Aqqad, Nasr City, cairo
                      </p>
                    </div>
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
                    <div class="rounded-img mb-2">
                      <img src="<?php echo $img; ?>doc.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="profile-details">
                      <div class="row">
                        <div class="col-10">
                          <h5><a href="#">Dr. Ahmad Fathy Ayad</a></h5>
                          <p>Lorem ipsum dolor sit amet elit.</p>
                          <div class="rating">
                            <div class="rateYo"></div>
                            <h6> <span>500</span> Person Rating This Doctor </h6>
                          </div>
                        </div>
                        <div class="col-2 pl0 text-center"> <a href="javascript:void(0)" class="wish-heart red-color">
                            <i class="far fa-heart fa-2x"></i>
                          </a>
                        </div>
                      </div>

                      <p class="text-primary profile-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Abbas El Aqqad, Nasr City, cairo
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
                    <div class="rounded-img mb-2">
                      <img src="<?php echo $img; ?>doc.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="profile-details">
                      <div class="row">
                        <div class="col-10">
                          <h5><a href="#">Dr. Ahmad Fathy Ayad</a></h5>
                          <p>Lorem ipsum dolor sit amet elit.</p>
                          <div class="rating">
                            <div class="rateYo"></div>
                            <h6> <span>500</span> Person Rating This Doctor </h6>
                          </div>
                        </div>
                        <div class="col-2 pl0 text-center"> <a href="javascript:void(0)" class="wish-heart red-color">
                            <i class="far fa-heart fa-2x"></i>
                          </a>
                        </div>
                      </div>

                      <p class="text-primary profile-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Abbas El Aqqad, Nasr City, cairo
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
                    <div class="rounded-img mb-2">
                      <img src="<?php echo $img; ?>doc.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="profile-details">
                      <div class="row">
                        <div class="col-10">
                          <h5><a href="#">Dr. Ahmad Fathy Ayad</a></h5>
                          <p>Lorem ipsum dolor sit amet elit.</p>
                          <div class="rating">
                            <div class="rateYo"></div>
                            <h6> <span>500</span> Person Rating This Doctor </h6>
                          </div>
                        </div>
                        <div class="col-2 pl0 text-center"> <a href="javascript:void(0)" class="wish-heart red-color">
                            <i class="far fa-heart fa-2x"></i>
                          </a>
                        </div>
                      </div>

                      <p class="text-primary profile-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Abbas El Aqqad, Nasr City, cairo
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
                    <div class="rounded-img mb-2">
                      <img src="<?php echo $img; ?>doc.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="profile-details">
                      <div class="row">
                        <div class="col-10">
                          <h5><a href="#">Dr. Ahmad Fathy Ayad</a></h5>
                          <p>Lorem ipsum dolor sit amet elit.</p>
                          <div class="rating">
                            <div class="rateYo"></div>
                            <h6> <span>500</span> Person Rating This Doctor </h6>
                          </div>
                        </div>
                        <div class="col-2 pl0 text-center"> <a href="javascript:void(0)" class="wish-heart red-color">
                            <i class="far fa-heart fa-2x"></i>
                          </a>
                        </div>
                      </div>

                      <p class="text-primary profile-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Abbas El Aqqad, Nasr City, cairo
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
                    <div class="rounded-img mb-2">
                      <img src="<?php echo $img; ?>doc.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="profile-details">
                      <div class="row">
                        <div class="col-10">
                          <h5><a href="#">Dr. Ahmad Fathy Ayad</a></h5>
                          <p>Lorem ipsum dolor sit amet elit.</p>
                          <div class="rating">
                            <div class="rateYo"></div>
                            <h6> <span>500</span> Person Rating This Doctor </h6>
                          </div>
                        </div>
                        <div class="col-2 pl0 text-center"> <a href="javascript:void(0)" class="wish-heart red-color">
                            <i class="far fa-heart fa-2x"></i>
                          </a>
                        </div>
                      </div>

                      <p class="text-primary profile-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Abbas El Aqqad, Nasr City, cairo
                      </p>
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
  $(document).ready(function() {
    $("a.wish-heart").click(function() {
      $(this).toggleClass("active-red-color") & $(this).children('i.far').toggleClass('fas');
    });
  });

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
  }
</script>

<?php include $tpl . 'end.php'; ?>