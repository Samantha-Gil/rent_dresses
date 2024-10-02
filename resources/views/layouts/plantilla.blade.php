<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error')}}</div>
    @endif
    @yield('content')
    <script src=""></script>
</body>
</html>
