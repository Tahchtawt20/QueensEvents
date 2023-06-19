@extends('layouts.mylayout')
@section('title',__('messages.myevents'))
@section('content')
    <!-- Reservation Section -->
    <style>
        @media (max-width:530px) {
            body {
                background-color: white
            }
        }
    </style>
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
                    <h2>
                        {{ __('messages.myevents') }}
                    </h2>
                    <a href="{{ route('reservation') }}">{{ __('messages.reservation') }}</a>
                </div>
                <div class="row justify-content-center">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr style="color:white;background-color:#f06e6e">
                                <th scope="col">#</th>
                                <th scope="col">{{ __('messages.name') }}</th>
                                <th scope="col">{{ __('messages.eventType') }}</th>
                                <th scope="col">{{ __('messages.theme') }}</th>
                                <th scopr='col'>Date</th>
                                <th scopr='col'>{{ __('messages.time') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $ide=1 @endphp
                            @foreach ($event as $e)
                                <tr>
                                    <th scope='row'>{{ $ide }}</th>
                                    <td><strong>{{ $e->name }}</strong></td>
                                    <td><strong>{{ $e->eventType->name }}</strong></td>
                                    <td><strong>{{ $e->theme }}</strong></td>
                                    <td><strong>{{ $e->date_event }}</strong></td>
                                    <td><strong>{{ $e->time_event }}</strong></td>
                                </tr>
                                @php $ide++ @endphp
                            @endforeach
                        </tbody>
                    </table>

                    <div class="links">
                        {{ $event->links() }}
                    </div>
                </div>
            </div>

    </section>
@endsection
