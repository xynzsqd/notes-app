<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title', config('app.name'))</title>
</head>
<body>
    @include('includes.header')
    <main>
        @yield('main')
    </main>
    @include('includes.footer')
</body>
</html>
