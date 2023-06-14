@extends('layouts.mylayout')
@section('content')
    <!-- Reservation Section -->
        <div class="container">
            <header class="card-header">
                <p class="card-header-title">My Account</p>
            </header>
            <div class="card-content">
                <div class="content">
                    <table class="table is-hoverable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone number</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $user)
                            <tr>
                                <td><strong>{{ $user->name }}</strong></td>
                                <td><strong>{{ $user->telephone}}</strong></td>
                                <td><strong>{{ $user->email }}</strong></td>
                                <td><a href="{{ route('editAcc', $user->id) }}"> <button class="btn text-white"
                                    style="background-color: #63bff0">Edit</button></a></td>
                        <td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
