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
    <section class="inner-page video-page">
        <div class="container">
            <div class="video-content">
                <div class="video-main-img">
                    <a data-fancybox="video" href="https://www.youtube.com/watch?v=kDqTPT1SQbU"
                        class="video-img loading-img lazy-img-parent">
                        <img data-src="images/videos/1.jpg" class="img-fluid lazy-img" />
                    </a>
                </div>
                <div class="post-information">
                    <span class="post-date information-item">
                        <i class="las la-calendar"></i>
                        26 نوفمبر 2024
                    </span>
                    <span class="post-views information-item">
                        <i class="las la-eye"></i>
                        5280
                    </span>
                </div>
                <div class="video-description">
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
            </div>
            @include('components.share')
            <div class="related-videos">
                <h3 class="related-title">
                    فيديوهات مماثلة
                </h3>
                <div class="videos-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach (array_slice($videos, 0, 5) as $video)
                                <div class="swiper-slide">
                                    <div class="video-item">
                                        <a href="/videoDetails" class="video-img loading-img lazy-img-parent">
                                            <img data-src="{{ $video['img'] }}" alt="{{ $video['name'] }}"
                                                class="img-fluid lazy-img">
                                        </a>
                                        <h3 class="video-title">
                                            <a href="/videoDetails" title="{{ $video['name'] }}">
                                                {{ $video['name'] }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-pagination slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
