@extends('layouts.mylayout')
@section('title',__("messages.events"))
@section('content')
    <!-- Special Dishes Section -->    
    <section id="gtco-special-dishes" class="bg-white section-padding">
        <div class="container">
            <div class="section-content">
                <div class="heading-section text-center">

                    <h2>
                        {{ __('messages.events') }}
                    </h2>
                </div>
               
                <div class="row mt-5">
                    
                    <div class="col-lg-5 col-md-6 align-self-center py-5">
                        <h2 class="special-number">01.</h2>
                        <div class="dishes-text">
                            <h3><span>{{ __('messages.wedding') }}</h3></span>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero
                                alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident
                                libero qui eum, corporis esse quos excepturi soluta?</p>
                            <h3 class="special-dishes-price">20 000.00DH</h3>
                            <a href={{route('reservation')}} class="btn-primary mt-3">{{ __('messages.bookNow') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-6 hero-right">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <br>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('picWed11.jpg') }}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('picWed22.jpg') }}" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('picWed33.jpg') }}" alt="Fourth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                        <div id="carouselControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('picCer11.jpg') }}" alt="First dish">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('picCer22.jpg') }}" alt="Second dish">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('picCer33.jpg') }}" alt="Third dish">
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                        <h2 class="special-number">02.</h2>
                        <div class="dishes-text">
                            <h3><span> {{ __('messages.grad') }}</span></h3>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis,
                                accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus eius.
                                In a quis quibusdam omnis atque vero dolores!</p>
                            <h3 class="special-dishes-price">4000.00 DH</h3>
                            <a href={{route('reservation')}} class="btn-primary mt-3">{{ __('messages.bookNow') }}</a>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-5 col-md-6 align-self-center py-5">
                        <h2 class="special-number">03.</h2>
                        <div class="dishes-text">
                            <h3><span>{{__('messages.bap')}}</span></h3>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea
                                vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt
                                provident libero qui eum, corporis esse quos excepturi soluta?</p>
                            <h3 class="special-dishes-price">6000.00 DH</h3>
                            <a href={{route('reservation')}} class="btn-primary mt-3">{{ __('messages.bookNow') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                        <div id="carouselJuiceControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('sb1.jpg') }}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('sb2.jpg') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('sb3.jpg') }}" alt="Third slide">
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselJuiceControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselJuiceControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
