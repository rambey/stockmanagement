 <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{url('home')}}" class="brand-link">
       
        <p class="app-title">Stock<span class="brand-text font-weight-light"> Management</span></p>
      </a>

      <div class="sidebar">
    
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                
                <p>
                {{ __('Products') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('products.create')}}" class="nav-link">
                  
                    <p> {{ __('New Product') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('products')}}" class="nav-link">
                    
                    <p> {{ __('Products List') }}</p>
                  </a>
                </li>
              </ul>
            </li>
         
          </ul>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                
                <p>
                {{ __('Category') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('categories.create')}}" class="nav-link">
                  
                         <p> {{ __('New Category') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('categories')}}" class="nav-link">
                    
                    <p> {{ __('Category List') }}</p>
                  </a>
                </li>
              </ul>
            </li>
         
          </ul>
         
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                
                <p>
                {{ __('Brand') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('brands.create')}}" class="nav-link">
                  
                         <p> {{ __('New Brand') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('brands')}}" class="nav-link">
                    
                    <p> {{ __('Brand List') }}</p>
                  </a>
                </li>
              </ul>
            </li>
         
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>