<section class="city-section">
    <div class="container">
        <div class="section-head">
            <div class="section-titles">
                <h2 class="section-title">
                    السياحة المحلية (السعودية)
                </h2>
                <p class="section-subtitle">
                    استعرض المدن السياحية داخل المملكة العربية السعودية
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
        <div class="cities-slider">
            @include('components.placeSlider', ['places' => $cities])
        </div>
    </div>
</section>
