@extends('layouts.mylayout')
@section('content')
    <!-- Reservation Section -->
    <div class="text-center container">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ __(session('status')) }}
        </div>
    @endif
    </div>
    <section id="gtco-team" class="bg-white section-padding">
        <div class="container">
            <div class="section-content">
                <div class="heading-section text-center">
                    <h2>{{ __('messages.account') }}</h2>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    @foreach ($user as $user)
                                        <div>
                                            <div class="row mb-3">
                                                <label for="name"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('messages.name') }}</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="name"
                                                        disabled value="{{ $user->name }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="email"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('messages.email') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control" name="email"
                                                        disabled value="{{ $user->email }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="telephone"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('messages.phone') }}</label>

                                                <div class="col-md-6">
                                                    <input id="telephone" type="tel" class="form-control" disabled
                                                        name="telephone" value="{{ $user->telephone }}">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="my-2 d-flex justify-content-center">
                                            <a href="{{ route('editAcc', $user->id) }}"
                                                class="btn btn-primary btn-shadow btn-lg">Edit</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
