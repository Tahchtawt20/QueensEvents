@extends('layouts.mylayout')
@section('content')
<!-- Special Dishes Section -->
<section id="gtco-special-dishes" class="bg-grey section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">

                <h2>
                    {{ __('messages.special') }}
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">01.</h2>
                    <div class="dishes-text">
                        <h3><span>Sucre</span><br>cakes </h3>
                        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero
                            alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident
                            libero qui eum, corporis esse quos excepturi soluta?</p>
                        <h3 class="special-dishes-price">$15.00</h3>
                        <a href="#" class="btn-primary mt-3">book a table</a>
                    </div>
                </div>
                <div class="col-lg-6 hero-right">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('pic55.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('pic100.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('pic200.jpg') }}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('pic800.jpg') }}" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('pic300.jpg') }}" alt="Fifth slide">
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
                            <img class="img-fluid" src="{{ asset('pic55.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('pic100.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('pic200.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('pic800.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('pic300.jpg') }}" alt="">
                        </div>


                    </div>
                </div>
            </div>



          

            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="{{ asset('pic10.jpg') }}" alt="Fifth slide" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="{{ asset('pic11.jpg') }}" alt="secound slide" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="{{ asset('pic12.jpg') }}" alt="thired slide" class="img-fluid shadow w-100">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="owl-carousel owl-theme hero-carousel">
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('pic10.jpg') }}" alt="">
                    </div>
                     <div class="item">
                        <img class="img-fluid" src="{{ asset('pic11.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('pic12.jpg') }}" alt="">
                    </div>

                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">02.</h2>
                    <div class="dishes-text">
                        <h3><span>Salmon</span><br> Zucchini</h3>
                        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis,
                            accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus eius.
                            In a quis quibusdam omnis atque vero dolores!</p>
                        <h3 class="special-dishes-price">$12.00</h3>
                        <a href="#" class="btn-primary mt-3">book a table <span><i
                                    class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>




















            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">03.</h2>
                    <div class="dishes-text">
                        <h3><span>Beef</span><br> jus </h3>
                        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea
                            vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt
                            provident libero qui eum, corporis esse quos excepturi soluta?</p>
                        <h3 class="special-dishes-price">$15.00</h3>
                        <a href="#" class="btn-primary mt-3">book a table</a>
                    </div>
                </div>
                <div class="col-lg-6 hero-right">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('pic234.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('pic456.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('pic123.jpg') }}" alt="Third slide">
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
                            <img class="img-fluid" src="{{ asset('pic234.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('pic456.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('pic123.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
</section>
@endsection
