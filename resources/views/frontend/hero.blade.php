<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $user->fullname }}</title>
    <link rel="icon" type="image/jpg" href="{{ asset('storage/' . $user->profile_picture) }}">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <div class="navbar-fixed" id="top">
        <nav class="red darken-2">
            <div class="nav-wrapper">
                <a href="#top" class="brand-logo center">{{ $user->fullname }}</a>
                <ul class="left hide-on-med-and-down">
                    <li class="active"><a href="#">Portfolio</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#experience">Experience</a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light btn red darken-4" href="#contact"><i
                                class="material-icons left">phone</i>Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="card-panel"
        style="height:90vh;background-image:url('/images/portfolio/computer.jpg'); background-size:cover; background-repeat:no-repeat; display:flex; align-items:center; justify-content:center;">
        <span class="red-text text-darken-2 center-align" style="display: block; margin-top: 40px;" id="portfolio">
            <div class="center">
                <h4>I am</h4>
                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="my profile picture"
                    style="height: 15rem; border-radius:100%;">
            </div>
            <h1 class="text-uppercase">{{ $user->fullname }}</h1>
            <h4>{{ $user->introduction }}</h4>
        </span>
    </div>

    {{-- About section --}}
    <div class="card-panel responsive-img"
        style="height:90vh;background-image:url('/images/portfolio/about.jpg'); background-size:cover; background-repeat:no-repeat; display:flex; align-items:center; justify-content:center;"
        id="about">
        <span class="red-text text-darken-2 left-align" style="display: block; margin-top:100px;">
            <h1>About</h1>
            <div class="row">
                <div class="col s12 m6 l4 justify-align">
                    <p>{{ $user->description }}</p>
                </div>
                <div class="col s12 m6 l4 justify-align">
                    <p>I am still learning to become a Laravel developer.</p>
                </div>
            </div>
        </span>
    </div>

    {{-- multiple projects --}}
    <div class="card-panel red-text text-darken-2 "
        style="padding: 20px; height:96vh;background-image:url('/images/portfolio/project2.jpg'); background-size:cover; background-repeat:no-repeat; display:flex; align-items:center; justify-content:center;"
        id="projects">

        <div class="row" style="margin: 0;">
            <section class="center">
                <h1>Projects</h1>
            </section>
            @foreach ($projects as $project)
                <div class="col s12 m6 l4" style="padding: 15px;">
                    <div class="card" style="height: 500px; width: 100%; max-width: 350px; margin: 0 auto;">
                        <div class="card-image waves-effect waves-block waves-light"
                            style="height: 350px; overflow: hidden;">
                            <img class="activator responsive-img" src="{{ asset('storage/' . $project->image) }}"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Project {{ $project->name }}<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="#">Visit the site</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $project->name }}<i
                                    class="material-icons right">close</i></span>
                            <p>{{ $project->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col s12 m6 l4" style="padding: 15px;">
                <div class="card" style="height: 500px; width: 100%; max-width: 350px; margin: 0 auto;">
                    <div class="card-image waves-effect waves-block waves-light"
                        style="height: 350px; overflow: hidden;">
                        <img class="activator responsive-img" src="{{ asset('images/portfolio/2.png') }}"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title<i
                                class="material-icons right">more_vert</i></span>
                        <p><a href="#">Visit the site</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title<i
                                class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col s12 m6 l4" style="padding: 15px;">
                <div class="card" style="height: 500px; width: 100%; max-width: 350px; margin: 0 auto;">
                    <div class="card-image waves-effect waves-block waves-light"
                        style="height: 350px; overflow: hidden;">
                        <img class="activator responsive-img" src="{{ asset('images/portfolio/3.png') }}"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title<i
                                class="material-icons right">more_vert</i></span>
                        <p><a href="#">Visit the site</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title<i
                                class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div> --}}
        </div>



    </div>

    {{-- skills --}}
    <div class="card-panel"
        style="height:90vh;background-image:url('/images/portfolio/skills.jpg'); background-size:cover; background-repeat:no-repeat; display:flex; align-items:center; justify-content:center;"
        id="skills">
        <span class="red-text text-darken-2 center-align" style="display: block; margin-top: 40px;">
            <h1>Skills</h1>
            <div class="row" style="margin: 0 -30px;">
                @foreach ($skills as $skill)
                    <div class="col s12 m6 l4 left-align" style="padding: 20px 30px; width:300px;">
                        <div style="margin-bottom: 50px;">
                            <h5>{{ $skill->skill_category . '(' . $skill->skill_name . ')' }}</h5>
                            @php
                                $percentage = 0;
                                switch ($skill->skill_level) {
                                    case 'beginner':
                                        # code...
                                        $percentage = 33.33;
                                        break;
                                    case 'intermediate':
                                        $percentage = 66.66;
                                        break;

                                    default:
                                        $percentage = 100;
                                        # code...
                                        break;
                                }
                            @endphp
                            <div class="progress" style="height:10px;">
                                <div class="determinate blue" style="width: {{ $percentage }}%;"></div>
                            </div>
                        </div>
                @endforeach

                {{-- <div style="margin-bottom: 50px;">
                        <h5>Backend (Laravel)</h5>
                        <div class="progress" style="height: 10px;">
                            <div class="determinate red" style="width: 45%"></div>
                        </div>
                    </div> --}}
            </div>
            {{-- <div class="col s12 m6 l4 left-align" style="padding: 20px 30px; width:300px;">
                    <div style="margin-bottom: 50px;">
                        <h5>Backend (PHP)</h5>
                        <div class="progress" style="height: 10px;">
                            <div class="determinate green" style="width: 25%"></div>
                        </div>
                    </div>

                    <div style="margin-bottom: 50px;">
                        <h5>Frontend (JavaScript)</h5>
                        <div class="progress" style="height: 10px;">
                            <div class="determinate orange" style="width: 40%"></div>
                        </div>
                    </div>
                </div> --}}
    </div>
    </span>
    </div>

    {{-- experience --}}
    <div class="card-panel"
        style="height:90vh;background-image:url('/images/portfolio/experience1.jpg'); background-size:cover; background-repeat:no-repeat; display:flex; align-items:center; justify-content:left;"
        id="experience">
        <span class="red-text text-darken-2 left-align" style="display: block; margin-top: 40px; margin-left:3rem;">
            <h1>Experience</h1>
            @foreach ($experience as $exp)
                @php
                    $start = Carbon\Carbon::parse($exp->start_date);
                    $end = Carbon\Carbon::parse($exp->end_date);
                    $days = $start->diffInDays($end);
                @endphp
                <div class="left-align">
                    <p style="border-bottom:1px solid red; margin:1rem;">{{ $exp->title }} | {{ $exp->location }} |
                        {{ $exp->organization }} | {{ $days }} days</p>
                    {{-- <p style="border-bottom:1px solid red; margin:1rem;">Codniv | Laravel Developer | 2 years</p>
                <p style="border-bottom:1px solid red; margin:1rem;">Google | Full Stack Developer | 1 year</p> --}}
                </div>
            @endforeach
        </span>
    </div>
    {{-- contact --}}
    <div class="card-panel"
        style="height:90vh;background-image:url('/images/portfolio/contact1.jpg'); background-size:cover; background-repeat:no-repeat; display:flex; align-items:center; justify-content:center;"
        id="contact">
        <span class="red-text text-darken-2 center-align"
            style="display: block; margin-top: 40px; margin-left:20rem; width:40vw;">
            <h1>Contact</h1>
            <div class="row">
                <form class="col s12" method="POST" action="/contact/create">
                    @csrf
                    @if ($errors->any())
                        <div style="color: red">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach ()
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate" name="first_name"
                                value="{{ old('first_name') }}">
                            <label for="icon_prefix" class="red-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate" name="last_name" value="{{ old('last_name') }}">
                            <label for="icon_prefix" class="red-text">Last Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate" name="mobile_num" value="{{ old('mobile_num') }}">
                            <label for="icon_telephone" class="red-text">Mobile Number</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input id="icon_telephone" type="tel" class="validate" name="email" value="{{ old('email') }}">
                            <label for="icon_telephone" class="red-text">Email Address</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="message" value="{{ old('message') }}"></textarea>
                            <label for="textarea1" class="red-text">Message</label>
                        </div>
                        <button class="waves-effect waves-light btn red" type="submit"><i
                                class="material-icons left red">send</i>Submit</button>
                    </div>
                </form>
            </div>
        </span>
    </div>
    {{-- foooter --}}
    <footer class="page-footer red darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Contact Me</h5>
                    <a class="grey-text text-lighten-3" href="#"><i
                            class="material-icons left">mail</i>{{ $user->email }}</a>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">AROUND THE WEB</h5>
                    <div>
                        <a class="grey-text text-lighten-3" href="{{ $user->github }}"
                            style="font-size: 2rem; margin-right: 30px; transition: color 0.3s;">
                            <i class="fab fa-github"></i>
                        </a>
                        <a class="grey-text text-lighten-3" href="{{ $user->linkedin }}"
                            style="font-size: 2rem; transition: color 0.3s;">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2025 {{ $user->fullname }}
                <a class="grey-text text-lighten-4 right" href="#top"><i
                        class="material-icons">keyboard_arrow_up</i>Back to the top</a>
            </div>
        </div>
    </footer>

</body>

</html>
