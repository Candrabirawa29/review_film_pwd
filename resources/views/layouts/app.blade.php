<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cineaste</title>
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
    <script src="{{ asset('./js/global.js') }}" defer></script>
    <script src="{{ asset('./js/index.js') }}" type="module"></script>
</head>
<body>
    @yield('content')
</body>
</html>
