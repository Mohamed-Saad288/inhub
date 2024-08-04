@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => 'السياحة المحلية (السعودية)',
        ],
    ],
])

@section('PageTitle', 'السياحة المحلية (السعودية)')

@section('PageContent')
    <section class="inner-page category-page">
        <div class="container">
            <div class="section-head">
                <div class="section-titles">
                    <h2 class="section-title">
                        السياحة المحلية (السعودية)
                    </h2>
                    <p class="section-summary">
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
                        الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها
                        تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي
                    </p>
                </div>
            </div>
            <div class="places-grid">
                @foreach ($cities as $place)
                    @include('components.placeItem', ['place' => $place])
                @endforeach
            </div>
        </div>
    </section>
@endsection
