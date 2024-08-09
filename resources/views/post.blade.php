@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => $blog['title'],
            'link' => '/category',
        ],
       'setting' => $setting,
       'categories' => $categories
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
                                @php
                                    $images = explode(',',$blog['image'])
                                @endphp
                                @for ($i = 0; $i < count($images); $i++)
                                    <div class="swiper-slide">
                                        <a data-fancybox="post" href="{{ asset('storage/'.$images[$i]) }}"
                                            class="post-img loading-img lazy-img-parent">
                                            <img data-src="{{ asset('storage/'.$images[$i]) }}"
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
                            {{ $blog['title'] }}
                        </a>
                        <a href="/search" class="tag">
                            الرياض
                        </a>
                    </div>
                    <span class="post-date information-item">
                        <i class="las la-calendar"></i>
            {{ \Carbon\Carbon::parse($blog['created_at'])->locale('ar')->translatedFormat('d F Y') }}
                    </span>
                    <span class="post-views information-item">
                        <i class="las la-eye"></i>
                        5280
                    </span>
                </div>
                <div class="post-description">
                    <p>
                       {{ $blog['description'] }}
                    </p>

                @include('components.share', ['blog' => $blog])
            </div>
            <div class="related-blog">
                <h3 class="related-title">
                    مقالات مماثلة
                </h3>
                <div class="blogs-slider">
                    @include('components.blogSlider',['blogs' => $blogs])
                </div>
            </div>
            <div class="post-comments">
                @if(isset($comments))
                <h3 class="comments-title">التعليقات</h3>
                @include('components.commentsList',[ 'comments' => $comments])
                @endif
                <div class="comments-form">
                    <h3 class="comments-title">اترك تعليقًا</h3>
                    <p class="comments-hint">
                        لن يتم نشر بريدك الإلكتروني. الحقول الإلزامية عليها علامة
                    </p>
                    @include('components.commentsForm',['blog' => $blog ])
                </div>
            </div>
        </div>
    </section>
@endsection
