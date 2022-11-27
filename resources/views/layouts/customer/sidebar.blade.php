<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-leaf"></i>
    </div>
    <div class="sidebar-brand-text mx-3">🍼Vyadong</div>
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
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>ข้อมูลสินค้า</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a href="{{ url('/Cus_stock') }}" class="collapse-item">1.จัดการสต็อกสินค้า</a>
        <a href="{{ url('/Cus_buy') }}" class="collapse-item">2.สั่งซื้อสินค้า</a>
        <a href="{{ url('/cus_dealerorder') }}" class="collapse-item">3.ออเดอร์สินค้า</a>
        <a href="{{ url('/finance') }}" class="collapse-item">4.รายรับรายจ่าย</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/customer_contact') }}">
      <i class="fas fa-circle"></i>
      <span>ติดต่อแอดมิน</span></a>
  </li>

</ul>
<!-- End of Sidebar -->