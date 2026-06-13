@extends('front.layouts.app', [
    'seo' => $seo ?? null
])

@section('content')

<section class="record-hero">
    <h1>
        {{ strtoupper($game->name ?? 'GAME') }} YEARLY CHART {{ $year }}
    </h1>

    <p>
        Result Time:
        <strong>{{ !empty($game->result_time) ? $game->result_time : '-' }}</strong>
    </p>
</section>

<section class="record-notice">
    <h2>{{ strtoupper($game->name ?? 'GAME') }} {{ $year }} Full Chart 👇</h2>
</section>

@php
    $months = [
        1 => 'JAN',
        2 => 'FEB',
        3 => 'MAR',
        4 => 'APR',
        5 => 'MAY',
        6 => 'JUN',
        7 => 'JUL',
        8 => 'AUG',
        9 => 'SEP',
        10 => 'OCT',
        11 => 'NOV',
        12 => 'DEC',
    ];

    $yearResults = collect($results)->mapWithKeys(function ($item) {
        if (empty($item->result_date)) {
            return [];
        }

        $date = \Carbon\Carbon::parse($item->result_date);

        return [
            $date->format('n-j') => $item
        ];
    });

    $maxDays = 31;
@endphp

<section class="year-record-wrapper">
    <div class="year-record-card">

        <div class="year-record-title">
            {{ strtoupper($game->name ?? 'GAME') }} YEARLY CHART {{ $year }}
        </div>

        <div class="year-record-scroll">
            <table class="year-record-table">
                <thead>
                    <tr>
                        <th class="date-col">{{ $year }}</th>

                        @foreach($months as $month)
                            <th>{{ $month }}</th>
                        @endforeach
                    </tr>
                </thead>

                <tbody>
                    @for($day = 1; $day <= $maxDays; $day++)
                        <tr>
                            <td class="date-col">
                                {{ $day }}
                            </td>

                            @foreach($months as $monthNumber => $monthName)
                                @php
                                    $key = $monthNumber . '-' . $day;
                                    $item = $yearResults->get($key);
                                    $value = !empty($item?->result)
                                        ? str_pad($item->result, 2, '0', STR_PAD_LEFT)
                                        : '-';
                                @endphp

                                <td>
                                    {{ $value }}
                                </td>
                            @endforeach
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>

    </div>
</section>

@if(isset($contentBlocks) && $contentBlocks->count())
    <section class="record-content-section">
        @foreach($contentBlocks as $block)
            <div class="record-content-card">
                @if($block->title)
                    <h2>{{ $block->title }}</h2>
                @endif

                <div class="content-block-content">
                    {!! $block->content !!}
                </div>
            </div>
        @endforeach
    </section>
@endif

<div class="record-back">
    <a href="{{ route('chart') }}">
        Back To Chart
    </a>
</div>

<style>
    .record-hero {
        background: linear-gradient(180deg, #ffcf00, #ff9800);
        border-top: 2px solid #111;
        border-bottom: 2px solid #111;
        padding: 28px 12px;
        text-align: center;
    }

    .record-hero h1 {
        margin: 0;
        color: #000;
        font-size: 34px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .record-hero p {
        margin-top: 8px;
        color: #111;
        font-size: 16px;
        font-weight: 700;
    }

    .record-notice {
        margin: 14px 10px;
        padding: 14px 12px;
        background: #fff8d7;
        border: 1px solid #f2c400;
        border-radius: 14px;
        text-align: center;
        box-shadow: 0 6px 16px rgba(0,0,0,0.08);
    }

    .record-notice h3 {
        margin: 0;
        color: #111;
        font-size: 18px;
        font-weight: 800;
        line-height: 1.5;
    }

    .year-record-wrapper {
        padding: 18px 8px;
        background: #f3f4f6;
    }

    .year-record-card {
        background: #fff;
        border: 2px solid #111;
        overflow: hidden;
    }

    .year-record-title {
        background: linear-gradient(180deg, #ffc400, #ff9f00);
        color: #000;
        text-align: center;
        font-size: 34px;
        font-weight: 900;
        padding: 22px 10px;
        text-transform: uppercase;
        border-bottom: 2px solid #111;
    }

    .year-record-scroll {
        width: 100%;
        overflow-x: auto;
    }

    .year-record-table {
        width: 100%;
        min-width: 1250px;
        border-collapse: collapse;
        text-align: center;
        background: #fff;
    }

    .year-record-table th {
        color: #000;
        font-size: 17px;
        font-weight: 900;
        padding: 12px 10px;
        border-bottom: 1px solid #ddd;
        white-space: nowrap;
    }

    .year-record-table td {
        color: #0618ff;
        font-size: 19px;
        font-weight: 900;
        padding: 10px 10px;
        border-bottom: 1px solid #e5e5e5;
        white-space: nowrap;
    }

    .year-record-table .date-col {
        position: sticky;
        left: 0;
        z-index: 5;
        background: #fff;
        color: #000;
        min-width: 75px;
    }

    .year-record-table thead .date-col {
        z-index: 10;
    }

    .year-record-table tbody tr:hover {
        background: #fff7d6;
    }

    .year-record-table tbody tr:hover .date-col {
        background: #fff7d6;
    }

    .record-content-section {
        background: #f3f4f6;
        padding: 20px 10px;
    }

    .record-content-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        padding: 18px;
        margin-bottom: 18px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    }

    .record-content-card h2 {
        margin-bottom: 12px;
        color: #111;
        font-size: 22px;
        font-weight: 900;
    }

    .content-block-content {
        color: #111;
        font-size: 16px;
        line-height: 1.8;
    }

    .record-back {
        text-align: center;
        padding: 24px 10px;
        background: #f3f4f6;
    }

    .record-back a {
        display: inline-block;
        background: #0618ff;
        color: #fff;
        padding: 11px 24px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 900;
        text-decoration: none;
    }

    .record-back a:hover {
        background: #000;
        color: #ffcf00;
    }

    @media (max-width: 768px) {
        .record-hero h1 {
            font-size: 24px;
        }

        .record-hero p {
            font-size: 14px;
        }

        .year-record-title {
            font-size: 24px;
            padding: 16px 8px;
        }

        .year-record-table {
            min-width: 1050px;
        }

        .year-record-table th {
            font-size: 14px;
        }

        .year-record-table td {
            font-size: 16px;
            padding: 9px 8px;
        }

        .record-content-card h2 {
            font-size: 19px;
        }

        .content-block-content {
            font-size: 15px;
        }
    }
</style>

@endsection