@extends('layouts.mylayout')
@section('content')
<!-- Menu Section -->
<section id="gtco-menu" class="section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <h2>
                            {{ __('messages.special') }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5"  style="color:#f34949 ">{{ __('messages.cakes') }}</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src={{asset("pic55.jpg")}} alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>{{ __('messages.weddingCake')}}</h4>
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
                            <img class="img-fluid" src={{asset('pic6.jpg')}} alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>{{ __('messages.babyCake')}}</h4>
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
                            <img class="img-fluid" src={{asset('pic300.jpg')}} alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>{{ __('messages.birthCake')}}</h4>
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
                        <h3 class="text-center mb-5" style="color:#f34949 ">{{ __('messages.moroccan') }}</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src={{asset('pic10.jpg')}} alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Pastilla</h4>
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
                            <img class="img-fluid" src={{asset('pic12.jpg')}} alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>{{ __('messages.tajine')}}</h4>
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
                            <img class="img-fluid" src={{asset('pic11.jpg')}} alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>{{ __('messages.chicken')}}</h4>
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
                        <h3 class="text-center mb-5" style="color:#f34949 ">{{ __('messages.juice') }}</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src={{asset('pic345.jpg')}} alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>{{ __('messages.strawberry')}}</h4>
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
                            <img class="img-fluid" src={{asset('pic123.jpg')}} alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>{{ __('messages.tea')}}</h4>
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
                            <img class="img-fluid" src={{asset('pic456.jpg')}} alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>{{ __('messages.kiwi')}}</h4>
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
@endsection