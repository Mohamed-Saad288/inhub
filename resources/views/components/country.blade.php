<section class="country-section">
    <div class="container">
        <div class="section-head">
            <div class="section-titles">
                <h2 class="section-title">
                    السياحة العالمية
                </h2>
                <p class="section-subtitle">
                    استعرض الدول السياحية العربية والعالمية
                </p>
            </div>
            <div class="section-tools">
                <div class="swiper-btn-prev relative-swiper-btn">
                    <i class="las la-angle-right"></i>
                </div>
                <div class="swiper-btn-next relative-swiper-btn">
                    <i class="las la-angle-left"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="countries-slider">
            @include('components.placeSlider', ['places' => $countries])
        </div>
    </div>
</section>
