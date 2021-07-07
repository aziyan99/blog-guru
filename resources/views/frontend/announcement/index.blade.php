@extends('layouts.frontend')

@section('title', 'Pengumuman')

@section('main')
<div class="divider"></div>
<div class="content">
    <div class="container">
        @if ($isByCategory)
        <h1 style="margin-top: 40px;">{{ __('Kategori: ') }} {{ $announcements->name }}</h1>
        <form action="{{ route('announcement.index') }}" class="search-container" method="GET">
            <div class="textfield-container">
                <input type="text" class="textfield" name="cari" id="query" placeholder="Cari..." required>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn-search">{{ __('Cari') }}</button>
            </div>
        </form>
        <section class="posts-con">
            @foreach ($announcements->announcements as $announcement)
            <article>
                <div class="current-date">
                    <p>{{ $announcement->created_at->format('M') }}</p>
                    <p class="date">{{ $announcement->created_at->format('d') }}</p>
                </div>
                <div class="info">
                    <h3>{{ $announcement->title }}</h3>
                    <a href="{{ route('announcement.show.by.category', $announcements->id) }}" class="info-line">
                        <span style="margin-right: 20px;">
                            <i class="fas fa-thumbtack"
                                style="margin-right: 5px;"></i>{{ $announcements->name }}
                        </span>
                    </a>
                    <p>
                        {{ \Str::limit(strip_tags($announcement->body), 500, '...') }}
                        <a class="more" href="{{ route('announcement.show', $announcement->slug) }}">Lanjut baca</a>
                    </p>
                </div>
            </article>
            @endforeach
        </section>
        @else
        <h1 style="margin-top: 40px;">{{ __('Semua Pengumuman') }}</h1>
        <form action="{{ route('announcement.index') }}" class="search-container" method="GET">
            <div class="textfield-container">
                <input type="text" class="textfield" name="cari" id="query" placeholder="Cari..." required>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn-search">{{ __('Cari') }}</button>
            </div>
        </form>
        <section class="posts-con">
            @foreach ($announcements as $announcement)
            <article>
                <div class="current-date">
                    <p>{{ $announcement->created_at->format('M') }}</p>
                    <p class="date">{{ $announcement->created_at->format('d') }}</p>
                </div>
                <div class="info">
                    <h3>{{ $announcement->title }}</h3>
                    <a href="{{ route('announcement.show.by.category', $announcement->category->id) }}" class="info-line">
                        <span style="margin-right: 20px;">
                            <i class="fas fa-thumbtack"
                                style="margin-right: 5px;"></i>{{ $announcement->category->name }}
                        </span>
                    </a>
                    <p>
                        {{ \Str::limit(strip_tags($announcement->body), 500, '...') }}
                        <a class="more" href="{{ route('announcement.show', $announcement->slug) }}">Lanjut baca</a>
                    </p>
                </div>
            </article>
            @endforeach
        </section>

        @endif
    </div>
</div>
@endsection
@push('css')
<style>
    .search-container {
        margin-top: 10px;
        margin-bottom: 30px;
        margin-left: 10px;
        margin-right: 10px;
    }

    .textfield-container {
        margin-bottom: 10px;
    }

    .textfield {
        width: 100%;
        font-size: 15px;
        padding: 5px;
    }

    .btn-search {
        font-size: 15px;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        background-color: #2D4166;
        color: white;
        border: none;
        width: 60px;
    }

    .btn-search:hover {
        background-color: #556b94;
        color: white;
    }

</style>
@endpush
