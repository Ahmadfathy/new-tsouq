<aside class="sidebar">
  <div class="inner__card shadow-sm">
    <div class="card-body">

      <div class="img-profile">
        <img src="<?php echo $img; ?>profile.jpg" alt="">
      </div>

      <div class="name-profile">
        <div class="info text-center">
          <h5 class="text-primary">عبد الرحمن شعبان</h5>
          <h6>abdo-sha3ban@gmail.com</h6>
        </div>
        <a href="admin-edit-profile.php" class="edit-profile-icon">
          <i class="fas fa-edit"></i>
          <span>تعديل</span>
        </a>
      </div>

      <div class="side-links">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <a href="admin-panel.php">
              <span class="icon float-left"><i class="fas fa-edit"></i></span>
              <span class="sidebar-link">لوحة التحكم</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="admin-products.php">
              <span class="icon float-left"><i class="fas fa-edit"></i></span>
              <span class="sidebar-link">المنتجات</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="admin-categories.php">
              <span class="icon float-left"><i class="fas fa-edit"></i></span>
              <span class="sidebar-link">الاقسام</span>
            </a>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="admin-notification.php">
              <span class="icon float-left"><i class="fas fa-edit"></i></span>
              <span class="sidebar-link">التنبيهات</span>
              <span class="badge badge-pill float-right">2</span>
            </a>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="admin-messages.php">
              <span class="icon float-left"><i class="fas fa-edit"></i></span>
              <span class="sidebar-link">الرسائل</span>
              <span class="badge badge-pill float-right">2</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="admin-favourit.php">
              <span class="icon float-left"><i class="fas fa-edit"></i></span>
              <span class="sidebar-link">المفضلة</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="admin-orders.php">
              <span class="icon float-left"><i class="fas fa-edit"></i></span>
              <span class="sidebar-link">طلباتي</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="admin-setting.php">
              <span class="icon float-left"><i class="fas fa-edit"></i></span>
              <span class="sidebar-link">الإعدادت</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="">
              <span class="icon float-left"><i class="fas fa-edit"></i></span>
              <span class="sidebar-link">تسجيل خروج</span>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</aside>

<script>
	$(document).ready(function() {
	 	// Get current page URL
	 	var url = window.location.href;
	 	// remove # from URL
	 	url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
	 	// remove parameters from URL
	 	url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
	 	// select file name
	 	url = url.substr(url.lastIndexOf("/") + 1);
	 	// If file name not avilable
	 	if(url == ''){url = 'admin-panel.php';}
	 	// Loop all menu items
	 	$('aside.sidebar .side-links li').each(function(){
	  	// select href
	  	var href = $(this).find('a').attr('href');
	  	// Check filename
	  	if(url == href){
	   		// Add active class
	   		$(this).addClass('active');
	   	}
	 	});
	});
</script>

