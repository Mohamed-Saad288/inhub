@extends('layouts.dashboard')

@section('title','الموظفين')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الموظفين</li>
@endsection

@section('content')
    @if(Auth::guard('employee')->user()->can('employee.create'))
<div class="mb-5 p-4 " dir="rtl">
    <a class="btn btn-small btn-outline-primary" href="{{ route('dashboard.employees.create') }}">انشاء موظف</a>
</div>
    @endif

<x-alert type="success"/>
<x-alert type="info"/>

    <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4 p-4" dir="rtl">
        <x-form.input name="search" placeholder="ابحث" class="mx-2" :value="request('search')"/>
        <button class="btn btn-dark mx-2">ابحث</button>
    </form>

    <table class="table p-md-5" dir="rtl">
        <thead>
        <tr>
            <th>الرقم التعريفى</th>
            <th>الاسم</th>
            <th>رقم الهاتف</th>
            <th>عدد المقالات</th>
            <th>وقت الانشاء</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td><a href="{{ route('dashboard.employees.show',$employee->id) }}"> {{ $employee->name }}</a></td>
                <td>{{ $employee->phone_number }}</td>
                <td>{{ $employee->blogs()->count() }}</td>
                <td>{{ $employee->created_at->locale('ar')->diffForHumans()  }}</td>
                @if(Auth::guard('employee')->user()->can('employee.update'))
                <td>
                    <a href="{{ route('dashboard.employees.edit' , $employee->id) }}" class="btn btn-sm btn-outline-success" >تعديل</a>
                </td>
                @endif
                @if(Auth::guard('employee')->user()->can('employee.delete'))
                <td>
                    <form action="{{ route('dashboard.employees.destroy' , $employee->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
                    </form>
                </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="7">لا يوجد موظفين حاليا</td>
            </tr>
        @endforelse
        </tbody>
    </table>


@endsection
