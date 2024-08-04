@extends('layouts.master', ['setting' => $setting])
@section('PageTitle', 'الرئيسية')

@section('PageContent')
    <x-alert type="success"/>

    @include('components.hero')

    <x-banner :banners="$banners" />
    <x-blog :blogs="$blogs"/>

    {{--    @include('components.city')--}}
{{--    @include('components.country')--}}
{{--    @include('components.package')--}}
@endsection
