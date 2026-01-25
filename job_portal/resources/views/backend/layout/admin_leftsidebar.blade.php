  <aside class="main-sidebar"> 
    <!-- sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="{{asset('dist/img/img1.jpg')}}" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-envelope"></i></a> <a href="#"><i class="fa fa-gear"></i></a> <a href="#"><i class="fa fa-power-off"></i></a> </div>
      </div>
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
   
        <li class="active treeview"> <a href="#"> <i class="icon-home"></i> <span>Dashboard</span> <span class="pull-right-container">  </span> </a></li>
        <li class="header">Admin User</li>
        <li class="active treeview"> <a href="#"> <i class="icon-home"></i> <span>Admin User</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-angle-right"></i>List All Admin Users</a></li>
            <li><a href="index-classic.html"><i class="fa fa-angle-right"></i> Classic</a></li>
            
          </ul>
        </li>
        <li class="header">Modules</li>
        <li class="treeview"> <a href="#"> <i class="icon-grid"></i> <span>Apps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="apps-calendar.html"><i class="fa fa-angle-right"></i> Calendar</a></li>
            <li><a href="apps-support-ticket.html"><i class="fa fa-angle-right"></i> Support Ticket</a></li>
            <li><a href="apps-contacts.html"><i class="fa fa-angle-right"></i> Contact / Employee</a></li>
            <li><a href="apps-contact-grid.html"><i class="fa fa-angle-right"></i> Contact  Grid</a></li>
            <li><a href="apps-contact-details.html"><i class="fa fa-angle-right"></i> Contact Detail</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="ti-email"></i> <span> Jobs</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/category')}}"><i class="fa fa-angle-right"></i> All Category </a></li>
            <li><a href=""><i class="fa fa-angle-right"></i> Add Category</a></li>
            <li><a href="apps-compose-mail.html"><i class="fa fa-angle-right"></i> Compose Mail</a></li>
          </ul>
        </li>
        
        <li class="treeview"> <a href="#"> <i class="icon-action-redo"></i> <span>Multilevel</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
            <li class="treeview"> <a href="#"><i class="fa fa-angle-right"></i> Level One <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-angle-right"></i> Level Two</a></li>
                <li class="treeview"> <a href="#" ><i class="fa fa-angle-right"></i> Level Two <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.sidebar --> 
  </aside>
  