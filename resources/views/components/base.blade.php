<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container mt-3">
        <x-alert type="success" />
        <x-alert type="error" />
    </div>

    <div>
        {{ $slot }}
    </div>
</body>

</html>
