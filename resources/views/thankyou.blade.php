@extends('frontend.app')

@section('title', 'Thank You')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

    <div class="thank-you-section">
        <h1>Thank you for <br> Your Order!</h1>
        <p>A confirmation email was sent</p>

        <div>
            <button class=" btn-primary "><a href="{{ url('/') }}">HOME PAGE</a></button>
        </div>
    </div>




@endsection
