@extends("layouts.frontend")

@section('head')
<link href="{{ asset('assets/front/css/loginreg.css') }}" rel="stylesheet">
@endsection
@section('content')






        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Password Reset</h1>
                <div class="row g-4">


<p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one</p>

                    <div class="cont">
                        <div class="rapa">


                          @include('includes.flash-message')
                          <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="row">
                              <i class="fas fa-envelope"></i>
                              <input type="email" name = "email"   @error('email') is-invalid @enderror  id = "email" value="{{ old('email') }}" placeholder="Email" required autofocus />

                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>


                            <br>






                            <div class="row button">
                              <input type="submit" value="Email Password Rest Link">
                            </div>





                          </form>


                        </div>
                      </div>





                </div>
            </div>
        </div>
        <!-- Category End -->





@endsection
