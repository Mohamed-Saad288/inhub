@extends('layouts.dashboard')


@section('title','انشاء اعلانات')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">اعلانات</li>
    <li class="breadcrumb-item active">انشاء</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.advertisements.store') }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @include('dashboard.advertisements._form',['button_label' => 'انشاء'])
    </form>
@endsection
