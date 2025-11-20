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

    <div class="content masthead bg-primary text-white text-center" id="about">
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



    <div id="skill_div">
        <div id="about">
            <h2>Skills</h2>
            <ul>
                <li>Programming Languages</li>
                <ul>
                    <li>C</li>
                    <li>C++</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                </ul>
                <li>Tools</li>
                <ul>
                    <li>Visual Studio Code</li>
                    <li>Git</li>
                    <li>GitHub</li>
                </ul>
            </ul>
        </div>
    </div>

    <div id="exp_div">
        <h2>Experience</h2>
        <ul>
            <li>Laravel Intern</li>
        </ul>
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
