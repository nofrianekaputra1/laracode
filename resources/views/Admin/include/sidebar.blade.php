<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.home') }}" class="nav-link {{ Route::is('admin.home') ? 'active' : '' }}">
                <i class="nav-icon fa fa-home"></i>
                <p>
                    Dashboard
                    <span class="right badge badge-secondary">Home</span>
                </p>
            </a>
        </li>
        <li class="nav-header text-uppercase">Master Data</li>
        <li class="nav-item {{ Route::is('category*', 'produk*') ? 'menu-is-opening menu-open' : null }}">
            <a href="#" class="nav-link  {{ Route::is('category*', 'produk*') ? 'active' : null }}">
                <i class="nav-icon fas fa-database"></i>
                <p>
                    Produk
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item ">
                    <a href="{{ route('category.index') }}"
                        class="nav-link {{ Route::is('category*') ? 'active' : '' }}">
                        <i class="fas fa-long-arrow-alt-right nav-icon"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produk.index') }}" class="nav-link {{ Route::is('produk*') ? 'active' : '' }}">
                        <i class="fas fa-long-arrow-alt-right nav-icon"></i>
                        <p>Produk</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="{{ route('layanan.index') }}" class="nav-link {{ Route::is('layanan*') ? 'active' : '' }}">
                <i class="fas fa-tags nav-icon"></i>
                <p>
                    Layanan / Jasa IT
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('about.index') }}" class="nav-link {{ Route::is('about*') ? 'active' : '' }}">
                <i class="fas fa-user-graduate nav-icon"></i>
                <p>
                    Tentangku
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="fas fa-hand-holding-usd nav-icon"></i>
                <p>
                    Pengguna Jasa
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="far fa-folder-open nav-icon"></i>
                <p>
                    Portfolio
                    <span class="right badge badge-secondary">Foto</span>
                </p>
            </a>
        </li>

        <li class="nav-header text-uppercase">Transaksi Data</li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>
                    Members
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="fas fa-money-check-alt nav-icon"></i>
                <p>
                    Transaksi
                </p>
            </a>
        </li>

        <li class="nav-header text-uppercase">Components</li>

        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="far fa-id-badge nav-icon"></i>
                <p>
                    Update Profile
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="fas fa-key nav-icon"></i>
                <p>
                    Setting Password
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.logout') }}" class="nav-link">
                <i class="nav-icon fa fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>

    </ul>
</nav>
