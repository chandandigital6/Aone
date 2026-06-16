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

    <link rel="preload"
          href="{{ asset('fonts/Roboto.woff2') }}"
          as="font"
          type="font/woff2"
          crossorigin>

    <link rel="preload"
          href="{{ asset('fonts/RobotoBold.woff2') }}"
          as="font"
          type="font/woff2"
          crossorigin>

    <link rel="preload"
          href="{{ asset('Logo(2).png') }}"
          as="image"
          fetchpriority="high">

    {{-- CLS fix: critical CSS direct load --}}
    <link rel="stylesheet" href="{{ asset('next/static/css/b357a2dcbca59595.css') }}">
    <link rel="stylesheet" href="{{ asset('next/static/css/1aae1bcfa6b95e00.css') }}">

    @if(!empty($seo?->schema_markup))
        {!! $seo->schema_markup !!}
    @endif

    <style>
        @font-face {
            font-family: 'Roboto';
            src: url('{{ asset('fonts/Roboto.woff2') }}') format('woff2');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('{{ asset('fonts/RobotoBold.woff2') }}') format('woff2');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        html {
            scroll-behavior: smooth;
            text-size-adjust: 100%;
        }

        body {
            margin: 0;
            width: 100%;
            min-height: 100vh;
            background: #fff;
            color: #111827;
            font-family: 'Roboto', Arial, sans-serif;
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
            font-family: 'Roboto', Arial, sans-serif;
        }

        .logo {
            width: 70px;
            height: 70px;
            object-fit: contain;
        }

        .rv-ad-img img,
        .addb-content img {
            width: auto;
            height: auto;
            max-width: 220px;
            max-height: 55px;
            object-fit: contain;
        }

        @media(max-width: 640px) {
            .rv-ad-img img,
            .addb-content img {
                max-width: 190px;
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

    {{-- Google tag delayed load: unused JS / main-thread issue kam hoga --}}
    <script>
        window.addEventListener('load', function () {
            setTimeout(function () {
                var s = document.createElement('script');
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
            }, 2500);
        });
    </script>

    @yield('custom-script')
    @stack('scripts')
</body>

</html>