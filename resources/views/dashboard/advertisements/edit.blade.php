@extends('layouts.dashboard')


@section('title','تعديل الاعلان')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الاعلانات</li>
    <li class="breadcrumb-item active">تعديل الاعلان</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.advertisements.update',$advertisement->id) }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('put')
        @include('dashboard.advertisements._form',['button_label' => 'تعديل'])
    </form>
@endsection
