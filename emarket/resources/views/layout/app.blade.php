<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunu Yeuff</title>
    @vite(['resources/js/app.css', 'resources/js/app.js'])

</head>
<body>
    @include('../layout/compomentLayout/navbar')
    @yield('content')
    @include('../layout/compomentLayout/footer')

</body>
</html>