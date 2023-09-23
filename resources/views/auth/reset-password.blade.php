


@section('content')

        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Login Page</h1>
                <div class="row g-4">




                    <div class="cont">
                        <div class="rapa">
                          <div class="title"> <img class="img-fluid" src="assets/front/img/logo2.jpg" alt=""></div>

                          @include('includes.flash-message')
                          <form method="POST" action="{{ route('password.store') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="row">
                              <i class="fas fa-user"></i>
                              <input type="email" name = "email"   @error('email') is-invalid @enderror  id = "email" :value="old('email', $request->email)" required autofocus autocomplete="username" />

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
                              <input type="submit" value="Reset Password">
                            </div>

                          </form>


                        </div>
                      </div>

                </div>
            </div>
        </div>
        <!-- Category End -->

@endsection
