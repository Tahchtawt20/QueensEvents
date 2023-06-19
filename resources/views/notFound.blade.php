@extends('layouts.mylayout')
@section('title',__('messages.notFound'))
@section('content')
    <div class="container section-padding">
        <div class="section-content">
            <div class="heading-section text-center">
                <h2>
                    {{ __('messages.notFound') }}
                </h2>
            </div>
        </div>
    </div>
@endsection
