<section class="package-section">
    <div class="container">
        <div class="section-head">
            <div class="section-titles">
                <h2 class="section-title">
                    الباقات السياحية
                </h2>
                <p class="section-subtitle">
                    استعرض أفضل الباقات السياحية وابدأ رحلتك الآن
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
        <div class="packages-slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach (array_slice($packages, 0, 6) as $package)
                        <div class="swiper-slide">
                            @include('components.packageItem', ['package' => $package])
                        </div>
                    @endforeach
                </div>
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
</section>
