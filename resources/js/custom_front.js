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
