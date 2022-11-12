
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
            <a class="nav-link" href="{{ url('/dealer') }}">
                <i class="fas fa-circle"></i>
                <span>หน้าหลัก</span></a>
        </li>
  <li class="nav-item">
            <a class="nav-link" href="{{ url('/branch') }}">
                <i class="fas fa-circle"></i>
                <span>ข้อมูลร้าน</span></a>
        </li>
  <li class="nav-item">
            <a class="nav-link" href="{{ url('/dealer_product') }}">
                <i class="fas fa-circle"></i>
                <span>ข้อมูลสินค้า</span></a>
  </li>
  <li class="nav-item">
            <a class="nav-link" href="{{ url('/dealer_contact') }}">
                <i class="fas fa-circle"></i>
                <span>ติดต่อแอดมิน</span></a>
  </li>
     
</ul>
<!-- End of Sidebar -->
