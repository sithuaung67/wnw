<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->

    <a href="" class="brand-link">
{{--      <img src="{{asset('image/wings.png')}}" alt=" " class="brand-image img-circle" style="opacity: .8">--}}
      <span class="brand-text font-weight-light">Wings & Wheels</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-treeview nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="{{route('admin/overall')}}" class="nav-link">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <p>OverAll</p>
            </a><hr>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <p>Network</p>
              <i class="fas fa-angle-left right"></i>
            </a><hr>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin/new_member')}}" class="nav-link">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        <p>Add NewMember</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('package_create')}}" class="nav-link">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        <p>Create Package</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <p>Sponsored By Me</p>
                    </a>
                </li><hr>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <p>Dashboard</p>
            </a><hr>
          </li>
            <li class="nav-item has-treeview">
            <a href="{{route('jorgchart')}}" class="nav-link">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <p>Wallet</p>
            </a><hr>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('package_view')}}" class="nav-link">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <p>PACKAGES</p>
            </a><hr>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('edit_profile')}}" class="nav-link">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <p>EDIT PROFILE</p>
            </a><hr>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('point_collection_summary')}}" class="nav-link">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <p>POINT COLLECTION SUMMARY</p>
            </a><hr>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <p>SUPPORT</p>
            </a><hr>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <p>LOGOUT</p>
            </a><hr>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
