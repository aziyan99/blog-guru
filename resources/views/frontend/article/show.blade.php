@extends('layouts.frontend')

@section('title', 'Baca Artikel')

@section('main')
<div class="divider"></div>
<div class="content">
    <div class="container">
        <h1 style="margin-top: 40px;">{{ $article->title }}</h1>
        <section class="posts-con" style="margin-bottom: 50px;">
            <p class="info-line">
                <span style="margin-right: 20px;">
                    <i class="fas fa-thumbtack" style="margin-right: 5px;"></i>{{ $article->category->name }}
                </span>
                <span style="margin-right: 20px;">
                    <i class="fas fa-user" style="margin-right: 5px;"></i>{{ $article->writer->name }}
                </span>
                <span style="margin-right: 20px;">
                    <i class="fas fa-eye" style="margin-right: 5px;"></i>{{ $article->views }}
                </span>
                <span>
                    <i class="fas fa-clock" style="margin-right: 5px;"></i>{{ $article->created_at->diffForHumans() }}
                </span>
            </p>
            <img style="margin-top: 30px;margin-bottom: 30px;width:500px;" src="{{ asset('storage') . "/" . $article->thumbnail }}" alt="thumbnail">
            <p>
                {!! $article->body !!}
            </p>
        </section>
    </div>
</div>
@endsection
