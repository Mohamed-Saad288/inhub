@extends('layouts.dashboard')


@section('title','تعديل الاعدادات')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الاعدادات</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.settings.update',$setting->id) }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('put')
        @include('dashboard.settings._form',['button_label' => 'تعديل'])
    </form>
@endsection
