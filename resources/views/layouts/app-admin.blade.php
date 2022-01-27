<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <title>dk-partners.net</title>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('images/education_icon.svg')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('admin.parts.styles')
</head>
<body>
@include('admin.parts.sidebar')
@include('parts.scripts')
@yield('content')
@yield('scripts')
</body>
</html>
