<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ghulam Mustafa</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard text"></i> <span>Dashboard</span></a></li>

        {{--classes--}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i> <span>Class</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="{{ route('addclasssection')  }}"><i class="fa fa-circle-o"></i> Add Section</a></li>
            <li ><a href="{{ route('listclasssections') }}"><i class="fa fa-circle-o"></i> List Section</a></li>
            <li ><a href="{{ route('addclasses') }}"><i class="fa fa-circle-o"></i> Add Class</a></li>
            <li ><a href="{{ route('listclasses') }}"><i class="fa fa-circle-o"></i> List Classes</a></li>
          </ul>
        </li>

        {{--faculty--}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Faculty</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="{{ route('addfacultytypes')}}"><i class="fa fa-circle-o"></i> Add Faculty Type</a></li>
            <li ><a href="{{ route('listfacultytypes')}}"><i class="fa fa-circle-o"></i> List Faculty Type</a></li>
            <li ><a href="{{ route('addfacultymembers')}}"><i class="fa fa-circle-o"></i> Add Faculty</a></li>
            <li ><a href="{{ route('listfacultymembers')}}"><i class="fa fa-circle-o"></i> List Faculty</a></li>
          </ul>
        </li>

        {{--faculty--}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="{{ route('addstudents')}}"><i class="fa fa-circle-o"></i> Add Students</a></li>
            <li ><a href="{{ route('liststudents')}}"><i class="fa fa-circle-o"></i> List Students</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>