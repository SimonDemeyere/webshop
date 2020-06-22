@extends("layouts.front")
@section("class__home")
    home
@endsection
@section("header")
    <div class="header-content">
        <h1 id="header-title" class="">THE <span>BEST<br>MUSIC STORE</span></h1>
        <p class="d-none d-lg-block">We create a new world for the musicians. Search through all available instruments. Buy what you want. </p>
        <div class="header-btns d-none d-lg-flex">
            <a class="btn-shop" href="{{ route('shop') }}">SHOP NOW</a>
        </div>
    </div>
    <div class="background-image"></div>
@endsection
@section("class__nav-home")
    bg-home
@endsection
@section("content")
<div class="row">
    <div class="col">
        <section id="block-sold">
            <header>
                <h2>Bestselling Products</h2>
            </header>
            <div id="carousel-1" class="carousel carousel-fade d-lg-none" data-ride="carousel" data-interval="false">
                <div class="carousel-inner sold-items">
                    <article class="carousel-item active item">
                        <header class="item-header">
                            <img class="item-header-img" src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                        </header>
                        <div class="item-content">
                            <p class="item-content-category">Bestselling, Drums</p>
                            <h3 class="item-content-title">Drumstel - Wood</h3>
                            <!--                                    <p class="item-content-description">Drum van hoge kwaliteit en veel kabaal. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
                            <p class="item-content-price">€879,95</p>
                        </div>
                    </article>
                    <article class="carousel-item item">
                        <header class="item-header">
                            <img class="item-header-img" src="{{ asset('assets/images/guitar.jpg') }}" alt="drum">
                        </header>
                        <div class="item-content">
                            <p class="item-content-category">Bestselling, Guitar</p>
                            <h3 class="item-content-title">Guitar - Plastic</h3>
                            <!--                                    <p class="item-content-description">Gitaar van hoge kwaliteit en veel kabaal. </p>-->
                            <p class="item-content-price">€1879,95</p>
                        </div>
                    </article>
                    <article class="carousel-item item">
                        <header class="item-header">
                            <img class="item-header-img" src="{{ asset('assets/images/piano.jpg') }}" alt="drum">
                        </header>
                        <div class="item-content">
                            <p class="item-content-category">Bestselling, Piano</p>
                            <h3 class="item-content-title">Piano - Wood</h3>
                            <!--                                    <p class="item-content-description">Piano van hoge kwaliteit en veel kabaal. Lorem ipsum dolor sit amet, consectetur-->
                            <!--                                        adipisicing elit. Me nog veel meer tekst om te testen.</p>-->
                            <p class="item-content-price">€10879,95</p>
                        </div>
                    </article>
                    <article class="carousel-item item">
                        <header class="item-header">
                            <img class="item-header-img" src="{{ asset('assets/images/violin.jpg') }}" alt="drum">
                        </header>
                        <div class="item-content">
                            <p class="item-content-category">Bestselling, Violin</p>
                            <h3 class="item-content-title">Violin - Wood</h3>
                            <!--                                    <p class="item-content-description">Lorem ipsum dolor sit amet, consectetur-->
                            <!--                                        adipisicing elit. Violin van hoge kwaliteit en veel kabaal.</p>-->
                            <p class="item-content-price">€79,95</p>
                        </div>
                    </article>
                </div>
                <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                    <i class="fas fa-arrow-alt-circle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                    <i class="fas fa-arrow-alt-circle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="d-none d-lg-block">
                <div class="sold-items d-flex flex-lg-wrap justify-content-lg-between">
                    <article class="item">
                        <header class="item-header">
                            <img class="item-header-img" src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                        </header>
                        <div class="item-content">
                            <p class="item-content-category">Bestselling, Drums</p>
                            <h3 class="item-content-title">Drumstel - Wood</h3>
                            <p class="item-content-price">€879,95</p>
                            <div class="item-hover">
                                <div class="item-hover-rating d-flex justify-content-center">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p class="item-hover-description">Drum van hoge kwaliteit en veel kabaal. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.</p>
                                <div class="item-hover-btns d-flex justify-content-between">
                                    <a href="#"
                                       class="item-hover-favorite d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                                    <a href="#" class="item-hover-buy">View Product</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="item">
                        <header class="item-header">
                            <img class="item-header-img" src="{{ asset('assets/images/guitar.jpg') }}" alt="drum">
                        </header>
                        <div class="item-content">
                            <p class="item-content-category">Bestselling, Guitar</p>
                            <h3 class="item-content-title">Guitar - Plastic</h3>
                            <p class="item-content-price">€1879,95</p>
                            <div class="item-hover">
                                <div class="item-hover-rating d-flex justify-content-center">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p class="item-hover-description">Drum van hoge kwaliteit en veel kabaal. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.</p>
                                <div class="item-hover-btns d-flex justify-content-between">
                                    <a href="#"
                                       class="item-hover-favorite d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                                    <a href="#" class="item-hover-buy">View Product</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="item">
                        <header class="item-header">
                            <img class="item-header-img" src="{{ asset('assets/images/piano.jpg') }}" alt="drum">
                        </header>
                        <div class="item-content">
                            <p class="item-content-category">Bestselling, Piano</p>
                            <h3 class="item-content-title">Piano - Wood</h3>
                            <p class="item-content-price">€10879,95</p>
                            <div class="item-hover">
                                <div class="item-hover-rating d-flex justify-content-center">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p class="item-hover-description">Drum van hoge kwaliteit en veel kabaal. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.</p>
                                <div class="item-hover-btns d-flex justify-content-between">
                                    <a href="#"
                                       class="item-hover-favorite d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                                    <a href="#" class="item-hover-buy">View Product</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="item">
                        <header class="item-header">
                            <img class="item-header-img" src="{{ asset('assets/images/violin.jpg') }}" alt="drum">
                        </header>
                        <div class="item-content">
                            <p class="item-content-category">Bestselling, Violin</p>
                            <h3 class="item-content-title">Violin - Wood</h3>
                            <p class="item-content-price">€79,95</p>
                            <div class="item-hover">
                                <div class="item-hover-rating d-flex justify-content-center">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p class="item-hover-description">Drum van hoge kwaliteit en veel kabaal. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.</p>
                                <div class="item-hover-btns d-flex justify-content-between">
                                    <a href="#"
                                       class="item-hover-favorite d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                                    <a href="#" class="item-hover-buy">View Product</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col">
        <section id="block-newest">
            <header>
                <h2>Newest Products</h2>
            </header>
            <div id="carousel-2" class="carousel carousel-fade d-lg-none" data-ride="carousel" data-interval="false">
                <div class="carousel-inner newest-items">
                    <article class="carousel-item active item">
                        <header class="item-header">
                            <img class="item-header-img" src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                        </header>
                        <div class="item-content">
                            <p class="item-content-category">Bestselling, Violins</p>
                            <h3 class="item-content-title">Violin - Wood</h3>
                            <p class="item-content-price">€879,95</p>
                            <div class="item-hover">
                                <div class="item-hover-rating d-flex justify-content-center">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p class="item-hover-description">Drum van hoge kwaliteit en veel kabaal. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit.</p>
                                <div class="item-hover-btns d-flex justify-content-between">
                                    <a href="#"
                                       class="item-hover-favorite d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                                    <a href="#" class="item-hover-buy">View Product</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    @foreach($products as $product)
                        <article class="carousel-item item">
                            <header class="item-header">
                                <img class="item-header-img" src="{{ asset('assets/images/guitar.jpg') }}" alt="drum">
                            </header>
                            <div class="item-content">
                                <p class="item-content-category">Bestselling, Violins</p>
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
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                    <i class="fas fa-arrow-alt-circle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                    <i class="fas fa-arrow-alt-circle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="d-none d-lg-block">
                <div class="newest-items d-flex flex-lg-wrap justify-content-lg-between">
                    @foreach($products as $product)
                        <article class="item">
                            <header class="item-header">
                                <img class="item-header-img" src="{{ asset('assets/images/guitar.jpg') }}" alt="drum">
                            </header>
                            <div class="item-content">
                                <p class="item-content-category">Bestselling, Violins</p>
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
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col">
        <section id="block-categories">
            <header>
                <h2>All Categories</h2>
            </header>
            <div id="carousel-3" class="carousel carousel-slider d-lg-none" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="categories">
                            <!--                                    /*** MOBILE ***/-->
                            <article class="category">
                                <h3 class="category-title">DRUMS</h3>
                                <p class="category-subtext">SEARCH NOW</p>
                                <img src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                            </article>
                            <article class="category">
                                <h3 class="category-title">GUITARS</h3>
                                <p class="category-subtext">SEARCH NOW</p>
                                <img src="{{ asset('assets/images/guitar.jpg') }}" alt="guitar">
                            </article>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="categories">
                            <article class="category">
                                <h3 class="category-title">PIANOS</h3>
                                <p class="category-subtext">SEARCH NOW</p>
                                <img src="{{ asset('assets/images/piano.jpg') }}" alt="piano">
                            </article>
                            <article class="category">
                                <h3 class="category-title">VIOLINS</h3>
                                <p class="category-subtext">SEARCH NOW</p>
                                <img src="{{ asset('assets/images/violin.jpg') }}" alt="violin">
                            </article>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="categories">
                            <article class="category">
                                <h3 class="category-title">COMING SOON</h3>
                                <p class="category-subtext">SEARCH NOW</p>
                                <img src="{{ asset('assets/images/piano.jpg') }}" alt="piano">
                            </article>
                            <article class="category">
                                <h3 class="category-title">COMING SOON</h3>
                                <p class="category-subtext">SEARCH NOW</p>
                                <img src="{{ asset('assets/images/violin.jpg') }}" alt="violin">
                            </article>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev">
                    <i class="fas fa-arrow-alt-circle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-3" role="button" data-slide="next">
                    <i class="fas fa-arrow-alt-circle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="categories-articles d-none d-lg-block">
                <div class="categories d-lg-flex flex-wrap">
                    <a href="#"><article class="category">
                            <h3 class="category-title">DRUMS</h3>
                            <p class="category-subtext">SEARCH NOW</p>
                            <img src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                        </article></a>
                    <a href="#"><article class="category">
                            <h3 class="category-title">GUITARS</h3>
                            <p class="category-subtext">SEARCH NOW</p>
                            <img src="{{ asset('assets/images/guitar.jpg') }}" alt="guitar">
                        </article></a>
                    <a href="#"><article class="category">
                            <h3 class="category-title">PIANOS</h3>
                            <p class="category-subtext">SEARCH NOW</p>
                            <img src="{{ asset('assets/images/piano.jpg') }}" alt="piano">
                        </article></a>
                    <a href="#"><article class="category">
                            <h3 class="category-title">VIOLINS</h3>
                            <p class="category-subtext">SEARCH NOW</p>
                            <img src="{{ asset('assets/images/violin.jpg') }}" alt="violin">
                        </article></a>
                    <a href="#"><article class="category">
                            <h3 class="category-title">COMING SOON</h3>
                            <p class="category-subtext">SEARCH NOW</p>
                            <img src="{{ asset('assets/images/piano.jpg') }}" alt="piano">
                        </article></a>
                    <a href="#"><article class="category">
                            <h3 class="category-title">COMING SOON</h3>
                            <p class="category-subtext">SEARCH NOW</p>
                            <img src="{{ asset('assets/images/violin.jpg') }}" alt="violin">
                        </article></a>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
