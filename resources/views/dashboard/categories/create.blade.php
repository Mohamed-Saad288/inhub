@extends('layouts.dashboard')


@section('title','انشاء فئه')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الفئات</li>
    <li class="breadcrumb-item active">انشاء</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.categories.store') }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @include('dashboard.categories._form',['button_label' => 'انشاء'])
    </form>
@endsection
