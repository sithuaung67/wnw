<!DOCTYPE html>
<html>
<head>
  @include('admin.layouts._partial.meta')
  @include('admin.layouts._partial.css')
 
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
  
  @include('admin.layouts._partial.nav')
  

 
  @include('admin.layouts._partial.sidebar')

  
  <div class="content-wrapper">

    <section class="content">

      @yield('content')

    </section>

  </div>

  @include('admin.layouts._partial.footer')

  
</div>

@include('admin.layouts._partial.script')

@stack('scripts')

</body>
</html>
