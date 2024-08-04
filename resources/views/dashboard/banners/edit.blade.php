@extends('layouts.dashboard')


@section('title','تعديل البانر')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">المدونات</li>
    <li class="breadcrumb-item active">تعديل البانر</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.banners.update',$banner->id) }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('put')
        @include('dashboard.banners._form',['button_label' => 'تعديل'])
    </form>
@endsection
