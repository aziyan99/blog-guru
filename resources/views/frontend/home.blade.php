@extends('layouts.frontend')

@section('title', 'Halaman Utama')

@section('main')
<style>
    #image{
	    background: url(<?= asset("storage" . "/" . $setting->front_image) ?>) no-repeat 50% 50%;
    }
</style>
<div class="slider">
    <ul class="bxslider">
        <li id="image">
            <div class="container">
                <div class="info">
                    <h2>Selamat Datang di, <br><span>{{ $setting->school_name }}</span></h2>
                </div>
            </div>
            <!-- / content -->
        </li>
    </ul>
    <div class="bg-bottom"></div>
</div>

<section class="posts">
    <div class="container">
        <article>
            <div class="info">
                <h3>{{ __('Visi') }}</h3>
                <p>{{ $setting->visi }}</p>
            </div>
        </article>
        <article>
            <div class="info">
                <h3>{{ __('Misi') }}</h3>
                <p>{{ $setting->misi }}</p>
            </div>
        </article>
    </div>
    <!-- / container -->
</section>

<section class="news">
    <div class="container">
        <h2>{{ __('Artikel Terbaru') }}</h2>
        @foreach ($latest_articles as $article)
        <article>
            <div class="pic"><img src="{{ asset('storage') . "/" . $article->thumbnail }}" alt="tmb" width="150"></div>
            <div class="info">
                <h4>{{ $article->title }}</h4>
                <p class="date">{{ $article->created_at->diffForHumans() }}, {{ $article->writer->name }}</p>
                <p>{{ \Str::limit(strip_tags($article->body), 150, '...') }}</p>
                <a class="more" href="{{ route('article.show', $article->slug) }}">Lanjut baca</a>
            </div>
        </article>
        @endforeach
        <div class="btn-holder">
            <a class="btn" href="{{ route('article.index') }}">Lihat Semua Artikel</a>
        </div>
    </div>
    <!-- / container -->
</section>

<section class="events">
    <div class="container">
        <h2>{{ __('Pengumuman') }}</h2>
        @foreach ($latest_announcements as $announcement)
        <article>
            <div class="current-date">
                <p>{{ $announcement->created_at->format('M') }}</p>
                <p class="date">{{ $announcement->created_at->format('d') }}</p>
            </div>
            <div class="info">
                <p>{{ \Str::limit(strip_tags($announcement->body), 150, '...') }}</p>
                <a class="more" href="{{ route('announcement.show', $announcement->slug) }}">Lanjut baca</a>
            </div>
        </article>
        @endforeach

        <div class="btn-holder">
            <a class="btn blue" href="{{ route('announcement.index') }}">Lihat Semua Pengumuman</a>
        </div>
    </div>
    <!-- / container -->
</section>
@endsection
