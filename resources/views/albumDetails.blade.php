@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => 'معرض الصور',
            'link' => '/albums',
        ],
        [
            'text' => 'جزر المالديف',
        ],
    ],
])

@section('PageTitle', 'جزر المالديف')

@section('PageContent')
    <section class="inner-page albums-page">
        <div class="container">
            <div class="section-head">
                <div class="section-titles">
                    <span class="section-date">
                        <i class="las la-calendar"></i>
                        26 نوفمبر 2024
                    </span>
                    <h2 class="section-title">
                        جزر المالديف
                    </h2>
                    <p class="section-summary">
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
                        الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها
                        تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي
                    </p>
                    <div class="section-share">
                        <span class="share-title">مشاركة الألبوم</span>
                        <div class="share-methods">
                            <a href="#!" target="_blank" class="share-method">
                                <i class="lab la-whatsapp"></i>
                            </a>
                            <a href="#!" target="_blank" class="share-method">
                                <i class="lab la-linkedin"></i>
                            </a>
                            <a href="#!" target="_blank" class="share-method">
                                <i class="lab la-telegram"></i>
                            </a>
                            <a href="#!" target="_blank" class="share-method">
                                {{-- <i class="fa-brands fa-x-twitter"></i> --}}
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#!" target="_blank" class="share-method">
                                <i class="lab la-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="albums-grid">
                @for ($i = 1; $i <= 16; $i++)
                    <a data-fancybox="album" href="images/albumDetails/{{ $i }}.jpg"
                        class="album-item albumDetails-item">
                        <div class="album-img loading-img lazy-img-parent">
                            <img data-src="images/albumDetails/{{ $i }}.jpg" alt="{{ $i }}"
                                class="img-fluid lazy-img">
                        </div>
                    </a>
                @endfor
                @for ($i = 1; $i <= 4; $i++)
                    <div class="album-placeholder">
                        <div class="placeholder-img">
                            <i class="las la-image"></i>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
