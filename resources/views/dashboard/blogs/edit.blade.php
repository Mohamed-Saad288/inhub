@extends('layouts.dashboard')


@section('title','تعديل المدونة')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">المدونات</li>
    <li class="breadcrumb-item active">تعديل المدونة</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.blogs.update',$blog->id) }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('put')
        @include('dashboard.blogs._form',['button_label' => 'تعديل'])
    </form>
@endsection
