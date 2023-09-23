@extends("layouts.frontend")

@section('head')
<link href="{{ asset('assets/front/css/loginreg.css') }}" rel="stylesheet">
@endsection
@section('content')






        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Registration Page</h1>
                <div class="row g-4">




                    <div class="cont">
                        <div class="rapa">
                            <div class="title"> <img class="img-fluid" src="assets/front/img/logo.jpg" alt="" class = "logo-login"></div>

                          @include('includes.flash-message')

                          <form method="POST" action="{{ route('register') }}" class = "">
                            @csrf
                        <!-- Name -->
                            <div class="row">
                              <i class="fas fa-user"></i>
                              <input type="text" name = "name"   @error('name') is-invalid @enderror  id = "name" value="{{ old('name') }}" placeholder="Name" required autofocus autocomplete="name">

                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>

                                <!-- Email -->
                            <div class="row">

                                <i style="font-size:18px" class="fa">&#xf0e0;</i>
                                <input type="email" name = "email"   @error('email') is-invalid @enderror  id = "email" value="{{ old('email') }}" placeholder="Email or Phone" required autocomplete="username">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                                <!-- Password -->
                            <div class="row">
                                <i class="fas fa-lock"></i>
                                <input type="password" id="password" @error('password') is-invalid @enderror  name="password"placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                                <!-- Confirm Password -->
                            <div class="row">
                                <i class="fas fa-lock"></i>
                                <input type="password" id="password_confirmation" @error('password_confirmation') is-invalid @enderror  name="password_confirmation"placeholder="Confirm Password" required autocomplete="new-password">

                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="row button">
                              <input type="submit" value="Sign Up">
                            </div>



                            <div class="signup-link">
                            <div><span class = "">Already have an Account? </span><a href="{{ route('login') }}">Sign In</a></div>
                              </div>


                          </form>


                        </div>
                      </div>





                </div>
            </div>
        </div>
        <!-- Category End -->





@endsection
