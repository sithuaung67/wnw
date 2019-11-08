<!DOCTYPE html>
<html>
<head>
  @include('admin.layouts._partial.meta')
  @include('admin.layouts._partial.css')
 
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('admin.layouts._partial.nav')
  

  <!-- Main Sidebar Container -->
  @include('admin.layouts._partial.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   <!-- Main content -->
    <section class="content">

      @yield('content')

    </section>

  </div>

  @include('admin.layouts._partial.footer')

  <!-- Control Sidebar -->
 {{--  <aside class="control-sidebar control-sidebar-dark">
  
  </aside> --}}
  
</div>

@include('admin.layouts._partial.script')
{{-- @stack('scripts') --}}

</body>
</html>
