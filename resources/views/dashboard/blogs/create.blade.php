@extends('layouts.dashboard')


@section('title','انشاء مدونة')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">المدونات</li>
    <li class="breadcrumb-item active">انشاء</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.blogs.store') }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @include('dashboard.blogs._form',['button_label' => 'انشاء'])
    </form>
@endsection
