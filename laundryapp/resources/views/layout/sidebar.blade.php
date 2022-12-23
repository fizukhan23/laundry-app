

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="index3.html" class="brand-link">
        <img src="{{asset('dist')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"style="opacity: .8">
        <span class="brand-text font-weight-light">Laundry-app</span>
      </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src=" {{asset('dist')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-user-gear"></i>
                <p>
                  User Management
                  <i class="fas fa-angle-left right"></i>
           
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/adduser')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a> 
              </li>
             <li class="nav-item">
                  <a href="{{url('/viewuser')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View</p>
                  </a>
                </li>
             </ul>
            </li>

 <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa-solid fa-server"></i>
               <p>
                  Service Management
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/viewcategory')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Category</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/subcategory')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sub category</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/service')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Service</p>
                  </a>
                </li>
</ul>
                <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fa-brands fa-first-order-alt"></i>
                <p>
                  Order Management
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/orderlist')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Orderlist</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/Corder')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>                   
                    <p>Create order</p>
                  </a>
                </li>
           <li class="nav-item">
                  <a href="{{url('/viewCorder')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Order</p>
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="{{url('/listorder')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View directOrder</p>
                  </a>
                </li>
               </ul>
            </li>
         
        <li class="nav-item">
              <a href="#" class="nav-link">
            <i class="fa-solid fa-percent"></i>
                <p>
                  Discount Management
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/discount')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create discount</p>
                  </a>
                </li>
                </ul>
            </li>
            <!--<li class="nav-item">-->
            <!--  <a href="#" class="nav-link">-->
            <!--    <i class="nav-icon fas fa-table"></i>-->
            <!--    <p>-->
            <!--      Report -->
            <!--      <i class="fas fa-angle-left right"></i>-->
            <!--    </p>-->
            <!--  </a>-->
            <!--  <ul class="nav nav-treeview">-->
            <!--    <li class="nav-item">-->
            <!--      <a href="{{url('/ROrder')}}" class="nav-link">-->
            <!--        <i class="far fa-circle nav-icon"></i>-->
            <!--        <p>Order</p>-->
            <!--      </a>-->
            <!--    </li>-->
            <!--    <li class="nav-item">-->
            <!--      <a href="{{url('/collection')}}" class="nav-link">-->
            <!--        <i class="far fa-circle nav-icon"></i>-->
            <!--        <p>Collection report</p>-->
            <!--      </a>-->
            <!--    </li>-->
            <!--    <li class="nav-item">-->
            <!--      <a href="{{url('/')}}." class="nav-link">-->
            <!--        <i class="far fa-circle nav-icon"></i>-->
            <!--        <p>Delivary report</p>-->
            <!--      </a>-->
            <!--    </li>-->
                
            <!--  </ul>-->
            <!--</li>-->
            <li class="nav-item">
              <a href="#" class="nav-link">
           <i class="fa-solid fa-rectangle-ad"></i>
                <p>
                  Advertisment Management
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/ads')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Advertisment</p>
                  </a>
                </li>
                </ul>
            </li> 
            <li class="nav-item">
              <a href="#" class="nav-link">
         <i class="fa-solid fa-star-half-stroke"></i>
       
                <p>
                 Rating Management
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/Rating')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Rating</p>
                  </a>
                </li>
                </ul>
            </li> 
            <li class="nav-item">
              <a href="#" class="nav-link">
           <i class="fa-solid fa-bell"></i>
                <p>
               Notification Management
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/Notification')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Notification</p>
                  </a>
                </li>
                </ul>
            </li> 
            
<li class="nav-item">
              <a href="{{url('/admin_login')}}" class="nav-link">
              
               <i class="fa-solid fa-right-from-bracket"></i>
                <p>
                  Logout
                
                </p>
              </a>
            </li>
          </ul>


 </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

