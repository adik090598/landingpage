<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <title>company.kz</title>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('images/education_icon.svg')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('parts.styles')
</head>
<body>
@include('parts.navigation')
@yield('content')
@include('parts.footer')
@include('parts.scripts')
@yield('scripts')
</body>
</html>
