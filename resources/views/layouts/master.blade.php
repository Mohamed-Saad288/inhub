<!DOCTYPE html>
<html lang="ar" dir="rtl">

@include('layouts.partials.head')

<body>
@include('layouts.partials.header',['categories' => $categories])

@if (isset($breadcrumbs))
    <div class="breadcrumb-section" style="background-image: url({{ asset('images/breadcrumb.png') }})">
        <div class="container">
            <div class="breadcrumb-content">
                <h1 class="page-title">{{ end($breadcrumbs)['text'] ?? '' }}</h1>
                <ul class="breadcrumbs-menu">
                    <li><a href="/">الرئيسية</a></li>
                    @foreach ($breadcrumbs as $item)
                        @if (!empty($item['text']))
                            <li>
                                @if ($loop->last)
                                    <span>{{ $item['text'] }}</span>
                                @else
                                    <a href="{{ $item['link'] ?? '#' }}">{{ $item['text'] }}</a>
                                @endif
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

@yield('PageContent')

@include('layouts.partials.newsletter')
@include('layouts.partials.footer', ['setting' => $setting, 'categories' => $categories])
</body>

</html>
