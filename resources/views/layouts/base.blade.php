<!doctype html>
{{--todo--}}
<html
    lang="@yield('lang', app()->getLocale())"
    dir="@yield('dir', app()->getLocale() === 'en' ? 'ltr' : 'rtl')"
>
<head>
    @yield('head.start')
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('head.title', 'Menuma | منوما')</title>
    @vite('resources/css/app.css')
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @yield('head.end')
</head>
<body class="@yield('body.class')">
@yield('body')
@vite('resources/js/app.js')
@yield('body.end')
</body>
</html>
