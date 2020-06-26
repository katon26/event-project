@extends('layouts.layoutuser')

@section('title', 'Login - SiteName')

@section('content')

        <section id="userpage">
          <div class="userpage-container">
                <div class="userform card-header">
                  <h2 class="h3 text text-center m-0 font-weight-light">{{ __('Login') }}</h2>
                </div>



                    <form class="card shadow p-5 border-top-primary" method="POST" action="">
                          <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label"><i class="fa fa-envelope" aria-hidden="true"></i></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email address" class="form-control form-control-akun @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label"><i class="fa fa-key" aria-hidden="true"></i></label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="form-control form-control-akun  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-get-started">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <div class="form-group mb-0">
                                <a class="btn btn-link" href="">
                                    Forgot your password?
                                </a>
                        </div>


                    </form>
                </div>
        </section>
@endsection
