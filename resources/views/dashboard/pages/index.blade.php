@extends('layouts.dashboard')

@section('title','الصفحات')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الصفحات</li>
@endsection

@section('content')
    @if(Auth::guard('employee')->user()->can('pages.create'))
<div class="mb-5 p-4 " dir="rtl">
    <a class="btn btn-small btn-outline-primary" href="{{ route('dashboard.pages.create') }}">انشاء صفحة</a>
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
        @forelse($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->name }}</td>
                <td>{{ $page->created_at->locale('ar')->diffForHumans()  }}</td>
                @if(Auth::guard('employee')->user()->can('pages.update'))
                <td>
                    <a href="{{ route('dashboard.pages.edit' , $page->id) }}" class="btn btn-sm btn-outline-success" >تعديل</a>
                </td>
                @endif
                @if(Auth::guard('employee')->user()->can('pages.delete'))
                <td>
                    <form action="{{ route('dashboard.pages.destroy' , $page->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
                    </form>
                </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="7">لا توجد صقحات حاليا</td>
            </tr>
        @endforelse
        </tbody>
    </table>


@endsection
