<div class="swiper">
    <div class="swiper-wrapper">
        @foreach (array_slice($places, 0, 6) as $place)
            <div class="swiper-slide">
                @include('components.placeItem', ['place' => $place])
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
