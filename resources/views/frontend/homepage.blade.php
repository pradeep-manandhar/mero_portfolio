@extends('frontend.master')
@section('body')
    <!-- HERO SECTION -->
    <div class="masthead" id="home">
        <div class="container d-flex align-items-center flex-column">
            <p>I'm</p>
            <h1 class="masthead-heading text-uppercase mb-0">PRADEEP MANANDHAR</h1>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <p class="masthead-subheading font-weight-light mb-0">
                Student - Laravel Developer - Gamer
            </p>

            <img class="masthead-avatar mb-5" src="{{ asset('images/profilepic/pp.jpg') }}" alt="Profile Image" />
        </div>
    </div>

    <!-- ABOUT SECTION -->
    <div class="content page-section bg-primary text-white mb-0" id="about"
        style="background-image:url('/images/lavender.jpg')">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-heart"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">
                        I am an undergraduate computer science student. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Deleniti eos eius officia quis quo laborum, ullam delectus doloremque architecto veritatis
                        suscipit molestiae dignissimos cumque nobis quasi illum quam iure saepe?
                    </p>
                </div>

                <div class="col-lg-4 me-auto">
                    <p class="lead">
                        I am pursuing a Bachelor's degree from Tribhuvan University. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Rem temporibus eius ea obcaecati corporis dicta! Dolore vero, minima labore quod
                        ea sequi inventore vel provident, nulla facilis sed consequatur ipsa!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- SKILLS SECTION -->
    <div class="content page-section bg-primary text-white mb-0" id="skills">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-white">Skills</h2>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-bolt" style="color:yellow"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">FRONTEND (HTML, CSS, BOOTSTRAP)</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">PHP (Laravel, Wordpress)</p>
                </div>
            </div>
        </div>
    </div>

    {{-- projects --}}
    <div class="content" id="projects">
        <div class="container">
            <h2 class="page-section-heading">Projects</h2>

            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-bolt" style="color:yellow"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            {{-- <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{asset('images/lavender.jpg')}}" alt="Avatar" class="" style="height: 250px; object-fit: cover; padding:1rem;">
                    <div class="card-body">
                        <h4 class="card-title"><b>Zillion</b></h4>
                        <p class="card-text">E-commerce Website</p>
                    </div>
                </div>
            </div>
        </div> --}}

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{asset('images/lavender.jpg')}}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Project1<i
                            class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i
                            class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>

        </div>



    </div>
    <!-- CONTACT SECTION -->
    <div id="contact_div">
        <div id="contact">
            <h2>Contact Me</h2>
            <ul>
                <li>E-mail : sayamipradeep5@gmail.com</li>
            </ul>

            <form action="#" method="post">
                @csrf
                <fieldset>
                    <legend>Want to get in contact with me?</legend>

                    <div id="message_div">
                        <div id="fname_div" class="form-group mb-3">
                            <label>First Name:</label>
                            <input type="text" placeholder="Enter your first name" name="fname" class="form-control">
                        </div>

                        <div id="lname_div" class="mb-3">
                            <label>Last Name:</label>
                            <input type="text" placeholder="Enter your last name" name="lname">
                        </div>

                        <div id="email_div" class="mb-3">
                            <label>E-mail:</label>
                            <input type="email" name="email" placeholder="Enter your email">
                        </div>

                        <div id="mobile_div" class="mb-3">
                            <label>Mobile Number:</label>
                            <input type="number" placeholder="Enter mobile number" name="mobile">
                        </div>

                        <div id="message" class="mb-3">
                            <label>Type your message:</label>
                            <textarea name="message" cols="30" rows="5" placeholder="Type your message here..."></textarea>
                        </div>

                        <button id="submit">Submit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
