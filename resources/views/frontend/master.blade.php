<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/pradeep_portfolio.css') }}">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet" /> --}}
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
            <div id="item4" class="items"><a href="#about">Skills</a></div>
            <div id="item5" class="items"><a href="#about">Experience</a></div>
        </div>

        <div class="items contact_div" id="item4"><a href="#contact">📞Contact</a></div>
    </div>
    @yield('body')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
