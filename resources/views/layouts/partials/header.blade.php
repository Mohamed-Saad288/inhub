<header>
    @php
        use Carbon\Carbon;

    $now = Carbon::now('Asia/Riyadh')->locale('ar');
        $dayOfWeek = $now->translatedFormat('l');
        $formattedDate = $now->translatedFormat('d F Y');
        $formattedTime = $now->translatedFormat('h:i A');
        $temperature = '39';
        $city = 'الرياض';
    @endphp
    <div class="container-fluid">
        <div class="header">
            <a href="/" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Inhub" class="img-fluid" />
            </a>
            <a role="button" class="menu-btn">
                <i class="las la-bars"></i>
            </a>
            <div class="general-information">
                <div class="information-item">
                    <i class="las la-calendar"></i>
                    <div class="information-text">
                        <span>{{ $dayOfWeek }}</span>
                        <strong>{{ $formattedDate }}</strong>
                    </div>
                </div>
                <div class="information-item">
                    <i class="las la-clock"></i>
                    <div class="information-text">
                        <span>الساعة الآن</span>
                        <strong>{{ $formattedTime }}</strong>
                    </div>
                </div>
            </div>
            @include('layouts.partials.search')
        </div>
        @include('layouts.partials.nav',['categories' => $categories])
    </div>
</header>
