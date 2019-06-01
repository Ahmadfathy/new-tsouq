<?php $pageTitle = 'Blank'; ?>
<?php include 'init.php'; ?>

<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php'; ?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content" role="main">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 offset-sm-0 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <div class="inner__card shadow-sm">
          <div class="card-header">
            <h4 class="text-primary text-capitalize font-weight-bold m-0 pt-3">Registration of a new Worker service</h4>
          </div>
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <form class="p-4" action="#" method="POST">
                    <div class="form-row mb-3">
                      <div class="col-3">
                        <div class="profile-avatar">
                          <div class="profile-avatar-preview"><img src="<?php echo $img; ?>avatars/avatar-default.jpg" alt="profile pic"></div>
                          <div class="profile-avatar-field">
                            <input id="profile-avatar-input" name="" data-maxSize="5" type="file">
                            <label for="profile-avatar-input">add new avatar</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-9">
                        <div class="form-row mb-3">
                          <div class="col-12">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_services_field_prepend"><span class="icon-worker"></span></span></div>
                              <input class="form-control form-control-lg location-search" id="registeration_input_services_field" type="text" aria-describedby="registeration_input_services_field_prepend" placeholder="Service Field">
                            </div>
                          </div>
                        </div>
                        <div class="form-row mb-3">
                          <div class="col-8">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_services_provider_prepend"><span class="icon-worker"></span></span></div>
                              <input class="form-control form-control-lg badges-input" id="registeration_input_services_provider" type="text" name="services_provider[]" aria-describedby="registeration_input_services_provider_prepend" placeholder="Services Provider">
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="input-group">
                              <input class="form-control form-control-lg badges-input" id="registeration_input_service_price" type="text" name="service_price[]" aria-describedby="registeration_input_service_price_prepend" placeholder="Price">
                            </div>
                          </div>
                          <div class="col-1 d-flex align-items-center justify-content-center">
                            <div class="badges-add-more"><i class="fas fa-plus"></i></div>
                          </div>
                          <div class="col-12 badges-container"></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_address_prepend"><span class="icon-maps-pin"></span></span></div>
                          <input class="form-control form-control-lg location-search" id="registeration_input_address" type="text" aria-describedby="registeration_input_address_prepend" placeholder="Address">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-10">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_phone_number_prepend_1"><span class="icon-call-answer"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_phone_number_1" type="number" aria-describedby="registeration_input_phone_number_prepend_1" placeholder="Phone Number">
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                          <input class="form-control form-control-lg" id="registeration_input_phone_code_1" type="text" placeholder="+566">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-10">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_phone_number_prepend_2"><span class="icon-call-answer"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_phone_number_2" type="number" aria-describedby="registeration_input_phone_number_prepend_2" placeholder="Phone Number">
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                          <input class="form-control form-control-lg" id="registeration_input_phone_code_2" type="text" placeholder="+566">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-10">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_phone_number_prepend_3"><span class="icon-call-answer"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_phone_number_3" type="number" aria-describedby="registeration_input_phone_number_prepend_3" placeholder="Phone Number">
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                          <input class="form-control form-control-lg" id="registeration_input_phone_code_3" type="text" placeholder="+566">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <textarea class="form-control form-control-lg" name="" id="" cols="30" rows="6" placeholder="About You?"></textarea>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <button class="btn btn-primary btn-block btn-lg" type="submit">submit</button>
                      </div>
                    </div>
                  </form>
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

<?php include $tpl . 'end.php'; ?>