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
        
        @if (Auth::user()->role == 'Marketer')
          <a href="/marketer">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
        @elseif (Auth::user()->role == 'Admin')
          <a href="/admin">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
        @elseif (Auth::user()->role == 'Staff')
          <a href="/staff">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
        @elseif (Auth::user()->role == 'Team Lead')
          <a href="/teamlead">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
        @elseif (Auth::user()->role == 'Head Gas M&G Lagos')
          <a href="/headgas">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
        @elseif (Auth::user()->role == 'ADO')
          <a href="/ado">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
        @elseif (Auth::user()->role == 'ZOPSCON')
          <a href="/zopscon">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
        @elseif (Auth::user()->role == 'Manager Gas')
          <a href="/managergas">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
        @endif
      </li>
      
      
      @if (Auth::user()->role == 'Marketer')
        <li>
          <a href="/marketer_app_doc_review">
            <i class="fa fa-dashboard"></i> <span>App. Document Review</span>
          </a>
        </li>
      @endif
      <li>
        <a href="/lpg_cng_dashboard">
          <i class="fa fa-dashboard"></i> <span>LPG/CNG Retailer Outlets</span>
        </a>
      </li>
      <li>
        <a href="/gas_processing_facilities_dashboard">
          <i class="fa fa-dashboard"></i> <span>Gas Processing Facilities</span>
        </a>
      </li>
      <li>
        <a href="/gas_pipelines_dashboard">
          <i class="fa fa-dashboard"></i> <span>Gas Pipelines</span>
        </a>
      </li>
      <li>
        <a href="/project_monitoring_dashboard">
          <i class="fa fa-dashboard"></i> <span>Project Monitoring</span>
        </a>
      </li>
      <li>
        <a href="/gas_production_utilization_dashboard">
          <i class="fa fa-dashboard"></i> <span>Gas Prod./Utilization</span>
        </a>
      </li>
      <li>
        <a href="/gas_production_export_operations_dashboard">
          <i class="fa fa-dashboard"></i> <span>Gas Prod./Export Operations</span>
        </a>
      </li>
      <li>
        <a href="/gas_subsurface_dashboard">
          <i class="fa fa-dashboard"></i> <span>Gas Sub-surface</span>
        </a>
      </li>
      <li>
        <a href="/gas_diary_dashboard">
          <i class="fa fa-dashboard"></i> <span>Gas Diary</span>
        </a>
      </li>
      <li>
        <a href="/inspection_dashboard">
          <i class="fa fa-dashboard"></i> <span>Inspection</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="ion ion-eye"></i> <span>Companies</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="/create_company"><i class="fa fa-fax"></i>Create Company</a></li>
          <li><a href="/companies_list"><i class="fa fa-fax"></i>Registered Companies</a></li>
        </ul>
      </li>
      {{--  <li class="treeview">
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
      </li>  --}}
      {{--  <li>
        <a href="/companies_list">
          <i class="fa fa-list"></i> <span>Companies</span>
        </a>
      </li>  --}}
      <li>
        <a href="/preferences">
          <i class="ion ion-android-settings"></i> <span>Settings</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
