<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('baslik')</title>
    <style>
        .main {
            background-color: yellow;
            width: 800px;
            height: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="main">
        <div>Header</div>
        <div>
            @section('content')

            @show
        </div>
        <div>footer @yield('footer')</div>
    </div>
</body>

</html>
