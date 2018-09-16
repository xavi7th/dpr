<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="/hod">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      {{-- <li class="treeview">
        <a href="#">
          <i class="ion ion-android-add-circle"></i> <span>New</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="/app_doc_rev"><i class="fa fa-fax"></i>App Doc Review</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="ion ion-eye"></i> <span>LPG/CNG</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="/view_ssi_records"><i class="fa fa-fax"></i>SSI</a></li>
          <li><a href="/view_atc_records"><i class="fa fa-fax"></i>ATC</a></li>
          <li><a href="/view_lto_records"><i class="fa fa-fax"></i>LTO</a></li>
        </ul>
      </li> --}}
      {{-- <li>
        <a href="/mUpload_documents">
          <i class="fa fa-upload "></i> <span>Upload Documents</span>
        </a>
      </li> --}}
      <li>
        <a href="/preferences">
          <i class="ion ion-android-settings"></i> <span>Settings</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
