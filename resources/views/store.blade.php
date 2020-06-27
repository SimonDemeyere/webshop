@extends("layouts.front")
@section("content")
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1">
            <section id="block-shop">
                <header>
                    <h2>Browse all items</h2>
                </header>
                <p class="d-flex">
                    <button class="btn btn-filter" type="button" data-toggle="collapse" data-target="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters">
                        Filters
                    </button>
                </p>
                <div class="collapse" id="collapseFilters">
                    <div id="block-filter">
                        <ul id="filter-list">
                            <li id="instrument-filter" class="filter-list-item"><span type="button" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">Category</span></li>
                            <li id="brand-filter" class="filter-list-item category-desktop">Merk</li>
                            <li id="price-filter" class="filter-list-item">Prijs</li>
                            <li id="material-filter" class="filter-list-item category-desktop">Materiaal</li>
                            <li id="others-filter" class="filter-list-item category-mobile">Andere filters</li>
                        </ul>
                        <div class="collapse" id="collapseCategory">
                            <div class="d-flex flex-column align-items-center">
                                <p>Sort by Category:</p>
                                <div class="categories">
                                    @foreach($categories as $category)
                                        <button data-filter="{{ $category->id }}" class="btn filter-btn">{{ $category->category }}</button>
                                    @endforeach
                                </div>
                            </div>
                        </div>
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
                </div>
                <div id="block-shop-items">

                </div>
                <div class="custom-paginate flex justify-content-center">
                    {{ $products->links() }}
                </div>
            </section>
        </div>
    </div>
@endsection
