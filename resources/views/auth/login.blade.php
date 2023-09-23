@extends("layouts.frontend")

@section('head')
<link href="{{ asset('assets/front/css/loginreg.css') }}" rel="stylesheet">
@endsection
@section('content')






        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Login Page</h1>
                <div class="row g-4">




                    <div class="cont">
                        <div class="rapa">
                          <div class="title"> <img class="img-fluid" src="assets/front/img/logo.jpg" alt="" class = "logo-login"></div>

                          @include('includes.flash-message')
                          <form  method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row">
                              <i class="fas fa-user"></i>
                              <input type="email" name = "email"   @error('email') is-invalid @enderror  id = "email" value="{{ old('email') }}" placeholder="Email or Phone" required>

                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>

                            <div class="row">
                              <i class="fas fa-lock"></i>
                              <input type="password" id="password" @error('password') is-invalid @enderror  name="password"placeholder="Password" required>

                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <br>
                            <div class="pass">Remember Me&nbsp;&nbsp;<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <span class="checkmark"></span></div>

                        <div class="pass">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif
                        </div>



                            <div class="row button">
                              <input type="submit" value="Login">
                            </div>



                            <div class="signup-link">
                            <div><span class = "">Dont have an Account? </span><a href="{{ route('register') }}">Register Now</a></div>
                              </div>


                          </form>


                        </div>
                      </div>





                </div>
            </div>
        </div>
        <!-- Category End -->





@endsection
