<!DOCTYPE html>
<html lang="ar" dir="rtl">

@include('layouts.partials.head')

<body>
    @include('layouts.partials.header')

{{--    @if (isset($breadcrumbs))--}}
{{--        @include('layouts.partials.breadcrumb', ['breadcrumbs' => $breadcrumbs])--}}
{{--    @endif--}}

    @yield('PageContent')

    @include('layouts.partials.newsletter')
    @include('layouts.partials.footer',['setting' => $setting])
</body>

</html>
