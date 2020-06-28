@extends("layouts.front")
@section('extra-css')
    <script src="https://js.stripe.com/v3/"></script>
@endsection

<?php
\Stripe\Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');

$intent = \Stripe\PaymentIntent::create([
    'amount' => 1099,
    'currency' => 'usd',
    // Verify your integration in this guide by including this parameter
    'metadata' => ['integration_check' => 'accept_a_payment'],
]);
?>
@section("content")
    <div class="row">
        <div class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2">
            @if(Session::has('cart'))
            <section id="block-checkout">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>My products</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="table nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My
                                            Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                           aria-selected="false">Add
                                            address</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                                           aria-selected="false">Choose
                                            payment</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="checkout-nav" class="d-none d-lg-block">
                    <div id="nav-circles" class="nav-tabs" role="tablist">
                        <a class="nav-tab active" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><div
                                class="circle circle1"><i
                                    id="preview" class="fas fa-shopping-cart"></i></div></a>
                        <a class="nav-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><div
                                class="circle circle2"><i
                                    class="fas fa-map-marked-alt"></i></div></a>
                        <a class="nav-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><div
                                class="circle circle3"><i
                                    class="fas fa-credit-card"></i></div></a>
                    </div>
                    <div id="checkout-nav-line"></div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <form action="{{ route('checkout') }}" method="POST" id="payment-form">
                        @csrf
                        {{ csrf_field() }}
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <section id="block-overview">
                                <header>
                                    <h2>Complete your purchase</h2>
                                </header>
                                <div id="overview-products">
                                    <table id="buy-table">
                                        <thead>
                                            <tr>
                                                <th>Item name</th>
                                                <th>Item Price</th>
                                                <th>Quantity</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td><img class="d-none d-lg-block" src="{{ asset('assets/images/drum.jpg') }}" alt="drum"><span class="font-weight-bold">{{ $product['item']['name'] }}</span></td>
                                                <td>€{{ $product['price'] }}</td>
                                                <td>
                                                    <input name="qty" type="text" value="{{ $product['qty'] }}">
                                                </td>
                                                <td><a href="{{ route('product.removeFromCart', $product['item']['id']) }}">Remove</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="4" id="table-total">Total:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" id="table-price" class="font-weight-bold">€{{ $totalPrice }}</td>
                                        </tr>

                                        </tfoot>
                                    </table>
                                    <button class="submit"><span id="pay-with-paypal"></span>Next</button>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <section id="block-address">
                                <div>
                                    <div class="address-header">
                                        <h2>Peronal info</h2>
                                    </div>
                                    <div class="address-name input-main">
                                        <div class="input-field">
                                            <label for="firstname"><i class="fas fa-user"></i>First name*</label>
                                            <input type="text" name="firstname" id="firstname" {{ Auth::user() ? "value=" . Auth::user()->first_name : "placeholder='John'" }}>
                                        </div>
                                        <div class="input-field">
                                            <label for="lastname"><i class="fas fa-user"></i>Last name*</label>
                                            <input type="text" name="lastname" id="lastname" {{ Auth::user() ? "value=" . Auth::user()->last_name : "placeholder='Smith'" }}>
                                        </div>
                                    </div>
                                    <div class="address-personal input-main">
                                        <div class="input-field">
                                            <label for="email"><i class="fas fa-envelope"></i>Email*</label>
                                            <input type="email" name="email" id="email" {{ Auth::user() ? "value=" . Auth::user()->email : "placeholder='demeyere@example.be'" }}>
                                        </div>
                                        <div class="input-field">
                                            <label for="phone"><i class="fas fa-phone"></i>Phone</label>
                                            <input type="text" name="phone" id="phone" {{ Auth::user()->phone ? "value=" . Auth::user()->phone : 'placeholder=0000/11.22.33' }}>
                                        </div>
                                    </div>
                                    <div class="address-header">
                                        <h2>Address</h2>
                                    </div>
                                    <div class="address-address input-main">
                                        <div class="input-field">
                                            <label for="street"><i class="fas fa-street-view"></i>Street</label>
                                            <input type="text" name="street" id="street" {{ Auth::user()->address->street ? "value=" . Auth::user()->address->street : 'placeholder=Street' }}>
                                        </div>
                                        <div class="input-field">
                                            <label for="housenr"><i class="fas fa-street-view"></i>House nr.</label>
                                            <input type="text" name="housenr" id="housenr" placeholder="88" value="{{ Auth::user()->address ? Auth::user()->address->house_number : null }}">
                                        </div>
                                        <div class="input-field">
                                            <label for="postbus"><i class="fas fa-city"></i>Postcode</label>
                                            <input type="text" name="postbus" id="postbus" placeholder="8560" value="{{ Auth::user()->address ? Auth::user()->address->postcode : null }}">
                                        </div>
                                        <div class="input-field">
                                            <label for="city"><i class="fas fa-city"></i>City</label>
                                            <input type="text" name="city" id="city" placeholder="New York" value="{{ Auth::user()->address ? Auth::user()->address->city : null }}">
                                        </div>
                                        <input type="hidden" id="country" value="{{ Auth::user()->address ? Auth::user()->address->country->country : null }}">
                                    </div>
                                    <div class="input-main submit-field">
                                        <button type="submit" class="submit">Next</button>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <section id="block-billing">
                            <header>
                                <h2>Billing info</h2>
                                <p>Choose a payment below</p>
                            </header>
                            <div id="billing-content">
                                <div id="billing-options">
                                    <div class="billing-option">
                                        <i class="fab fa-cc-visa"></i>
                                    </div>
                                    <div class="billing-option">
                                        <i class="fab fa-cc-paypal"></i>
                                    </div>
                                    <div class="billing-option">
                                        <i class="fab fa-cc-discover"></i>
                                    </div>
                                    <div class="billing-option">
                                        <i class="fab fa-cc-mastercard"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group payment-group">
                                <label for="card-element">
                                    Credit or debit card
                                </label>
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>
                            <button type="submit" class="submit">Confirm & pay</button>
                        </section>
                    </div>
                    </form>
                </div>
            </section>
            @else
                <div>
                    <p>Winkelmantje is leeg.</p>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        (function() {
            // Create a Stripe client.
            const stripe = Stripe('pk_test_51Gz0OmBbp3hGwkHM632DJXCgI3EA0m1cUiCBWUoc2lVlXHkIBLi5T5VpXiTghf7oa47zQ4immPJH9igF4D0HGwdw00EThSmall');

            // Create an instance of Elements.
            const elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            const style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create an instance of the card Element.
            const card = elements.create('card',
                {
                    style: style,
                    hidePostalCode: true,
                });

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
                const displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission.
            const form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const firstname = document.getElementById('firstname').value;
                const lastname = document.getElementById('lastname').value;
                const street = document.getElementById('street').value;
                const housenr = document.getElementById('housenr').value;
                const postbus = document.getElementById('postbus').value;
                const city = document.getElementById('city').value;
                const country = document.getElementById('country').value;

                const options = {
                    name: firstname + ' ' + lastname,
                    address_line1: street + ' ' + housenr,
                    address_city: city,
                    address_state: country,
                    address_zip: postbus,
                };

                console.log(document.getElementById('firstname').value + ' ' + document.getElementById('lastname').value);

                stripe.createToken(card, options).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        const errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                const form = document.getElementById('payment-form');
                const hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        })();
    </script>

    {{--<script src="https://www.paypal.com/sdk/js?client-id=Afve9--FcNg3Xzft2izGvCQckL_nLZCJRlTG6Nr1Bl1eqP1wZmaMQ7328nHMQo7MH8aAWMaBNpz6pKf4"></script>
    <script>paypal.Buttons().render('#pay-with-paypal');</script>--}}
@endsection
