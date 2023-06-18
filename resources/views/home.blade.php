@extends('layouts.mylayout')

@section('content')
    <section class="bg-white section-padding">
        <div class="container">
            <div class="row justify-content-center mx-5">
                <h4 style="color:#df9799">
                    {{ __('messages.afterLogin1') . Auth::user()->name . __('messages.afterLogin2') }}</h4>
            </div>
        </div>
    </section>
@endsection
