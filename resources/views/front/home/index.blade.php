@extends('front.layouts.app', [
    'seo' => $seo ?? null,
])

@section('content')



    <style>
        .rv-ad-wrap {
            width: 100%;
            margin: 12px auto;
            font-family: Arial, 'Noto Sans Devanagari', sans-serif;
        }

        .rv-ad-box {
            background: linear-gradient(180deg, #ffd900 0%, #fff8cf 100%);
            border: 3px dashed #e60000;
            border-radius: 16px;
            padding: 12px 10px;
            text-align: center;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .10);
        }

        .rv-ad-box,
        .rv-ad-box * {
            color: #111 !important;
            font-size: 16px !important;
            font-weight: 700 !important;
            line-height: 1.45 !important;
            word-break: break-word;
        }

        .rv-ad-box h1,
        .rv-ad-box h2,
        .rv-ad-box h3,
        .rv-ad-box h4,
        .rv-ad-box h5,
        .rv-ad-box h6,
        .rv-ad-box p,
        .rv-ad-box div {
            margin: 4px 0 !important;
            font-size: 16px !important;
        }

        .rv-ad-title {
            font-size: 18px !important;
            font-weight: 800 !important;
        }

        .rv-ad-name {
            font-size: 19px !important;
            font-weight: 900 !important;
            color: #c9342d !important;
        }

        .rv-ad-img {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border-radius: 999px;
            padding: 5px 12px;
            margin-top: 8px;
            max-width: 100%;
        }

        .rv-ad-img img {
            width: auto;
            height: auto;
            max-height: 55px;
            max-width: 200px;
            object-fit: contain;
        }

        .rv-middle {
            background: linear-gradient(180deg, #111827, #1f2937);
            border: 3px dashed #ffd900;
        }

        .rv-middle,
        .rv-middle * {
            color: #fff !important;
        }

        .rv-middle .rv-ad-img img {
            max-height: 55px;
            max-width: 200px;
        }

        @media(max-width:640px) {
            .rv-ad-wrap {
                margin: 10px auto;
            }

            .rv-ad-box {
                border-width: 3px;
                border-radius: 14px;
                padding: 10px 8px;
            }

            .rv-ad-box,
            .rv-ad-box * {
                font-size: 17px !important;
                line-height: 1.4 !important;
                font-weight: 700 !important;
            }

            .rv-ad-box h1,
            .rv-ad-box h2,
            .rv-ad-box h3,
            .rv-ad-box h4,
            .rv-ad-box h5,
            .rv-ad-box h6,
            .rv-ad-box p,
            .rv-ad-box div {
                font-size: 17px !important;
            }

            .rv-ad-title {
                font-size: 15px !important;
            }

            .rv-ad-name {
                font-size: 16px !important;
            }

            .rv-ad-img {
                padding: 4px 10px;
                margin-top: 6px;
            }

            .rv-ad-img img {
                max-height: 48px;
                max-width: 175px;
            }
        }
    </style>


    {{-- top --}}
    @php
        $topAdvertisement = $advertisements->where('position', 'top')->first();
    @endphp

    @if ($topAdvertisement)
        <section class="rv-ad-wrap">
            <div class="rv-ad-box">
                @if (!empty($topAdvertisement->content))
                    <div class="addb-content">
                        {!! $topAdvertisement->content !!}
                    </div>
                @endif

                @if (!empty($topAdvertisement->image))
                    @if (!empty($topAdvertisement->link))
                        <a href="{{ $topAdvertisement->link }}" target="_blank" style="text-decoration:none;">
                            <span class="rv-ad-img">
                                <img src="{{ asset('storage/' . $topAdvertisement->image) }}"
                                    alt="{{ $topAdvertisement->title }}">
                            </span>
                        </a>
                    @else
                        <span class="rv-ad-img">
                            <img src="{{ asset('storage/' . $topAdvertisement->image) }}"
                                alt="{{ $topAdvertisement->title }}">
                        </span>
                    @endif
                @endif
            </div>
        </section>
    @else
        <section class="rv-ad-wrap">
            <div class="rv-ad-box">
                <h2 class="rv-ad-title">नमस्कार साथियों</h2>

                <p>
                    सीधा कंपनी खाईवाल के पास गेम प्ले करे<br>
                    बिंदास 1001% पेमेंट की गारंटी के साथ<br>
                    आपका अपना भाई
                </p>

                <h2 class="rv-ad-name">S.K BHAI</h2>

                <span class="rv-ad-img">
                    <img src="{{ asset('Wp.png') }}" alt="S.K Bhai">
                </span>
            </div>
        </section>
    @endif
    {{-- end top --}}


    {{-- middle --}}
    @php
        $middleAdvertisement = $advertisements->where('position', 'middle')->first();
    @endphp

    @if ($middleAdvertisement)
        <section class="rv-ad-wrap">
            <div class="rv-ad-box rv-middle">
                @if (!empty($middleAdvertisement->content))
                    <div class="addb-content">
                        {!! $middleAdvertisement->content !!}
                    </div>
                @endif

                @if ($middleAdvertisement->image)
                    @if ($middleAdvertisement->link)
                        <a href="{{ $middleAdvertisement->link }}" target="_blank" style="text-decoration:none;">
                            <span class="rv-ad-img">
                                <img src="{{ asset('storage/' . $middleAdvertisement->image) }}"
                                    alt="{{ $middleAdvertisement->title }}">
                            </span>
                        </a>
                    @else
                        <span class="rv-ad-img">
                            <img src="{{ asset('storage/' . $middleAdvertisement->image) }}"
                                alt="{{ $middleAdvertisement->title }}">
                        </span>
                    @endif
                @endif
            </div>
        </section>
    @else
        <section class="rv-ad-wrap">
            <div class="rv-ad-box rv-middle">
                <h4>
                    व्हाट्सएप पर सुपर फास्ट रिजल्ट देखने के लिए नीचे दिए गए लिंक पर जाएं और चैनल को फॉलो करें।
                </h4>

                <a href="https://whatsapp.com/channel/0029Vb67katLikgE57Pwhj0T" style="text-decoration:none;">
                    <span class="rv-ad-img">
                        <img src="{{ asset('Join-WhatsApp.png') }}" alt="Join WhatsApp">
                    </span>
                </a>
            </div>
        </section>
    @endif
    {{-- end middle --}}


    {{-- bottom --}}
    @php
        $bottomAdvertisement = $advertisements->where('position', 'bottom')->first();
    @endphp

    @if ($bottomAdvertisement)
        <section class="rv-ad-wrap">
            <div class="rv-ad-box">
                @if (!empty($bottomAdvertisement->content))
                    {{-- <div class="addb-content">
                        {!! $bottomAdvertisement->content !!}
                    </div> --}}
                    <div class="addb-content" style="font-size:17px; line-height:1.6;">
    {!! $bottomAdvertisement->content !!}
</div>
                @endif

                @if (!empty($bottomAdvertisement->image))
                    @if (!empty($bottomAdvertisement->link))
                        <a href="{{ $bottomAdvertisement->link }}" target="_blank" style="text-decoration:none;">
                            <span class="rv-ad-img">
                                <img src="{{ asset('storage/' . $bottomAdvertisement->image) }}"
                                    alt="{{ $bottomAdvertisement->title }}">
                            </span>
                        </a>
                    @else
                        <span class="rv-ad-img">
                            <img src="{{ asset('storage/' . $bottomAdvertisement->image) }}"
                                alt="{{ $bottomAdvertisement->title }}">
                        </span>
                    @endif
                @endif
            </div>
        </section>
    @else
        <section class="rv-ad-wrap">
            <div class="rv-ad-box">
                <div class="rv-ad-title">सीधे सट्टा कंपनी का No 1 खाईवाल</div>

                <div class="rv-ad-name">☆☆ ABHISHEK BHAI KHAIWAL ☆☆</div>

                <div>
                    🎯 पालिका बाजार..1:20pm<br>
                    🎯 प्रयागराज........2:00pm<br>
                    🎯 दिल्लीबाजार ...3:00pm<br>
                    🎯 दिल्ली दरबार....3:30pm<br>
                    🎯 श्री गणेश........4:30 Pm<br>
                    🎯 रूप नगर..........5:10pm<br>
                    🎯 फरीदाबाद.......5:50 pm<br>
                    🎯 फतेहपुर..........7:10 pm<br>
                    🎯 गाजियाबाद......8:50 pm<br>
                    🎯 नोएडानाईट.....10:00 pm<br>
                    🎯 गली...............11:15pm<br>
                    🎯 दिसावर ..........3:00 am
                </div>

                <div>
                    जोड़ी रेट<br>
                    जोड़ी रेट 10-------960<br>
                    हरफ रेट 100-----960
                </div>

                <div class="rv-ad-name">☆☆ ABHISHEK BHAI KHAIWAL ☆☆</div>

                <div style="color:#9b59b6!important;font-weight:800!important;">
                    Game Play करने के लिए नीचे लिंक पर क्लिक करे
                </div>

                <span class="rv-ad-img">
                    <img src="{{ asset('whatsAppChat.png') }}" alt="ABHISHEK BHAI">
                </span>

                <div>Click to chat</div>
            </div>
        </section>
    @endif
    {{-- end bottom --}}



    {{-- Game List Section - 2 Parts --}}
    {{-- <section class="row">
    @php
        // $gameSections = $games->chunk(ceil($games->count() / 2));
         $gameSections = $games->chunk(17);
    @endphp

    @foreach ($gameSections as $sectionIndex => $gameSection)
        <div class="{{ $sectionIndex > 0 ? 'mt-8' : '' }}">

            <div class="flex items-center justify-around space-x-4 bg-yellow-400">
                <p class="w-full p-3 font-bold text-white bg-purple-800">
                    GAME 
                </p>

                <div class="flex items-center justify-around bg-yellow-400 w-[75%]">
                    <p class="text-lg font-semibold">कल</p>
                    <p class="text-lg font-semibold">आज</p>
                </div>
            </div>

            <div class="w-full px-0 text-center">
                <div class="grid grid-cols-1 bg-white lg:grid-cols-3 md:grid-cols-2">

                    @forelse($gameSection as $game)
                        <div class="flex items-center justify-around space-x-4 border border-gray-900">
                            <div class="w-full p-3">
                                <p class="pb-2 text-xl font-bold tracking-wide text-gray-900 uppercase text-start hover:underline">
                                    <a href="{{ route('game.record', $game->slug) }}">
                                        {{ $game->name }}
                                    </a>
                                </p>

                                <div class="flex items-center justify-between gap-2">
                                    <p class="text-sm font-semibold text-red-900">
                                        @if (!empty($game->result_time))
                                            {{ \Carbon\Carbon::parse($game->result_time)->format('h:i A') }}
                                        @endif
                                    </p>

                                    <a class="text-sm font-semibold text-blue-700 hover:underline"
                                       href="{{ route('game.yearRecord', [$game->slug, now('Asia/Kolkata')->year]) }}">
                                        View Chart
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center justify-around w-[75%]">
                                <p class="text-2xl font-medium tracking-wider">
                                    @if (!empty($game->yesterdayResult->result))
                                        {{ is_numeric($game->yesterdayResult->result) && $game->yesterdayResult->result <= 9
                                            ? str_pad($game->yesterdayResult->result, 2, '0', STR_PAD_LEFT)
                                            : $game->yesterdayResult->result }}
                                    @else
                                        XX
                                    @endif
                                </p>

                                <p class="text-2xl font-medium tracking-wider">
                                    @if (!empty($game->todayResult->result) && in_array($game->todayResult->status ?? '', ['declared', 'published']))
                                        {{ is_numeric($game->todayResult->result) && $game->todayResult->result <= 9
                                            ? str_pad($game->todayResult->result, 2, '0', STR_PAD_LEFT)
                                            : $game->todayResult->result }}
                                    @else
                                        <strong class="waitimg">
                                            <img class="lazy"
                                                 alt="waiting"
                                                 src="{{ asset('tamplate/admin/upimages/d.gif') }}">
                                        </strong>
                                    @endif
                                </p>
                            </div>
                        </div>
                    @empty
                        <div class="p-4 text-center">No result found</div>
                    @endforelse

                </div>
            </div>

        </div>
    @endforeach
</section> --}}




    {{-- Game List Section - Compact --}}
    {{-- <section class="w-full py-2 bg-gray-100">
        @php
            $gameSections = $games->chunk(17);
        @endphp

        @foreach ($gameSections as $sectionIndex => $gameSection)
            <div class="{{ $sectionIndex > 0 ? 'mt-4' : '' }}">
                <div class="grid grid-cols-1 gap-3 px-2 sm:grid-cols-2 lg:grid-cols-3">

                    @forelse($gameSection as $game)
                        <div class="overflow-hidden bg-white border border-gray-300 rounded-lg shadow">

                            <div class="py-3 text-center bg-white border-b border-gray-200">
                                <a href="{{ route('game.record', $game->slug) }}"
                                    class="block text-xl font-black tracking-wide text-red-700 uppercase hover:underline">
                                    {{ $game->name ?: 'NA' }}
                                </a>

                                @if (!empty($game->result_time))
                                    <p class="mt-1 text-sm font-bold text-black">
                                        {{ \Carbon\Carbon::parse($game->result_time)->format('h:i A') }}
                                    </p>
                                @endif
                            </div>

                            <div class="flex items-center justify-center gap-3 px-3 py-4 text-center bg-white">

                                <div>
                                    <p class="text-sm font-bold text-gray-700">कल</p>
                                    <p class="text-3xl font-black text-black">
                                        @if (!empty($game->yesterdayResult->result))
                                            {{ is_numeric($game->yesterdayResult->result) && $game->yesterdayResult->result <= 9
                                                ? str_pad($game->yesterdayResult->result, 2, '0', STR_PAD_LEFT)
                                                : $game->yesterdayResult->result }}
                                        @else
                                            XX
                                        @endif
                                    </p>
                                </div>

                                <span class="text-3xl font-black text-green-600">➜</span>

                                <div>
                                    <p class="text-sm font-bold text-gray-700">आज</p>
                                    <p class="text-3xl font-black text-blue-700">
                                        @if (!empty($game->todayResult->result) && in_array($game->todayResult->status ?? '', ['declared', 'published']))
                                            {{ is_numeric($game->todayResult->result) && $game->todayResult->result <= 9
                                                ? str_pad($game->todayResult->result, 2, '0', STR_PAD_LEFT)
                                                : $game->todayResult->result }}
                                        @else
                                            XX
                                        @endif
                                    </p>
                                </div>

                            </div>

                            <a href="{{ route('game.yearRecord', [$game->slug, now('Asia/Kolkata')->year]) }}"
                                class="block py-2 text-xs font-black text-center text-black uppercase bg-yellow-400 hover:bg-yellow-300">
                                View Chart
                            </a>

                        </div>
                    @empty
                        <div class="p-3 text-center bg-white border rounded-lg">
                            No result found
                        </div>
                    @endforelse

                </div>
            </div>
        @endforeach
    </section> --}}


    {{-- Game List Section - Compact --}}
<section class="w-full py-2 bg-gray-100">
    @php
        $gameSections = $games->chunk(17);
    @endphp

    @foreach ($gameSections as $sectionIndex => $gameSection)
        <div class="{{ $sectionIndex > 0 ? 'mt-4' : '' }}">

            <div style="display:grid; grid-template-columns:repeat(2, minmax(0, 1fr)); gap:8px; padding:0 8px;"
                class="lg:grid-cols-3">

                @forelse($gameSection as $game)
                    <div class="overflow-hidden bg-white border border-gray-300 rounded-lg shadow">

                        <div class="py-2 text-center bg-white border-b border-gray-200">
                            <a href="{{ route('game.record', $game->slug) }}"
                                class="block text-base font-black tracking-wide text-red-700 uppercase hover:underline sm:text-xl">
                                {{ $game->name ?: 'NA' }}
                            </a>

                            @if (!empty($game->result_time))
                                <p class="mt-1 text-xs font-bold text-black sm:text-sm">
                                    {{ \Carbon\Carbon::parse($game->result_time)->format('h:i A') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex items-center justify-center gap-2 px-2 py-3 text-center bg-white">

                            <div>
                                <p class="text-xs font-bold text-gray-700">कल</p>
                                <p class="text-2xl font-black text-black">
                                    @if (!empty($game->yesterdayResult->result))
                                        {{ is_numeric($game->yesterdayResult->result) && $game->yesterdayResult->result <= 9
                                            ? str_pad($game->yesterdayResult->result, 2, '0', STR_PAD_LEFT)
                                            : $game->yesterdayResult->result }}
                                    @else
                                        XX
                                    @endif
                                </p>
                            </div>

                            <span class="text-2xl font-black text-green-600">➜</span>

                            <div>
                                <p class="text-xs font-bold text-gray-700">आज</p>
                                <p class="text-2xl font-black text-blue-700">
                                    @if (!empty($game->todayResult->result) && in_array($game->todayResult->status ?? '', ['declared', 'published']))
                                        {{ is_numeric($game->todayResult->result) && $game->todayResult->result <= 9
                                            ? str_pad($game->todayResult->result, 2, '0', STR_PAD_LEFT)
                                            : $game->todayResult->result }}
                                    @else
                                        XX
                                    @endif
                                </p>
                            </div>

                        </div>

                        <a href="{{ route('game.yearRecord', [$game->slug, now('Asia/Kolkata')->year]) }}"
                            class="block py-2 text-[11px] font-black text-center text-black uppercase bg-yellow-400 hover:bg-yellow-300">
                            View Chart
                        </a>

                    </div>
                @empty
                    <div style="grid-column: span 2;" class="p-3 text-center bg-white border rounded-lg">
                        No result found
                    </div>
                @endforelse

            </div>
        </div>
    @endforeach
</section>


    {{-- Year Chart Search --}}
    <div class="chart-search-box">
        <h2>Check All Game Year Chart</h2>

        <div class="chart-search-form">
            <select id="gameSelect">
                @foreach ($chartGames as $game)
                    <option value="{{ $game->slug }}">{{ $game->name }}</option>
                @endforeach
            </select>

            <select id="yearSelect">
                <option value="{{ now('Asia/Kolkata')->year }}">{{ now('Asia/Kolkata')->year }}</option>
                <option value="{{ now('Asia/Kolkata')->subYear()->year }}">
                    {{ now('Asia/Kolkata')->subYear()->year }}
                </option>
                <option value="{{ now('Asia/Kolkata')->subYears(2)->year }}">
                    {{ now('Asia/Kolkata')->subYears(2)->year }}
                </option>
            </select>

            <button type="button" onclick="openYearChart()">Check Chart</button>
        </div>
    </div>


    {{-- Calendar Style Chart Result --}}
    <section class="year-chart-wrapper">

        <div class="year-chart-card">
            <div class="year-chart-title">
                ALL GAME YEARLY CHART {{ now('Asia/Kolkata')->year }}
            </div>

            @php
                $chartGameSections = $chartGames->chunk(15);
            @endphp

            @foreach ($chartGameSections as $sectionIndex => $gameSection)
                <div class="chart-table-scroll {{ $sectionIndex > 0 ? 'mt-6' : '' }}">
                    <table class="year-chart-table">
                        <thead>
                            <tr>
                                <th class="date-col">DATE</th>
                                @foreach ($gameSection as $game)
                                    <th>{{ strtoupper($game->name) }}</th>
                                @endforeach
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dates as $date)
                                @php
                                    $dateKey = $date->format('Y-m-d');
                                    $dayResults = $monthlyResults->get($dateKey, collect())->keyBy('game_slug');
                                @endphp

                                <tr>
                                    <td class="date-col">
                                        {{ $date->format('d') }}
                                    </td>

                                    @foreach ($gameSection as $game)
                                        @php
                                            $result = $dayResults->get($game->slug);
                                        @endphp

                                        <td>
                                            @if (!empty($result?->result))
                                                {{ str_pad($result->result, 2, '0', STR_PAD_LEFT) }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>

    </section>


    <style>
        .chart-search-box {
            margin-top: 20px;
            padding: 36px 15px;
            background: linear-gradient(135deg, #374151, #111827);
            text-align: center;
        }

        .chart-search-box h2 {
            color: #fff;
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 24px;
        }

        .chart-search-form {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
        }

        .chart-search-form select {
            height: 54px;
            padding: 0 18px;
            min-width: 150px;
            border-radius: 8px;
            border: 0;
            font-size: 18px;
            font-weight: 600;
            background: #fff;
            outline: none;
            text-transform: uppercase;
        }

        .chart-search-form button {
            height: 54px;
            padding: 0 36px;
            border: 0;
            border-radius: 8px;
            background: linear-gradient(135deg, #0057a8, #003d78);
            color: #fff;
            font-size: 19px;
            font-weight: 800;
            letter-spacing: 5px;
            text-transform: uppercase;
            cursor: pointer;
            box-shadow: 0 8px 18px rgba(0, 87, 168, 0.35);
        }

        .year-chart-wrapper {
            padding: 28px 10px;
            background: #f4f6f8;
        }

        .year-chart-card {
            background: #fff;
            border: 2px solid #111;
            overflow: hidden;
        }

        .year-chart-title {
            background: linear-gradient(180deg, #ffc400, #ff9f00);
            color: #000;
            text-align: center;
            font-size: 34px;
            font-weight: 900;
            padding: 22px 10px;
            text-transform: uppercase;
            border-bottom: 2px solid #111;
        }

        .chart-table-scroll {
            width: 100%;
            overflow-x: auto;
        }

        .year-chart-table {
            width: 100%;
            min-width: 1450px;
            border-collapse: collapse;
            text-align: center;
            background: #fff;
        }

        .year-chart-table th {
            color: #000;
            font-size: 17px;
            font-weight: 900;
            padding: 12px 10px;
            border-bottom: 1px solid #ddd;
            white-space: nowrap;
        }

        .year-chart-table td {
            color: #0618ff;
            font-size: 19px;
            font-weight: 900;
            padding: 10px 10px;
            border-bottom: 1px solid #e5e5e5;
            white-space: nowrap;
        }

        .year-chart-table td.date-col,
        .year-chart-table th.date-col {
            position: sticky;
            left: 0;
            z-index: 5;
            background: #fff;
            color: #000;
            min-width: 80px;
        }

        .year-chart-table tbody tr:hover {
            background: #fff7d6;
        }

        .year-chart-table tbody tr:hover .date-col {
            background: #fff7d6;
        }

        @media (max-width: 768px) {
            .chart-search-box h2 {
                font-size: 24px;
            }

            .chart-search-form {
                gap: 10px;
            }

            .chart-search-form select {
                height: 48px;
                font-size: 15px;
                min-width: 120px;
            }

            .chart-search-form button {
                height: 48px;
                font-size: 15px;
                letter-spacing: 3px;
                padding: 0 22px;
            }

            .year-chart-title {
                font-size: 24px;
                padding: 16px 8px;
            }

            .year-chart-table {
                min-width: 1200px;
            }

            .year-chart-table th {
                font-size: 14px;
            }

            .year-chart-table td {
                font-size: 16px;
            }
        }
    </style>


    <script>
        function openYearChart() {
            let slug = document.getElementById('gameSelect').value;
            let year = document.getElementById('yearSelect').value;

            window.location.href = "{{ url('/records') }}/" + slug + "/" + year;
        }
    </script>



    <section class="bg-white md:py-4 homeContent container">

        <h2 class="ql-align-center"
            style="padding: 1rem 1.5rem;background: #406e83;text-align: center; font-size: 1.2rem;color: #fff;">
            A1 Satta King Result 2026 – Live Updates, Daily Chart & All Bazaar Records
        </h2>
        <div style="padding: 10px;">
            This is where you check A1 Satta King results every day. Disawar, Gali, Faridabad, Ghaziabad — all four bazaars
            are covered here. Results go live the moment each bazaar closes. No delays. No wrong numbers. We also keep a
            full satta chart going back to 2024. So whether you want today's result or an old record, it is all here.
        </div>

        <h2 class="ql-align-center"
            style="padding: 1rem 1.5rem;background: #406e83;text-align: center; font-size: 1.2rem;color: #fff;">
            A1 Satta King Result Today – Live Numbers Across All Bazaars
        </h2>
        <div style="padding: 10px;">
            Results come out at different times through the day. Disawar opens the morning at 5:00 AM. Faridabad follows in
            the evening at 6:15 PM. Ghaziabad closes at 8:40 PM. Gali is the last one — 11:30 PM every night.
            <br><br>
            We post each number right after the official declaration. No estimated numbers are ever published here. Want to
            see today's live result? Check the full result chart below.
            <br><br>
            <a href="/" style="color:blue;">See Today's A1 Satta King Result</a>
        </div>

        <h2 class="ql-align-center"
            style="padding: 1rem 1.5rem;background: #406e83;text-align: center; font-size: 1.2rem;color: #fff;">
            A1 Satta Chart 2026 – Full Monthly Record
        </h2>
        <div style="padding: 10px;">
            The A1 satta chart 2026 is the most visited page on this site. It shows every daily result from January 2026 to
            today. Each bazaar has its own separate chart. You can scan through the whole month in seconds.
        </div>

        <h3 class="ql-align-center"
            style="padding: 0.8rem 1.2rem;background: #406e83;text-align: center; font-size: 1.1rem;color: #fff;">
            What Is Inside the Chart
        </h3>
        <div style="padding: 10px;">
            ● Daily results from 01 to 31 for every month<br>
            ● Separate records for Disawar, Gali, Faridabad, and Ghaziabad<br>
            ● Old charts from 2024 and 2025<br>
            ● Works fast on mobile — no heavy loading<br><br>
            Old record data is useful. Many people use it to track past numbers. Our archive has everything in one clean
            place.
            <br><br>
            <a href="/chart" style="color:blue;">Open the Full A1 Satta Chart 2026</a>
        </div>

        <h2 class="ql-align-center"
            style="padding: 1rem 1.5rem;background: #406e83;text-align: center; font-size: 1.2rem;color: #fff;">
            A1 Satta King Disawar – India's First Morning Result
        </h2>
        <div style="padding: 10px;">
            Disawar is the oldest bazaar in the satta king market.
            <br><br>
            It closes at 5:00 AM sharp. That makes it the first result of every single day. A lot of people start their
            morning by checking this number.
        </div>

        <h3 class="ql-align-center"
            style="padding: 0.8rem 1.2rem;background: #406e83;text-align: center; font-size: 1.1rem;color: #fff;">
            Why People Follow Disawar
        </h3>
        <div style="padding: 10px;">
            ● It is the earliest result in India<br>
            ● The morning number is widely discussed all day<br>
            ● Disawar's old chart is one of the most searched records online<br>
            ● It has been running consistently for many years<br><br>
            Our Disawar page updates every morning right after the result. You get today's number at the top. Below that is
            the full monthly chart and year-wise archive.
            <br><br>
            <a href="/records/disawar" style="color:blue;">Check Disawar Result</a>
        </div>

        <h2 class="ql-align-center"
            style="padding: 1rem 1.5rem;background: #406e83;text-align: center; font-size: 1.2rem;color: #fff;">
            A1 Satta King Faridabad – The Evening Bazaar
        </h2>
        <div style="padding: 10px;">
            Faridabad closes at 6:15 PM every day.
            <br><br>
            It is the most checked evening result across North India. People wrap up their day and check this number. It
            gets a lot of traffic in the 6 to 7 PM window.
        </div>

        <h3 class="ql-align-center"
            style="padding: 0.8rem 1.2rem;background: #406e83;text-align: center; font-size: 1.1rem;color: #fff;">
            Faridabad — Quick Facts
        </h3>
        <div style="padding: 10px;">
            ● Result time: 6:15 PM daily<br>
            ● Published within minutes of the official closing<br>
            ● Full monthly chart available<br>
            ● Archive goes back to 2022<br><br>
            The Faridabad page is clean and simple. Today's number is at the top. The full chart is right below it.
            <br><br>
            <a href="/records/faridabad" style="color:blue;">Check Faridabad Result</a>
        </div>

        <h2 class="ql-align-center"
            style="padding: 1rem 1.5rem;background: #406e83;text-align: center; font-size: 1.2rem;color: #fff;">
            A1 Satta King Gali – The Last Result of the Night
        </h2>
        <div style="padding: 10px;">
            Gali closes at 11:30 PM.
            <br><br>
            It is the final satta result of every day. Late at night, Gali gets the most searches. People wait for this
            number all evening.
        </div>

        <h3 class="ql-align-center"
            style="padding: 0.8rem 1.2rem;background: #406e83;text-align: center; font-size: 1.1rem;color: #fff;">
            Why Gali Gets So Much Attention
        </h3>
        <div style="padding: 10px;">
            ● Last major bazaar to close each night<br>
            ● Searched heavily for guessing numbers before closing<br>
            ● Full 2026 year chart is available<br>
            ● Monthly records go back several years<br><br>
            We update the Gali result as soon as it is officially out. If you are waiting for the night result, this is the
            right page.
            <br><br>
            <a href="/records/gali" style="color:blue;">Check Gali Result</a>
        </div>

        <h2 class="ql-align-center"
            style="padding: 1rem 1.5rem;background: #406e83;text-align: center; font-size: 1.2rem;color: #fff;">
            Why People Use A1 Satta King Result
        </h2>
        <div style="padding: 10px;">
            There are many result sites online. Most are slow or post the wrong numbers.
            <br><br>
            Here is what is different about this platform.
        </div>

        <h3 class="ql-align-center">Results Come Fast</h3>
        <div style="padding: 10px;">
            Every result is live within minutes of closing time. You do not have to wait or refresh endlessly.
        </div>

        <h3 class="ql-align-center">Only Verified Numbers</h3>
        <div style="padding: 10px;">
            We never post guessed or estimated results. Every number here is the officially declared satta king result —
            nothing else.
        </div>

        <h3 class="ql-align-center">Works Great on Mobile</h3>
        <div style="padding: 10px;">
            The site loads fast on any phone. No pop-ups. No heavy ads. Just the result you came here for.
        </div>

        <h3 class="ql-align-center">Years of Old Data</h3>
        <div style="padding: 10px;">
            Need a result from 2024 or 2025? It is in the archive. The full satta chart history is stored and easy to find.
        </div>

        <h3 class="ql-align-center">Updated Every Day</h3>
        <div style="padding: 10px;">
            No breaks. No holidays. All four bazaars are tracked 365 days a year.
        </div>

        <h2 class="ql-align-center"
            style="padding: 1rem 1.5rem;background: #406e83;text-align: center; font-size: 1.2rem;color: #fff;">
            The Reality of A1 Satta King Result
        </h2>
        <div style="padding: 10px;">
            A lot of websites make big claims. We want to be straight with you instead.
            <br><br>
            A1 Satta King Result is a result tracking platform. We collect declared satta king numbers from major bazaars
            and publish them here every day. Disawar, Faridabad, Ghaziabad, Gali — all four results are posted daily after
            their official closing times. That is the core of what this site does.
            <br><br>
            We do not predict numbers. We do not sell tips or winning formulas. Any website that promises guaranteed results
            or lucky numbers is not being honest with you. No one can predict a satta result before it is declared. The
            numbers are random. The outcome is always uncertain.
            <br><br>
            What we can give you is accurate, verified, and timely information. The result that is posted here is the same
            result that was officially declared — nothing added, nothing changed.
        </div>

        <h3 class="ql-align-center">What This Site Is</h3>
        <div style="padding: 10px;">
            This is a free result information platform. You can check today's live result. You can browse the monthly chart.
            You can look up old records going back to 2022. All of that is available here without any sign-up or payment.
            <br><br>
            We update the site every single day. All four bazaars are tracked without exception — including weekends and
            public holidays. If a result is delayed for any reason, we wait for the official declaration before posting
            anything.
        </div>

        <h3 class="ql-align-center">What This Site Is Not</h3>
        <div style="padding: 10px;">
            This is not a betting platform. We do not accept bets. We do not process payments. We do not run any kind of
            game or lottery. We are not affiliated with any satta operator or bazaar.
            <br><br>
            This platform exists to make the results information easy to find. That is all.
        </div>

        <h3 class="ql-align-center">A Word About Accuracy</h3>
        <div style="padding: 10px;">
            Our chart archive goes back to 2024. Every number in that archive is the officially declared result for that
            date and bazaar. We take accuracy seriously because the record only has value if it is correct. If an error is
            ever found and reported, we fix it immediately.
            <br><br>
            When you check results here, you are looking at real data — not estimates, not guesses, not recycled numbers
            from the day before.
        </div>

        <h2 class="ql-align-center"
            style="padding: 1rem 1.5rem;background: #406e83;text-align: center; font-size: 1.2rem;color: #fff;">
            About This Platform
        </h2>
        <div style="padding: 10px;">
            A1 Satta King Result is an information platform. We record and display publicly available satta result data.
            This site does not promote or support any betting or gambling activity. Please follow the laws and rules that
            apply in your state.
        </div>

        <h2 class="ql-align-center"
            style="padding: 1rem 1.5rem;background: #406e83;text-align: center; font-size: 1.2rem;color: #fff;">
            Frequently Asked Questions
        </h2>

        <h3 class="ql-align-center">What exactly is A1 Satta King Result, and what does this website do?</h3>
        <div class="answer" style="padding:10px;">
            A1 Satta King Result is an online result information platform. Every day we publish the officially declared
            numbers for four major satta bazaars — Disawar, Faridabad, Ghaziabad, and Gali. We also maintain a full
            historical chart going back to 2024 so users can look up records anytime. This site does not conduct any form of
            betting, gambling, or lottery. It is purely an information resource for people who want to check satta king
            results in one reliable place.
        </div>

        <h3 class="ql-align-center">Can the satta chart help me predict future results?</h3>
        <div class="answer" style="padding:10px;">
            The chart shows historical data — what numbers were declared on which dates in the past. It is a factual record
            and nothing more. No chart, pattern, or formula can accurately predict a future satta result. The numbers are
            random and each declaration is independent. The chart is useful for reviewing past records and verifying old
            results. Using it to predict upcoming numbers is not something we recommend or support.
        </div>

        <h3 class="ql-align-center">What should I do if the result is not updated at the expected time?</h3>
        <div class="answer" style="padding:10px;">
            Each bazaar has a fixed closing time but the official declaration can sometimes take a few extra minutes. If you
            visit the page right at closing time and do not see the result yet, simply refresh after 5 to 10 minutes. We
            post the result as soon as it is officially out. We never fill in a blank entry with an unverified number just
            to appear updated — accuracy always comes before speed on this platform.
        </div>

        <h3 class="ql-align-center">Is there any cost or registration required to use this site?</h3>
        <div class="answer" style="padding:10px;">
            No. A1 Satta King Result is completely free to use. There is no registration, no login, no subscription, and no
            payment of any kind. You open the page, check the result or chart you need, and that is it. We do not collect
            personal information and we do not require you to create an account to access any part of the site.
        </div>

        <h3 class="ql-align-center">Why do different websites sometimes show different results for the same bazaar?</h3>
        <div class="answer" style="padding:10px;">
            Some websites post results early based on unofficial sources. Others may have errors that never get corrected. A
            few sites recycle old numbers or make mistakes during manual entry. On A1 Satta King, we post only after the
            official declaration and we cross-check before publishing. Our archive is reviewed for consistency. If you ever
            see a discrepancy between our result and another source, the version here is based on the officially declared
            number.
        </div>

        <h3 class="ql-align-center">Does A1 Satta King Result publish guessing numbers or panels?</h3>
        <div class="answer" style="padding:10px;">
            Our main result and chart sections show only officially declared numbers. We do not mix guessing content into
            the result record because it affects the reliability of the data. Some pages on the site may cover
            guessing-related content separately — but that is always clearly labeled and never presented as an official
            result. The result chart and live result section are strictly for verified declared numbers only.
        </div>

    </section>


    <style>
        p br {
            display: block;
        }
    </style>
@endsection
