@extends('layouts.dashboard')


@section('title','تعديل بينات الموظف')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الموظفين</li>
    <li class="breadcrumb-item active">تعديل بيانات الموظف</li>
@endsection

@section('content')
    <form action="{{ route('dashboard.employees.update',$employee->id) }}" method="POST" dir="rtl" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('put')
        <x-employee.form :roles="$roles" button="تعديل" />
    </form>
@endsection
