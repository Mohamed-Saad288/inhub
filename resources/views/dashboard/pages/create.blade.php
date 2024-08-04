@extends('layouts.dashboard')


@section('title','انشاء صفحة')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الصفحات</li>
    <li class="breadcrumb-item active">انشاء</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.pages.store') }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @include('dashboard.pages._form',['button_label' => 'انشاء'])
    </form>
@endsection
