<?php $pageTitle = 'تعديل الملف الشخصي'; ?>
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
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <form class="p-4" action="#" method="POST">
                    <div class="form-row mb-3">
                      <div class="col-3">
                        <div class="profile-avatar">
                          <div class="profile-avatar-preview"><img src="<?php echo $img; ?>profile.jpg" alt="profile pic"></div>
                          <div class="profile-avatar-field">
                            <input id="profile-avatar-input" type="file" name="" data-maxSize="5">
                            <label for="profile-avatar-input">أضف صورة بروفايل</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-9">
                        <div class="form-row mb-3">
                          <div class="col-12">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-medical"></span></span></div>
                              <input class="form-control form-control-lg" id="" type="text" placeholder="التخصص">
                            </div>
                          </div>
                        </div>
                        <div class="form-row mb-3">
                          <div class="col-11">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_scientific_expertise_prepend"><span class="icon-medical"></span></span></div>
                              <input class="form-control form-control-lg badges-input" id="registeration_input_scientific_expertise" type="text" name="scientific_expertise[]" aria-describedby="registeration_input_scientific_expertise_prepend" placeholder="الخبرات العلمية">
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
                          <input class="form-control form-control-lg" id="registeration_input_detection_price" type="number" aria-describedby="registeration_input_detection_price_prepend" placeholder="سعر الكشف">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_price_of_consultation_prepend"><span class="icon-consultation"></span></span></div>
                          <input class="form-control form-control-lg" id="registeration_input_price_of_consultation" type="number" aria-describedby="registeration_input_price_of_consultation_prepend" placeholder="سعر الإستشارة">
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_address_prepend"><span class="icon-maps-pin"></span></span></div>
                          <input class="form-control form-control-lg location-search" id="registeration_input_address" type="text" aria-describedby="registeration_input_address_prepend" placeholder="العنوان">
                        </div>
                      </div>
                    </div>
                    <!-- <div class="form-row mb-3">
                      <div class="col-11">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_times_of_work_prepend"><span class="icon-calendar"></span></span></div>
                          <input class="form-control form-control-lg times-of-work badges-input" id="registeration_input_times_of_work" type="text" name="times_of_work[]" aria-describedby="registeration_input_times_of_work_prepend" placeholder="مواعيد العمل">
                        </div>
                      </div>
                      <div class="col-1 d-flex align-items-center justify-content-center">
                        <div class="badges-add-more"><i class="fas fa-plus"></i></div>
                      </div>
                      <div class="col-12 badges-container"></div>
                    </div> -->

                    <div class="form-row mb-3" id="datepairExample">
                      <div class="col-5">
                        <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text"><span class="icon-calendar"></span></span></div>
                          <select class="form-control form-control-lg" name="select-day" id="select-day">
                            <option value="0" readonly>إختر اليوم</option>
                            <option value="السبت">السبت</option>
                            <option value="الأحد">الأحد</option>
                            <option value="الإثنين">الإثنين</option>
                            <option value="الثلاثاء">الثلاثاء</option>
                            <option value="الأربعاء">الأربعاء</option>
                            <option value="الخميس">الخميس</option>
                            <option value="الجمعة">الجمعة</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-3">
                        <input id="input1" type="text" class="form-control form-control-lg time start" placeholder="من الساعة " value="" />
                      </div>
                      <div class="col-3">
                        <input id="input2" type="text" class="form-control form-control-lg time end" placeholder="إلي الساعة " value="" />
                      </div>
                      <div class="col-1 d-flex align-items-center justify-content-center">
                        <div class="badges-add-more" id="btn"><i class="fas fa-plus"></i></div>
                        <!-- <a href="javascript:void(0)" id="btn">click</a> -->
                      </div>
                      <div class="col-12 badges-container badges-container_custom">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12 col-sm-6">
                        <div class="form-row mb-3">
                          <div class="col-9">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-call-answer"></span></span></div>
                              <input class="form-control form-control-lg" id="" type="number" placeholder="رقم الهاتف">
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="input-group">
                              <input class="form-control form-control-lg" id="registeration_input_phone_code" type="text" placeholder="+566">
                            </div>
                          </div>
                        </div>
                        <div class="form-row mb-3">
                          <div class="col-9">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-call-answer"></span></span></div>
                              <input class="form-control form-control-lg" id="" type="number" placeholder="رقم الهاتف">
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="input-group">
                              <input class="form-control form-control-lg" id="registeration_input_phone_code" type="text" placeholder="+566">
                            </div>
                          </div>
                        </div>
                        <div class="form-row mb-3">
                          <div class="col-9">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text" id=""><span class="icon-call-answer"></span></span></div>
                              <input class="form-control form-control-lg" id="" type="number" placeholder="رقم الهاتف">
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="input-group">
                              <input class="form-control form-control-lg" id="registeration_input_phone_code" type="text" placeholder="+566">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6">
                        <div class="form-row mb-3">
                          <div class="col-12">
                            <div class="input-group">
                              <input class="form-control form-control-lg" name="" id="" type="text" placeholder="فيس بوك">
                            </div>
                          </div>
                        </div>
                        <div class="form-row mb-3">
                          <div class="col-12">
                            <div class="input-group">
                              <input class="form-control form-control-lg" name="" id="" type="text" placeholder="تويتر">
                            </div>
                          </div>
                        </div>
                        <div class="form-row mb-3">
                          <div class="col-12">
                            <div class="input-group">
                              <input class="form-control form-control-lg" name="" id="" type="text" placeholder="إنستجرام">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <textarea class="form-control form-control-lg" name="" id="" cols="30" rows="6" placeholder="نبذة عنك"></textarea>
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-12">
                        <button class="btn btn-primary btn-block btn-lg" type="submit">تسجيل</button>
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

<script src="<?php echo $js; ?>jquery.timepicker.min.js"></script>
<script src="http://jonthornton.github.io/Datepair.js/dist/datepair.js"></script>
<script src="http://jonthornton.github.io/Datepair.js/dist/jquery.datepair.js"></script>
<script>
  $('#datepairExample .time').timepicker({
    'showDuration': true,
    'timeFormat': 'g:ia'
  });

  $('#datepairExample').datepair();

  $("#btn").click(function() {

    var cooseDay = $("#select-day").change().val();
    var timeFrom = $("#input1").change().val();
    var timeTo = $("#input2").change().val();


    $(".badges-container_custom").append('<div class="badge_custom badge badge-primary">' +
      '<span class="select-day"> ' + cooseDay + ' </span>' + ' من ' +
      '<span class="from_time"> ' + timeFrom + ' </span>' + ' إلي' +
      '<span class="to_time"> ' + timeTo + ' </span> ' + '</div>');

    $("#select-day").change().val("");
    $("#input1").val("");
    $("#input2").val("");
  });
</script>

<?php include $tpl . 'end.php'; ?>