@extends('layouts.mylayout')

@section('content')
<div class="hero">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 hero-left">
                <h1 class="display-4 mb-5">Wedding Planner <br> & Event Designer</h1>
                <div class="mb-2">
                    <a class="btn btn-primary btn-shadow btn-lg" href="#" role="button">Explore Menu</a>
                    <a class="btn btn-icon btn-lg" href="https://youtu.be/csz_UswEe8c">
                        <span class="lnr lnr-film-play"></span>
                        Play Video
                    </a>
                </div>

                <ul class="hero-info list-unstyled d-flex text-center mb-0">
                    <li class="border-right">
                        <span class="lnr lnr-magic-wand"></span>
                        <h5>
                            Creativity
                        </h5>
                    </li>
                    <li class="border-right">
                        <span class="lnr lnr-dinner"></span>
                        <h5>
                            Fresh Food
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
</div> <!-- Welcome Section -->
<section id="gtco-welcome" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2"
                    style="background-image:  url('{{ asset('pic1.jpg') }}');">

                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">

                        <h2>
                            Welcome to QueensEvents
                        </h2>
                    </div>
                    <div class="pl-lg-5 ml-md-5">
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                            would have been rewritten a thousand times and everything that was left from its origin
                            would be the word "and" and the Little Blind Text should turn around and return to its own,
                            safe country. A small river named Duden flows by their place and supplies it with the
                            necessary regelialia. It is a paradisematic country, in which roasted parts of sentences
                            fly into your mouth.</p>
                        <h3 class="mt-5">Special Recipe</h3>
                        <div class="row">
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ asset('pic2.jpg') }}" />
                                    <h6>Birthday</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ asset('pic3.jpg') }}" />
                                    <h6>circumcision</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="{{ asset('pic4.jpg') }}" />
                                    <h6>Babyshower</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Welcome Section -->
<!-- Special Dishes Section -->
<section id="gtco-special-dishes" class="bg-grey section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">

                <h2>
                    Special Dishes
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">01.</h2>
                    <div class="dishes-text">
                        <h3><span>Beef</span><br> Steak Sauce</h3>
                        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero
                            alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident
                            libero qui eum, corporis esse quos excepturi soluta?</p>
                        <h3 class="special-dishes-price">$15.00</h3>
                        <a href="#" class="btn-primary mt-3">book a table</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="{{ asset('pic5.jpg') }}" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="{{ asset('pic10.jpg') }}" alt="" class="img-fluid shadow w-100">
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
                        <h3><span>Beef</span><br> Steak Sauce</h3>
                        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea
                            vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt
                            provident libero qui eum, corporis esse quos excepturi soluta?</p>
                        <h3 class="special-dishes-price">$15.00</h3>
                        <a href="#" class="btn-primary mt-3">book a table</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="{{ asset('pic14.jpg') }}" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Special Dishes Section -->
<!-- Menu Section -->
<section id="gtco-menu" class="section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Specialties
                        </span>
                        <h2>
                            Our Menu
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Breakfast</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ asset('breakfast-1.jpg') }}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ asset('breakfast-1.jpg') }}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ asset('breakfast-1.jpg') }}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Breakfast</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ asset('breakfast-1.jpg') }}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ asset('breakfast-1.jpg') }}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ asset('breakfast-1.jpg') }}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Breakfast</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ asset('breakfast-1.jpg') }}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ asset('breakfast-1.jpg') }}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{ asset('breakfast-1.jpg') }}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of menu Section -->
<!-- Testimonial Section-->
<section id="gtco-testimonial" class="overlay bg-fixed section-padding"
    style="background-image:  url('{{ asset('testi-bg.jpg') }}');">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Testimony
                </span>
                <h2>
                    Happy Customer
                </h2>
            </div>
            <div class="row">
                <!-- Testimonial -->
                <div class="testi-content testi-carousel owl-carousel">
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.</p>
                        <p class="testi-author">John Doe</p>
                        <p class="testi-desc">CEO of <span>GetTemplates</span></p>
                    </div>
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci non
                            doloribus ut, alias doloremque perspiciatis.</p>
                        <p class="testi-author">Mary Jane</p>
                        <p class="testi-desc">CTO of <span>Unidentity Inc</span></p>
                    </div>
                </div>
                <!-- End of Testimonial -->
            </div>
        </div>
    </div>
</section>
<!-- End of Testimonial Section-->
<!-- Team Section -->
<section id="gtco-team" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Specialties
                </span>
                <h2>
                    Our Team
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="{{ asset('chef-1.jpg') }}" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Aaron Patel</h4>
                            <p class="mb-1">CEO</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="{{ asset('chef-2.jpg') }}" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Daniel Tebas</h4>
                            <p class="mb-1">Chef</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="{{ asset('chef-3.jpg') }}" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Jon Snow</h4>
                            <p class="mb-1">Chef</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Team Section -->
<!-- Reservation Section -->
<section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay"
    style="background-image:  url('{{ asset('reservation-bg.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-content bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Reservation
                        </span>
                        <h2>
                            Book Now
                        </h2>
                    </div>
                    <form method="post" name="contact-us" action="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Name">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber"
                                    placeholder="Phone">
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        data-target="#datetimepicker4" placeholder="Date" />
                                    <div class="input-group-append" data-target="#datetimepicker4"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text">
                                            <span class="lnr lnr-calendar-full"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        data-target="#datetimepicker3" placeholder="Time" />
                                    <div class="input-group-append" data-target="#datetimepicker3"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text">
                                            <span class="lnr lnr-clock"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <select class="form-control" id="selectPerson">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..."></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection