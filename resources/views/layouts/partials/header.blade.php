<header>
    <div class="container-fluid">
        <div class="header">
            <a href="/" class="logo">
                <img src="{{ asset('images/logo.png')}}" alt="Inhub" class="img-fluid" />
            </a>
            <a role="button" class="menu-btn">
                <i class="las la-bars"></i>
            </a>
            <div class="general-information">
                <div class="information-item">
                    <i class="las la-calendar"></i>
                    <div class="information-text">
                        <span>الخميس</span>
                        <strong>26 أكتوبر 2023</strong>
                    </div>
                </div>
                <div class="information-item">
                    <i class="las la-clock"></i>
                    <div class="information-text">
                        <span>الساعة الآن</span>
                        <strong>02:30 صباحًا</strong>
                    </div>
                </div>
                <div class="information-item">
                    <i class="las la-cloud-sun-rain"></i>
                    <div class="information-text">
                        <span>درجة الحرارة اليوم</span>
                        <strong>الرياض - 39&deg;</strong>
                    </div>
                </div>
            </div>
            @include('layouts.partials.search')
        </div>
    </div>
</header>
