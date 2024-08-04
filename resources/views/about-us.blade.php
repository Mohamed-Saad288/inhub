@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => 'من نحن',
        ],
    ],
])

@section('PageTitle', 'من نحن')

@section('PageContent')
    <section class="inner-page information-page">
        <div class="container">
            <div class="information-content">
                <div class="information-desc" data-bs-spy="scroll" data-bs-target="#side-nav" data-bs-smooth-scroll="true"
                    tabindex="0">
                    <span class="update-time">
                        آخر تحديث 25 أكتوبر 2024 - 03:45
                    </span>
                    <h3 id="part-1">{{$page->title}}</h3>
                    <p>
                            {{ $page->description }}
                    </p>
                <div id="side-nav" class="side-nav">
                    <h4 class="side-nav-title">
                        المحتوى
                    </h4>
                    <a class="side-nav-item" href="#part-1"> من نحن </a>
                </div>
            </div>
        </div>
    </section>
@endsection
