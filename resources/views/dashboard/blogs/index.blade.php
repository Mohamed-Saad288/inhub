@extends('layouts.dashboard')

@section('title','المدونات')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">المدونات</li>
@endsection

@section('content')


    @if(Auth::guard('employee')->user()->can('blogs.create'))
    <div class="mb-5 p-4 " dir="rtl">
        <a class="btn btn-small btn-outline-primary" href="{{ route('dashboard.blogs.create') }}">انشاء مدونة</a>
    </div>
    @endif

    <x-alert type="success"/>
    <x-alert type="info"/>

    <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4 p-4" dir="rtl">
        <x-form.input name="title" placeholder="العنوان" class="mx-2" :value="request('title')"/>
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
            <th>الصورة</th>
            <th>العنوان</th>
            <th>الحاله</th>
            <th>وقت الانشاء</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>
                    @if($blog->image)
                        @foreach(explode(',', $blog->image) as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="" height="50">
                        @endforeach
                    @endif
                </td>                <td>{{ $blog->title }}</td>
                <td>{{ $blog->status == 'active' ? 'نشط' : 'غير نشط' }}</td>
                <td>{{ $blog->created_at->locale('ar')->diffForHumans()  }}</td>
                @if(Auth::guard('employee')->user()->can('blogs.update'))
                <td>
                    <a href="{{ route('dashboard.blogs.edit' , $blog->id) }}" class="btn btn-sm btn-outline-success" >تعديل</a>
                </td>
                @endif
                @if(Auth::guard('employee')->user()->can('blogs.delete'))
                <td>
                    <form action="{{ route('dashboard.blogs.destroy' , $blog->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
                    </form>
                </td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="7">لا توجد مدونات حاليا</td>
            </tr>
        @endforelse
        </tbody>
    </table>


@endsection
