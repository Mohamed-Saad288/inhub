@extends('layouts.dashboard')


@section('title','انشاء موظف')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الموظفين</li>
    <li class="breadcrumb-item active">انشاء</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.employees.store') }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        <x-employee.form :roles="$roles" button="انشاء" />
    </form>
@endsection
