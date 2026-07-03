
@extends('front.layouts.app', [
    'seo' => $seo ?? null
])

@section('content')

<section class="a1-chart-hero">
    <div class="a1-hero-inner">
        <h1>A1 Satta King Chart</h1>
        <p>Select any game to check full 2026 chart record</p>
    </div>
</section>

<section class="a1-notice">
    <h3>To Check Instant SATTA KING Results, Check Below Chart 👇</h3>
</section>

<h3 class="a1-small-heading">
    FASTEST SATTA KING RESULT SITE ON INTERNET
</h3>

<section class="a1-table-section">
    <div class="a1-table-card">
        <div class="a1-table-title">
            All Game 2026 Chart List
        </div>

        <div class="a1-table-scroll">
            <table class="a1-game-table">
                <thead>
                    <tr>
                        <th>GAME NAME</th>
                        <th>RESULT TIME</th>
                        <th>YEAR CHART</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($games as $game)
                        <tr>
                            <td class="game-name">
                                {{ $game->name }}
                            </td>

                            <td>
                                {{ $game->result_time ?: '-' }}
                            </td>

                            <td>
                                <div class="year-buttons">
                                    <a href="{{ route('game.record', $game->slug) }}">
                                        2026
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="empty-row">
                                No chart games found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="a1-check-box">
    <h2>Check All Game 2026 Chart</h2>

    <form method="get" action="javascript:void(0);">
        <div class="a1-check-form">
            <select id="gameSelect">
                @foreach($games as $game)
                    <option value="{{ $game->slug }}">
                        {{ $game->name }}
                    </option>
                @endforeach
            </select>

            <select id="yearSelect">
                <option value="2026">2026</option>
            </select>

            <button type="button" onclick="openYearChart()">
                Check Chart
            </button>
        </div>
    </form>
</section>

