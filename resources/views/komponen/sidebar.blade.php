<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown active">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        @if (Auth::user()->role == 'admin')
        <li class="dropdown ">
          <a href="/paket" class="nav-link "><i class="fas fa-fire"></i><span>Paket</span></a>
        </li>
        <li class="dropdown ">
          <a href="/pengguna" class="nav-link "><i class="fas fa-fire"></i><span>Pengguna</span></a>
        </li>
        @endif
        <li class="dropdown ">
          <a href="/pesanan" class="nav-link "><i class="fas fa-fire"></i><span>Pesanan</span></a>
        </li>
        <li class="dropdown ">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="bg-transparent text-dark  border-0 p-0">
                  {{-- <i class="menu-icon tf-icons bx bx-log-out"></i> --}}
                    <a class="nav-link "><i class="fas fa-fire"></i><span>Logout</span></a>
                  {{-- <span class="menu-title">Logout</span> --}}
                </button>
            </form>
        </li>

      </ul>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Documentation
        </a>
      </div>        </aside>
  </div>
