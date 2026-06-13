@extends('front.layouts.app', [
    'seo' => $seo ?? null,
])

@section('content')




<div class="max-w-screen-xl px-4 mx-auto md:px-6">
    <h1 class="text-lg font-bold text-center text-gray-900 uppercase">
    A1 Satta King Result – Tracking Every Number, Every Day
    </h1>
</div>

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
                font-size: 16px !important;
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
                font-size: 14px !important;
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
                                    alt="{{ $topAdvertisement->title }}" width="139" height="48">
                            </span>
                        </a>
                    @else
                        <span class="rv-ad-img">
                            <img src="{{ asset('storage/' . $topAdvertisement->image) }}"
                                alt="{{ $topAdvertisement->title }}" width="139" height="48">
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
                    <img src="{{ asset('Wp.png') }}" alt="S.K Bhai" width="139" height="48">
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
                                    alt="{{ $middleAdvertisement->title }}" width="139" height="48">
                            </span>
                        </a>
                    @else
                        <span class="rv-ad-img">
                            <img src="{{ asset('storage/' . $middleAdvertisement->image) }}"
                                alt="{{ $middleAdvertisement->title }}" width="139" height="48">
                        </span>
                    @endif
                @endif
            </div>
        </section>
    @else
        <section class="rv-ad-wrap">
            <div class="rv-ad-box rv-middle">
                <h3>
                    व्हाट्सएप पर सुपर फास्ट रिजल्ट देखने के लिए नीचे दिए गए लिंक पर जाएं और चैनल को फॉलो करें।
                </h3>

                <a href="https://whatsapp.com/channel/0029Vb67katLikgE57Pwhj0T" style="text-decoration:none;">
                    <span class="rv-ad-img">
                        <img src="{{ asset('Join-WhatsApp.png') }}" alt="Join WhatsApp" width="159" height="55">
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
                    <div class="addb-content">
                        {!! $bottomAdvertisement->content !!}
                    </div>
                @endif

                @if (!empty($bottomAdvertisement->image))
                    @if (!empty($bottomAdvertisement->link))
                        <a href="{{ $bottomAdvertisement->link }}" target="_blank" style="text-decoration:none;">
                            <span class="rv-ad-img">
                                <img src="{{ asset('storage/' . $bottomAdvertisement->image) }}"
                                    alt="{{ $bottomAdvertisement->title }}" width="139" height="48">
                            </span>
                        </a>
                    @else
                        <span class="rv-ad-img">
                            <img src="{{ asset('storage/' . $bottomAdvertisement->image) }}"
                                alt="{{ $bottomAdvertisement->title }}" width="139" height="48">
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
                    <img src="{{ asset('whatsAppChat.png') }}" alt="ABHISHEK BHAI" width="139" height="48">
                </span>

                <div>Click to chat</div>
            </div>
        </section>
    @endif
    {{-- end bottom --}}



  




   

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
                                    class="block font-black tracking-wide text-red-700 uppercase hover:underline text-[18px] sm:text-[24px]">
                                    {{ $game->name ?: 'NA' }}
                                </a>

                                @if (!empty($game->result_time))
                                    <p class="mt-1 text-sm font-bold text-black sm:text-base">
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
            <select id="gameSelect" aria-label="Select Game">
                @foreach ($chartGames as $game)
                    <option value="{{ $game->slug }}">{{ $game->name }}</option>
                @endforeach
            </select>

            <select id="yearSelect" aria-label="Select Year">
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



  {{-- SEO Content Section - Premium Responsive --}}
