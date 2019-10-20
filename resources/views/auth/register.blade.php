@extends('layouts.master')

@section('content')

@include('layouts.menubar')


    <section class="contact section_sapce2">
        <div class="row">
            <div class="container">
                <div class="col-sm-6 col-md-8">
                    <h3 class="text-uppercase margin-bottom-0">Contact us</h3>
                    <div class="contactForm row m0">
                        <div class="contactForm">
                            <div class="row">
                                <div class="successMessage alert alert-success alert-dismissible fade in margin-top-30" role="alert" style="display: none">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button>
                                    <strong>Well done !</strong> Thank You! We will contact you shortly.
                                </div>
                            </div>
                            <br>
                            <form role="form" action="form/send.php" method="post" class="contact_form contactForm validateIt" data-email-subject="Contact Form" data-show-errors="true">

                            <div class="row">
                                <div class="form-group">
                                    <input required type="text" name="field[]" class="name form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input required type="email" name="field[]" class="email form-control" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input required type="tel" name="field[]" class="phonenumber form-control" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="4" name="field[]" required placeholder="Your message"></textarea>
                                </div>
                                <button type="submit" class="submit btn btn-block btn-primary">Send Message</button>
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
    <!-- End of Contact  -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
