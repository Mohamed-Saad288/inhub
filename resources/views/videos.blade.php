@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => 'مكتبة الفيديو',
        ],
    ],
])

@section('PageTitle', 'مكتبة الفيديو')

@section('PageContent')
    <section class="inner-page videos-page">
        <div class="container">
            @include('components.search')
            <div class="videos-grid">
                @foreach ($videos as $video)
                    <div class="video-item">
                        <a href="/videoDetails" class="video-img loading-img lazy-img-parent">
                            <img data-src="{{ $video['img'] }}" alt="{{ $video['name'] }}" class="img-fluid lazy-img">
                        </a>
                        <h3 class="video-title">
                            <a href="/videoDetails" title="{{ $video['name'] }}">
                                {{ $video['name'] }}
                            </a>
                        </h3>
                    </div>
                @endforeach
                @for ($i = 1; $i <= 2; $i++)
                    <div class="video-placeholder">
                        <div class="placeholder-img">
                            <i class="las la-play-circle"></i>
                        </div>
                        <div class="placeholder-title"></div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
