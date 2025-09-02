
@extends('layout.main')
  
@section('title')
    <title>Register</title>
@endsection

@section('body')
  <div class="wrapper" >
    <div class="container" style="height: 100%;">
      <div class="sub-container">
        <div class="banner-container">
          <img src="./public/images/lavender.jpg" alt="">
        </div>
        <div class="form-container">
          <div id="heading">
            <h2>User Registration</h2>
            <div class="errors">
            </div>
          </div>
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
          @endif
          <form action="/register" method="POST" id="register-form" enctype='multipart/form-data'>
            @csrf
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" class="form-control" value="{{ old('fullname') }}"
                  placeholder="Enter your full name">
                <span class="error-section" hidden></span>
              </div>

              <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input type="username" id="username" name="username" class="form-control" value="{{ old('username') }}"
                  placeholder="Enter your username">
                <span class="error-section" hidden></span>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="email">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" value="{{ old('email') }}">
                <span class="error-section" hidden></span>
              </div>

              <div class="form-group">
                <label class="form-label" for="phone-number">Phone Number</label>
                <input type="text" id="phone-number" name="phone_number" class="form-control"
                  placeholder="Enter your phone number" value="{{ old('phone_number') }}">
                <span class="error-section" hidden></span>
              </div>

            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control"
                  placeholder="Enter your password">
                <span class="error-section" hidden></span>
              </div>

              <div class="form-group">
                <label class="form-label" for="confirm">Confirm Password</label>
                <input type="password" id="confirm" name="confirm" class="form-control"
                  placeholder="Re-enter your password">
                <span class="error-section" hidden></span>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="gender">Gender</label>
                <select id="gender" name="gender" class="form-control">
                  <option value="">Select your gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
                <span class="error-section" hidden></span>
              </div>
              <div class="form-group">
                <label class="form-label" for="profile_picture">Profile Picture</label>
                <input type="file" id="profile_picture" name="profile_picture" class="form-control" accept="image/*">
                <span class="error-section" hidden></span>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <input type="checkbox" name="agree" id="terms-and-conditions" class="checkbox-control">
                I agree to the terms and conditions
                <span class="error-section" hidden></span>
              </div>
            </div>


            <div class="button form-group">
              <button type="submit" id="my_button">Register</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('footer')
<footer></footer>
@endsection
