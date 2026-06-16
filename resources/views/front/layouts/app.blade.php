<!DOCTYPE html>
<html lang="hi-IN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @php
        $siteName = 'a1-satta';

        $metaTitle = $seo->meta_title ?? 'Today A1 Satta King Result – March 2026 Live Chart';

        $metaDescription = $seo->meta_description
            ?? 'Get live A1 Satta King result today 2026 at A1 Satta. Fast and accurate result updates.';

        $metaKeywords = $seo->meta_keywords
            ?? 'a1 satta, a1 satta king, a1 satta result, a1 satta king result, satta king result';

        $canonicalUrl = $seo->canonical_url ?? url()->current();

        $ogTitle = $seo->og_title ?? $metaTitle;
        $ogDescription = $seo->og_description ?? $metaDescription;

        $ogImage = !empty($seo->og_image)
            ? asset($seo->og_image)
            : asset('Logo(2).png');
    @endphp

    <title>{{ $metaTitle }}</title>

    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="{{ $metaKeywords }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#ffd900">

    <link rel="canonical" href="{{ $canonicalUrl }}">

    <meta property="og:title" content="{{ $ogTitle }}">
    <meta property="og:description" content="{{ $ogDescription }}">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:locale" content="hi_IN">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ $ogImage }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $ogTitle }}">
    <meta name="twitter:description" content="{{ $ogDescription }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <link rel="icon" type="image/png" href="{{ asset('a1fav/android-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('a1fav/apple-icon.png') }}">

    <link rel="preconnect" href="{{ url('/') }}" crossorigin>

    {{-- Logo preload only if this logo is visible above the fold --}}
    <link rel="preload"
          href="{{ asset('Logo(2).png') }}"
          as="image"
          fetchpriority="high">

    {{-- Non-critical CSS async load --}}
    <link rel="preload"
          href="{{ asset('next/static/css/b357a2dcbca59595.css') }}"
          as="style"
          onload="this.onload=null;this.rel='stylesheet'">

    <link rel="preload"
          href="{{ asset('next/static/css/1aae1bcfa6b95e00.css') }}"
          as="style"
          onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="{{ asset('next/static/css/b357a2dcbca59595.css') }}">
        <link rel="stylesheet" href="{{ asset('next/static/css/1aae1bcfa6b95e00.css') }}">
    </noscript>

    @if(!empty($seo?->schema_markup))
        {!! $seo->schema_markup !!}
    @endif

    <style>
        html {
            scroll-behavior: smooth;
            -webkit-text-size-adjust: 100%;
            text-size-adjust: 100%;
        }

        body {
            margin: 0;
            width: 100%;
            min-height: 100vh;
            background: #ffffff;
            color: #111827;
            font-family: Arial, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            overflow-x: hidden;
        }

        main {
            display: block;
            width: 100%;
            min-height: 400px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        a {
            text-underline-offset: 2px;
        }

        #app {
            width: 100%;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .font-Roboto {
            font-family: Arial, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        .logo {
            width: 70px;
            height: 70px;
            object-fit: contain;
        }

        .rv-ad-wrap {
            width: 100%;
            margin: 12px auto;
            padding: 0 4px;
            font-family: Arial, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            contain: layout paint;
        }

        .rv-ad-box {
            width: 100%;
            min-height: 112px;
            background: linear-gradient(180deg, #ffd900 0%, #fff8cf 100%);
            border: 3px dashed #e60000;
            border-radius: 16px;
            padding: 12px 10px 14px;
            text-align: center;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .10);
            color: #111;
            font-size: 16px;
            font-weight: 700;
            line-height: 1.45;
        }

        .rv-ad-img {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 58px;
            background: #fff;
            border-radius: 999px;
            padding: 5px 12px;
            margin-top: 8px;
            max-width: 100%;
            line-height: 1 !important;
        }

        .rv-ad-img img,
        .addb-content img {
            display: block;
            width: auto;
            height: auto;
            max-width: 200px;
            max-height: 55px;
            object-fit: contain;
        }

        .rv-middle {
            background: linear-gradient(180deg, #111827, #1f2937);
            border: 3px dashed #ffd900;
        }

        @media(max-width: 640px) {
            .rv-ad-wrap {
                margin: 10px auto;
                padding: 0 3px;
            }

            .rv-ad-box {
                min-height: 104px;
                border-width: 2px;
                border-radius: 14px;
                padding: 10px 7px 12px;
            }

            .rv-ad-img {
                min-height: 52px;
                padding: 4px 10px;
            }

            .rv-ad-img img,
            .addb-content img {
                max-width: 175px;
                max-height: 48px;
            }
        }
    </style>

    @stack('styles')
</head>

<body class="w-full min-h-screen font-Roboto">
    <div id="app" class="w-full">
        @include('front.layouts.header')
        @include('front.layouts.nav')

        <main id="main-content" role="main" class="w-full py-4">
            @yield('content')
        </main>

        @include('front.layouts.footer')

        <div id="modal"></div>
    </div>

    {{-- GTM ko PageSpeed initial load se bahar rakha hai --}}
   <script>
    (function () {
        let gtmLoaded = false;

        function loadGtm() {
            if (gtmLoaded) return;
            gtmLoaded = true;

            const s = document.createElement('script');
            s.src = 'https://www.googletagmanager.com/gtag/js?id=G-2QEDR9PH55';
            s.async = true;
            document.head.appendChild(s);

            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            window.gtag = gtag;

            gtag('js', new Date());
            gtag('config', 'G-2QEDR9PH55', {
                send_page_view: true
            });
        }

        window.addEventListener('click', loadGtm, { once: true });
        window.addEventListener('touchstart', loadGtm, { once: true, passive: true });
        window.addEventListener('scroll', loadGtm, { once: true, passive: true });
    })();
</script>

    @yield('custom-script')
    @stack('scripts')
</body>

</html>