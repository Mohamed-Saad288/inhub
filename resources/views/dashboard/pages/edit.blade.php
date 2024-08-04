@extends('layouts.dashboard')


@section('title','تعديل فئة')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الفئات</li>
    <li class="breadcrumb-item active">تعديل فئة</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.categories.update',$page->id) }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('put')
        @include('dashboard.pages._form',['button_label' => 'تعديل'])
    </form>
@endsection
