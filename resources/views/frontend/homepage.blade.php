@extends('frontend.master')
@section('body')
    {{-- <header class="masthead bg-primary text-white text-center">

    </header> --}}

    <div class="content masthead bg-primary text-white text-center" id="home">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="{{ asset('images/profilepic/me.png') }}" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">PRADEEP MANANDHAR</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-heart"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Student - Laravel Developer - Gamer</p>
        </div>
    </div>

    <div class="content page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-heart"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">I am an undergraduate computer science student. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti eos eius officia quis quo laborum, ullam delectus doloremque architecto veritatis suscipit molestiae dignissimos cumque nobis quasi illum quam iure saepe?</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">I am pursing Bachelors' degree from Tribhuvan University. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem temporibus eius ea obcaecati corporis dicta! Dolore vero, minima labore quod ea sequi inventore vel provident, nulla facilis sed consequatur ipsa!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content page-section bg-primary text-white mb-0" id="skills">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Skills</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-bolt" style="color:yellow"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">FRONTEND(HTML, CSS, BOOTSTRAP)</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">PHP(Laravel, Wordpress)</p>
                </div>
            </div>
        </div>
    </div>

    <div id="contact_div">
        <div id="contact">
            <h2>Contact Me</h2>
            <ul>
                <li>E-mail : sayamipradeep5@gmail.com</li>
            </ul>
            <form action="#" method="post">
                @csrf
                <fieldset>
                    <legend>Want to get in contact with me???</legend>
                    <div id="message_div">
                        <div id="fname_div" class="mb-3">
                            <label for="FirstName">First Name:</label><br>
                            <input type="text" placeholder="Enter your first name" name="fname">

                        </div>
                        <div id="lname_div">
                            <label for="LastName">Last Name:</label><br>
                            <input type="text" placeholder="Enter your last name" name="lname">
                        </div>

                        <div id="email_div">
                            <label for="email">E-mail</label><br>
                            <input type="email" id="email" name="email" placeholder="Enter your mail address">
                        </div>
                        <div id="mobile_div">
                            <label for="Mobile Number">Mobile Number:</label><br>
                            <input type="number" placeholder="Enter mobile number" name="mobile" id="mobile"><br>
                        </div>
                        <div id="message">
                            <label for="message">Type your message:</label><br>
                            <textarea name="message" id="message" cols="30" rows="5" placeholder="Type your message here..."></textarea>
                        </div>
                        <button id="submit">Submit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
