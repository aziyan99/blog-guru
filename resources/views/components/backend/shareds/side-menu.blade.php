<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @can('lihat dasbor')
        <li class="nav-item">
            <a href="{{ route('backend.dashboard.index') }}"
                class="nav-link {{ (Request::is('backend/dashboard')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    {{ __('Dashboard') }}
                </p>
            </a>
        </li>
        @endcan
        <li class="nav-item">
            <a href="{{ route('home.index') }}" target="_blank" class="nav-link">
                <i class="nav-icon fas fa-globe"></i>
                <p>
                    {{ __('Halaman Utama') }}
                </p>
            </a>
        </li>
        @can('lihat pengumuman', 'tambah pengumuman', 'lihat kategori pengumuman')
        <li class="nav-header">{{ __('Sekolah') }}</li>
        <li class="nav-item {{ (Request::is('backend/announcementcategories/*')) ? 'menu-open' : '' }} {{ (Request::is('backend/announcementcategories')) ? 'menu-open' : '' }}
        {{ (Request::is('backend/announcements/*')) ? 'menu-open' : '' }} {{ (Request::is('backend/announcements')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (Request::is('backend/announcementcategories/*')) ? 'active' : '' }} {{ (Request::is('backend/announcementcategories')) ? 'active' : '' }}
        {{ (Request::is('backend/announcements/*')) ? 'active' : '' }} {{ (Request::is('backend/announcements')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-bullhorn"></i>
                <p>
                    {{ __('Pengumuman') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('lihat kategori pengumuman')
                <li class="nav-item">
                    <a href="{{ route('backend.announcement.category.index') }}" class="nav-link {{ (Request::is('backend/announcementcategories/*')) ? 'active' : '' }} {{ (Request::is('backend/announcementcategories')) ? 'active' : '' }} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Kategori Pengumuman') }}</p>
                    </a>
                </li>
                @endcan
                @can('lihat pengumuman')
                <li class="nav-item">
                    <a href="{{ route('backend.announcements.index') }}" class="nav-link {{ (Request::is('backend/announcements/*')) ? 'active' : '' }} {{ (Request::is('backend/announcements')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Data Pengumuman') }}</p>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan
        @can('lihat kategori artikel', 'lihat artikel', 'tambah artikel')
        <li class="nav-item {{ (Request::is('backend/articlecategories/*')) ? 'menu-open' : '' }} {{ (Request::is('backend/articlecategories')) ? 'menu-open' : '' }}
        {{ (Request::is('backend/articles/*')) ? 'menu-open' : '' }} {{ (Request::is('backend/articles')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (Request::is('backend/articlecategories/*')) ? 'active' : '' }} {{ (Request::is('backend/articlecategories')) ? 'active' : '' }}
        {{ (Request::is('backend/articles/*')) ? 'active' : '' }} {{ (Request::is('backend/articles')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    {{ __('Artikel') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('lihat kategori artikel')
                <li class="nav-item">
                    <a href="{{ route('backend.article.category.index') }}" class="nav-link {{ (Request::is('backend/articlecategories/*')) ? 'active' : '' }} {{ (Request::is('backend/articlecategories')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Kategori Artikel') }}</p>
                    </a>
                </li>
                @endcan
                @can('lihat artikel')
                <li class="nav-item">
                    <a href="{{ route('backend.articles.index') }}" class="nav-link {{ (Request::is('backend/articles/*')) ? 'active' : '' }} {{ (Request::is('backend/articles')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Data Artikel') }}</p>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan
        @can('lihat galeri')
        <li class="nav-item">
            <a href="{{ route('backend.galleries.index') }}"
                class="nav-link {{ (Request::is('backend/galleries')) ? 'active' : '' }} {{ (Request::is('backend/galleries/*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-images"></i>
                <p>
                    {{ __('Galeri') }}
                </p>
            </a>
        </li>
        @endcan
        <li class="nav-header">{{ __('Sistem') }}</li>
        @can('lihat pengguna')
        <li class="nav-item">
            <a href="{{ route('backend.users.index') }}"
                class="nav-link {{ (Request::is('backend/users')) ? 'active' : '' }} {{ (Request::is('backend/users/*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    {{ __('Pengguna') }}
                </p>
            </a>
        </li>
        @endcan
        @can('lihat role', 'lihat permission', 'lihat assign.permission')
        <li
            class="nav-item {{ (Request::is('backend/roles/*')) ? 'menu-open' : '' }} {{ (Request::is('backend/roles')) ? 'menu-open' : '' }}
        {{ (Request::is('backend/permissions/*')) ? 'menu-open' : '' }} {{ (Request::is('backend/permissions')) ? 'menu-open' : '' }}
        {{ (Request::is('backend/assignpermission')) ? 'menu-open' : '' }} {{ (Request::is('backend/assignpermission/*')) ? 'menu-open' : '' }}">
            <a href="#"
                class="nav-link {{ (Request::is('backend/roles/*')) ? 'active' : '' }} {{ (Request::is('backend/roles')) ? 'active' : '' }}
        {{ (Request::is('backend/permissions/*')) ? 'active' : '' }} {{ (Request::is('backend/permissions')) ? 'active' : '' }}
        {{ (Request::is('backend/assignpermission')) ? 'active' : '' }} {{ (Request::is('backend/assignpermission/*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-shield-alt"></i>
                <p>
                    {{ __('Role & Permission') }}
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('lihat role')
                <li class="nav-item">
                    <a href="{{ route('backend.roles.index') }}" class="nav-link
                    {{ (Request::is('backend/roles')) ? 'active' : '' }} {{ (Request::is('backend/roles/*')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Role') }}</p>
                    </a>
                </li>
                @endcan
                @can('lihat permission')
                <li class="nav-item">
                    <a href="{{ route('backend.permissions.index') }}" class="nav-link
                    {{ (Request::is('backend/permissions')) ? 'active' : '' }} {{ (Request::is('backend/permissions/*')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Permission') }}</p>
                    </a>
                </li>
                @endcan
                @can('lihat assign.permission')
                <li class="nav-item">
                    <a href="{{ route('backend.assignpermission.index') }}" class="nav-link
                    {{ (Request::is('backend/assignpermission')) ? 'active' : '' }} {{ (Request::is('backend/assignpermission/*')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ __('Assign permission') }}</p>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan
        @can('lihat pengaturan')
        <li class="nav-item">
            <a href="{{ route('backend.setting.index') }}"
                class="nav-link {{ (Request::is('backend/settings/*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                    {{ __('Pengaturan') }}
                </p>
            </a>
        </li>
        @endcan
        <li class="nav-item">
            <a href="{{ route('backend.profile.index') }}"
                class="nav-link {{ (Request::is('backend/profile')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    {{ __('Profil') }}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    {{ __('Keluar') }}
                </p>
            </a>
        </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</nav>
