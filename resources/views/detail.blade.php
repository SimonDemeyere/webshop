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
                    <a href="detail.html" class="mobile-only">
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
                                        <a href="detail.html" class="item-hover-buy">BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </a>
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
                                    <a href="#" class="item-hover-buy">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </article>
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
                                    <a href="#" class="item-hover-buy">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </article>
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
                                    <a href="#" class="item-hover-buy">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </article>
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
                                    <a href="#" class="item-hover-buy">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </article>
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
                                    <a href="#" class="item-hover-buy">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </article>
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
                                    <a href="#" class="item-hover-buy">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </article>
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
                                    <a href="#" class="item-hover-buy">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </article>
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
                                    <a href="#" class="item-hover-buy">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </article>
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
                                    <a href="#" class="item-hover-buy">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </article>
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
                                    <a href="#" class="item-hover-buy">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </article>
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
                                    <a href="#" class="item-hover-buy">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </div>
@endsection

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Musician Store | Shop</title>
</head>
<body>
<header id="header" class="d-lg-flex flex-lg-column justify-content-lg-center">
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <a class="navbar-brand" href="#">Musician Store <span class="d-none d-lg-inline">|</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex justify-content-lg-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mr-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="store.html">Store<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="checkout.html">Checkout</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto mr-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-lg-none" href="#">Shop Cart</a>
                    <ul class="nav navbar-nav navbar-right d-none d-lg-block">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span
                                    class="glyphicon glyphicon-shopping-cart"></span><i class="fas fa-shopping-cart"></i></span></a>
                            <ul class="dropdown-menu dropdown-cart" role="menu">
                                <li>
                                    <div class="cart-img">
                                        <img src="img/drum.jpg" alt="drum">
                                    </div>
                                    <div class="cart-title">
                                        <p>Drum - Wood</p>
                                        <p>€30290,00</p>
                                    </div>
                                    <div class="cart-remove">
                                        <i class="fas fa-trash-alt red"></i>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-img">
                                        <img src="img/drum.jpg" alt="drum">
                                    </div>
                                    <div class="cart-title">
                                        <p>Violin - Wood</p>
                                        <p>€102932,95</p>
                                    </div>
                                    <div class="cart-remove">
                                        <i class="fas fa-trash-alt red"></i>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-img">
                                        <img src="img/drum.jpg" alt="drum">
                                    </div>
                                    <div class="cart-title">
                                        <p>Drum - Wood</p>
                                        <p>€30290,00</p>
                                    </div>
                                    <div class="cart-remove">
                                        <i class="fas fa-trash-alt red"></i>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-img">
                                        <img src="img/drum.jpg" alt="drum">
                                    </div>
                                    <div class="cart-title">
                                        <p>Violin - Wood</p>
                                        <p>€201,23</p>
                                    </div>
                                    <div class="cart-remove">
                                        <i class="fas fa-trash-alt red"></i>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li><a id="cart-link" class="text-center" href="checkout.html">View Cart</a></li>
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
</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1 col-md-10 offset-md-1">
            <section id="block-detail">
                <div class="row">
                    <div id="detail-header" class="col-12">
                        <h2>Drumstel - Wood</h2>
                        <div id="rating-review">
                            <div id="detail-info">
                                <div class="ratings">
                                    <i class="rating-star fas fa-star"></i>
                                    <i class="rating-star fas fa-star"></i>
                                    <i class="rating-star fas fa-star"></i>
                                    <i class="rating-star far fa-star"></i>
                                    <i class="rating-star far fa-star"></i>
                                </div>
                                <div id="review-counter">
                                    <p id="review-count">1 review(s)</p>
                                </div>
                            </div>
                            <div id="content-filters">
                                <p id="content-brand">Mapex</p>
                                <p id="content-specifications">Black, Cymbals</p>
                            </div>
                        </div>
                        <!--                        <p id="stock">In-stock</p>-->
                    </div>
                    <div id="detail-helper">
                        <div id="detail-content" class="">
                            <div id="content-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium ad at, culpa cum cupiditate dolor dolore
                                    est eveniet inventore, iste magnam mollitia nam obcaecati perferendis quas recusandae veniam voluptates?</p>
                            </div>
                        </div>
                        <div id="detail-image" class="">
                            <div id="image-main">
                                <img src="img/drum.jpg" alt="drum">
                            </div>
                            <div id="image-diff">
                                <div class="image-diff-box">
                                    <img src="img/piano.jpg" alt="piano">
                                </div>
                                <div class="image-diff-box">
                                    <img src="img/violin.jpg" alt="violin">
                                </div>
                                <div class="image-diff-box">
                                    <img src="img/drum.jpg" alt="drum">
                                </div>
                            </div>
                        </div>
                        <div id="content-buy" class="">
                            <form action="checkout.html" method="POST">
                                <p id="price">€2192,00</p>
                                <div id="input-quantity">
                                    <div class="input-group-prepend">
                                        <span class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i></span>
                                    </div>
                                    <input type="number" id="qty_input" class="form-control form-control-sm" value="1" min="1">
                                    <div class="input-group-prepend">
                                        <span class="btn btn-dark btn-sm" id="plus-btn"><i class="fa fa-plus"></i></span>
                                    </div>
                                </div>
                                <!--                            <a href="checkout.html" class="submit">ADD TO CART</a>-->
                                <button type="submit" class="submit">ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section id="block-related-products">
                <header>
                    <h2>Related Products</h2>
                </header>
                <div id="carousel-1" class="carousel carousel-fade d-lg-none" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner related-items">
                        <article class="carousel-item active item">
                            <header class="item-header">
                                <img class="item-header-img" src="img/drum.jpg" alt="drum">
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
                                <img class="item-header-img" src="img/guitar.jpg" alt="drum">
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
                                <img class="item-header-img" src="img/piano.jpg" alt="drum">
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
                                <img class="item-header-img" src="img/violin.jpg" alt="drum">
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
                    <div class="related-items d-flex flex-lg-wrap justify-content-lg-between">
                        <article class="item">
                            <header class="item-header">
                                <img class="item-header-img" src="img/drum.jpg" alt="drum">
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
                                        <a href="#" class="item-hover-buy">BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="item">
                            <header class="item-header">
                                <img class="item-header-img" src="img/guitar.jpg" alt="drum">
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
                                        <a href="#" class="item-hover-buy">BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="item">
                            <header class="item-header">
                                <img class="item-header-img" src="img/piano.jpg" alt="drum">
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
                                        <a href="#" class="item-hover-buy">BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="item">
                            <header class="item-header">
                                <img class="item-header-img" src="img/violin.jpg" alt="drum">
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
                                        <a href="#" class="item-hover-buy">BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section id="block-reviews">
                <header>
                    <h2>Reviews</h2>
                </header>
                <div id="reviews-container">
                    <nav id="review-tabs">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-read-tab" data-toggle="tab" href="#nav-read" role="tab" aria-controls="nav-read"
                               aria-selected="true">Show all reviews</a>
                            <a class="nav-item nav-link" id="nav-write-tab" data-toggle="tab" href="#nav-write" role="tab" aria-controls="nav-write"
                               aria-selected="false">Write review</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-read" role="tabpanel" aria-labelledby="nav-read-tab">
                            <article class="review">
                                <header>
                                    <div class="img-holder">
                                        <img src="img/face.jpg" alt="mijnHoofd">
                                    </div>
                                    <h2>Simon Demeyere</h2>
                                </header>
                                <div class="review-content">
                                    <div class="review-ratings" class="ratings">
                                        <i class="rating-star fas fa-star"></i>
                                        <i class="rating-star fas fa-star"></i>
                                        <i class="rating-star fas fa-star"></i>
                                        <i class="rating-star far fa-star"></i>
                                        <i class="rating-star far fa-star"></i>
                                    </div>
                                    <div class="review-writing">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut culpa deserunt eligendi et eum exercitationem harum impedit iste libero maiores minus non omnis, praesentium quibusdam quo repellendus reprehenderit suscipit voluptatibus.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="review">
                                <header>
                                    <div class="img-holder">
                                        <img src="img/face.jpg" alt="mijnHoofd">
                                    </div>
                                    <h2>Pieter Vanbesien</h2>
                                </header>
                                <div class="review-content">
                                    <div class="review-ratings" class="ratings">
                                        <i class="rating-star fas fa-star"></i>
                                        <i class="rating-star fas fa-star"></i>
                                        <i class="rating-star fas fa-star"></i>
                                        <i class="rating-star far fa-star"></i>
                                        <i class="rating-star far fa-star"></i>
                                    </div>
                                    <div class="review-writing">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut culpa deserunt eligendi et eum exercitationem harum impedit iste libero maiores minus non omnis, praesentium quibusdam quo repellendus reprehenderit suscipit voluptatibus.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="nav-write" role="tabpanel" aria-labelledby="nav-write-tab">
                            <form action="" id="review-write">
                                <div class="review-write-holder">
                                    <label for="review-write-subject">Title</label>
                                    <input type="text" id="review-write-subject" name="review-subject">
                                </div>
                                <div class="review-write-holder">
                                    <label for="review-write-rating">Rate your product</label>
                                    <select name="review-rating" id="review-write-rating">
                                        <option value="1">1 Ster</option>
                                        <option value="2">2 Sterren</option>
                                        <option value="3">3 Sterren</option>
                                        <option value="4">4 Sterren</option>
                                        <option value="5">5 Sterren</option>
                                    </select>
                                </div>
                                <div class="review-write-holder">
                                    <label for="review-write-content">Message</label>
                                    <textarea maxlength="250" name="review-content" id="review-write-content" cols="30" rows="10"></textarea>
                                </div>
                                <button type="submit" class="submit">Post review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<footer>
    <div class="row footer-content">
        <div class="col-12 footer-brand">
            <p id="brand">Musician Store</p>
            <p>We create a new world for the musicians.</p>
        </div>
        <div class="col-12 col-lg-5 footer-explore">
            <div class="row">
                <p class="col-12 footer-title">EXPLORE</p>
                <div class="col-6">
                    <ul class="footer-list">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="store.html">Store</a>
                        </li>
                        <li>
                            <a href="detail.html">Detail</a>
                        </li>
                        <li>
                            <a href="checkout.html">Checkout</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="footer-list">
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="#">Register</a>
                        </li>
                        <li>
                            <a href="#">Shop Cart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 footer-place">
            <div class="row">
                <p class="col-12 footer-title">CONTACT</p>
                <div class="col-6">
                    <ul class="footer-list">
                        <li>ADDRESS</li>
                        <li>Streetname 214</li>
                        <li>8567 Cityname</li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="footer-list">
                        <li>INFO</li>
                        <li>Phone: 768/193.103.043</li>
                        <li>Email: info@musicianstore.be</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-2 footer-place">
            <div class="row">
                <div class="col">
                    <p class="footer-title">SOCIAL</p>
                    <ul class="footer-list">
                        <li>FIND US ON</li>
                        <li><i class="fab fa-facebook-f"></i><a href="#"> #musicianstore</a></li>
                        <li><i class="fab fa-instagram"></i><a href="#"> #musicianstore</a></li>
                        <li><i class="fab fa-twitter"></i><a href="#"> #musicianstore</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<button id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
</body>
</html>

