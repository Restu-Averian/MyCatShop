<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" /dashboard">
        <img src="/storage/{{ auth()->user()->image }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin MyCatShop</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white  {{ ($title === 'Dashboard') ? 'active bg-gradient-primary' : '' }}" href="/dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ ( ($title === 'Data Product') || ($title === 'Edit Produk') || ($title === 'Tambah Data') ) ? 'active bg-gradient-primary' : '' }}" href="/data-product">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">weekend</i>
            </div>
            <span class="nav-link-text ms-1">Data Produk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{  ( ($title === 'Data Penjualan') || ($title ==='Edit Data Penjualan') ) ? 'active bg-gradient-primary' : '' }}" href="/data-penjualan">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">sell</i>
            </div>
            <span class="nav-link-text ms-1">Data Penjualan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white 
          @if ($title === 'Data Kategori')
            active bg-gradient-primary
          @endif" href="/data-kategori">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">category</i>
            </div>
            <span class="nav-link-text ms-1">Data Kategori</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ ($title === 'Data User') ? 'active bg-gradient-primary' : '' }} " href="/data-user">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Data User</span>
          </a>
        </li>
        
        {{-- <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
         --}}
        
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100"  href="/logout-admin" onclick="return confirm('Yakin mau keluar ?');" type="button">log Out</a>
      </div>
    </div>
    
  </aside>