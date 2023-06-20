@extends('layouts.mylayout')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 hero-left">
                    <h1 class="display-4 mb-5">{{ __('messages.title1') }} <br> {{ __('messages.title2') }}</h1>
                    <div class="mb-2">
                        <a class="btn btn-primary btn-shadow btn-lg" href="{{ route('theme') }}"
                            role="button">{{ __('messages.explore') }}</a>
                        <a class="btn btn-icon btn-lg" href="https://youtu.be/csz_UswEe8c">
                            <span class="lnr lnr-film-play"></span>
                            {{ __('messages.video') }}
                        </a>
                    </div>

                    <ul class="hero-info list-unstyled d-flex text-center mb-0">
                        <li class="border-right">
                            <span class="lnr lnr-magic-wand"></span>
                            <h5>
                                {{ __('messages.creativity') }}
                            </h5>
                        </li>
                        <li class="border-right">
                            <span class="lnr lnr-dinner"></span>
                            <h5>
                                {{ __('messages.food') }}
                            </h5>
                        </li>
                        <li class="">
                            <span class="lnr lnr-bubble"></span>
                            <h5>
                                24/7 Support
                            </h5>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-6 hero-right">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('my-hero-1.jpeg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('my-hero-2.png') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('my-hero-3.png') }}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="owl-carousel owl-theme hero-carousel">
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('my-hero-1.jpeg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('my-hero-2.jpeg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('my-hero-3.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Welcome Section -->
    <section id="gtco-welcome" class="bg-white section-padding">
        <br>
        <hr style='width:85%'>
        <br>
        <br>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2"
                        style="background-image:  url('{{ asset('pic1.jpg') }}');">

                    </div>
                    <div class="col-sm-7 py-5 pl-md-0 pl-4">
                        <div class="heading-section pl-lg-5 ml-md-5">

                            <h2>
                                {{ __('messages.welcome') }}
                            </h2>
                        </div>
                        <div class="pl-lg-5 ml-md-5">
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                                would have been rewritten a thousand times and everything that was left from its origin
                                would be the word "and" and the Little Blind Text should turn around and return to its own,
                                safe country. A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of sentences
                                fly into your mouth.</p>
                            <h3 class="mt-5" style="color:#f34949 ">{{ __('messages.events') }}</h3>
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="thumb-menu">
                                        <img class="img-fluid img-cover" src="{{ asset('pic2.jpg') }}" />
                                        <h6 style="color:black">{{ __('messages.birthday') }}</h6>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="thumb-menu">
                                        <img class="img-fluid img-cover" src="{{ asset('pic3.jpg') }}" />
                                        <h6 style="color:black">{{ __('messages.circumcision') }}</h6>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="thumb-menu">
                                        <img class="img-fluid img-cover" src="{{ asset('pic4.jpg') }}" />
                                        <h6 style="color:black">{{ __('messages.gender') }}</h6>
                                    </a>
                                </div>
                            </div>
                            <a href={{route('events')}} class="btn-primary mt-3">{{ __('messages.more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Welcome Section -->

    <!-- Testimonial Section-->
    <section id="gtco-testimonial" class="overlay bg-fixed section-padding"
        style="background-image:  url('{{ asset('testi-bg.jpg') }}');">
        <div class="container">
            <div class="section-content">
                <div class="heading-section text-center">
                    <h2>
                        {{ __('messages.happy') }}
                    </h2>
                </div>
                <div class="row">
                    <!-- Testimonial -->

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Slides -->
                        <div class="carousel-inner testi-carousel testi-content">
                            <div class="carousel-item active">
                                <div class="testi-item">
                                    <i class="testi-icon fa fa-3x fa-quote-left"></i>
                                    <p class="testi-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt mollit anim id est laborum.</p>
                                    <p class="testi-author">John Doe</p>
                                    <p class="testi-desc">CEO of <span>Lorem ipsum</span></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testi-item">
                                    <i class="testi-icon fa fa-3x fa-quote-left"></i>
                                    <p class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Adipisci non doloribus ut, alias doloremque perspiciatis.</p>
                                    <p class="testi-author">Mary Jane</p>
                                    <p class="testi-desc">CTO of <span>Unidentity Inc</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!-- End of Testimonial -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testimonial Section-->
@endsection
