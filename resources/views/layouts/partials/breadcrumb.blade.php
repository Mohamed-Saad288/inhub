<div class="breadcrumb-section" style="background-image: url(images/breadcrumb.png)">
    <div class="container">
        <div class="breadcrumb-content">
            <h1 class="page-title">{{ end($breadcrumbs)['text'] }}</h1>
            <ul class="breadcrumbs-menu">
                <li><a href="/">الرئيسية</a></li>
                @foreach ($breadcrumbs as $item)
                    <li>
                        @if ($loop->last)
                            <span>{{ $item['text'] }}</span>
                        @else
                            <a href="{{ $item['link'] }}">{{ $item['text'] }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
