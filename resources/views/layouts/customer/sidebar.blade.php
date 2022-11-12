
   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="{{ url('/') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-leaf"></i>
    </div>
    <div class="sidebar-brand-text mx-3" >🍼Vyadong</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
            <a class="nav-link" href="{{ url('/customer') }}">
                <i class="fas fa-circle"></i>
                <span>หน้าหลัก</span></a>
        </li>
  <li class="nav-item">
            <a class="nav-link" href="{{ url('/customer_branch') }}">
                <i class="fas fa-circle"></i>
                <span>จัดการร้าน</span></a>
        </li>
  <!-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/customer_product') }}">
                <i class="fas fa-circle"></i>
                <span>ข้อมูลสินค้า</span></a> -->
                
                
                <button class="btn btn-default" type="button" data-toggle="dropdown" style="text-align: left; margin: 2px;">
                <i class="fas fa-circle"></i>
                <span style="color: white; font-size: 0.85rem"> ข้อมูลสินค้า</span></button>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('/Cus_stock') }}" style="color: black; font-size: 0.85rem">1.จัดการสต็อกสินค้า</a></li>
                  <li><a href="{{ url('/Cus_buy') }}" style="color: black; font-size: 0.85rem">2.สั่งซื้อสินค้า</a></li>
                  <li><a href="{{ url('/cus_dealerorder') }}" style="color: black; font-size: 0.85rem">3.ออเดอร์สินค้า</a></li>
                  <li><a href="{{ url('/finance') }}" style="color: black; font-size: 0.85rem">4.รายรับรายจ่าย</a></li>
                </ul>
              
  </li>
  <li class="nav-item">
            <a class="nav-link" href="{{ url('/customer_contact') }}">
                <i class="fas fa-circle"></i>
                <span>ติดต่อแอดมิน</span></a>
  </li>
     
</ul>
<!-- End of Sidebar -->
