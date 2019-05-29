<?php $pageTitle = 'الرسائل'; ?>
<?php include 'init.php'; ?>


<!--==============Inner Banner Start==============-->
<?php include $tpl . 'pages-banner.php';?>
<!--==============Inner Banner End================-->


<!--==============	Main Start ================-->
<main class="inner__content" role="main">
  <section class="admin-panel-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 p-l-r-5">
          <?php include $tpl . 'sidebar.php';?>
        </div>
        <div class="col-sm-9">
            

          <div class="inner__card shadow-sm">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <h4 class="text-primary mb-4 text-center">الرسائل</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 offset-sm-6">
              <div class="text-center pagination-custom">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                        <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link active" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0)" aria-label="Next">
                        <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
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