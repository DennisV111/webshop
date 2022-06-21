@extends('frontend.app')

@section('title', 'Checkout')

@section('content')
    <div class="container-checkout">


        <h1 class="checkout-heading stylish-heading">Checkout</h1>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="checkout-section">
            <div>
                <form action="{{ route('user.store') }}" method="POST" id="payment-form">

                    <h2>Billing Details</h2>
                    <form></form>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="alast_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="" required>
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="street_address">Street Address</label>
                            <input type="text" class="form-control" id="street_address" name="street_address"
                                value="" required>
                        </div>
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value=""
                                required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value=""
                                required>
                        </div>
                    </div> <!-- end half-form -->
                    <br>
                    <form class="d-grid gap-2 ">
                        <button type="submit" class=" btn-primary " action ="">Complete Order</button>
                    </form>
                </form>

                <br>
                <br>

                <div class="mt-32">or</div>
                <div class="mt-32">
                    <h3>Pay with PayPal</h3>

                    <form id="paypal-payment-form" action="">

                        <section>
                            <div class="bt-drop-in-wrapper">
                                <div id="bt-dropin"></div>
                            </div>
                        </section>

                        <input id="nonce" name="payment_method_nonce" type="hidden" />
                        <button class="btn-primary" type="submit"><span>Pay with PayPal</span></button>
                    </form>
                </div>

            </div>



            <div class="checkout-table-container">
                <h2>Your Order</h2>

                @foreach (Cart::content() as $item)
                    <div class="checkout-table">
                        <div class="checkout-table-row">
                            <div class="checkout-table-row-left">
                                <img src="{{ asset('frontend/assets/img/' . $item->model->image_name) }}" alt="item"
                                    class="checkout-table-img">
                                <div class="checkout-item-details">
                                    <div class="checkout-table-item">{{ $item->model->title }}</div>
                                    <div class="checkout-table-author">{{ $item->model->author }}</div>
                                    <div class="checkout-table-price">&euro; {{ $item->model->price }}</div>
                                </div>
                            </div> <!-- end checkout-table -->

                            <div class="checkout-table-row-right">
                                <div class="checkout-table-quantity">{{ $item->quantity }}</div>
                            </div>
                        </div> <!-- end checkout-table-row -->


                    </div> <!-- end checkout-table -->
                @endforeach

                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Subtotal <br>

                        Tax (21%) <br>


                        <span class="checkout-totals-total">Total</span>

                    </div>

                    <div class="checkout-totals-right">
                        &euro; {{ Cart::Subtotal() }} <br>
                        &euro; {{ Cart::tax() }} <br>


                        <span class="checkout-totals-total">&euro; {{ Cart::Total() }}</span>

                    </div>
                </div> <!-- end checkout-totals -->
            </div>

        </div> <!-- end checkout-section -->
    </div>
@endsection
