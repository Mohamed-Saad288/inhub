@extends('layouts.dashboard')

@section('title','الفئات')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">لتصنيفات</li>
@endsection

@section('content')
    @if(Auth::guard('employee')->user()->can('categories.create'))
<div class="mb-5 p-4 " dir="rtl">
    <a class="btn btn-small btn-outline-primary" href="{{ route('dashboard.categories.create') }}">انشاء تصنيف</a>
</div>
    @endif

<x-alert type="success"/>
<x-alert type="info"/>

    <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4 p-4" dir="rtl">
        <x-form.input name="name" placeholder="الاسم" class="mx-2" :value="request('name')"/>
        <select name="status" class="form-control mx-2" >
            <option value="" >الكل</option>
            <option value="active" @selected(request('status') == 'active') >نشط</option>
            <option value="inactive" @selected(request('status') == 'inactive') >غير نشط</option>
        </select>
        <button class="btn btn-dark mx-2">ابحث</button>
    </form>

    <table class="table p-md-5" dir="rtl">
        <thead>
        <tr>
            <th>الرقم التعريفى</th>
            <th>الاسم</th>
            <th>الحاله</th>
            <th>عدد المقالات</th>
            <th>وقت الانشاء</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td><a href="{{ route('dashboard.categories.show',$category->id) }}"> {{ $category->name }}</a></td>
                <td>{{ $category->status == 'active' ? 'نشط' : 'غير نشط' }}</td>
                <td>{{ $category->blogs()->count() }}</td>
                <td>{{ $category->created_at->locale('ar')->diffForHumans()  }}</td>
                @if(Auth::guard('employee')->user()->can('categories.update'))
                <td>
                    <a href="{{ route('dashboard.categories.edit' , $category->id) }}" class="btn btn-sm btn-outline-success" >تعديل</a>
                </td>
                @endif
                @if(Auth::guard('employee')->user()->can('categories.delete'))
                <td>
                    <form action="{{ route('dashboard.categories.destroy' , $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
                    </form>
                </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="7">لا توجد تصنيفات حاليا</td>
            </tr>
        @endforelse
        </tbody>
    </table>


@endsection
