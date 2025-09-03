<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <header>
        @include('layout.partials.navbar')
    </header>
    <aside>
        @include('layout.partials.sidebar')
    </aside>
    <div style="padding-top: 70px; padding-left:300px;">
        @yield('body')
    </div>

</body>

</html>
