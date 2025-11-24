<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materialize</title>

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
                <a href="#!" class="brand-logo center">PRADEEP MANANDHAR</a>
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
                <img src="{{ asset('images/profilepic/pp.jpg') }}" alt=""
                    style="height: 15rem; border-radius:100%;">
            </div>
            <h1 class="text-uppercase">Pradeep Manandhar</h1>
            <h4>Building in laravel, gaming, and designing along the way.</h4>
        </span>
    </div>

    {{-- About section --}}
    <div class="card-panel"
        style="height:90vh;background-image:url('/images/portfolio/about.jpg'); background-size:cover; background-repeat:no-repeat; display:flex; align-items:center; justify-content:center;"
        id="about">
        <span class="red-text text-darken-2 left-align" style="display: block; margin-top:100px;">
            <h1>About</h1>
            <div class="row">
                <div class="col s12 m6 l4 justify-align">
                    <p>I am currently pursing Bachelors' degree in Computer Science from Tribhuvan University.</p>
                </div>
                <div class="col s12 m6 l4 justify-align">
                    <p>I am still learning to become a Laravel developer.</p>
                </div>
            </div>
        </span>
    </div>

    {{-- multiple projects --}}
    <div class="card-panel red-text text-darken-2"
        style="padding: 20px; height:96vh;background-image:url('/images/portfolio/project2.jpg'); background-size:cover; background-repeat:no-repeat; display:flex; align-items:center; justify-content:center;"
        id="projects">
        <div class="row" style="margin: 0;">
            <section class="center">
                <h1>Projects</h1>
            </section>
            <div class="col s12 m6 l4" style="padding: 15px;">
                <div class="card" style="height: 500px; width: 100%; max-width: 350px; margin: 0 auto;">
                    <div class="card-image waves-effect waves-block waves-light"
                        style="height: 350px; overflow: hidden;">
                        <img class="activator" src="{{ asset('images/portfolio/1.png') }}"
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
            </div>

            <div class="col s12 m6 l4" style="padding: 15px;">
                <div class="card" style="height: 500px; width: 100%; max-width: 350px; margin: 0 auto;">
                    <div class="card-image waves-effect waves-block waves-light"
                        style="height: 350px; overflow: hidden;">
                        <img class="activator" src="{{ asset('images/portfolio/2.png') }}"
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
            </div>

            <div class="col s12 m6 l4" style="padding: 15px;">
                <div class="card" style="height: 500px; width: 100%; max-width: 350px; margin: 0 auto;">
                    <div class="card-image waves-effect waves-block waves-light"
                        style="height: 350px; overflow: hidden;">
                        <img class="activator" src="{{ asset('images/portfolio/3.png') }}"
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
            </div>
        </div>
    </div>

    {{-- skills --}}
    <div class="card-panel"
        style="height:90vh;background-image:url('/images/portfolio/skills.jpg'); background-size:cover; background-repeat:no-repeat; display:flex; align-items:center; justify-content:center;"
        id="skills">
        <span class="red-text text-darken-2 center-align" style="display: block; margin-top: 40px;">
            <h1>Skills</h1>
            <div class="row" style="margin: 0 -30px;">
                <div class="col s12 m6 l4 left-align" style="padding: 20px 30px; width:300px;">
                    <div style="margin-bottom: 50px;">
                        <h5>Database (MySQL)</h5>
                        <div class="progress" style="height:10px;">
                            <div class="determinate blue" style="width: 70%"></div>
                        </div>
                    </div>

                    <div style="margin-bottom: 50px;">
                        <h5>Backend (Laravel)</h5>
                        <div class="progress" style="height: 10px;">
                            <div class="determinate red" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4 left-align" style="padding: 20px 30px; width:300px;">
                    <div style="margin-bottom: 50px;">
                        <h5>PHP (Backend)</h5>
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
                </div>
            </div>
        </span>
    </div>

    {{-- experience --}}
    <div class="card-panel"
        style="height:90vh;background-image:url('/images/portfolio/experience1.jpg'); background-size:cover; background-repeat:no-repeat; display:flex; align-items:center; justify-content:left;"
        id="experience">
        <span class="red-text text-darken-2 left-align" style="display: block; margin-top: 40px; margin-left:3rem;">
            <h1>Experience</h1>
            <div class="left-align">
                <p style="border-bottom:1px solid red; margin:1rem;">Codniv | Laravel Developer | 2 years</p>
                <p style="border-bottom:1px solid red; margin:1rem;">Google | Full Stack Developer | 1 year</p>
            </div>

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
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix" class="red-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix" class="red-text">Last Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone" class="red-text">Mobile Number</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone" class="red-text">Email Address</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1" class="red-text">Message</label>
                        </div>
                        <a class="waves-effect waves-light btn red"><i
                                class="material-icons left red">send</i>Submit</a>
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
                    <p class="grey-text text-lighten-4">sayamipradeep5@gmail.com</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <div>
                        <a class="grey-text text-lighten-3" href="#!"
                            style="font-size: 2rem; margin-right: 30px; transition: color 0.3s;">
                            <i class="fab fa-github"></i>
                        </a>
                        <a class="grey-text text-lighten-3" href="#!"
                            style="font-size: 2rem; transition: color 0.3s;">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2025 Pradeep Manandhar
                <a class="grey-text text-lighten-4 right" href="#top"><i class="material-icons">keyboard_arrow_up</i>Back to the top</a>
            </div>
        </div>
    </footer>

</body>

</html>
