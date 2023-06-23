@extends('layouts.mylayout')
@section('title', __('messages.reservation') . 's')
@section('content')
    <!-- Reservation Section -->
    <style>
        @media (max-width:530px) {
            body {
                background-color: white
            }
        }
    </style>
    <section id="gtco-team" class="bg-white section-padding">
        <div class="container">
            <div class="section-content">
                <div class="heading-section text-center">
                    <h2>
                        {{ __('messages.reservation') }}s
                    </h2>
                </div>
                <div class="card">
                    <div style='height:400px'>
                        <canvas id="pieChart"></canvas>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Retrieve the necessary data from your Laravel backend
                            const data = {!! json_encode($data) !!};

                            var labels = data.map(function(item) {
                                switch (item.name) {
                                    case 'messages.wedding':
                                        return 'Wedding';
                                        break
                                    case 'messages.grad':
                                        return 'Graduation'
                                        break
                                    case 'messages.birthday':
                                        return 'Birthday'
                                        break
                                    case 'messages.bap':
                                        return 'Moroccan Baptism'
                                        break
                                    case 'messages.circumcision':
                                        return 'Circumcision'
                                        break
                                    case 'messages.gender':
                                        return 'Gender Reveal'
                                        break
                                }

                            });

                            var percentages = data.map(function(item) {
                                return item.percentage;
                            });

                            var ctx = document.getElementById('pieChart').getContext('2d');
                            var chart = new Chart(ctx, {
                                type: 'pie',
                                data: {
                                    labels: labels,
                                    datasets: [{
                                        data: percentages,
                                        backgroundColor: [
                                            "#ffeaea",
                                            "#ffd0d0",
                                            "#ffb7b7",
                                            "#ff9d9d",
                                            "#ff8484",
                                            "#ff6a6a",
                                            "#ff5151",
                                        ],
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: false,
                                }
                            });
                        });
                    </script>
                </div>
                <br>
                <div class="row d-flex justify-content-center">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr style="color:white;background-color:#f06e6e">
                                <th scope="col">#</th>
                                <th scope="col">{{ __('messages.name') }}</th>
                                <th scope="col">{{ __('messages.eventType') }}</th>
                                <th scope="col">{{ __('messages.price') }}</th>
                                <th scope="col">Client</th>
                                <th scope="col">{{ __('messages.theme') }}</th>
                                <th scopr='col'>Date</th>
                                <th scopr='col'>{{ __('messages.time') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $ide=1 @endphp
                            @forelse ($events as $event)
                                <tr>
                                    <th>{{ $ide }}</th>
                                    <td><strong>{{ $event->name }}</strong></td>
                                    <td><strong>{{ __($event->eventType->name) }}</strong></td>
                                    <td><strong>{{ $event->eventType->price }}DH</strong></td>
                                    <td><strong>{{ $event->user->name }}</strong></td>
                                    <td><strong>{{ $event->theme }}</strong></td>
                                    <td><strong>
                                            @if ($event->date_event == '2000-01-01')
                                                <span class="text-danger">{{ __('messages.canceled') }}</span>
                                            @else
                                                {{ $event->date_event }}
                                            @endif
                                        </strong></td>
                                    <td><strong>
                                            @if ($event->time_event == '00:00:00')
                                                <span class="text-danger">{{ __('messages.canceled') }}</span>
                                            @else
                                                {{ $event->time_event }}
                                            @endif
                                        </strong></td>
                                </tr>
                                @php $ide++ @endphp
                            @empty
                                no results
                            @endforelse
                        </tbody>
                    </table>

                    <div class="links">
                        {{ $events->links() }}
                    </div>

                </div>
            </div>

    </section>
@endsection
