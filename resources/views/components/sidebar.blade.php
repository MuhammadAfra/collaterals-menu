<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('index') }}" class="brand-link">
    <span class="brand-text font-weight-light">Menu</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <p>
              Collateral
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <p>
                  Collateral Utama
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('motor_vehicle') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Motor Vehicle</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('car_vehicle') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Car Vehicle</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('house') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>House/Land</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('inventory') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inventory</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('invoice') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Invoice</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('corporate') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Corporate Guarantie</p>
                  </a>
                </li>
              </ul>
            </li>
        </li>
      </ul>
      <ul class="nav nav-treeview">
        <li class="nav-item">
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <p>
              Collateral Tambahan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Motor Vehicle</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Car Vehicle</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>House/Land</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inventory</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Invoice</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Corporate Guarantie</p>
              </a>
            </li>
          </ul>
        </li>
    </li>
  </ul>
      </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>