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
            <h4 class="text-primary text-capitalize font-weight-bold m-0 pt-3">Registration of a new medical service</h4>
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
                            <input id="profile-avatar-input" type="file" name="" data-maxSize="5">
                            <label for="profile-avatar-input">add new avatar</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-9">
                        <div class="form-row mb-3">
                          <div class="col-12">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_specialization_prepend"><span class="icon-medical"></span></span></div>
                              <input class="form-control form-control-lg" id="registeration_input_specialization" type="text" aria-describedby="registeration_input_specialization_prepend" placeholder="Specialization">
                            </div>
                          </div>
                        </div>
                        <div class="form-row mb-3">
                          <div class="col-11">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_scientific_expertise_prepend"><span class="icon-medical"></span></span></div>
                              <input class="form-control form-control-lg badges-input" id="registeration_input_scientific_expertise" type="text" name="scientific_expertise[]" aria-describedby="registeration_input_scientific_expertise_prepend" placeholder="Scientific Expertise">
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
                      <div class="col-6">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_detection_price_prepend"><span class="icon-money-bag"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_detection_price" type="number" aria-describedby="registeration_input_detection_price_prepend" placeholder="Detection price">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_price_of_consultation_prepend"><span class="icon-consultation"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_price_of_consultation" type="number" aria-describedby="registeration_input_price_of_consultation_prepend" placeholder="Price of consultation">
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
                      <div class="col-11">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_times_of_work_prepend"><span class="icon-calendar"></span></span></div>
                          <input class="form-control form-control-lg times-of-work badges-input" id="registeration_input_times_of_work" type="text" name="times_of_work[]" aria-describedby="registeration_input_times_of_work_prepend" placeholder="Times Of Works">
                        </div>
                      </div>
                      <div class="col-1 d-flex align-items-center justify-content-center">
                        <div class="badges-add-more"><i class="fas fa-plus"></i></div>
                      </div>
                      <div class="col-12 badges-container"></div>
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