<header id="header">
    <div class="container">
        <a href="{{ route('home.index') }}" title="{{ $schoolName }}">
            <img src="{{ asset('storage') . "/" . $logo}}" id="logo" alt="logo">
        </a>
        <div class="menu-trigger"></div>
        <nav id="menu">
            <ul>
                <li><a href="{{ route('home.index') }}">Halaman Utama</a></li>
                <li><a href="{{ route('article.index') }}">Artikel</a></li>
            </ul>
            <ul>
                <li><a href="{{ route('announcement.index') }}">Pengumuman</a></li>
                <li><a href="{{ route('gallery.index') }}"">Galeri</a></li>
            </ul>
        </nav>
        <!-- / navigation -->
    </div>
    <!-- / container -->
</header>
<!-- / header -->
