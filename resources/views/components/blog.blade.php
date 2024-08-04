@props(['blogs'])
<section class="blog-section">
    <div class="container">
        <div class="section-head">
            <div class="section-titles">
                <h2 class="section-title">
                    آخر الأخبار والأحداث
                </h2>
                <p class="section-subtitle">
                    ابقى على إطلاع دائم على أحدث الإضافات لأخبار وأحداث السياحة المحلية والعالمية وغيرها..
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blogs-slider">
            <x-blogSlider :blogs="$blogs" />
        </div>
    </div>
</section>
