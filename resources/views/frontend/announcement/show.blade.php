@extends('layouts.frontend')

@section('title', 'Baca Pengumuman')

@section('main')
<div class="divider"></div>
<div class="content">
    <div class="container">
        <h1 style="margin-top: 40px;">{{ $announcement->title }}</h1>
        <section class="posts-con" style="margin-bottom: 50px;">
            <p class="info-line">
                <span style="margin-right: 20px;">
                    <i class="fas fa-thumbtack" style="margin-right: 5px;"></i>{{ $announcement->category->name }}
                </span>
                <span>
                    <i class="fas fa-clock" style="margin-right: 5px;"></i>{{ $announcement->created_at->diffForHumans() }}
                </span>
            </p>
            <p>
                {!! $announcement->body !!}
            </p>
        </section>
    </div>
</div>
@endsection
