<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>D</b>PR</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>DPR</b>BACKEND</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

			 <user-notifications></user-notifications>

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ Auth::user()->role }} | {{ Auth::user()->office }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

              <p>
                {{ Auth::user()->first_name }} {{ Auth::user()->middle_name }} {{ Auth::user()->surname }}
                <small>{{ Auth::user()->staff_id }}</small>
              </p>
            </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
