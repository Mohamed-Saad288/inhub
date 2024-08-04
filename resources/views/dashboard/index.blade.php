@extends('layouts.dashboard')

@section('title','الرئيسية')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">الرئيسية</li>
@endsection

@section('content')
    @include('dashboard._dashboard-content',
[
'category' => $category->count() ,
'blog' => $blog->count() ,
'contact' => $contact->count(),
'employee' => $employee->count() ,
'banner' => $banner->count(),
'advertisement' => $advertisement->count(),
'page' => $page->count(),
'role' => $role->count()


])
@endsection
