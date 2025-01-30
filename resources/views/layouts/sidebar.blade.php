<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 d-flex flex-column">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar flex-grow-1 d-flex flex-column">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> --}}
            <div class="info">
                <a href="#" class="d-block">Benedicto</a>
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

            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('books.index') }}" class="nav-link {{ request()->is('books') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Books
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('borrowed.books', ['userId' => 1]) }}" class="nav-link {{ request()->is('borrowed-books/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-bookmark"></i>
                    <p>Borrowed Books</p>
                </a>
            </li>




            </ul>
        </nav>
        <!-- /.sidebar-menu -->

        <!-- Logout Button at the Bottom Center -->
        <nav class="logout-section mt-auto">
            <ul class="nav nav-pills nav-sidebar justify-content-center">
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link text-center"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    </div>
    <!-- /.sidebar -->
</aside>

<style>
    /* Custom active state styling */
    .nav-link.active {
        background-color: #007bff; /* Blue color */
        color: white; /* Text color for active link */
    }
</style>
