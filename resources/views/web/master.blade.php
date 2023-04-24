<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    {{-- Menu --}}
    @include('web.Layout.menu')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('web.Layout.footer')


    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
    <script src="/js/app.js"></script>
</body>
</html>