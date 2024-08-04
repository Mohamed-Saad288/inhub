@extends('layouts.dashboard')


@section('title','انشاء صلاحيات')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الصلاحيات</li>
    <li class="breadcrumb-item active">انشاء</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.roles.store') }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @include('dashboard.roles._form',['button_label' => 'انشاء'])
    </form>
@endsection
