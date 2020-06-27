let icon = document.getElementById('search-icon');
if(icon) {
    let input = document.getElementById('searchInput');
    let topBtn = document.getElementById("topBtn");

// Filters DOM
    let instrumentFilter = document.getElementById('instrument-filter');
    let instrumentfilterDiv = document.getElementById('instrument-filter-option');
    let brandFilter = document.getElementById('brand-filter');
    let priceFilter = document.getElementById('price-filter');
    let priceFilterDiv = document.getElementById('price-filter-option');
    let materialFilter = document.getElementById('material-filter');
    let othersFilter = document.getElementById('others-filter');

    icon.onclick = function () {
        if (input.style.display == 'block') {
            input.style.display = 'none';
        } else {
            input.style.display = 'block';
            input.focus();
        }
    };

    if ($('bg-home')) {
        $(window).scroll(function(){
            $('nav').toggleClass('scrolled', $(this).scrollTop() > $(window).height()-70);
        });
    }

    const filterBtnDOMALL = document.getElementsByClassName('filter-btn');
    const blockShop = document.getElementById('block-shop-items');

    if (filterBtnDOMALL) {

        for (let i = 0; i < filterBtnDOMALL.length; i++) {
            const filterBtn = filterBtnDOMALL[i];

            filterBtn.addEventListener('click', e => {
                const activeFiltersALL = document.querySelectorAll('.filter-btn.active');
                let filter = -1;

                console.log(filterBtn.classList.contains('active'));

                if (filterBtn.classList.contains('active')) {
                    filterBtn.classList.remove('active');
                } else {
                    for (let x = 0; x < activeFiltersALL.length; x++) {
                        const activeFilterBtn = activeFiltersALL[x];
                        activeFilterBtn.classList.remove('active');
                    }
                    filterBtn.classList.add('active');
                    filter = filterBtn.dataset.filter
                }

                // const filters = [];

                /*for (let x = 0; x < activeFiltersALL.length; x++) {
                    const filterBtn = activeFiltersALL[x];
                    filters.push(filterBtn.dataset.filter);
                }*/

                // XHR SQL request
                console.log(filterBtn.dataset.filter);
                fetchProducts(filter);
            });
        }
        const categoryId = -1;
        fetchProducts(categoryId);
        function fetchProducts(categoryId) {
            blockShop.innerHTML = '';
            axios.get('/fetch-products/' + categoryId)
                .then(function (response) {
                    // handle success
                    console.log('response:');
                    console.log(response.data.data);
                    shopCards(response.data.data);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .then(function () {
                    // always executed
                });

            const searchInput = document.getElementById('search-input');
            searchInput.addEventListener('change', (e) => {
                const keyword = searchInput.value;

                axios.get('/search/' + keyword)
                    .then(function (response) {
                        // handle success
                        console.log('response:');
                        console.log(response.data);
                        shopCards(response.data);
                    })
            });


        }

        function shopCards(products) {
            const url = location.host + '/assets/';
            console.log(url);
            for(let i = 0; products.length > i; i++) {
                const product = products[i];
                const card =
                    `<a href="/shop/product/${product.id}" class="mobile-only">
                    <article class="item mobile-only">
                        <header class="item-header">
                            <img class="item-header-img" src="/assets/${product.photos.length >= 1 ? product.photos[0].src : 'images/drum.jpg'}" alt="drum">
                        </header>
                        <div class="item-content">
                            <p class="item-content-category">Bestselling,
                                ${product.category.category}
                            </p>
                            <h3 class="item-content-title">${product.name}</h3>
                            <p class="item-content-price">€${product.price}</p>
                            <div class="item-hover">
                                <div class="item-hover-rating d-flex justify-content-center">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p class="item-hover-description">${product.short_description}</p>
                                <div class="item-hover-btns d-flex justify-content-between">
                                    <a href="#"
                                       class="item-hover-favorite d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                                    <a href="/product/${product.id}" class="item-hover-buy">View Product</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </a>
                <article class="item desktop">
                    <header class="item-header">
                        <img class="item-header-img" src="/assets/${product.photos.length >= 1 ? product.photos[0].src : 'images/drum.jpg'}" alt="drum">
                    </header>
                    <div class="item-content">
                        <p class="item-content-category">Bestselling, 
                            ${product.category.category}
                        </p>
                        <h3 class="item-content-title">${product.name}</h3>
                        <p class="item-content-price">€${product.price}</p>
                        <div class="item-hover">
                            <div class="item-hover-rating d-flex justify-content-center">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="item-hover-description">${product.short_description}</p>
                            <div class="item-hover-btns d-flex justify-content-between">
                                <a href="#" class="item-hover-favorite d-flex align-items-center justify-content-center"><i class="fas fa-heart"></i></a>
                                <a href="/product/${product.id}" class="item-hover-buy">View Product</a>
                            </div>
                        </div>
                    </div>
                </article>
                `;
                blockShop.insertAdjacentHTML('beforeend', card);
            }
        }
    }

    // window.onscroll = function() {scrollFunction()};

    /*function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            topBtn.style.display = "block";
        } else {
            topBtn.style.display = "none";
        }
    }

    topBtn.onclick = function () {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    };*/

}
