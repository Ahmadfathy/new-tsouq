<?php $pageTitle = 'Blank'; ?>
<?php include 'init.php'; ?>


<!--==============	Main Start ================-->
<main id="home-main" role="main">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide jarallax"><img class="jarallax-img" src="./<?php echo $img; ?>backgrounds/bg-1.jpg">
        <div class="container">
          <div class="row">
            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
              <h1 data-swiper-parallax="-100" data-swiper-parallax-opacity="0.4">Maintenance of household appliances now</h1>
              <p data-swiper-parallax="-200" data-swiper-parallax-opacity="0.2">You can now ask technicians to repair all home malfunctions</p><a class="btn btn-white px-5 text-primary text-capitalize" href="#">order now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide jarallax"><img class="jarallax-img" src="./<?php echo $img; ?>backgrounds/bg-2.jpg">
        <div class="container">
          <div class="row">
            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
              <h1 data-swiper-parallax="-100" data-swiper-parallax-opacity="0.4">Maintenance of household appliances now</h1>
              <p data-swiper-parallax="-200" data-swiper-parallax-opacity="0.2">You can now ask technicians to repair all home malfunctions</p><a class="btn btn-white px-5 text-primary text-capitalize" href="#">order now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide jarallax"><img class="jarallax-img" src="./<?php echo $img; ?>backgrounds/bg-1.jpg">
        <div class="container">
          <div class="row">
            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
              <h1 data-swiper-parallax="-100" data-swiper-parallax-opacity="0.4">Maintenance of household appliances now</h1>
              <p data-swiper-parallax="-200" data-swiper-parallax-opacity="0.2">You can now ask technicians to repair all home malfunctions</p><a class="btn btn-white px-5 text-primary text-capitalize" href="#">order now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide jarallax"><img class="jarallax-img" src="./<?php echo $img; ?>backgrounds/bg-2.jpg">
        <div class="container">
          <div class="row">
            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
              <h1 data-swiper-parallax="-100" data-swiper-parallax-opacity="0.4">Maintenance of household appliances now</h1>
              <p data-swiper-parallax="-200" data-swiper-parallax-opacity="0.2">You can now ask technicians to repair all home malfunctions</p><a class="btn btn-white px-5 text-primary text-capitalize" href="#">order now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</main>
