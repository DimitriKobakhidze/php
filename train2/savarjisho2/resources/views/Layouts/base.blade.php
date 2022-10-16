<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('name','Default Laravel Page')</title>
    @stack('css-file')
</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>