@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => 'السياحة المحلية (السعودية)',
            'link' => '/category',
        ],
        [
            'text' => 'الرياض',
        ],
    ],
])

@section('PageTitle', 'الرياض')

@section('PageContent')
    <section class="inner-page subCategory-page">
        <div class="container">
            <div class="section-head">
                <div class="section-titles">
                    <h2 class="section-title">
                        الرياض
                    </h2>
                    <p class="section-summary">
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
                        الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها
                        تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي
                    </p>
                </div>
            </div>
            @include('components.search')
            <div class="blog-grid">
                @foreach ($blogs as $blog)
                    @include('components.blogItem', ['blog' => $blog])
                @endforeach
                @for ($i = 1; $i <= 3; $i++)
                    @include('components.blogPlaceholder')
                @endfor
            </div>
        </div>
    </section>
@endsection
