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
                    <h2>
                        {{ __('messages.myevents') }}
                    </h2>
                    <a href="{{ route('reservation') }}">{{ __('messages.reservation') }}</a>
                </div>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr class="table-danger">
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
                            @foreach ($event as $event)
                                <tr>
                                    <th scope='row'>{{ $ide }}</th>
                                    <td><strong>{{ $event->name }}</strong></td>
                                    <td><strong>{{ $event->eventType->name }}</strong></td>
                                    <td><strong>{{ $event->theme }}</strong></td>
                                    <td><strong>{{ $event->date_event }}</strong></td>
                                    <td><strong>{{ $event->time_event }}</strong></td>
                                </tr>
                                @php $ide++ @endphp
                            @endforeach
                        </tbody>
                    </table>

                    {{-- <footer class="card-footer is-centered">
                {{ $event->links() }}
            </footer> --}}
                </div>
            </div>

    </section>
@endsection
