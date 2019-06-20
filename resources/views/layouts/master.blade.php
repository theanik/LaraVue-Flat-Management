<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 3 | Starter</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
              <router-link to="/dashboard" class="nav-link">
                  <i class="nav-icon fa fa-dashboard teal"></i>
                <p>
                 Dashboard
                </p>
              </router-link>
            </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-cog indigo"></i>
              <p>
                Management
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('isAdmin')
              <li class="nav-item">
                <router-link to="/users" class="nav-link ">
                  <i class="fa fa-users nav-icon purple"></i>
                  <p>Users</p>
                </router-link>
              </li>
              @endcan
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon" pink></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          @can('isAdmin')
          <li class="nav-item">
            <router-link to="/developer" class="nav-link">
                <i class="nav-icon fa fa-cogs"></i>
                <p>
                    Developer
                </p>
            </router-link>
        </li>
        @endcan
          <li class="nav-item">
            <router-link to="/bill-history" class="nav-link">
                <i class="nav-icon fa fa-cogs"></i>
                <p>
                   Bill History
                </p>
            </router-link>
        </li>
          {{-- @can('isAdmin')
          <li class="nav-item">
              <router-link to="/developer" class="nav-link">
                  <i class="nav-icon fa fa-cogs"></i>
                  <p>
                      Developer
                  </p>
              </router-link>
          </li>
          @endcan --}}
        <li class="nav-item">
          <router-link to="/profile" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                  Profile
              </p>
          </router-link>
      </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="nav-icon fa fa-power-off" yellow></i>
              <p>
                Logout
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <router-view></router-view>
          {{-- <vue-progress-bar></vue-progress-bar> --}}
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
@auth
<script>
    window.user = @json(auth()->user())
</script>
@endauth
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- ./wrapper -->
@auth
<script>
    window.user = @json(auth()->user())
</script>
@endauth
<!-- REQUIRED SCRIPTS -->
<script>
  
</script>
<!-- jQuery -->
</body>
</html>