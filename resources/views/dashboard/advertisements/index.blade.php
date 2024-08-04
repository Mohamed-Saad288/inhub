@extends('layouts.dashboard')

@section('title','الاعلانات')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الاعلانات</li>
@endsection

@section('content')
    @if(Auth::guard('employee')->user()->can('advertisements.create'))
<div class="mb-5 p-4 " dir="rtl">
    <a class="btn btn-small btn-outline-primary" href="{{ route('dashboard.advertisements.create') }}">انشاء اعلان</a>
</div>
    @endif

<x-alert type="success"/>
<x-alert type="info"/>


    <table class="table p-md-5" dir="rtl">
        <thead>
        <tr>
            <th>الرقم التعريفى</th>
            <th>الاسم</th>
            <th>اللينك</th>
            <th>الصورة</th>
            <th>وقت الانشاء</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($advertisements as $advertisement)
            <tr>
                <td>{{ $advertisement->id }}</td>
                <td> {{ $advertisement->name }}</td>
                <td>{{ $advertisement->link}}</td>
                <td><img src="{{ asset('storage/' . $advertisement->image) }}" alt="" height="50"> </td>
                <td>{{ $advertisement->created_at->locale('ar')->diffForHumans()  }}</td>
                @if(Auth::guard('employee')->user()->can('advertisements.update'))
                <td>
                    <a href="{{ route('dashboard.advertisements.edit' , $advertisement->id) }}" class="btn btn-sm btn-outline-success" >تعديل</a>
                </td>
                @endif
                @if(Auth::guard('employee')->user()->can('advertisements.delete'))
                <td>
                    <form action="{{ route('dashboard.advertisements.destroy' , $advertisement->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
                    </form>
                </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="7">لا توجد اعلانات حاليا</td>
            </tr>
        @endforelse
        </tbody>
    </table>


@endsection
