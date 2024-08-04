@extends('layouts.master', [
    'breadcrumbs' => [
        [
            'text' => '404',
        ],
    ],
])

@section('PageTitle', '404')

@section('PageContent')
    <section class="inner-page not-found-page">
        <h1 style="text-align: center; margin: 50px 15px; font-size: 50px; font-weight: 800;">
            404 <br>
            Not found
        </h1>
    </section>
@endsection
