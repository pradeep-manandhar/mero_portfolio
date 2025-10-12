<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/pradeep_portfolio.css') }}">
</head>

<body>
    <div class="nav_wrapper">
        <div id="nav_name">
            <h1>Pradeep Manandhar</h1>
        </div>
        <div class="nav_container">
            <div id="item1" class="items"><a href="#home">Home</a></div>
            <div id="item2" class="items"><a href="#about">About</a></div>
            <div id="item3" class="items"><a href="#nav_name">Portfolio</a></div>
        </div>

        <div class="items contact_div" id="item4"><a href="#contact">📞Contact</a></div>
    </div>
    @yield('body')
</body>

</html>
