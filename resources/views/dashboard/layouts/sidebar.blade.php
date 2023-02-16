<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand text-left pl-4 pt-4 mb-3">
        <a href="/dashboard"><h5><img src="{{ url('dbuser/assets/img/logo.png') }}" width="30" alt="logo">  HIMATIF</h5></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <a href="/dashboard"><img src="{{ url('dbuser/assets/img/logo.png') }}" width="30" alt="logo"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ Request::is('dashboard') ? 'active' : '' }}" >
            <a href="/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Main Menu</li>
            {{-- <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Shop</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Tambah Produk</a></li>
                <li><a class="nav-link" href="#">Produk</a></li>
            </ul>
            </li> --}}
            {{-- <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Pengurus</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Tambah divisi</a></li>
                <li><a class="nav-link" href="#">IPTEK dan Kajian Ilmiah</a></li>
            </ul>
            </li> --}}
            <li class="nav-item dropdown {{ Request::is('dashboard/posts*') || Request::is('dashboard/categories*') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Blog</span></a>
            <ul class="dropdown-menu">
                @can('admin')
                    <li class="{{ Request::is('dashboard/categories') ? 'active' : ''}}"><a class="nav-link" href="/dashboard/categories">Kategori/Tags</a></li>
                @endcan
                <li class="{{ Request::is('dashboard/posts/create') ? 'active' : ''}}"><a class="nav-link" href="/dashboard/posts/create">Tambah Post</a></li>
                <li class="{{ Request::is('dashboard/posts') ? 'active' : '' }}"><a class="nav-link" href="/dashboard/posts">Post</a></li>
                <li><a class="nav-link" href="#">Komentar</a></li>
            </ul>
            </li>
            {{-- <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar-alt"></i>  <span>Event</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Tambah Event</a></li>
                <li><a class="nav-link" href="#">Event</a></li>
            </ul>
            </li> --}}
            {{-- <li><a class="nav-link" href="#"><i class="fas fa-trophy"></i> <span>Prestasi</span></a></li>
            <li><a class="nav-link" href="#"><i class="far fa-image"></i> <span>Galeri</span></a></li>
            <li><a class="nav-link" href="#"><i class="far fa-envelope"></i> <span>Inbox</span></a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-cog"></i> <span>Setting</span></a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-user"></i> <span>User</span></a></li> --}}
            <li><a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="/" target="_blank" class="btn btn-success btn-lg btn-block btn-icon-split">
            <i class="fas fa-globe"></i> Lihat Web
            </a>
        </div>
    </aside>
</div>