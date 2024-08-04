@extends('layouts.dashboard')


@section('title','انشاء بانرات')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">البنارات</li>
    <li class="breadcrumb-item active">انشاء</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.banners.store') }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @include('dashboard.banners._form',['button_label' => 'انشاء'])
    </form>
@endsection
