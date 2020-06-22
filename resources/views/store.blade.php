@extends("layouts.front")
@section("content")
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1">
            <section id="block-shop">
                <header>
                    <h2>Browse all items</h2>
                </header>
                <div id="block-filter">
                    <ul id="filter-list">
                        <li id="instrument-filter" class="filter-list-item">Instrument</li>
                        <li id="brand-filter" class="filter-list-item category-desktop">Merk</li>
                        <li id="price-filter" class="filter-list-item">Prijs</li>
                        <li id="material-filter" class="filter-list-item category-desktop">Materiaal</li>
                        <li id="others-filter" class="filter-list-item category-mobile">Andere filters</li>
                    </ul>
                    <div id="show-filter">
                        <div id="instrument-filter-option">
                            <select name="instruments" id="instruments">
                                <option value="drum">Drum</option>
                                <option value="violin">Violin</option>
                                <option value="piano">Piano</option>
                                <option value="guitar">Guitar</option>
                            </select>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div id="price-filter-option">
                            <!--                        content coming-->
                        </div>
                    </div>
                </div>
                <div id="block-shop-items">
                    @foreach($products as $product)
                        <a href="{{ route('shop.product', $product->id) }}" class="mobile-only">
                            <article class="item mobile-only">
                                <header class="item-header">
                                    <img class="item-header-img" src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                                </header>
                                <div class="item-content">
                                    <p class="item-content-category">Bestselling,
                                        {{ $product->category->category }}
                                    </p>
                                    <h3 class="item-content-title">{{ $product->name }}</h3>
                                    <p class="item-content-price">€{{ $product->price }}</p>
                                    <div class="item-hover">
                                        <div class="item-hover-rating d-flex justify-content-center">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p class="item-hover-description">{{ $product->short_description }}</p>
                                        <div class="item-hover-btns d-flex justify-content-between">
                                            <a href="#"
                                               class="item-hover-favorite d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                                            <a href="{{ route('shop.product', $product->id) }}" class="item-hover-buy">View Product</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                        <article class="item desktop">
                            <header class="item-header">
                                <img class="item-header-img" src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                            </header>
                            <div class="item-content">
                                <p class="item-content-category">Bestselling, {{ $product->category->category }}</p>
                                <h3 class="item-content-title">{{ $product->name }}</h3>
                                <p class="item-content-price">€{{ $product->price }}</p>
                                <div class="item-hover">
                                    <div class="item-hover-rating d-flex justify-content-center">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p class="item-hover-description">{{ $product->short_description }}</p>
                                    <div class="item-hover-btns d-flex justify-content-between">
                                        <a href="#" class="item-hover-favorite d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                                        <a href="{{ route('shop.product', $product->id) }}" class="item-hover-buy">View Product</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="custom-paginate flex justify-content-center">
                    {{ $products->links() }}
                </div>
            </section>
        </div>
    </div>
@endsection
