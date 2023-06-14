@extends('layouts.mylayout')
@section('content')
<div class="d-flex justify-content-center p-2 m-2">
    <div class="card p-4 w-50">
        <div class="d-flex justify-content-between">
            <div class="">
                <h3>Update the informations</h3>
            </div>
        </div>
        <hr class="my-1">
        <form action={{ route('updateAcc', $user->id) }} method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label for="">Name</label>
                    <input type="text" name="name" value={{ $user->name }} class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Phone</label>
                    <input type="text" name="telephone" value={{ $user->telephone }} class="form-control">                    
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Email</label>
                    <input type="email" name="email" value={{ $user->email }} class="form-control">
                </div>
            </div>
            <div>
            <div>
                <label for="">Current Password</label>
                <input  type="password" name="current_password" class="form-control" required>
            </div>
            </div>
            <div>
            <div>
                <label for="new_password">New Password</label>
                <input  type="password" name="new_password" class="form-control" required>
            </div>
            </div>
            <div>
            <div class="my-2 d-flex justify-content-center">
              <button type="submit" class="btn btn-primary col-2">Modifier</button>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection