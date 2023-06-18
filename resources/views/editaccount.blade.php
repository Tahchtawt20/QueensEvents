@extends('layouts.mylayout')
@section('content')
    <!-- Reservation Section -->
    <section id="gtco-team" class="bg-white section-padding">
        <div class="container">
            <div class="section-content">
                <div class="heading-section text-center">
                    <h2>{{ __('messages.editAccount') }}</h2>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form action={{ route('updateAcc', $user->id) }} method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <label for="name"
                                                class="col-md-4 col-form-label text-md-end">{{ __('messages.name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" required
                                                    name="name" value="{{ $user->name }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-end">{{ __('messages.email') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email"
                                                    required value="{{ $user->email }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="telephone"
                                                class="col-md-4 col-form-label text-md-end">{{ __('messages.phone') }}</label>

                                            <div class="col-md-6">
                                                <input id="telephone" type="tel" class="form-control" name="telephone"
                                                    maxlength="10" required value="{{ $user->telephone }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for=""
                                                class="col-md-4 col-form-label text-md-end">{{ __('messages.currentPass') }}</label>
                                            <div class="col-md-6">
                                                <input type="password" name="current_password"
                                                    class="form-control  @error('password') is-invalid @enderror "
                                                    autocomplete="current-password" required>
                                                @if ($errors->has('current_password'))
                                                    <div class="text-danger">
                                                        {{ __($errors->first('current_password')) }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="new_password"
                                                class="col-md-4 col-form-label text-md-end">{{ __('messages.newPass') }}</label>
                                            <div class="col-md-6">
                                                <input type="password" name="new_password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="my-2 d-flex justify-content-center">
                                            <button type="submit"
                                                class="btn btn-primary btn-shadow btn-lg">{{ __('messages.submit') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
