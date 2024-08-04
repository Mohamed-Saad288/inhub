@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => 'من نحن',
        ],
    ],
])

@section('PageTitle', 'من نحن')

@section('PageContent')
    <section class="inner-page about-page">
        <div class="container">
            <div class="about-content">
                @include('components.hero', ['page' => 'about'])
                <div class="about-description">
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
            <div class="about-features">
                @foreach ($features as $feature)
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="las la-{{ $feature['icon'] }}"></i>
                        </div>
                        <h3 class="feature-title">
                            {{ $feature['title'] }}
                        </h3>
                        <p class="feature-description">
                            {{ $feature['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
