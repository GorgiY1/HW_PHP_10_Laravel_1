<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <title>@yield('title') :: Объявления</title>
    <link rel="stylesheet" href="{{asset('css/style_asp.css')}}">
</head>

<body>
    <div class="form-container">
        @yield('main')
    </div>
</body>

</html>