<style>
    .a1-chart-hero {
        background: linear-gradient(180deg, #ffcf00, #ff9800);
        border-top: 2px solid #111;
        border-bottom: 2px solid #111;
        padding: 28px 12px;
        text-align: center;
    }

    .a1-hero-inner h1 {
        margin: 0;
        color: #000;
        font-size: 34px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .a1-hero-inner p {
        margin-top: 8px;
        color: #111;
        font-size: 15px;
        font-weight: 600;
    }

    .a1-notice {
        margin: 14px 10px;
        padding: 14px 12px;
        background: #fff8d7;
        border: 1px solid #f2c400;
        border-radius: 14px;
        text-align: center;
        box-shadow: 0 6px 16px rgba(0,0,0,0.08);
    }

    .a1-notice h3 {
        margin: 0;
        color: #111;
        font-size: 18px;
        font-weight: 800;
        line-height: 1.5;
    }

    .a1-small-heading {
        background: #fff;
        color: #111;
        text-align: center;
        font-size: 14px;
        font-weight: 800;
        padding: 8px 10px;
        margin: 0;
    }

    .a1-table-section {
        padding: 18px 8px;
        background: #f3f4f6;
    }

    .a1-table-card {
        background: #fff;
        border: 2px solid #111;
        overflow: hidden;
    }

    .a1-table-title {
        background: linear-gradient(180deg, #ffc400, #ff9f00);
        color: #000;
        text-align: center;
        font-size: 28px;
        font-weight: 900;
        padding: 18px 10px;
        text-transform: uppercase;
        border-bottom: 2px solid #111;
    }

    .a1-table-scroll {
        width: 100%;
        overflow-x: auto;
    }

    .a1-game-table {
        width: 100%;
        min-width: 850px;
        border-collapse: collapse;
        text-align: center;
        background: #fff;
    }

    .a1-game-table th {
        color: #000;
        font-size: 17px;
        font-weight: 900;
        padding: 14px 10px;
        border-bottom: 1px solid #ddd;
        white-space: nowrap;
    }

    .a1-game-table td {
        color: #0618ff;
        font-size: 18px;
        font-weight: 900;
        padding: 13px 10px;
        border-bottom: 1px solid #e5e5e5;
        white-space: nowrap;
    }

    .a1-game-table .game-name {
        color: #000;
        text-transform: uppercase;
    }

    .a1-game-table tbody tr:hover {
        background: #fff7d6;
    }

    .year-buttons {
        display: flex;
        gap: 8px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .year-buttons a {
        display: inline-block;
        background: #0618ff;
        color: #fff;
        padding: 7px 14px;
        border-radius: 6px;
        font-size: 15px;
        font-weight: 900;
        text-decoration: none;
        transition: 0.2s ease;
    }

    .year-buttons a:hover {
        background: #000;
        color: #ffcf00;
    }

    .empty-row {
        color: #000 !important;
        padding: 20px !important;
    }

    .a1-check-box {
        background: linear-gradient(135deg, #374151, #111827);
        padding: 36px 12px;
        text-align: center;
    }

    .a1-check-box h2 {
        margin: 0 0 24px;
        color: #fff;
        font-size: 30px;
        font-weight: 900;
    }

    .a1-check-form {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
    }

    .a1-check-form select {
        height: 54px;
        min-width: 160px;
        padding: 0 18px;
        border: none;
        border-radius: 8px;
        background: #fff;
        color: #000;
        font-size: 17px;
        font-weight: 700;
        outline: none;
        text-transform: uppercase;
    }

    .a1-check-form button {
        height: 54px;
        padding: 0 34px;
        border: none;
        border-radius: 8px;
        background: linear-gradient(135deg, #0057a8, #003d78);
        color: #fff;
        font-size: 18px;
        font-weight: 900;
        letter-spacing: 4px;
        text-transform: uppercase;
        cursor: pointer;
        box-shadow: 0 8px 18px rgba(0, 87, 168, 0.35);
    }

    .a1-check-form button:hover {
        background: linear-gradient(135deg, #003d78, #002b55);
    }

    @media (max-width: 768px) {
        .a1-hero-inner h1 {
            font-size: 25px;
        }

        .a1-table-title {
            font-size: 22px;
            padding: 14px 8px;
        }

        .a1-game-table {
            min-width: 720px;
        }

        .a1-game-table th {
            font-size: 14px;
        }

        .a1-game-table td {
            font-size: 15px;
        }

        .a1-check-box h2 {
            font-size: 23px;
        }

        .a1-check-form {
            gap: 10px;
        }

        .a1-check-form select {
            height: 48px;
            min-width: 130px;
            font-size: 14px;
        }

        .a1-check-form button {
            height: 48px;
            font-size: 14px;
            letter-spacing: 2px;
            padding: 0 20px;
        }
    }
</style>

<script>
    function openYearChart() {
        let slug = document.getElementById('gameSelect').value;

        if (!slug) {
            alert('Please select game');
            return;
        }

        window.location.href = "{{ url('/records') }}/" + slug;
    }
</script>

@endsection







{{-- @extends('front.layouts.app', [
    'seo' => $seo ?? null
])

@section('content')

<section class="a1-chart-hero">
    <div class="a1-hero-inner">
        <h1>A1 Satta King Chart</h1>
        <p>Select any game and year to check full chart record</p>
    </div>
</section>

<section class="a1-notice">
    <h2>To Check Instant SATTA KING Results, Check Below Chart 👇</h3>
</section>

<h3 class="a1-small-heading">
    FASTEST SATTA KING RESULT SITE ON INTERNET
</h3>

<section class="a1-table-section">
    <div class="a1-table-card">
        <div class="a1-table-title">
            All Game Year Chart List
        </div>

        <div class="a1-table-scroll">
            <table class="a1-game-table">
                <thead>
                    <tr>
                        <th>GAME NAME</th>
                        <th>RESULT TIME</th>
                        <th>YEAR CHART</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($games as $game)
                        <tr>
                            <td class="game-name">
                                {{ $game->name }}
                            </td>

                            <td>
                                {{ $game->result_time ?: '-' }}
                            </td>

                            <td>
                                <div class="year-buttons">
                                    @forelse($game->chartYears as $chartYear)
                                        <a href="{{ route('game.yearRecord', [$game->slug, $chartYear->year]) }}">
                                            {{ $chartYear->year }}
                                        </a>
                                    @empty
                                        <a href="{{ route('game.record', $game->slug) }}">
                                            {{ now('Asia/Kolkata')->year }}
                                        </a>
                                    @endforelse
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="empty-row">
                                No chart games found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="a1-check-box">
    <h2>Check All Game Year Chart</h2>

    <form method="get" action="javascript:void(0);">
        <div class="a1-check-form">
            <select id="gameSelect">
                @foreach($games as $game)
                    <option value="{{ $game->slug }}">
                        {{ $game->name }}
                    </option>
                @endforeach
            </select>

            <select id="yearSelect">
                <option value="{{ now('Asia/Kolkata')->year }}">
                    {{ now('Asia/Kolkata')->year }}
                </option>
                <option value="{{ now('Asia/Kolkata')->copy()->subYear()->year }}">
                    {{ now('Asia/Kolkata')->copy()->subYear()->year }}
                </option>
                <option value="{{ now('Asia/Kolkata')->copy()->subYears(2)->year }}">
                    {{ now('Asia/Kolkata')->copy()->subYears(2)->year }}
                </option>
                <option value="{{ now('Asia/Kolkata')->copy()->subYears(3)->year }}">
                    {{ now('Asia/Kolkata')->copy()->subYears(3)->year }}
                </option>
            </select>

            <button type="button" onclick="openYearChart()">
                Check Chart
            </button>
        </div>
    </form>
</section>

<style>
    .a1-chart-hero {
        background: linear-gradient(180deg, #ffcf00, #ff9800);
        border-top: 2px solid #111;
        border-bottom: 2px solid #111;
        padding: 28px 12px;
        text-align: center;
    }

    .a1-hero-inner h1 {
        margin: 0;
        color: #000;
        font-size: 34px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .a1-hero-inner p {
        margin-top: 8px;
        color: #111;
        font-size: 15px;
        font-weight: 600;
    }

    .a1-notice {
        margin: 14px 10px;
        padding: 14px 12px;
        background: #fff8d7;
        border: 1px solid #f2c400;
        border-radius: 14px;
        text-align: center;
        box-shadow: 0 6px 16px rgba(0,0,0,0.08);
    }

    .a1-notice h3 {
        margin: 0;
        color: #111;
        font-size: 18px;
        font-weight: 800;
        line-height: 1.5;
    }

    .a1-small-heading {
        background: #fff;
        color: #111;
        text-align: center;
        font-size: 14px;
        font-weight: 800;
        padding: 8px 10px;
        margin: 0;
    }

    .a1-table-section {
        padding: 18px 8px;
        background: #f3f4f6;
    }

    .a1-table-card {
        background: #fff;
        border: 2px solid #111;
        overflow: hidden;
    }

    .a1-table-title {
        background: linear-gradient(180deg, #ffc400, #ff9f00);
        color: #000;
        text-align: center;
        font-size: 28px;
        font-weight: 900;
        padding: 18px 10px;
        text-transform: uppercase;
        border-bottom: 2px solid #111;
    }

    .a1-table-scroll {
        width: 100%;
        overflow-x: auto;
    }

    .a1-game-table {
        width: 100%;
        min-width: 850px;
        border-collapse: collapse;
        text-align: center;
        background: #fff;
    }

    .a1-game-table th {
        color: #000;
        font-size: 17px;
        font-weight: 900;
        padding: 14px 10px;
        border-bottom: 1px solid #ddd;
        white-space: nowrap;
    }

    .a1-game-table td {
        color: #0618ff;
        font-size: 18px;
        font-weight: 900;
        padding: 13px 10px;
        border-bottom: 1px solid #e5e5e5;
        white-space: nowrap;
    }

    .a1-game-table .game-name {
        color: #000;
        text-transform: uppercase;
    }

    .a1-game-table tbody tr:hover {
        background: #fff7d6;
    }

    .year-buttons {
        display: flex;
        gap: 8px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .year-buttons a {
        display: inline-block;
        background: #0618ff;
        color: #fff;
        padding: 7px 14px;
        border-radius: 6px;
        font-size: 15px;
        font-weight: 900;
        text-decoration: none;
        transition: 0.2s ease;
    }

    .year-buttons a:hover {
        background: #000;
        color: #ffcf00;
    }

    .empty-row {
        color: #000 !important;
        padding: 20px !important;
    }

    .a1-check-box {
        background: linear-gradient(135deg, #374151, #111827);
        padding: 36px 12px;
        text-align: center;
    }

    .a1-check-box h2 {
        margin: 0 0 24px;
        color: #fff;
        font-size: 30px;
        font-weight: 900;
    }

    .a1-check-form {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
    }

    .a1-check-form select {
        height: 54px;
        min-width: 160px;
        padding: 0 18px;
        border: none;
        border-radius: 8px;
        background: #fff;
        color: #000;
        font-size: 17px;
        font-weight: 700;
        outline: none;
        text-transform: uppercase;
    }

    .a1-check-form button {
        height: 54px;
        padding: 0 34px;
        border: none;
        border-radius: 8px;
        background: linear-gradient(135deg, #0057a8, #003d78);
        color: #fff;
        font-size: 18px;
        font-weight: 900;
        letter-spacing: 4px;
        text-transform: uppercase;
        cursor: pointer;
        box-shadow: 0 8px 18px rgba(0, 87, 168, 0.35);
    }

    .a1-check-form button:hover {
        background: linear-gradient(135deg, #003d78, #002b55);
    }

    @media (max-width: 768px) {
        .a1-hero-inner h1 {
            font-size: 25px;
        }

        .a1-table-title {
            font-size: 22px;
            padding: 14px 8px;
        }

        .a1-game-table {
            min-width: 720px;
        }

        .a1-game-table th {
            font-size: 14px;
        }

        .a1-game-table td {
            font-size: 15px;
        }

        .a1-check-box h2 {
            font-size: 23px;
        }

        .a1-check-form {
            gap: 10px;
        }

        .a1-check-form select {
            height: 48px;
            min-width: 130px;
            font-size: 14px;
        }

        .a1-check-form button {
            height: 48px;
            font-size: 14px;
            letter-spacing: 2px;
            padding: 0 20px;
        }
    }
</style>

<script>
    function openYearChart() {
        let slug = document.getElementById('gameSelect').value;
        let year = document.getElementById('yearSelect').value;

        if (!slug || !year) {
            alert('Please select game and year');
            return;
        }

        window.location.href = "{{ url('/record') }}/" + slug + "/" + year;
    }
</script>

@endsection --}}