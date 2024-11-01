<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php">POS PADANG</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li >
              <a href="<?= __DIR__ . '/'?>"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Category</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Category</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-category.php">Home Category</a></li>
                <li><a class="nav-link" href="create-category.php">Tambah Category</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-utensils"></i><span>Menu</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-menu.php">Home Menu</a></li>
                <li><a class="nav-link" href="create-menu.php">Tambah Menu</a></li>
              </ul>
            </li>
            <li class="menu-header">Transaksi</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-bill-wave"></i><span>Pemesanan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-pemesanan.php">Home Pemesanan</a></li>
                <li><a class="nav-link" href="create-pemesanan.php">Buat Pemesanan</a></li>
              </ul>
            </li>
            <li class="menu-header">Akun</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-circle"></i><span>MyAccount</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-akun.php">Informasi Akun</a></li> 
                <li><a class="nav-link" href="change-password.php">Ganti Password</a></li>
              </ul>
            </li>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        
        </aside>
      </div>