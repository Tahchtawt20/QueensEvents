@extends('layouts.mylayout')
@section('title',__('messages.reservation'))
@section('content')
    <!-- Reservation Section -->
    <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay"
        style="background:url('{{ asset('bufet.jpg') }}') no-repeat fixed center; background-size:cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-content bg-white p-5 shadow">
                        <div class="heading-section text-center">
                            <span class="subheading">
                                {{ __('messages.reservation') }}
                            </span>
                            <h2>
                                {{ __('messages.bookNow') }}
                            </h2>
                        </div>
                        <form method="post" name="contact-us" action={{ route('storeRes') }}>
                            @csrf
                            <div class="row">

                                <div class="col-md-12 form-group">
                                    <input
                                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                        type="text" name='name' placeholder="{{ __('messages.name') }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 form-group">
                                    <select class="form-control @error('events') is-invalid @enderror" value="{{ old('events') }}" name="events" id="selectPerson" required>
                                        <option disabled selected>{{ __('messages.eventType') }}</option>
                                        @foreach ($event as $event)
                                            <option value="{{ $event->id }}">{{ $event->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('events')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-md-12 form-group">
                                    <select class="form-control @error('themes') is-invalid @enderror" value="{{ old('themes') }}" name="themes" id="selectPerson" required>
                                        <option selected disabled>{{ __('messages.themes') }}</option>
                                        <option>theme 1</option>
                                        <option>{{ __('messages.personalized') }}</option>
                                    </select>
                                    @error('themes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    <div class="input-group date @error('date') is-invalid @enderror" value="{{ old('date') }}" id="datetimepicker4" data-target-input="nearest" >
                                        <input type="date" class="form-control datetimepicker-input" placeholder="Date"
                                             name='date'required min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" />

                                    </div>
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    <div class="input-group date @error('time') is-invalid @enderror" value="{{ old('time') }}" id="datetimepicker3" data-target-input="nearest">
                                        <input type="time" class="form-control datetimepicker-input" placeholder="Time" name='time'
                                            required />

                                    </div>
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary btn-shadow btn-lg" type="submit"
                                        name="submit">{{ __('messages.createEvent') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>


<script>
    var reservedDates = {!! json_encode($reservedDates) !!};
    var dateInput = document.querySelector('input[name="date"]');

    dateInput.addEventListener('input', function () {
        var selectedDate = this.value;
        var isReserved = reservedDates.includes(selectedDate);
        
        if (isReserved) {
            this.setCustomValidity('This date is already reserved.');
        } else {
            this.setCustomValidity('');
        }
    });
</script>
@endsection
