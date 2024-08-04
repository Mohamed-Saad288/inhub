<a href="#!" class="banner-item">
    <div class="banner-img loading-img lazy-img-parent">
        <img data-src="{{ asset('storage/'. $banner['img']) }}" alt="{{ $banner['regularTitle'] }} {{ $banner['boldTitle'] }}"
            class="img-fluid lazy-img" />
    </div>
    <h3 class="banner-title">
        {{ $banner['regularTitle'] }}
        <strong>{{ $banner['boldTitle'] }}</strong>
    </h3>
    <span class="banner-btn">
        عرض التفاصيل
    </span>
</a>
