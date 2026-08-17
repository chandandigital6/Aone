<footer class="a1-footer">
    <div class="a1-footer-inner">

        <ul class="a1-footer-menu">
            <li><a href="{{ route('chart') }}">Chart</a></li>
            <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
            <li><a href="{{ route('terms-conditions') }}">Terms &amp; Conditions</a></li>
            <li><a target="_blank" href="https://wa.me/+918168973121">Connect</a></li>
        </ul>

        <hr>

        <p class="a1-footer-note">
            This website does not promote, support, or encourage any kind of gambling, betting, or Satta activities.
            All content available on this website is purely for entertainment and informational purposes only.
            Satta/Gambling may be illegal in your region. Users are advised to check their local laws before accessing
            any such content. We are not responsible for any financial loss or legal consequences.
        </p>

        <hr>

        <p class="a1-footer-copy">
            © 2026 A1SattaKingResult.com™ — All Rights Reserved.
        </p>

    </div>
</footer>

{{-- Fixed Play Button --}}
<a href="https://wa.me/918168973121" class="a1-play-btn">
    <i class="fa fa-arrow-down blink"></i><br>
    PLAY<br>Now
</a>

{{-- Fixed WhatsApp Button --}}
<a href="https://api.whatsapp.com/send/?phone=918168973121&text&type=phone_number&app_absent=0"
   target="_blank"
   class="a1-whatsapp-btn">
    <img src="{{ asset('wapp.webp') }}" alt="WhatsApp" width="82" height="82">
</a>

{{-- Fixed Refresh Button --}}
<button type="button"
        onclick="window.location.reload();"
        title="Refresh page"
        aria-label="Refresh this page"
        class="a1-refresh-btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
        <path fill="#111"
              d="M17.65 6.35A7.958 7.958 0 0012 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.56 7.73-6h-2.08A5.99 5.99 0 0112 18c-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z" />
    </svg>
</button>

<style>
    .a1-footer {
        background: linear-gradient(180deg, #111827, #000);
        color: #fff;
        padding: 34px 16px;
        border-top: 4px solid #ffc400;
        box-shadow: 0 -6px 20px rgba(0,0,0,0.18);
    }

    .a1-footer-inner {
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
    }

    .a1-footer-menu {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 12px 24px;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .a1-footer-menu a {
        color: #ffc400;
        font-size: 16px;
        font-weight: 900;
        text-decoration: none;
        text-transform: uppercase;
    }

    .a1-footer-menu a:hover {
        color: #fff;
        text-decoration: underline;
    }

    .a1-footer hr {
        margin: 16px auto;
        border: 0;
        border-top: 1px solid rgba(255,255,255,0.25);
        max-width: 1000px;
    }

    .a1-footer-note {
        color: #f5f5f5;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.8;
        margin: 0 auto;
        max-width: 1050px;
    }

    .a1-footer-copy {
        color: #ffc400;
        font-size: 16px;
        font-weight: 900;
        margin: 0;
    }

    .a1-play-btn {
        position: fixed;
        left: 6px;
        bottom: 35px;
        z-index: 999999;
        width: 72px;
        background: linear-gradient(180deg, #ff003c, #b40025);
        color: #fff;
        border: 3px solid #fff;
        border-radius: 14px;
        text-align: center;
        font-weight: 900;
        font-size: 14px;
        padding: 18px 4px;
        text-decoration: none;
        box-shadow: 0 6px 18px rgba(0,0,0,.38);
    }

    .a1-play-btn:hover {
        background: #000;
        color: #ffc400;
    }

    .a1-whatsapp-btn {
        position: fixed;
        right: 12px;
        bottom: 108px;
        z-index: 999999;
    }

    .a1-whatsapp-btn img {
        width: 82px;
        height: 82px;
        object-fit: contain;
        filter: drop-shadow(0 5px 10px rgba(0,0,0,.45));
    }

    .a1-refresh-btn {
        position: fixed;
        right: 22px;
        bottom: 40px;
        z-index: 999999;
        width: 58px;
        height: 58px;
        border-radius: 50%;
        border: 3px solid #ffc400;
        background: #fff;
        box-shadow: 0 5px 15px rgba(0,0,0,.35);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
    }

    .a1-refresh-btn:hover {
        background: #ffc400;
    }

    @media (max-width: 768px) {
        .a1-footer {
            padding: 28px 12px;
        }

        .a1-footer-menu {
            gap: 10px 16px;
        }

        .a1-footer-menu a {
            font-size: 14px;
        }

        .a1-footer-note {
            font-size: 13px;
            line-height: 1.7;
        }

        .a1-footer-copy {
            font-size: 14px;
        }
    }
</style>
