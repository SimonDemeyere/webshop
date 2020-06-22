<nav class="navbar navbar-expand-lg navbar-dark @yield("class__nav-home")">
    <a class="navbar-brand" href="#">Musician Store <span class="d-none d-lg-inline">|</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-lg-flex justify-content-lg-between" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mr-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('shop') }}">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/checkout">Checkout</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto mr-lg-0">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endguest
            <li class="nav-item">
                <a class="nav-link d-lg-none" href="{{ route('checkout.index') }}">Shop Cart</a>
                <ul class="nav navbar-nav navbar-right d-none d-lg-block">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span
                                class="glyphicon glyphicon-shopping-cart"></span><i class="fas fa-shopping-cart"></i></a>
                        <ul class="dropdown-menu dropdown-cart" role="menu">
                            @if(isset($cartItems))
                                @foreach($cartItems as $cartItem)
                                    <li>
                                        <div class="cart-img">
                                            <img src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                                        </div>
                                        <div class="cart-title">
                                            <p>{{ $cartItem->name }}</p>
                                            <p>€{{ $cartItem->price }}</p>
                                        </div>
                                        <div class="cart-remove">
                                            <i class="fas fa-trash-alt red"></i>
                                        </div>
                                    </li>
                                @endforeach
                                <li class="divider"></li>
                                <li><a id="cart-link" class="text-center" href="{{ route('checkout.index') }}">View Cart</a></li>
                            @else
                                <li>No items in cart.</li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item d-none d-lg-inline-block search">
                <i id="search-icon" class="d-none d-lg-block fas fa-search"></i>
                <input type="text" id="searchInput" class="" placeholder="Search..">
            </li>
        </ul>
    </div>
</nav>
