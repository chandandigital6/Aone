<div class="a1-header">

    <nav class="a1-logo-nav">
        <a href="/" class="a1-logo-box">
            <img src="{{ asset('a1sattakingresult.png') }}" alt="A1 Satta King Result">
        </a>
    </nav>

    <nav class="a1-menu-nav">
        <ul>
            <li>
                <a href="/">Home</a>
            </li>

            <li>
                <a href="{{ route('chart') }}">Chart</a>
            </li>

            <li>
                <a target="_blank" rel="noopener noreferrer" href="https://wa.me/+917015916793">
                    Play Now
                </a>
            </li>
        </ul>
    </nav>

</div>

<style>
    .a1-header {
        width: 100%;
        background: #fff;
    }

    .a1-logo-nav {
        background: linear-gradient(135deg, #111827, #000);
        border-bottom: 4px solid #ffc400;
        padding: 24px 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .a1-logo-box {
        width: 160px;
        height: 160px;
        background: #fff;
        border-radius: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 28px rgba(0,0,0,0.35);
        border: 4px solid #ffc400;
        transition: 0.25s ease;
    }

    .a1-logo-box:hover {
        transform: translateY(-3px);
    }

    .a1-logo-box img {
        width: 120px;
        height: auto;
        object-fit: contain;
    }

    .a1-menu-nav {
        background: linear-gradient(180deg, #ffc400, #ff9f00);
        border-bottom: 2px solid #111;
        padding: 0 10px;
    }

    .a1-menu-nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .a1-menu-nav li {
        margin: 0;
        padding: 0;
    }

    .a1-menu-nav a {
        display: block;
        padding: 14px 22px;
        color: #000;
        font-size: 16px;
        font-weight: 900;
        text-decoration: none;
        text-transform: uppercase;
        border-radius: 0;
        transition: 0.2s ease;
    }

    .a1-menu-nav a:hover {
        background: #111;
        color: #ffc400;
    }

    @media (max-width: 768px) {
        .a1-logo-nav {
            padding: 18px 10px;
        }

        .a1-logo-box {
            width: 130px;
            height: 130px;
            border-radius: 30px;
        }

        .a1-logo-box img {
            width: 98px;
        }

        .a1-menu-nav a {
            padding: 12px 15px;
            font-size: 14px;
        }
    }
</style>