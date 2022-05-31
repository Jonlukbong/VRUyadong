<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  @include('layouts.admin.css')

</head>

<body class="g-sidenav-show  bg-gray-200">

  @include('layouts.admin.sidebar')

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('layouts.admin.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">

    @yield('content')

    </div>
  </main>

  <!--   Core JS Files   -->
  @include('layouts.admin.js')

</body>

</html>