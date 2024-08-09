<div class="overlay"></div>
<nav class="header-nav">
    <div class="nav-head">
        <div class="nav-logo">
            <img src="{{ asset('images/logo.png')}}" />
        </div>
        <a role="button" class="close-menu">
            <i class="las la-times"></i>
        </a>
    </div>
    <ul class="nav-list">
        <li class="nav-item">
            <a href="/" class="nav-link">
                الرئيسية
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pages.about') }}" class="nav-link">
                من نحن
            </a>
        </li>
        <li class="nav-item has-children has-lvl1">
            <a role="button" class="nav-link">
                التصنيفات
                <i class="las la-angle-down"></i>
            </a>
            @include('layouts.partials.megaMenu',['categories' => $categories])
        </li>
        <li class="nav-item">
            <a href="{{ route('pages.privacy') }}" class="nav-link">
                سياسة الخصوصية
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pages.terms') }}" class="nav-link">
                الشروط والأحكام
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('contact.create') }}" class="nav-link">
                اتصل بنا
            </a>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a href="/" class="lang-link">--}}
{{--                English--}}
{{--            </a>--}}
{{--        </li>--}}
    </ul>
</nav>
