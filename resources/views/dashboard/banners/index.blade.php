@extends('layouts.dashboard')

@section('title','البنارات')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">البنارات</li>
@endsection

@section('content')
    @if(Auth::guard('employee')->user()->can('banners.create'))
<div class="mb-5 p-4 " dir="rtl">
    <a class="btn btn-small btn-outline-primary" href="{{ route('dashboard.banners.create') }}">انشاء بانر</a>
</div>
    @endif

<x-alert type="success"/>
<x-alert type="info"/>


    <table class="table p-md-5" dir="rtl">
        <thead>
        <tr>
            <th>الرقم التعريفى</th>
            <th>العنوان العادي</th>
            <th>العنوان الاصلي</th>
            <th>الصورة</th>
            <th>وقت الانشاء</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($banners as $banner)
            <tr>
                <td>{{ $banner->id }}</td>
                <td> {{ $banner->regularTitle }}</td>
                <td>{{ $banner->boldTitle}}</td>
                <td><img src="{{ asset('storage/' . $banner->img) }}" alt="" height="50"> </td>
                <td>{{ $banner->created_at->locale('ar')->diffForHumans()  }}</td>
                @if(Auth::guard('employee')->user()->can('banners.update'))
                <td>
                    <a href="{{ route('dashboard.banners.edit' , $banner->id) }}" class="btn btn-sm btn-outline-success" >تعديل</a>
                </td>
                @endif
                @if(Auth::guard('employee')->user()->can('banners.delete'))
                <td>
                    <form action="{{ route('dashboard.banners.destroy' , $banner->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
                    </form>
                </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="7">لا توجد بنارات حاليا</td>
            </tr>
        @endforelse
        </tbody>
    </table>


@endsection
