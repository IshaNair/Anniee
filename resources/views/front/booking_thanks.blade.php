@extends('front.layouts.app')

@section('content')
    <div class="consultationsSection about_anniiee_Section pad80">
        <div class="container">
            <div class="exclusive_session">
                <div class="exclusive_session_content">

                    <div class="exclusive_session_text">
                         @if (Session::has('success'))
                        <p class="alert alert-success">
                            {{ Session::get('success')}}
                        </p>

                        @else
                            <p class="alert alert-success">Thanks for Booking Session. </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
