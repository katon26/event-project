@extends('layouts.layoutuser')

@section('title', 'Sign up as Event Organizer')

@section('content')
                <section id="userpage">
                  <div class="userpage-container">
                    <div class="userform card-header yoi">
                      <h2 class="h3 text-center m-0 font-weight-light">Sign Up as Event Organizer</h2>
                      <p>Ready to manage your event tickets easily with our features? Come on join us!</p>
                    </div>


                    <form class="card shadow p-5 border-top-primary" method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label"><i class="fa fa-user" aria-hidden="true"></i></label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Your name" class="form-control form-control-akun @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-2 col-form-label"><i class="fa fa-map-marker" aria-hidden="true"></i></label>

                            <div class="col-md-6">
                                <input id="address" type="text" placeholder="Address" class="form-control form-control-akun @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-2 col-form-label"><i class="fa fa-phone" aria-hidden="true"></i></label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" placeholder="Phone number" class="form-control form-control-akun @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idcard" class="col-md-2 col-form-label"><i class="fa fa-id-card" aria-hidden="true"></i></label>

                            <div class="col-md-6">
                                <input id="idcard" type="text" placeholder="Identity Card" class="form-control form-control-akun @error('idcard') is-invalid @enderror" name="idcard" required autocomplete="idcard">

                                @error('idcard')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group mb-0">
                                <button type="submit" class="btn btn-get-started">
                                    {{ __('Sign up') }}
                                </button>
                        </div>

                    </form>
                  </div>
                </section>
@endsection
