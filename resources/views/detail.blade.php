@extends("layouts.front")
@section("content")
    <div class="row">
        <div class="col-10 offset-1 col-md-10 offset-md-1">
            <section id="block-detail">
                <div class="row">
                    <div id="detail-header" class="col-12">
                        <h2>{{ $product->name }}</h2>
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
                                    <p id="review-count">{{ count($comments) . ' review(s)'}}</p>
                                </div>
                            </div>
                            <div id="content-filters">
                                <p id="content-brand">Mapex</p>
                                <p id="content-specifications">Black, Cymbals</p>
                            </div>
                        </div>
                        <p id="stock" class="font-weight-bold">In-stock</p>
                    </div>
                    <div id="detail-helper">
                        <div id="detail-content" class="">
                            <div id="content-description">
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>
                        <div id="detail-image" class="">
                            <div id="image-main">
                                <img src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                            </div>
                            <div id="image-diff">
                                <div class="image-diff-box">
                                    <img src="{{ asset('assets/images/piano.jpg') }}" alt="piano">
                                </div>
                                <div class="image-diff-box">
                                    <img src="{{ asset('assets/images/violin.jpg') }}" alt="violin">
                                </div>
                                <div class="image-diff-box">
                                    <img src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                                </div>
                            </div>
                        </div>
                        <div id="content-buy">
                            <form action="" method="POST">
                                <p id="price">€{{ $product->price }}</p>
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
                                <a href="{{ route('checkout.edit', $product->id) }}" class="btn submit">ADD TO CART</a>
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
                                <img class="item-header-img" src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                            </header>
                            <div class="item-content">
                                <p class="item-content-category">Bestselling, Drums</p>
                                <h3 class="item-content-title">Drumstel - Wood</h3>
                                <!--                                    <p class="item-content-description">Drum van hoge kwaliteit en veel kabaal. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
                                <p class="item-content-price">€879,95</p>
                            </div>
                        </article>
                        @foreach($related_products as $product)
                            <article class="carousel-item item">
                                <header class="item-header">
                                    <img class="item-header-img" src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                                </header>
                                <div class="item-content">
                                    <p class="item-content-category">Bestselling, Drums</p>
                                    <h3 class="item-content-title">{{ $product->name }}</h3>
                                    <p class="item-content-description">{{ $product->short_description }}</p>
                                    <p class="item-content-price">€{{ $product->price }}</p>
                                </div>
                            </article>
                        @endforeach

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
                        @foreach($related_products as $product)
                            <article class="item">
                                <header class="item-header">
                                    <img class="item-header-img" src="{{ asset('assets/images/drum.jpg') }}" alt="drum">
                                </header>
                                <div class="item-content">
                                    <p class="item-content-category">Bestselling, Drums</p>
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
            <section id="block-reviews">
                <header>
                    <h2>Reviews</h2>
                </header>
                <div id="reviews-container">
                    <nav id="review-tabs">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-read-tab" data-toggle="tab" href="#nav-read" role="tab" aria-controls="nav-read"
                               aria-selected="true">Show all reviews</a>
                            @if(Auth::user())
                            <a class="nav-item nav-link" id="nav-write-tab" data-toggle="tab" href="#nav-write" role="tab" aria-controls="nav-write"
                               aria-selected="false">Write review</a>
                            @else
                                <a class="nav-item nav-link" href="{{ route('login') }}">Log in to write review</a>
                            @endif
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-read" role="tabpanel" aria-labelledby="nav-read-tab">
                            @foreach($comments as $comment)
                                <article class="review">
                                    <header class="d-md-flex justify-content-md-between">
                                        <div class="d-flex left-side">
                                            <div class="img-holder">
                                                <img src="{{ $comment->user->photo ? $comment->user->photo->src : 'https://via.placeholder.com/150' }}" alt="mijnHoofd">
                                            </div>
                                            <h2>{{ $comment->user->first_name . ' ' . $comment->user->last_name }}</h2>
                                        </div>
                                        <div class="mt-4  right-side">
                                            <p>{{ $comment->created_at }}</p>
                                        </div>
                                    </header>
                                    <div class="review-content">
                                        <div class="review-ratings ratings">
                                            <i class="rating-star fas fa-star"></i>
                                            <i class="rating-star fas fa-star"></i>
                                            <i class="rating-star fas fa-star"></i>
                                            <i class="rating-star far fa-star"></i>
                                            <i class="rating-star far fa-star"></i>
                                        </div>
                                        <div class="review-title mt-4">
                                            <p class="font-weight-bold">{{ $comment->title }}</p>
                                        </div>
                                        <div class="review-writing">
                                            <p>{{ $comment->message }}</p>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="nav-write" role="tabpanel" aria-labelledby="nav-write-tab">
                            <form action="{{ route('comment') }}" method="post" id="review-write">
                                @csrf
                                {{ method_field('POST') }}
                                <div class="review-write-holder">
                                    <label for="review-write-subject">Title</label>
                                    <input type="text" id="review-write-subject" name="review_title">
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
                                    <textarea maxlength="250" name="review_content" id="review-write-content" cols="30" rows="10"></textarea>
                                </div>
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="submit">Post review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<button id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

@endsection

