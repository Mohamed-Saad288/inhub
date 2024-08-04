@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => 'السياحة المحلية (السعودية)',
            'link' => '/category',
        ],
        [
            'text' => 'الرياض',
            'link' => '/subCategory',
        ],
        [
            'text' => 'المتحف الوطني السعودي',
        ],
    ],
])

@section('PageTitle', 'المتحف الوطني السعودي')

@section('PageContent')
    <section class="inner-page post-page">
        <div class="container">
            <div class="post-content">
                <div class="post-imgs">
                    <div class="post-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @for ($i = 1; $i <= 4; $i++)
                                    <div class="swiper-slide">
                                        <a data-fancybox="post" href="images/post/{{ $i }}.jpg"
                                            class="post-img loading-img lazy-img-parent">
                                            <img data-src="images/post/{{ $i }}.jpg"
                                                class="img-fluid lazy-img" />
                                        </a>
                                    </div>
                                @endfor
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
                <div class="post-information">
                    <div class="post-tags">
                        <a href="/search" class="tag">
                            السياحة المحلية (السعودية)
                        </a>
                        <a href="/search" class="tag">
                            الرياض
                        </a>
                    </div>
                    <span class="post-date information-item">
                        <i class="las la-calendar"></i>
                        26 نوفمبر 2024
                    </span>
                    <span class="post-views information-item">
                        <i class="las la-eye"></i>
                        5280
                    </span>
                </div>
                <div class="post-description">
                    <p>
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
                        الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها
                        تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي"
                        فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب
                        تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر
                        العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم
                        إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
                    </p>
                    <h3>
                        ما هو "لوريم إيبسوم" ؟
                    </h3>
                    <p>
                        لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في
                        صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما
                        قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع
                        شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في
                        الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق "ليتراسيت"
                        (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر
                        الإلكتروني مثل "ألدوس بايج مايكر" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.
                    </p>
                    <h3>
                        ما فائدته ؟
                    </h3>
                    <p>
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
                        الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها
                        تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي"
                        فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب
                        تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر
                        العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم
                        إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
                    </p>
                </div>
                @include('components.share')
            </div>
            <div class="related-blog">
                <h3 class="related-title">
                    مقالات مماثلة
                </h3>
                <div class="blogs-slider">
                    @include('components.blogSlider')
                </div>
            </div>
            <div class="post-comments">
                <h3 class="comments-title">التعليقات</h3>
                @include('components.commentsList')
                <div class="comments-form">
                    <h3 class="comments-title">اترك تعليقًا</h3>
                    <p class="comments-hint">
                        لن يتم نشر بريدك الإلكتروني. الحقول الإلزامية عليها علامة
                    </p>
                    @include('components.commentsForm')
                </div>
            </div>
        </div>
    </section>
@endsection
