<?php $pageTitle = 'Blank'; ?>
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
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
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
                  <h5><a href="javascript:void(0)">Dr. Ahmad Fathy Ayad</a></h5>
                  <p>Lorem ipsum dolor sit amet elit.</p>
                  <div class="row">
                    <div class="col-7">
                      <div class="rating">
                        <div class="stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <i class="far fa-star"></i>
                        </div>
                        <h6> <span>500</span> Person Rating This Doctor </h6>
                      </div>
                      <p class="text-primary profile-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Abbas El Aqqad, Nasr City, cairo
                      </p>
                    </div>
                    <div class="col-5">
                      <div class="text-right">
                        <a href="javascript:void(0)"><img src="<?php echo $img; ?>g-map.png" width="40" alt=""></a>
                        <h5 class="profile-price text-primary"> The Price : 500 Pound </h5>
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
            <h5 class="text-primary box-title">The Services:</h5>
            <ul class="list-unstyled">
              <li class="media">
                <img src="<?php echo $img; ?>user.png" style="width:80px ;height:80px" class="align-self-center mr-3" alt="...">
                <div class="media-body">
                  <h5 class="mt-0 mb-1 text-primary">Abdo Sha3ban</h5>
                  <div class="rates">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nemo, ipsum, veritatis cum cupiditate eos.</p>
                </div>
              </li>
              <li class="media my-4">
                <img src="<?php echo $img; ?>user.png" style="width:80px ;height:80px" class="align-self-center mr-3" alt="...">
                <div class="media-body">
                  <h5 class="mt-0 mb-1 text-primary">Abdo Sha3ban</h5>
                  <div class="rates">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nemo, ipsum, veritatis cum cupiditate eos.</p>
                </div>
              </li>
              <li class="media">
                <img src="<?php echo $img; ?>user.png" style="width:80px ;height:80px" class="align-self-center mr-3" alt="...">
                <div class="media-body">
                  <h5 class="mt-0 mb-1 text-primary">Abdo Sha3ban</h5>
                  <div class="rates">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nemo, ipsum, veritatis cum cupiditate eos.</p>
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

                <div class="input-group mb-3">
                  <input class="form-control form-control-lg badges-input" id="Patient_name" type="text" name="" aria-describedby="Patient_name" placeholder="Patient Name">
                </div>

                <div class="input-group mb-3">
                  <textarea class="form-control form-control-lg" name="" id="" cols="30" rows="6" placeholder="About Your Complain?"></textarea>
                </div>

                <div class="input-group mb-3">
                  <h5 class="white-color text-center p-1 width-100">Choose The Date</h5>
                </div>

                <div class="input-group mb-3">
                  <div class="owl-carousel owl-theme days-slider">
                    <div class="item">
                      <div class="day-block">
                        <ul>
                          <li class="sp-day">Sunday</li>
                          <li> <a href="javascript:void(0)">10 PM</a> </li>
                          <li> <a href="javascript:void(0)">11 PM</a> </li>
                          <li> <a href="javascript:void(0)">12 AM</a> </li>
                          <li> <a href="javascript:void(0)">01 AM</a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="day-block">
                        <ul>
                          <li class="sp-day">Sunday</li>
                          <li> <a href="javascript:void(0)">10 PM</a> </li>
                          <li> <a href="javascript:void(0)">11 PM</a> </li>
                          <li> <a href="javascript:void(0)">12 AM</a> </li>
                          <li> <a href="javascript:void(0)">01 AM</a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="day-block">
                        <ul>
                          <li class="sp-day">Sunday</li>
                          <li> <a href="javascript:void(0)">10 PM</a> </li>
                          <li> <a href="javascript:void(0)">11 PM</a> </li>
                          <li> <a href="javascript:void(0)">12 AM</a> </li>
                          <li> <a href="javascript:void(0)">01 AM</a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="day-block">
                        <ul>
                          <li class="sp-day">Sunday</li>
                          <li> <a href="javascript:void(0)">10 PM</a> </li>
                          <li> <a href="javascript:void(0)">11 PM</a> </li>
                          <li> <a href="javascript:void(0)">12 AM</a> </li>
                          <li> <a href="javascript:void(0)">01 AM</a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="day-block">
                        <ul>
                          <li class="sp-day">Sunday</li>
                          <li> <a href="javascript:void(0)">10 PM</a> </li>
                          <li> <a href="javascript:void(0)">11 PM</a> </li>
                          <li> <a href="javascript:void(0)">12 AM</a> </li>
                          <li> <a href="javascript:void(0)">01 AM</a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="day-block">
                        <ul>
                          <li class="sp-day">Sunday</li>
                          <li> <a href="javascript:void(0)">10 PM</a> </li>
                          <li> <a href="javascript:void(0)">11 PM</a> </li>
                          <li> <a href="javascript:void(0)">12 AM</a> </li>
                          <li> <a href="javascript:void(0)">01 AM</a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="item">
                      <div class="day-block">
                        <ul>
                          <li class="sp-day">Sunday</li>
                          <li> <a href="javascript:void(0)">10 PM</a> </li>
                          <li> <a href="javascript:void(0)">11 PM</a> </li>
                          <li> <a href="javascript:void(0)">12 AM</a> </li>
                          <li> <a href="javascript:void(0)">01 AM</a> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label white-color" for="exampleCheck1">Accept terms And Conditions</label>
                </div>
                <div class="form-row mb-3">
                  <div class="col-12">
                    <button class="btn btn-blue-dark btn-block btn-lg" type="submit">Booking Now</button>
                  </div>
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
<script>
  $(document).ready(function() {
    $(".day-block li a").click(function() {
      $(this).toggleClass("active-day");
    });
  });
</script>
<?php include $tpl . 'end.php'; ?>