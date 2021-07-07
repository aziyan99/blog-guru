@extends('layouts.frontend')

@section('title', 'Galeri')

@section('main')
<div class="divider"></div>
<div class="content" style="margin-bottom: 30px;">
    <div class="container">
        <h1 style="margin-top: 40px;">{{ __('Galeri') }}</h1>
        <section class="posts-con">
            <div class="gallery-container" id="animated-thumbnails-gallery">
                @foreach ($images as $image)
                <a data-lg-size="1600-1067" class="gallery-item"
                    data-src="{{ asset('storage') . "/" . $image->image }}"
                    data-sub-html="<h4>{{ $image->gallery->name }}</h4>">
                    <img alt="layers of blue." class="img-responsive"
                        src="{{ asset('storage') . "/" . $image->image }}" />
                </a>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-zoom.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-thumbnail.css">
<style>
    .header .lead {
        max-width: 620px;
    }
    /** Below CSS is completely optional **/

    .gallery-item {
        width: 200px;
        padding: 5px;
    }

</style>
@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/lightgallery.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/zoom/lg-zoom.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/js/jquery.justifiedGallery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/thumbnail/lg-thumbnail.umd.js"></script>
<script type="text/javascript">
    jQuery("#animated-thumbnails-gallery")
        .justifiedGallery({
            captions: false,
            lastRow: "hide",
            rowHeight: 180,
            margins: 5
        })
        .on("jg.complete", function () {
            window.lightGallery(
                document.getElementById("animated-thumbnails-gallery"), {
                    autoplayFirstVideo: false,
                    pager: false,
                    galleryId: "nature",
                    plugins: [lgZoom, lgThumbnail],
                    mobileSettings: {
                        controls: false,
                        showCloseIcon: false,
                        download: false,
                        rotate: false
                    }
                }
            );
        });

</script>
@endpush