<section id="home-search">
  <div class="container">
    <div class="row">
      <div class="col-10 offset-1 col-md-10 offset-md-1">
        <div class="card-search shadow-sm">
          <div class="card-body">
            <form class="form-inline" action="#" metho="POST">
              <div class="form-row w-100">
                <div class="input-group input-group-lg col-12 col-md-5">
                  <div class="input-group-prepend"><span class="input-group-text icon-placeholder" id="choose-country"></span></div>
                  <input class="form-control" type="text" placeholder="Choose Country." aria-label="search using country" aria-describedby="choose-country">
                </div>
                <div class="input-group input-group-lg col-12 col-md-4">
                  <input class="form-control w-100" type="text" aria-describedby="choose-city" aria-label="search using city" placeholder="Choose City.">
                </div>
                <div class="input-group col-12 col-md-3">
                  <button class="btn btn-primary btn-block text-capitalize" type="submit">see results</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="home-all-services">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <ul class="nav nav-pills mb-3" id="home-services-tabs" role="tablist">
          <li class="nav-item"><a class="nav-link active" id="pills-profissionals-service-tab" data-toggle="pill" href="#pills-profissionals-service" role="tab" aria-controls="pills-profissionals-service" aria-selected="true">profissionals service</a></li>
          <li class="nav-item"><a class="nav-link" id="pills-medical-service-tab" data-toggle="pill" href="#pills-medical-service" role="tab" aria-controls="pills-medical-service" aria-selected="false">medical service</a></li>
          <li class="nav-item"><a class="nav-link" id="pills-products-service-tab" data-toggle="pill" href="#pills-products-service" role="tab" aria-controls="pills-products-service" aria-selected="false">products service</a></li>
        </ul>
      </div>
      <div class="col-12 mt-4">
        <div class="tab-content" id="home-services-tabsContent">
          <div class="tab-pane fade show active" id="pills-profissionals-service" role="tabpanel" aria-labelledby="pills-profissionals-service-tab">
            <div class="swiper-container services-tab-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-air-condition"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-enginnering"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-carpenter"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-plumber"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-furnature"></i>Lorem, ipsum.</a></div>
              </div>
              <div class="swiper-button-next"><i class="fas fa-arrow-right"></i></div>
              <div class="swiper-button-prev"><i class="fas fa-arrow-left"></i></div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-medical-service" role="tabpanel" aria-labelledby="pills-medical-service-tab">
            <div class="swiper-container services-tab-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-air-condition"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-enginnering"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-carpenter"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-plumber"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-furnature"></i>Lorem, ipsum.</a></div>
              </div>
              <div class="swiper-button-next"><i class="fas fa-arrow-right"></i></div>
              <div class="swiper-button-prev"><i class="fas fa-arrow-left"></i></div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-products-service" role="tabpanel" aria-labelledby="pills-products-service-tab">
            <div class="swiper-container services-tab-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-air-condition"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-enginnering"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-carpenter"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-plumber"></i>Lorem, ipsum.</a></div>
                <div class="swiper-slide"><a class="service-icon-card" href="#"><i class="icon-furnature"></i>Lorem, ipsum.</a></div>
              </div>
              <div class="swiper-button-next"><i class="fas fa-arrow-right"></i></div>
              <div class="swiper-button-prev"><i class="fas fa-arrow-left"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home__service" id="home-products">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home__service--header">
          <h5>latest products</h5><a href="#" title="see more products">more</a>
        </div>
      </div>
      <div class="col-12">
        <div class="home__service--content">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-product"><img class="card-img-top" src="./<?php echo $img; ?>products/product-1.jpg" alt="product image" />
                <div class="card-body">
                  <div><a class="card-title h6" href="#" title="product">lorem ipum dolor.</a><small class="card-text">lorem ipum dolor.</small></div>
                  <div>
                    <p class="price">1110 LE</p>
                    <div class="rateYo"></div>
                  </div>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-block" href="#" title="add to wishlist">add to cart<i class="fas fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-product"><img class="card-img-top" src="./<?php echo $img; ?>products/product-2.jpg" alt="product image" />
                <div class="card-body">
                  <div><a class="card-title h6" href="#" title="product">lorem ipum dolor.</a><small class="card-text">lorem ipum dolor.</small></div>
                  <div>
                    <p class="price">1110 LE</p>
                    <div class="rateYo"></div>
                  </div>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-block" href="#" title="add to wishlist">add to cart<i class="fas fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-product"><img class="card-img-top" src="./<?php echo $img; ?>products/product-1.jpg" alt="product image" />
                <div class="card-body">
                  <div><a class="card-title h6" href="#" title="product">lorem ipum dolor.</a><small class="card-text">lorem ipum dolor.</small></div>
                  <div>
                    <p class="price">1110 LE</p>
                    <div class="rateYo"></div>
                  </div>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-block" href="#" title="add to wishlist">add to cart<i class="fas fa-plus"></i></a></div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-product"><img class="card-img-top" src="./<?php echo $img; ?>products/product-2.jpg" alt="product image" />
                <div class="card-body">
                  <div><a class="card-title h6" href="#" title="product">lorem ipum dolor.</a><small class="card-text">lorem ipum dolor.</small></div>
                  <div>
                    <p class="price">1110 LE</p>
                    <div class="rateYo"></div>
                  </div>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-block" href="#" title="add to wishlist">add to cart<i class="fas fa-plus"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home__service home__service--bg-blue" id="home-choose-doctors">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home__service--header">
          <h5>choose your doctor</h5><a href="#" title="see more products">more</a>
        </div>
      </div>
      <div class="col-12">
        <div class="home__service--content">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-person"><img class="card-img-top" src="./<?php echo $img; ?>avatars/doc-1.jpg" alt="doctor avatar" />
                <div class="card-body"><a class="card-title" href="#">dr/ Mohamed ashraf</a><small class="card-text">lorem ipum dolor.</small>
                  <div class="rateYo"></div>
                </div>
                <div class="card-footer">
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i><small>Road 9 Maadi, Cairo, Egypt.</small></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-person"><img class="card-img-top" src="./<?php echo $img; ?>avatars/doc-2.jpg" alt="doctor avatar" />
                <div class="card-body"><a class="card-title" href="#">dr/ Mohamed ashraf</a><small class="card-text">lorem ipum dolor.</small>
                  <div class="rateYo"></div>
                </div>
                <div class="card-footer">
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i><small>Road 9 Maadi, Cairo, Egypt.</small></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-person"><img class="card-img-top" src="./<?php echo $img; ?>avatars/doc-3.jpg" alt="doctor avatar" />
                <div class="card-body"><a class="card-title" href="#">dr/ Mohamed ashraf</a><small class="card-text">lorem ipum dolor.</small>
                  <div class="rateYo"></div>
                </div>
                <div class="card-footer">
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i><small>Road 9 Maadi, Cairo, Egypt.</small></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-person"><img class="card-img-top" src="./<?php echo $img; ?>avatars/doc-4.jpg" alt="doctor avatar" />
                <div class="card-body"><a class="card-title" href="#">dr/ Mohamed ashraf</a><small class="card-text">lorem ipum dolor.</small>
                  <div class="rateYo"></div>
                </div>
                <div class="card-footer">
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i><small>Road 9 Maadi, Cairo, Egypt.</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home__service home__service--bg-transparent" id="home-choose-profissionals">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home__service--header">
          <h5>best profissionals</h5><a href="#" title="see more products">more</a>
        </div>
      </div>
      <div class="col-12">
        <div class="home__service--content">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-person"><img class="card-img-top" src="./<?php echo $img; ?>avatars/doc-1.jpg" alt="doctor avatar" />
                <div class="card-body"><a class="card-title" href="#">dr/ Mohamed ashraf</a><small class="card-text">lorem ipum dolor.</small>
                  <div class="rateYo"></div>
                </div>
                <div class="card-footer">
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i><small>Road 9 Maadi, Cairo, Egypt.</small></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-person"><img class="card-img-top" src="./<?php echo $img; ?>avatars/doc-2.jpg" alt="doctor avatar" />
                <div class="card-body"><a class="card-title" href="#">dr/ Mohamed ashraf</a><small class="card-text">lorem ipum dolor.</small>
                  <div class="rateYo"></div>
                </div>
                <div class="card-footer">
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i><small>Road 9 Maadi, Cairo, Egypt.</small></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-person"><img class="card-img-top" src="./<?php echo $img; ?>avatars/doc-3.jpg" alt="doctor avatar" />
                <div class="card-body"><a class="card-title" href="#">dr/ Mohamed ashraf</a><small class="card-text">lorem ipum dolor.</small>
                  <div class="rateYo"></div>
                </div>
                <div class="card-footer">
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i><small>Road 9 Maadi, Cairo, Egypt.</small></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
              <div class="card-person"><img class="card-img-top" src="./<?php echo $img; ?>avatars/doc-4.jpg" alt="doctor avatar" />
                <div class="card-body"><a class="card-title" href="#">dr/ Mohamed ashraf</a><small class="card-text">lorem ipum dolor.</small>
                  <div class="rateYo"></div>
                </div>
                <div class="card-footer">
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i><small>Road 9 Maadi, Cairo, Egypt.</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home__service" id="home-testimonials">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home__service--header">
          <h5>testimonials</h5><a href="#" title="see more products">more</a>
        </div>
      </div>
      <div class="col-12">
        <div class="home__service--content">
          <div class="row">
            <div class="col-12 col-md-6 mb-4">
              <div class="card-testimonials">
                <div class="row">
                  <div class="col-3 pr-0">
                    <div class="card-img"><img class="img-fluid" src="./<?php echo $img; ?>avatars/avatar-1.jpg" alt="some description"></div>
                  </div>
                  <div class="col-9 pl-0">
                    <div class="card-body">
                      <h6 class="card-title">Lorem, ipsum dolor.</h6><small class="card-subtitle">Lorem, ipsum dolor.</small>
                      <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid eos ad magni asperiores tempore voluptas distinctio quo magnam laborum molestiae.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
              <div class="card-testimonials">
                <div class="row">
                  <div class="col-3 pr-0">
                    <div class="card-img"><img class="img-fluid" src="./<?php echo $img; ?>avatars/avatar-1.jpg" alt="some description"></div>
                  </div>
                  <div class="col-9 pl-0">
                    <div class="card-body">
                      <h6 class="card-title">Lorem, ipsum dolor.</h6><small class="card-subtitle">Lorem, ipsum dolor.</small>
                      <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid eos ad magni asperiores tempore voluptas distinctio quo magnam laborum molestiae.</p>
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
</section>
<section class="jarallax" id="home-download-app"><img class="jarallax-img" src="./<?php echo $img; ?>backgrounds/bg-2.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <h5>download the app</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam quasi, iste corrupti harum error quis, fuga delectus nostrum aut enim velit doloribus itaque magni minus ratione eveniet deleniti aperiam repellendus.</p>
        <div class="stores-container"><a href="#" title="download from play store" target="_blank"><img src="./<?php echo $img; ?>icons/play-store.png" alt=""></a><a href="#" title="download from app store" target="_blank"><img src="./<?php echo $img; ?>icons/app-store.png" alt=""></a></div>
      </div>
    </div>
  </div>
</section>
<section class="partners" id="home-partners">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-2"><a class="partners__logo" href="#"><img src="https://via.placeholder.com/160x75.png/F9F9F9/878787?text=logo" alt="partiner logo"></a></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-2"><a class="partners__logo" href="#"><img src="https://via.placeholder.com/160x75.png/F9F9F9/878787?text=logo" alt="partiner logo"></a></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-2"><a class="partners__logo" href="#"><img src="https://via.placeholder.com/160x75.png/F9F9F9/878787?text=logo" alt="partiner logo"></a></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-2"><a class="partners__logo" href="#"><img src="https://via.placeholder.com/160x75.png/F9F9F9/878787?text=logo" alt="partiner logo"></a></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-2"><a class="partners__logo" href="#"><img src="https://via.placeholder.com/160x75.png/F9F9F9/878787?text=logo" alt="partiner logo"></a></div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-2"><a class="partners__logo" href="#"><img src="https://via.placeholder.com/160x75.png/F9F9F9/878787?text=logo" alt="partiner logo"></a></div>
    </div>
  </div>
</section>
<!--=============== Main End ==================-->


<?php include $tpl . 'footer.php'; ?>

<?php include $tpl . 'end.php'; ?>