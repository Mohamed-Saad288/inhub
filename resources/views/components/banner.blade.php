@props(['banners'])
<section class="banners-section">
    <div class="container">
        <div class="banners-slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($banners as $banner)
                        <div class="swiper-slide">
                            @include('components.bannerItem', ['banner' => $banner])
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-pagination slider-pagination"></div>
            <div class="swiper-btn-prev circle-swiper-btn">
                <i class="las la-angle-right"></i>
            </div>
            <div class="swiper-btn-next circle-swiper-btn">
                <i class="las la-angle-left"></i>
            </div>
        </div>
    </div>
</section>