<section class="homeContent">

    <div class="content-block">
        <h2>A1 Satta King Result 2026 – Live Updates, Daily Chart & All Bazaar Records</h2>
        <p>
            This is where you check A1 Satta King results every day. Disawar, Gali, Faridabad,
            Ghaziabad — all four bazaars are covered here. Results go live the moment each bazaar
            closes. No delays. No wrong numbers. We also keep a full satta chart going back to 2024.
            So whether you want today's result or an old record, it is all here.
        </p>
    </div>

    <div class="content-block">
        <h2>A1 Satta King Result Today – Live Numbers Across All Bazaars</h2>
        <p>
            Results come out at different times through the day. Disawar opens the morning at
            5:00 AM. Faridabad follows in the evening at 6:15 PM. Ghaziabad closes at 8:40 PM.
            Gali is the last one — 11:30 PM every night.
        </p>
        <p>
            We post each number right after the official declaration. No estimated numbers are ever
            published here. Want to see today's live result? Check the full result chart below.
        </p>
        <a href="/" class="content-link">See Today's A1 Satta King Result</a>
    </div>

    <div class="content-block">
        <h2>A1 Satta Chart 2026 – Full Monthly Record</h2>
        <p>
            The A1 satta chart 2026 is the most visited page on this site. It shows every daily
            result from January 2026 to today. Each bazaar has its own separate chart. You can scan
            through the whole month in seconds.
        </p>

        <h3>What Is Inside the Chart</h3>
        <ul>
            <li>Daily results from 01 to 31 for every month</li>
            <li>Separate records for Disawar, Gali, Faridabad, and Ghaziabad</li>
            <li>Old charts from 2024 and 2025</li>
            <li>Works fast on mobile — no heavy loading</li>
        </ul>

        <p>
            Old record data is useful. Many people use it to track past numbers. Our archive has
            everything in one clean place.
        </p>
        <a href="/chart" class="content-link">Open the Full A1 Satta Chart 2026</a>
    </div>

    <div class="content-block">
        <h2>A1 Satta King Disawar – India's First Morning Result</h2>
        <p>
            Disawar is the oldest bazaar in the satta king market.
        </p>
        <p>
            It closes at 5:00 AM sharp. That makes it the first result of every single day. A lot of
            people start their morning by checking this number.
        </p>

        <h3>Why People Follow Disawar</h3>
        <ul>
            <li>It is the earliest result in India</li>
            <li>The morning number is widely discussed all day</li>
            <li>Disawar's old chart is one of the most searched records online</li>
            <li>It has been running consistently for many years</li>
        </ul>

        <p>
            Our Disawar page updates every morning right after the result. You get today's number at
            the top. Below that is the full monthly chart and year-wise archive.
        </p>
        <a href="/records/disawar" class="content-link">Check Disawar Result</a>
    </div>

    <div class="content-block">
        <h2>A1 Satta King Faridabad – The Evening Bazaar</h2>
        <p>
            Faridabad closes at 6:15 PM every day.
        </p>
        <p>
            It is the most checked evening result across North India. People wrap up their day and
            check this number. It gets a lot of traffic in the 6 to 7 PM window.
        </p>

        <h3>Faridabad — Quick Facts</h3>
        <ul>
            <li>Result time: 6:15 PM daily</li>
            <li>Published within minutes of the official closing</li>
            <li>Full monthly chart available</li>
            <li>Archive goes back to 2022</li>
        </ul>

        <p>
            The Faridabad page is clean and simple. Today's number is at the top. The full chart is
            right below it.
        </p>
        <a href="/records/faridabad" class="content-link">Check Faridabad Result</a>
    </div>

    <div class="content-block">
        <h2>A1 Satta King Gali – The Last Result of the Night</h2>
        <p>
            Gali closes at 11:30 PM.
        </p>
        <p>
            It is the final satta result of every day. Late at night, Gali gets the most searches.
            People wait for this number all evening.
        </p>

        <h3>Why Gali Gets So Much Attention</h3>
        <ul>
            <li>Last major bazaar to close each night</li>
            <li>Searched heavily for guessing numbers before closing</li>
            <li>Full 2026 year chart is available</li>
            <li>Monthly records go back several years</li>
        </ul>

        <p>
            We update the Gali result as soon as it is officially out. If you are waiting for the
            night result, this is the right page.
        </p>
        <a href="/records/gali" class="content-link">Check Gali Result</a>
    </div>

    <div class="content-block">
        <h2>Why People Use A1 Satta King Result</h2>
        <p>
            There are many result sites online. Most are slow or post the wrong numbers.
        </p>
        <p>
            Here is what is different about this platform.
        </p>

        <h3>Results Come Fast</h3>
        <p>
            Every result is live within minutes of closing time. You do not have to wait or refresh
            endlessly.
        </p>

        <h3>Only Verified Numbers</h3>
        <p>
            We never post guessed or estimated results. Every number here is the officially declared
            satta king result — nothing else.
        </p>

        <h3>Works Great on Mobile</h3>
        <p>
            The site loads fast on any phone. No pop-ups. No heavy ads. Just the result you came here for.
        </p>

        <h3>Years of Old Data</h3>
        <p>
            Need a result from 2024 or 2025? It is in the archive. The full satta chart history is
            stored and easy to find.
        </p>

        <h3>Updated Every Day</h3>
        <p>
            No breaks. No holidays. All four bazaars are tracked 365 days a year.
        </p>
    </div>

    <div class="content-block">
        <h2>The Reality of A1 Satta King Result</h2>
        <p>
            A lot of websites make big claims. We want to be straight with you instead.
        </p>
        <p>
            A1 Satta King Result is a result tracking platform. We collect declared satta king numbers
            from major bazaars and publish them here every day. Disawar, Faridabad, Ghaziabad, Gali —
            all four results are posted daily after their official closing times.
        </p>
        <p>
            We do not predict numbers. We do not sell tips or winning formulas. Any website that promises
            guaranteed results or lucky numbers is not being honest with you. No one can predict a satta
            result before it is declared. The numbers are random. The outcome is always uncertain.
        </p>
        <p>
            What we can give you is accurate, verified, and timely information. The result that is posted
            here is the same result that was officially declared — nothing added, nothing changed.
        </p>

        <h3>What This Site Is</h3>
        <p>
            This is a free result information platform. You can check today's live result. You can browse
            the monthly chart. You can look up old records going back to 2022. All of that is available
            here without any sign-up or payment.
        </p>

        <h3>What This Site Is Not</h3>
        <p>
            This is not a betting platform. We do not accept bets. We do not process payments. We do not
            run any kind of game or lottery. We are not affiliated with any satta operator or bazaar.
        </p>

        <h3>A Word About Accuracy</h3>
        <p>
            Our chart archive goes back to 2024. Every number in that archive is the officially declared
            result for that date and bazaar. We take accuracy seriously because the record only has value
            if it is correct. If an error is ever found and reported, we fix it immediately.
        </p>
    </div>

    <div class="content-block">
        <h2>About This Platform</h2>
        <p>
            A1 Satta King Result is an information platform. We record and display publicly available satta
            result data. This site does not promote or support any betting or gambling activity. Please
            follow the laws and rules that apply in your state.
        </p>
    </div>

    <div class="content-block faq-block">
        <h2>Frequently Asked Questions</h2>

        <h3>What exactly is A1 Satta King Result, and what does this website do?</h3>
        <p>
            A1 Satta King Result is an online result information platform. Every day we publish the
            officially declared numbers for four major satta bazaars — Disawar, Faridabad, Ghaziabad,
            and Gali. We also maintain a full historical chart going back to 2024.
        </p>

        <h3>Can the satta chart help me predict future results?</h3>
        <p>
            The chart shows historical data — what numbers were declared on which dates in the past.
            It is a factual record and nothing more. No chart, pattern, or formula can accurately predict
            a future satta result.
        </p>

        <h3>What should I do if the result is not updated at the expected time?</h3>
        <p>
            Each bazaar has a fixed closing time but the official declaration can sometimes take a few
            extra minutes. If you visit the page right at closing time and do not see the result yet,
            simply refresh after 5 to 10 minutes.
        </p>

        <h3>Is there any cost or registration required to use this site?</h3>
        <p>
            No. A1 Satta King Result is completely free to use. There is no registration, no login,
            no subscription, and no payment of any kind.
        </p>

        <h3>Why do different websites sometimes show different results for the same bazaar?</h3>
        <p>
            Some websites post results early based on unofficial sources. Others may have errors that
            never get corrected. On A1 Satta King, we post only after the official declaration and
            cross-check before publishing.
        </p>

        <h3>Does A1 Satta King Result publish guessing numbers or panels?</h3>
        <p>
            Our main result and chart sections show only officially declared numbers. We do not mix
            guessing content into the result record because it affects the reliability of the data.
        </p>
    </div>

</section>

<style>
    /* =========================
       PREMIUM HOME CONTENT
    ========================= */

    .homeContent {
        width: 100%;
        max-width: 1100px;
        margin: 0 auto;
        padding: 24px 14px;
        background: #ffffff;
        color: #1f2937;
    }

    .homeContent * {
        box-sizing: border-box;
    }

    .homeContent .content-block {
        margin-bottom: 26px;
        padding: 0;
    }

    .homeContent h2 {
        margin: 0 0 18px;
        padding: 18px 22px;
        background: linear-gradient(135deg, #244f63, #406e83);
        color: #ffffff !important;
        text-align: center;
        font-size: 28px;
        font-weight: 800;
        line-height: 1.35;
        border-radius: 8px;
        box-shadow: 0 4px 14px rgba(36, 79, 99, 0.18);
    }

    .homeContent h3 {
        margin: 24px 0 12px;
        padding: 13px 16px;
        background: #f3f7f9;
        color: #143447 !important;
        text-align: left;
        font-size: 22px;
        font-weight: 800;
        line-height: 1.35;
        border-left: 5px solid #406e83;
        border-radius: 7px;
    }

    .homeContent p {
        margin: 0 0 16px;
        padding: 0 4px;
        color: #24313a;
        font-size: 18px;
        line-height: 1.85;
        font-weight: 400;
        text-align: left;
    }

    .homeContent ul,
    .homeContent ol {
        margin: 0 0 18px;
        padding-left: 28px;
    }

    .homeContent li {
        margin-bottom: 9px;
        color: #24313a;
        font-size: 18px;
        line-height: 1.75;
    }

    .homeContent .content-link {
        display: inline-block;
        margin-top: 4px;
        padding: 11px 16px;
        background: #0d6efd;
        color: #ffffff !important;
        font-size: 16px;
        font-weight: 800;
        line-height: 1.3;
        text-decoration: none;
        border-radius: 7px;
        box-shadow: 0 4px 12px rgba(13, 110, 253, 0.22);
        transition: all 0.2s ease;
    }

    .homeContent .content-link:hover {
        background: #084fc7;
        color: #ffffff !important;
        text-decoration: none;
        transform: translateY(-1px);
    }

    .homeContent .faq-block h3 {
        background: #fff8e6;
        color: #3d2d00 !important;
        border-left-color: #f0b429;
    }

    .homeContent strong,
    .homeContent b {
        color: #111827;
        font-weight: 800;
    }

    .homeContent table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
        overflow: hidden;
        border-radius: 8px;
    }

    .homeContent table th,
    .homeContent table td {
        padding: 11px 10px;
        border: 1px solid #d7e0e5;
        text-align: center;
        font-size: 16px;
    }

    .homeContent table th {
        background: #406e83;
        color: #ffffff;
        font-weight: 800;
    }

    @media (max-width: 768px) {
        .homeContent {
            padding: 18px 10px;
        }

        .homeContent .content-block {
            margin-bottom: 22px;
        }

        .homeContent h2 {
            padding: 14px 12px;
            font-size: 21px;
            line-height: 1.4;
            border-radius: 7px;
        }

        .homeContent h3 {
            margin: 20px 0 10px;
            padding: 11px 12px;
            font-size: 18px;
            line-height: 1.4;
            border-left-width: 4px;
        }

        .homeContent p {
            padding: 0 2px;
            font-size: 16px;
            line-height: 1.75;
        }

        .homeContent li {
            font-size: 16px;
            line-height: 1.7;
        }

        .homeContent ul,
        .homeContent ol {
            padding-left: 22px;
        }

        .homeContent .content-link {
            width: 100%;
            text-align: center;
            padding: 12px 14px;
            font-size: 15px;
        }
    }

    @media (max-width: 420px) {
        .homeContent h2 {
            font-size: 19px;
        }

        .homeContent h3 {
            font-size: 17px;
        }

        .homeContent p,
        .homeContent li {
            font-size: 15.5px;
        }
    }
</style>
@endsection
