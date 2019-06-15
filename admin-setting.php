<?php $pageTitle = 'الإعدادات'; ?>
<?php include 'init.php'; ?>


<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php'; ?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content" role="main">
  <section class="admin-panel-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 p-l-r-5">
          <?php include $tpl . 'sidebar.php'; ?>
        </div>
        <div class="col-sm-9">


          <div class="inner__card shadow-sm">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <h4 class="text-primary mb-4 text-center">الإعدادات</h4>
                </div>
              </div>
              <div class="settings-options">
                <div class="setting-option">
                  <h5>الموقع الحالي</h5>
                  <div class="row">
                    <div class="col-12 col-sm-10">
                      <span class="light-grey">تفعيل</span>
                    </div>
                    <div class="col-12 col-sm-2">
                      <div class="float-right text-right">
                        <a href="#" class="option-modal" data-toggle="modal" data-target="#locationModal">تغيير المكان</a>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- setting-option -->
                <div class="setting-option">
                  <h5>اللغة</h5>
                  <div class="row">
                    <div class="col-12 col-sm-10">
                      <span class="light-grey">تفعيل</span>
                    </div>
                    <div class="col-12 col-sm-2">
                      <div class="float-right text-right">
                        <a href="#" class="option-modal" data-toggle="modal" data-target="#languagesModal">تغيير اللغة</a>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="languagesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">إختر اللغة</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="all-langs">
                            <ul class="form-row mb-3 radio-btn">
                              <li class="col-12 col-sm-6 col-md-3">
                                <input type="radio" id="option-1" name="languages">
                                <label for="option-1">العربية</label>
                                <div class="check"></div>
                              </li>
                              <li class="col-12 col-sm-6 col-md-3">
                                <input type="radio" id="option-2" name="languages">
                                <label for="option-2">الانجليزية</label>
                                <div class="check">
                                  <div class="inside"></div>
                                </div>
                              </li>
                              <li class="col-12 col-sm-6 col-md-3">
                                <input type="radio" id="option-2" name="languages">
                                <label for="option-2">الفرنسية</label>
                                <div class="check">
                                  <div class="inside"></div>
                                </div>
                              </li>
                              <li class="col-12 col-sm-6 col-md-3">
                                <input type="radio" id="option-4" name="languages">
                                <label for="option-4">الإيطالية</label>
                                <div class="check">
                                  <div class="inside"></div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                          <button type="button" class="btn btn-primary">حفظ التغييرات</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- setting-option -->
                <div class="setting-option">
                  <h5>تلقي إشعارات من موعد الخدمة</h5>
                  <div class="row">
                    <div class="col-12 col-sm-10">
                      <span class="light-grey">تفعيل</span>
                    </div>
                    <div class="col-12 col-sm-2">
                      <div class="float-right text-right">
                        <a href="#" class="option-modal" data-toggle="modal" data-target="#notifyModal">تغيير </a>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="notifyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- setting-option -->
                <div class="setting-option">
                  <h5>تلقي إشعارات من مقدمي الخدمة المفضلين</h5>
                  <div class="row">
                    <div class="col-12 col-sm-10">
                      <span class="light-grey">تفعيل</span>
                    </div>
                    <div class="col-12 col-sm-2">
                      <div class="float-right text-right">
                        <div class="check-option">
                          <input type="checkbox" name="checkbox-cats[]" id="checkbox-4" value="1" checked>
                          <label for="checkbox-4"></label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- setting-option -->
                <div class="setting-option">
                  <h5>تلقي إشعارات إضافة منتجات مشابهة للمفضلة</h5>
                  <div class="row">
                    <div class="col-12 col-sm-10">
                      <span class="light-grey">تفعيل</span>
                    </div>
                    <div class="col-12 col-sm-2">
                      <div class="float-right text-right">
                        <div class="check-option">
                          <input type="checkbox" name="checkbox-cats[]" id="checkbox-5" value="1" checked>
                          <label for="checkbox-5"></label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- setting-option -->
                <div class="setting-option">
                  <h5>تلقي إشعارات من مقدمي الخدمة المفضلين</h5>
                  <div class="row">
                    <div class="col-12 col-sm-10">
                      <span class="light-grey">تفعيل</span>
                    </div>
                    <div class="col-12 col-sm-2">
                      <div class="float-right text-right">
                        <div class="check-option">
                          <input type="checkbox" name="checkbox-cats[]" id="checkbox-6" value="1" checked>
                          <label for="checkbox-6"></label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- setting-option -->
                <div class="setting-option">
                  <h5>تلقي إشعارات إضافة منتجات مشابهة للمفضلة</h5>
                  <div class="row">
                    <div class="col-12 col-sm-10">
                      <span class="light-grey">تفعيل</span>
                    </div>
                    <div class="col-12 col-sm-2">
                      <div class="float-right text-right">
                        <div class="check-option">
                          <input type="checkbox" name="checkbox-cats[]" id="checkbox-7" value="1" checked>
                          <label for="checkbox-7"></label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- setting-option -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</main>
<!--=============== Main End ==================-->


<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'end.php'; ?>