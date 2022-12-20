<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrainCheck 24 - Il portale del Viaggiatore.</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    @yield('content')
</body>

</html>