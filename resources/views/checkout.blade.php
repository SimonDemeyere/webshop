@extends("layouts.front")
@section("content")
    <div class="row">
        <div class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2">
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
                                        @foreach($cartItems as $cartItem)
                                            <tr>
                                                <td><img class="d-none d-lg-block" src="{{ asset('assets/images/drum.jpg') }}" alt="drum">{{ $cartItem->name }}</td>
                                                <td>€{{ $cartItem->price }}</td>
                                                <td>
                                                    <form class="d-flex flex-column" method="post" action="{{ route('checkout.update', $cartItem->rowId) }}">
                                                        @csrf
                                                        {{ method_field('PUT') }}
                                                        <input name="qty" type="text" value="{{ $cartItem->qty }}">
                                                        <input type="submit" class="button" value="Change Quantity">
                                                    </form>

                                                </td>
                                                <td>Remove</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" id="table-total">Total:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" id="table-total" class="font-weight-bold">€{{ Cart::subtotal() }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" id="table-total">+ €{{ Cart::tax() }} BTW</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" id="table-price" class="font-weight-bold">€{{ Cart::total() }}</td>
                                        </tr>

                                    </tfoot>
                                </table>
                                <button class="submit">Next</button>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <section id="block-address">
                            <form action="#">
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
                                        <input type="text" name="street" id="street" {{ Auth::user()->phone ? "value=" . Auth::user()->phone : 'placeholder=Street' }}>
                                    </div>
                                    <div class="input-field">
                                        <label for="housenr"><i class="fas fa-street-view"></i>House nr.</label>
                                        <input type="text" name="housenr" id="housenr" placeholder="88">
                                    </div>
                                    <div class="input-field">
                                        <label for="postbus"><i class="fas fa-city"></i>Postbus</label>
                                        <input type="text" name="postbus" id="postbus" placeholder="8560">
                                    </div>
                                    <div class="input-field">
                                        <label for="city"><i class="fas fa-city"></i>City</label>
                                        <input type="text" name="city" id="city" placeholder="New York">
                                    </div>
                                </div>
                                <div class="input-main submit-field">
                                    <button type="submit" class="submit">Next</button>
                                </div>
                            </form>
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
                            <button type="submit" class="submit">Confirm & pay</button>
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
