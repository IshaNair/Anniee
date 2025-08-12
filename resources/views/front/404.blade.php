@extends('front.layouts.app')

@section('content')
    <div class="consultationsSection about_anniiee_Section pad80">
        <div class="container">
            <div class="error404">
                <h1>Oops!</h1>
                <img src="{{ asset('front/images/404Error.png') }}" alt="404Error">
                <a href="{{route('front.home')}}" class="button"><span>Back to home</span></a>
            </div>
        </div>
    </div>

@endsection
