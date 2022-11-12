<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-leaf"></i>
    </div>
    <div class="sidebar-brand-text mx-3">🍼Vyadong </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->

  <li class="nav-item">
    <a class="nav-link" href="{{ url('/adminyadong') }}">
      <i class="fas fa-circle"></i>
      <span>หน้าแรก</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/product') }}">
      <i class="fas fa-circle"></i>
      <span>จัดการข้อมูลสินค้า</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/adminorder') }}">
      <i class="fas fa-circle"></i>
      <span>ออเดอร์สินค้า</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/promotion') }}">
      <i class="fas fa-circle"></i>
      <span>จัดการข้อมูลโปรโมชั่น</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/admin_user') }}">
      <i class="fas fa-circle"></i>
      <span>จัดการข้อมูลผู้ใช้งาน</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/admin_customer') }}">
      <i class="fas fa-circle"></i>
      <span>จัดการข้อมูลตัวแทนจำหน่าย</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/admindata') }}">
      <i class="fas fa-circle"></i>
      <span>จัดการข้อมูลแอดมิน</span></a>
  </li>


</ul>
<!-- End of Sidebar -->