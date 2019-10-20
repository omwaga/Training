@extends('layouts.master')

@section('content')

@include('layouts.menubar')


    <section class="contact section_sapce2">
        <div class="row">
            <div class="container">
                <div class="col-sm-6 col-md-8">
                    <h3 class="text-uppercase margin-bottom-0">Register</h3>
                    <div class="contactForm row m0">
                        <div class="contactForm">
                            <br>
                            
                    <form method="POST" action="{{ route('register') }}" id="submit">
                        @csrf

                            <div class="row">
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-md-right">{{ __('Name:') }}</label>
                                    <input required type="text" name="name" class="name form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Name">


                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label text-md-right">{{ __('Email Address:') }}</label>
                                    <input required type="email" class="email form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                            <label for="password" class="col-form-label text-md-right">{{ __('Password:') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password:') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                                <a href="javascript:{}" onclick="document.getElementById('submit').submit();" class="submit btn btn-primary pull-right">Register</a>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-md-3 col-md-offset-1">
                    <!-- Contact Address Area Start -->
                    <div class="contact-address">
                        <h3 class="text-uppercase">get in touch</h3>

                        <!-- Contact Address Area Start -->
                        <address>
                            <p><i class="fa fa-home"></i> <span>East Station, Dom Address, Dhaka 1024, USA</span></p>
                            <p><i class="fa fa-fax"></i> <span>+1-324-5789647</span></p>
                        </address>
                        <!-- Contact Address Area End -->

                        <!-- Contact Social Links Start -->
                        <div>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-feed"></i></a></li>
                            </ul>
                        </div>
                        <!-- Contact Social Links End -->
                    </div>
                    <!-- Contact Address Area End -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Registration  -->
@endsection
