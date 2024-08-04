@props(['blogs'])
<div class="swiper">
    <div class="swiper-wrapper">
        @foreach (array_slice($blogs, 0, 5) as $blog)
            <div class="swiper-slide">
                @include('components.blogItem', ['blog' => $blog])
            </div>
        @endforeach
    </div>
</div>
<div class="swiper-pagination slider-pagination"></div>
<div class="swiper-btn-prev regular-swiper-btn">
    <i class="las la-angle-right"></i>
</div>
<div class="swiper-btn-next regular-swiper-btn">
    <i class="las la-angle-left"></i>
</div>
