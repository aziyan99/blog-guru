<footer id="footer">
    <div class="container">
        <section>
            <article class="col-1">
                <h3>{{ __('Kontak') }}</h3>
                <ul>
                    <li class="address"><a href="javascript:void(0);">{{ $setting->address }}</a></li>
                    <li class="mail"><a href="javascript:void(0);">{{ $setting->email }}</a></li>
                    <li class="phone last"><a href="javascript:void(0);">{{ $setting->phone_number }}</a></li>
                </ul>
            </article>
            <article class="col-2">
                <h3>{{ __('Artikel terbaru') }}</h3>
                <ul>
                    @foreach ($latestArticles as $article)
                        <li><a href="{{ route('article.show', $article->slug) }}">{{ \Str::limit(strip_tags($article->title), 20, '...') }}</a></li>
                    @endforeach
                </ul>
            </article>
            <article class="col-3">
                <h3>{{ __('Sosial media') }}</h3>
                <p>{{ __('Tetap terhubunga dengan kami di akun media sosial.') }}</p>
                <ul>
                    <li class="facebook"><a href="{{ $setting->facebook }}" target="_blank">Facebook</a></li>
                    <li class="google-plus"><a href="{{ $setting->youtube }}" target="_blank">Youtube</a></li>
                    <li class="twitter"><a href="{{ $setting->twitter }}" target="_blank">Twitter</a></li>
                    <li class="pinterest"><a href="{{ $setting->instagram }}" target="_blank">Instagram</a></li>
                </ul>
            </article>
            <article class="col-4">
                <h3>{{ __('Newsletter') }}</h3>
                <p>{{ __('Berlanggan newletter untuk update pengumuman dan artikel.') }}</p>
                <form action="javascript:void(0);">
                    <input placeholder="Alamat email..." type="text">
                    <button type="submit">{{ __('Berlangganan') }}</button>
                </form>
                <ul>
                    <li><a href="javascript:void(0);"></a></li>
                </ul>
            </article>
        </section>
        <p class="copy">Copyright {{ date('Y', time()) }} {{ $setting->school_name }}. All rights reserved.</p>
    </div>
    <!-- / container -->
</footer>
<!-- / footer -->
