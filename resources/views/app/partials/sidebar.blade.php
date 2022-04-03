<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/home">Sinau</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/home">S</a>
      </div>
        <ul class="sidebar-menu">
          <li class="menu-header ">Beranda</li>
          <li class="nav-item dropdown {{ Request::is('home*') ? 'active' : '' }}">
            <a href="/home" class="nav-link has-dropdown"><i class="fas fa-home "></i><span>Beranda Saya</span></a>
            <ul class="dropdown-menu">
              <li class="{{ Request::is('home') ? 'active' : '' }}"><a class="nav-link" href="/home">Beranda</a></li>
              <li class="{{ Request::is('home/mycourse') ? 'active' : '' }}"><a class="nav-link" href="/home/mycourse">Pelajaran Saya</a></li>
            </ul>
          </li>
          <li class="menu-header">Admin Feature</li>
          <li class="{{ Request::is('pelajarans*') ? 'active' : '' }}"><a class="nav-link" href="/pelajarans"><i class="fa fa-book"></i> <span>Pelajaran</span></a></li>
          <li class="menu-header ">Coba Coba</li>
          <li class="{{ Request::is('home/coba*') ? 'active' : '' }}"><a class="nav-link" href="/home/coba"><i class="fa fa-book"></i> <span>Pelajaran</span></a></li>
        </ul>

    </aside>
  </div>