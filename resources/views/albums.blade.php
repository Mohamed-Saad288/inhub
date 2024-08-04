@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => 'معرض الصور',
        ],
    ],
])

@section('PageTitle', 'معرض الصور')

@section('PageContent')
    <section class="inner-page albums-page">
        <div class="container">
            @include('components.search')
        </div>
        <div class="container-fluid">
            <div class="albums-grid">
                @foreach ($albums as $album)
                    <a href="/albumDetails" class="album-item">
                        <div class="album-img loading-img lazy-img-parent">
                            <img data-src="{{ $album['img'] }}" alt="{{ $album['name'] }}" class="img-fluid lazy-img">
                        </div>
                        <h3 class="album-name">
                            {{ $album['name'] }}
                        </h3>
                    </a>
                @endforeach
                @for ($i = 1; $i <= 4; $i++)
                    <div class="album-placeholder">
                        <div class="placeholder-img">
                            <i class="las la-image"></i>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
