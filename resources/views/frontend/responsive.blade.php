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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* Label and input focus styles */
        .input-field input:focus + label {
            color: red !important;
        }

        .input-field input:focus {
            border-bottom: 1px solid red !important;
            box-shadow: 0 1px 0 0 red !important;
        }

        .input-field input:focus ~ .prefix {
            color: red !important;
        }

        .input-field textarea:focus + label {
            color: red !important;
        }

        .input-field textarea:focus {
            border-bottom: 1px solid red !important;
            box-shadow: 0 1px 0 0 red !important;
        }

        /* Responsive adjustments */
        @media only screen and (max-width: 600px) {
            .brand-logo {
                font-size: 1.2rem !important;
                left: 50% !important;
                transform: translateX(-50%) !important;
            }

            h1 {
                font-size: 2rem !important;
            }

            h4 {
                font-size: 1.2rem !important;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar-fixed" id="top">
        <nav class="red darken-2">
            <div class="nav-wrapper">
                <a href="#top" class="brand-logo center">PRADEEP MANANDHAR</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
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

    <!-- Mobile Sidenav -->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#">Portfolio</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

    <!-- Hero Section -->
    <div class="card-panel"
        style="min-height:90vh;background-image:url('/images/portfolio/computer.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center; display:flex; align-items:center; justify-content:center; padding:20px;">
        <span class="red-text text-darken-2 center-align" style="display: block; margin-top: 40px;" id="portfolio">
            <div class="center">
                <h4>I am</h4>
                <img src="{{ asset('images/profilepic/pp.jpg') }}" alt=""
                    style="height: 15rem; max-width:100%; border-radius:100%;" class="responsive-img">
            </div>
            <h1 class="text-uppercase">Pradeep Manandhar</h1>
            <h4>Building in laravel, gaming, and designing along the way.</h4>
        </span>
    </div>

    <!-- About Section -->
    <div class="card-panel"
        style="min-height:90vh;background-image:url('/images/portfolio/about.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center; padding:40px 20px;"
        id="about">
        <div class="container">
            <div class="red-text text-darken-2">
                <h1 class="center-align">About</h1>
                <div class="row">
                    <div class="col s12 m6 center-align">
                        <p>I am currently pursing Bachelors' degree in Computer Science from Tribhuvan University.</p>
                    </div>
                    <div class="col s12 m6 center-align">
                        <p>I am still learning to become a Laravel developer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="card-panel red-text text-darken-2"
        style="min-height:96vh;background-image:url('/images/portfolio/project2.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center; padding:40px 20px;"
        id="projects">
        <div class="container">
            <h1 class="center-align">Projects</h1>
            <div class="row">
                <div class="col s12 m6 l4">
                    <div class="card" style="margin: 20px auto; max-width: 350px;">
                        <div class="card-image waves-effect waves-block waves-light"
                            style="height: 250px; overflow: hidden;">
                            <img class="activator responsive-img" src="{{ asset('images/portfolio/1.png') }}"
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

                <div class="col s12 m6 l4">
                    <div class="card" style="margin: 20px auto; max-width: 350px;">
                        <div class="card-image waves-effect waves-block waves-light"
                            style="height: 250px; overflow: hidden;">
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
                </div>

                <div class="col s12 m6 l4">
                    <div class="card" style="margin: 20px auto; max-width: 350px;">
                        <div class="card-image waves-effect waves-block waves-light"
                            style="height: 250px; overflow: hidden;">
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
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="card-panel"
        style="min-height:90vh;background-image:url('/images/portfolio/skills.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center; padding:40px 20px;"
        id="skills">
        <div class="container">
            <div class="red-text text-darken-2 center-align">
                <h1>Skills</h1>
                <div class="row">
                    <div class="col s12 m6">
                        <div style="margin-bottom: 40px; padding: 0 20px;">
                            <h5 class="left-align">Database (MySQL)</h5>
                            <div class="progress" style="height:10px;">
                                <div class="determinate blue" style="width: 70%"></div>
                            </div>
                        </div>

                        <div style="margin-bottom: 40px; padding: 0 20px;">
                            <h5 class="left-align">Backend (Laravel)</h5>
                            <div class="progress" style="height: 10px;">
                                <div class="determinate red" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div style="margin-bottom: 40px; padding: 0 20px;">
                            <h5 class="left-align">PHP (Backend)</h5>
                            <div class="progress" style="height: 10px;">
                                <div class="determinate green" style="width: 25%"></div>
                            </div>
                        </div>

                        <div style="margin-bottom: 40px; padding: 0 20px;">
                            <h5 class="left-align">Frontend (JavaScript)</h5>
                            <div class="progress" style="height: 10px;">
                                <div class="determinate orange" style="width: 40%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Experience Section -->
    <div class="card-panel"
        style="min-height:90vh;background-image:url('/images/portfolio/experience1.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center; padding:40px 20px;"
        id="experience">
        <div class="container">
            <div class="red-text text-darken-2 left-align">
                <h1>Experience</h1>
                <div class="left-align">
                    <p style="border-bottom:1px solid red; padding:1rem 0;">Codniv | Laravel Developer | 2 years</p>
                    <p style="border-bottom:1px solid red; padding:1rem 0;">Google | Full Stack Developer | 1 year</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="card-panel"
        style="min-height:90vh;background-image:url('/images/portfolio/contact1.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center; padding:40px 20px;"
        id="contact">
        <div class="container">
            <div class="red-text text-darken-2 center-align">
                <h1>Contact</h1>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="first_name" type="text" class="validate">
                                <label for="first_name" class="red-text">First Name</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name" class="red-text">Last Name</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">phone</i>
                                <input id="phone" type="tel" class="validate">
                                <label for="phone" class="red-text">Mobile Number</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="validate">
                                <label for="email" class="red-text">Email Address</label>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1" class="red-text">Message</label>
                            </div>
                            <div class="col s12 center-align">
                                <a class="waves-effect waves-light btn red"><i
                                        class="material-icons left">send</i>Submit</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer red darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Contact Me</h5>
                    <a class="grey-text text-lighten-3" href="#"><i class="material-icons left">mail</i>sayamipradeep5@gmail.com</a>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">AROUND THE WEB</h5>
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
                <div class="row">
                    <div class="col s12 m6">
                        © 2025 Pradeep Manandhar
                    </div>
                    <div class="col s12 m6 right-align">
                        <a class="grey-text text-lighten-4" href="#top"><i class="material-icons">keyboard_arrow_up</i>Back to the top</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize sidenav for mobile
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
    </script>
</body>

</html>
