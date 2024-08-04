@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => 'البحث',
        ],
    ],
])

@section('PageTitle', 'البحث')

@section('PageContent')
    <section class="inner-page search-page">
        <div class="container">
            @include('components.search', ['value' => 'الرياض'])
            <h3 class="search-title">
                نتائج البحث عن “الرياض” - <span>35 نتيجة</span>
            </h3>
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
