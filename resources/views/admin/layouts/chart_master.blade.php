<!DOCTYPE html>
<html>
<head>
  @include('admin.layouts._partial.meta')
  @include('admin.layouts._partial.css')
 
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
 

  <!-- Content Wrapper. Contains page content -->
  

   <!-- Main content -->
    <section class="content">

      @yield('content')

    </section>

  {{-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      
    </div>
    <strong>Copyright &copy; 2019 <a href="">Mifer Monitoring System</a>.</strong> by <a href="" style="font-weight: 700;">Nanolabs</a>
 </footer> --}}

  <!-- Control Sidebar -->
 {{--  <aside class="control-sidebar control-sidebar-dark">
  
  </aside> --}}
  
</div>

@include('admin.layouts._partial.script')

@stack('scripts')

</body>
</html>
