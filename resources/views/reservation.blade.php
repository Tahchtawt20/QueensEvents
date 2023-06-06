@extends('layouts.mylayout')
@section('content')
    <!-- Reservation Section -->
    <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background:url('{{asset('bufet.jpg')}}') no-repeat fixed center; background-size:cover">
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
                                    <select class="form-control" id="selectPerson">
                                        <option selected disabled>choose an event </option>
                                        <option>event 1</option>
                                    </select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <select class="form-control" id="selectPerson">
                                        <option selected disabled>choose a theme</option>
                                        <option>theme 1</option>
                                    </select>
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
                                    <textarea class="form-control" id="message" name="message" rows="6" placeholder="Extra informations ... "></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">{{ __('Create event') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
