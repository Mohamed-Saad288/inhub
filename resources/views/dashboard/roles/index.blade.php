@extends('layouts.dashboard')

@section('title','الصالحيات')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الصالحيات</li>
@endsection

@section('content')

    @if(Auth::guard('employee')->user()->can('roles.create'))
    <div class="mb-5 p-4 " dir="rtl">
        <a class="btn btn-small btn-outline-primary" href="{{ route('dashboard.roles.create') }}">انشاء صلاحية</a>
    </div>
    @endif

    <x-alert type="success"/>
    <x-alert type="info"/>


    <table class="table p-md-5" dir="rtl">
        <thead>
        <tr>
            <th>الرقم التعريفى</th>
            <th>الاسم</th>
            <th>وقت الانشاء</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td> {{ $role->name }}</a></td>
                <td>{{ $role->created_at->locale('ar')->diffForHumans()  }}</td>
                @if(Auth::guard('employee')->user()->can('roles.update'))
                <td>
                    <a href="{{ route('dashboard.roles.edit' , $role->id) }}" class="btn btn-sm btn-outline-success" >تعديل</a>
                </td>
                @endif
                @if(Auth::guard('employee')->user()->can('roles.delete'))
                <td>
                    <form action="{{ route('dashboard.roles.destroy' , $role->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
                    </form>
                </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="7">لا توجد صلاحيات حاليا</td>
            </tr>
        @endforelse
        </tbody>
    </table>


@endsection
