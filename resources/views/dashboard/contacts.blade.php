@extends('layouts.dashboard')

@section('title','رسائل المستخدمين')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">رسائل المستخدمين</li>
@endsection

@section('content')


    <table class="table p-md-5" dir="rtl">
        <thead>
        <tr>
            <th>الرقم التعريفى</th>
            <th>اسم الراسل</th>
            <th>البريد الالكتروني</th>
            <th>الرسالة</th>
            <th>وقت الارسال</th>
            <th colspan="1"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td> {{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->meesage }}</td>
                <td>{{ $contact->created_at->locale('ar')->diffForHumans()  }}</td>

                <td>
                    <form action="{{ route('dashboard.contacts.destroy' , $contact->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">لا توجد رسائل حاليا</td>
            </tr>
        @endforelse
        </tbody>
    </table>


@endsection
