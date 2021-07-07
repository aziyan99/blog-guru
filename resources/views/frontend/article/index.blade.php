@extends('layouts.frontend')

@section('title', 'Artikel')

@section('main')
<div class="divider"></div>
<div class="content">
    <div class="container">
        @if ($isByCategory)
        <h1 style="margin-top: 40px;">{{ __('Kategori: ') }} {{ $latest_articles->name }}</h1>
        <form action="{{ route('article.index') }}" class="search-container" method="GET">
            <div class="textfield-container">
                <input type="text" class="textfield" name="cari" id="query" placeholder="Cari..." required>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn-search">{{ __('Cari') }}</button>
            </div>
        </form>
        <section class="posts-con">
            @foreach ($latest_articles->articles as $article)
            <article>
                <div class="current-date">
                    <p>{{ $article->created_at->format('M') }}</p>
                    <p class="date">{{ $article->created_at->format('d') }}</p>
                </div>
                <div class="info">
                    <h3>{{ $article->title }}</h3>
                    <p class="info-line">
                        <a href="{{ route('article.show.by.category', $latest_articles->id) }}" style="margin-right: 20px;">
                            <i class="fas fa-thumbtack" style="margin-right: 5px;"></i>{{ $latest_articles->name }}
                        </a>
                        <a href="{{ route('article.show.by.teacher', $article->writer->id) }}">
                            <i class="fas fa-user" style="margin-right: 5px;"></i>{{ $article->writer->name }}
                        </a>
                    </p>
                    <p>
                        {{ \Str::limit(strip_tags($article->body), 500, '...') }}
                        <a class="more" href="{{ route('article.show', $article->slug) }}">Lanjut baca</a>
                    </p>
                </div>
            </article>
            @endforeach
        </section>
        @elseif ($isByTeacher)
        <h1 style="margin-top: 40px;">{{ __('Guru: ') }} {{ $latest_articles->name }}</h1>
        <form action="{{ route('article.index') }}" class="search-container" method="GET">
            <div class="textfield-container">
                <input type="text" class="textfield" name="cari" id="query" placeholder="Cari..." required>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn-search">{{ __('Cari') }}</button>
            </div>
        </form>
        <section class="posts-con">
            @foreach ($latest_articles->articles as $article)
            <article>
                <div class="current-date">
                    <p>{{ $article->created_at->format('M') }}</p>
                    <p class="date">{{ $article->created_at->format('d') }}</p>
                </div>
                <div class="info">
                    <h3>{{ $article->title }}</h3>
                    <p class="info-line">
                        <a href="{{ route('article.show.by.category', $latest_articles->category->id) }}" style="margin-right: 20px;">
                            <i class="fas fa-thumbtack" style="margin-right: 5px;"></i>{{ $latest_articles->name }}
                        </a>
                        <a href="{{ route('article.show.by.teacher', $latest_articles->id) }}">
                            <i class="fas fa-user" style="margin-right: 5px;"></i>{{ $latest_articles->name }}
                        </a>
                    </p>
                    <p>
                        {{ \Str::limit(strip_tags($article->body), 500, '...') }}
                        <a class="more" href="{{ route('article.show', $article->slug) }}">Lanjut baca</a>
                    </p>
                </div>
            </article>
            @endforeach
        </section>
        @else
        <h1 style="margin-top: 40px;">{{ __('Semua Artikel') }}</h1>
        <form action="{{ route('article.index') }}" class="search-container" method="GET">
            <div class="textfield-container">
                <input type="text" class="textfield" name="cari" id="query" placeholder="Cari..." required>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn-search">{{ __('Cari') }}</button>
            </div>
        </form>
        <section class="posts-con">
            @foreach ($latest_articles as $article)
            <article>
                <div class="current-date">
                    <p>{{ $article->created_at->format('M') }}</p>
                    <p class="date">{{ $article->created_at->format('d') }}</p>
                </div>
                <div class="info">
                    <h3>{{ $article->title }}</h3>
                    <p class="info-line">
                        <a href="{{ route('article.show.by.category', $article->category->id) }}" style="margin-right: 20px;">
                            <i class="fas fa-thumbtack" style="margin-right: 5px;"></i>{{ $article->category->name }}
                        </a>
                        <a href="{{ route('article.show.by.teacher', $article->writer->id) }}">
                            <i class="fas fa-user" style="margin-right: 5px;"></i>{{ $article->writer->name }}
                        </a>
                    </p>
                    <p>
                        {{ \Str::limit(strip_tags($article->body), 500, '...') }}
                        <a class="more" href="{{ route('article.show', $article->slug) }}">Lanjut baca</a>
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
