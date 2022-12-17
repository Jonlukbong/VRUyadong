<!DOCTYPE html>
<html lang="en">
 
<head>
 
  @include('layouts.customer.head')
 
</head>

<body id="page-top">
 
  <!-- Page Wrapper -->
  <div id="wrapper">
 
    @include('layouts.customer.sidebar')
 
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
 
      <!-- Main Content -->
      <div id="content">
 
          @include('layouts.customer.navbar')
 
        <!-- Begin Page Content -->
        <div class="container-fluid">
 
            @yield('content')
 
        </div>
        <!-- /.container-fluid -->
 
      </div>
      <!-- End of Main Content -->
 
      
 
    </div>
    <!-- End of Content Wrapper -->
 
  </div>
  <!-- End of Page Wrapper -->
 
   
@include('layouts.customer.js')
    
</body>
 
</html>