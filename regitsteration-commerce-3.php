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
            <h4 class="text-primary text-capitalize font-weight-bold m-0 pt-3">Registration of a new Commercial service</h4>
          </div>
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <form class="p-4" action="#" method="POST">
                    <div class="form-row mb-3">
                      <div class="col-3">
                        <div class="profile-avatar">
                          <div class="profile-avatar-preview"><img src="./<?php echo $img; ?>avatars/avatar-default.jpg" alt="profile pic"></div>
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
                              <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_address_prepend"><span class="icon-maps-pin"></span></span></div>
                              <input class="form-control form-control-lg location-search" id="registeration_input_address" type="text" aria-describedby="registeration_input_address_prepend" placeholder="Address">
                            </div>
                          </div>
                        </div>
                        <ul class="form-row mb-3 radio-btn">
                          <li class="col-3">
                            <input type="radio" id="option-1" name="selector">
                            <label for="option-1">Wholesaler</label>
                            <div class="check"></div>
                          </li>
                          <li class="col-3">
                            <input type="radio" id="option-2" name="selector">
                            <label for="option-2">Wholesaler</label>
                            <div class="check">
                              <div class="inside"></div>
                            </div>
                          </li>
                          <li class="col-3">
                            <input type="radio" id="option-3" name="selector">
                            <label for="option-3">Online</label>
                            <div class="check">
                              <div class="inside"></div>
                            </div>
                          </li>
                          <li class="col-3">
                            <input type="radio" id="option-4" name="selector">
                            <label for="option-4">Restuarent</label>
                            <div class="check">
                              <div class="inside"></div>
                            </div>
                          </li>
                        </ul>

                        <!-- <div class="form-row mb-3">
                          <div class="col-11">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text" id="registeration_input_times_of_work_prepend"><span class="icon-calendar"></span></span></div>
                              <input class="form-control form-control-lg times-of-work badges-input" id="registeration_input_times_of_work" name="times_of_work[]" type="text" aria-describedby="registeration_input_times_of_work_prepend" placeholder="Times Of Works">
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

                        <div class="preview-images-zone">
                          <div class="add-img-upload">
                            <a href="javascript:void(0)" onclick="$('#pro-image').click()"> <i class="fa fa-plus"></i> </a>
                            <input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
                          </div>
                          <div class="preview-image preview-show-1">
                            <div class="image-cancel" data-no="1">x</div>
                            <div class="image-zone"><img id="pro-img-1" src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw=="></div>
                            <div class="tools-edit-image"><a href="javascript:void(0)" data-no="1" class="btn btn-light btn-edit-image">edit</a></div>
                          </div>
                          <div class="preview-image preview-show-2">
                            <div class="image-cancel" data-no="2">x</div>
                            <div class="image-zone"><img id="pro-img-2" src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg"></div>
                            <div class="tools-edit-image"><a href="javascript:void(0)" data-no="2" class="btn btn-light btn-edit-image">edit</a></div>
                          </div>
                          <div class="preview-image preview-show-3">
                            <div class="image-cancel" data-no="3">x</div>
                            <div class="image-zone"><img id="pro-img-3" src="http://i.stack.imgur.com/WCveg.jpg"></div>
                            <div class="tools-edit-image"><a href="javascript:void(0)" data-no="3" class="btn btn-light btn-edit-image">edit</a></div>
                          </div>
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(document).ready(function() {
    document.getElementById('pro-image').addEventListener('change', readImage, false);

    $(".preview-images-zone").sortable();

    $(document).on('click', '.image-cancel', function() {
      let no = $(this).data('no');
      $(".preview-image.preview-show-" + no).remove();
    });
  });



  var num = 4;

  function readImage() {
    if (window.File && window.FileList && window.FileReader) {
      var files = event.target.files; //FileList object
      var output = $(".preview-images-zone");

      for (let i = 0; i < files.length; i++) {
        var file = files[i];
        if (!file.type.match('image')) continue;

        var picReader = new FileReader();

        picReader.addEventListener('load', function(event) {
          var picFile = event.target;
          var html = '<div class="preview-image preview-show-' + num + '">' +
            '<div class="image-cancel" data-no="' + num + '">x</div>' +
            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
            '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
            '</div>';

          output.append(html);
          num = num + 1;
        });

        picReader.readAsDataURL(file);
      }
      $("#pro-image").val('');
    } else {
      console.log('Browser not support');
    }
  }
</script>

<script src="<?php echo $js; ?>bootstrap-datepicker.js"></script>
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