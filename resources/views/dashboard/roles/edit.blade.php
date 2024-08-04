@extends('layouts.dashboard')


@section('title','تعديل صلاحية')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الفئات</li>
    <li class="breadcrumb-item active">تعديل صلاحة</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.roles.update',$role->id) }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('put')
        @include('dashboard.roles._form',['button_label' => 'تعديل'])
    </form>
@endsection
