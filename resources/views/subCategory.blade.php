@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => $category['name'],
        ],

        'setting' => $setting ,
        'categories' => $categories

    ],
])

@section('PageTitle',  $category['name'] )

@section('PageContent')
    <section class="inner-page subCategory-page">
        <div class="container">
            <div class="section-head">
                <div class="section-titles">
                    <h2 class="section-title">
                        {{ $category['name'] }}
                    </h2>
                    <p class="section-summary">
                        {{ $category['description'] }}
                    </p>
                </div>
            </div>
            @include('components.search')
            <div class="blog-grid">
                @foreach ($blogs as $blog)
                    @include('components.blogItem', ['blog' => $blog])
                @endforeach
            </div>
        </div>
    </section>
@endsection
