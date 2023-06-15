@extends('layouts.mylayout')
@section('content')
<!-- Welcome Section -->
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
                        <p>{{ __('messages.more') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection