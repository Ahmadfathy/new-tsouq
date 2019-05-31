<?php $pageTitle = 'منتج جديد'; ?>
<?php include 'init.php'; ?>

<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php';?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content" role="main">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 offset-sm-0 col-md-10 offset-md-1 col-lg-8 offset-lg-2">

        <div class="card shadow-sm">
          <div class="card-body">
            <h4 class="mb-5 mt-5 text-primary text-center">منتج جديد</h4>
            <form class="p-4" action="#" method="POST">
              <div class="form-row mb-3">
                <div class="col-12">
                  <div class="input-group">
                    <select class="form-control form-control-lg" name="" id="">
                      <option value="0" readonly>نوع المنتج(ملابس - وجبات - احذية- إلخ....)</option>
                      <option value="1">محتوي</option>
                      <option value="2">محتوي</option>
                      <option value="3">محتوي</option>
                      <option value="4">محتوي</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-12">
                  <div class="input-group">
                    <input class="form-control form-control-lg" name="" id="" type="text" placeholder="إسم المنتج">
                  </div>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-6">
                  <div class="input-group">
                    <input class="form-control form-control-lg" name="" id="" type="text" placeholder="سعر المنتج">
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group">
                    <input class="form-control form-control-lg" name="" id="" type="text" placeholder="الكمية المتوفرة من المنتج">
                  </div>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-12">
                  <div class="input-group">
                    <input class="form-control form-control-lg times-of-work" id="" name="" type="text" placeholder="تاريخ إضافة المنتج">
                    <div class="input-group-append">
                      <span class="input-group-text calendar-icon text-primary" id="">
                          <i class="fas fa-calendar"></i>
                        </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-12">
                  <div class="input-group">
                    <textarea class="form-control form-control-lg" name="" id="" cols="30" rows="6" placeholder="وصف المنتج"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-row mb-4">
                <div class="col-12">
                  <h5 class="mb-4 text-primary">على حسب نوع المنتج سوف تظهر متغيراته</h5>
                </div>
                <div class="col-sm-6 col-12">
                  <div class="form-row mb-3 mt-3 checkbox-btn">
                    <div class="col-4">
                      <div class="form-check form-check-inline checkbox">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1">صغير</label>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-check form-check-inline checkbox">
                        <input id="checkbox2" type="checkbox">
                        <label for="checkbox2">متوسط</label>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-check form-check-inline checkbox">
                        <input id="checkbox3" type="checkbox">
                        <label for="checkbox3">كبير</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-12">
                  <div class="input-group">
                    <input type="text" class="form-control form-control-lg" name="" id="" placeholder="إختر الالوان المتوفرة">
                  </div>
                </div>
              </div>
              <div class="form-row mb-3">
                <div class="col-12">
                  <h6 class="text-primary mb-3">أضف صور المنتج</h6>
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
                  <button class="btn btn-primary btn-block btn-lg" type="submit">أضف المنتج</button>
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
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $(document).ready(function() {
      document.getElementById('pro-image').addEventListener('change', readImage, false);
      
      $( ".preview-images-zone" ).sortable();
      
      $(document).on('click', '.image-cancel', function() {
          let no = $(this).data('no');
          $(".preview-image.preview-show-"+no).remove();
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
                
                picReader.addEventListener('load', function (event) {
                    var picFile = event.target;
                    var html =  '<div class="preview-image preview-show-' + num + '">' +
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
<?php include $tpl . 'end.php'; ?>