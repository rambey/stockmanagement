@include('layouts/_partials/header')

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('layouts/_partials/navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts/_partials/sidebar')

        <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper my-5">

      <!-- Main content -->
      @include('flash-message')
      @yield('content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  @include('layouts/_partials/footer')
  