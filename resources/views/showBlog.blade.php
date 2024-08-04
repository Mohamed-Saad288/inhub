@extends('layouts.master')
@section('PageTitle', 'المدونات')
@section('PageContent')
<div class="blog-item">
    <div class="blog-img">
        <a href="/post" class="img-holder loading-img lazy-img-parent">
            <img data-src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}" class="img-fluid lazy-img" />
        </a>
    </div>
    <h3 class="blog-title">
        <a href="/post" title="{{ $blog->titile }}">
            {{ $blog->title }}
        </a>
    </h3>
    <p class="">
        {{ $blog->description }}
    </p>
</div>
@endsection
