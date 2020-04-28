// switch subcategory
let subCategory_switch = document.getElementById('subcategory_switch');
let divParentCategories = document.getElementById('parent_categories');

subCategory_switch.onclick = function() {
    if(subCategory_switch.checked === true) {
        divParentCategories.style.display = 'block';
    } else {
        divParentCategories.style.display = 'none';
    }
};


