@extends('layouts.mylayout')
@section('content')
    <!-- Reservation Section -->
        <div class="container">
            <header class="card-header">
                <p class="card-header-title">My Events</p>
    
                <a href="{{ route('reservation') }}">Make reservation</a>
            </header>
            <div class="card-content">
                <div class="content">
                    <table class="table is-hoverable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Theme</th>
                                <th>Date Event</th>
                                <th>Time Event</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($event as $event)
                            <tr>
                                <td><strong>{{ $event->name }}</strong></td>
                                <td><strong>{{ $event->eventType->name}}</strong></td>
                                <td><strong>{{ $event->theme }}</strong></td>
                                <td><strong>{{ $event->date_event }}</strong></td>
                                <td><strong>{{ $event->time_event }}</strong></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <footer class="card-footer is-centered">
                {{ $event->links() }}
            </footer> --}}
        </div>

        </div>
    </section>
@endsection
