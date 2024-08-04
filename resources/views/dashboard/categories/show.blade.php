@extends('layouts.dashboard')


@section('title','Categories')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الفئات</li>
    <li class="breadcrumb-item active">المدونات</li>

@endsection

@section('content')


    <table class="table">
        <thead>
        <tr>
            <th>الرقم التعريفى للمدونة</th>
            <th>عنوان المدونة</th>
            <th>حالة المونة</th>
            <th>وقت الانشاء</th>
        </tr>
        </thead>
        <tbody>
        @php
            $blogs = $category->blogs()->latest()->paginate(5);
        @endphp
        @forelse($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->status ? 'نشط' : 'غير نشط' }}</td>
                <td>{{$blog->created_at->locale('ar')->diffForHumans() }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">لا يوجد مدونات تابعه لهذا الفئة</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $blogs->links() }}
    </div>

@endsection
