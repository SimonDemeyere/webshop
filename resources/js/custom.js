// Wachten tot DOM geladen is
document.addEventListener('DOMContentLoaded', e => {
    console.log('Running');
    //Get DOM elements
    const subCategory_switch    = document.getElementById('subcategory_switch');
    const parentCategoriesDOM   = document.getElementById('parent_category');
    const childCategoriesDOM    = document.getElementById('child_category');
    let allChildSelectDOM;
    let divParentCategories     = document.getElementById('categories');
    let select;

    if(subCategory_switch) {
        subCategory_switch.addEventListener('click', () => {
            divParentCategories.style.display = subCategory_switch.checked ? 'block' : 'none';
        })
    }

    if(parentCategoriesDOM) {
        parentCategoriesDOM.addEventListener('change', e => {
            const   src = e.target,
                id = src.options[src.selectedIndex].value,
                xhr = new XMLHttpRequest(),
                url = `getChildCategories/${id}`;
            deleteAllNextSelects(`select-0`);
            // Get data from PHP file
            if(id) {
                xhr.open('GET', url, true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onreadystatechange = () => {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Get response text en parse to JSON
                        const data = JSON.parse(xhr.responseText);
                        console.log('parent: data');
                        console.log(data);

                        // Delete all elements from <select>
                        // Nodig wanneer je van categorie wijzigt zo dat de oude values (van de eerst gekozen categorie) er niet meer bij staan
                        const L = childCategoriesDOM.options.length - 1;
                        for(let i = L; i >= 1; i--) {
                            childCategoriesDOM.remove(i);
                        }

                        // Loop over json array
                        for (let i = 0; i < data.length; i++) {
                            const childCategory = data[i];
                            console.log('parent: childCategory');
                            console.log(childCategory);

                            const id    = childCategory.id;
                            const name  = childCategory.category;

                            // Create option element
                            const option = document.createElement('option');
                            option.value = id;
                            option.text  = name;

                            // Add element to <select>
                            childCategoriesDOM.appendChild(option);
                        }
                    }
                };
                xhr.send();
            }
        });

        childCategoriesDOM.addEventListener('change', e => {
            const   src = e.target,
                id = src.options[src.selectedIndex].value,
                xhr = new XMLHttpRequest(),
                url = `getChildCategories/${id}`;

            deleteAllNextSelects('select-0');

            if(id) {
                // Get data from PHP file
                xhr.open('GET', url, true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onreadystatechange = () => {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Get response text en parse die naar JSON
                        let data = JSON.parse(xhr.responseText);

                        console.log('child: data');
                        console.log(data);

                        if(data) {
                            const dynamicChilds = document.getElementById('dynamic_childs');
                            const selectcount = document.getElementsByClassName('subchild_categories').length;

                            const dynamicSelect = document.createElement('select');
                            dynamicSelect.name = `subchild_categories[]`;
                            dynamicSelect.classList.add('subchild_categories');
                            dynamicSelect.classList.add('form-control');
                            dynamicSelect.classList.add('mb-4');
                            dynamicSelect.dataset.selectcount= `select-${selectcount + 1}`;

                            // Delete alle elements from <select>
                            // Nodig wanneer je van categorie wijzigt zo dat de oude values (van de eerst gekozen categorie) er niet meer bij staan
                            const L = dynamicSelect.options.length - 1;
                            for(let i = L; i >= 1; i--) {
                                dynamicSelect.remove(i);
                            }

                            // Create empty value
                            const emptyOption = document.createElement('option');
                            emptyOption.text = 'Select subcategory (No selected)';
                            emptyOption.value = '';
                            emptyOption.selected = true;
                            dynamicSelect.appendChild(emptyOption);

                            // <option selected value>Select subcategory (No selected)</option>

                            // Loop over json array
                            for (let i = 0; i < data.length; i++) {
                                const childCategory = data[i];
                                console.log('child: childCategory');
                                console.log(childCategory);

                                const id    = childCategory.id;
                                const name  = childCategory.category;

                                // Create option element
                                const option = document.createElement('option');
                                option.value = id;
                                option.text  = name;

                                // Add element to <select>
                                dynamicSelect.appendChild(option);
                            }
                            dynamicChilds.appendChild(dynamicSelect);
                            allChildSelectDOM = document.getElementsByClassName('subchild_categories');
                            findSelects();
                        }
                    }
                };
                xhr.send();
            } else {

            }
        });
    }

    function findSelects() {
        select = document.getElementsByClassName('subchild_categories');
        for (let i = 0; i < select.length; i++) {
            const currentSelect = select[i];
            currentSelect.addEventListener('change', e => {
                console.log('test: added AddEventListener');
                fetchFromPHP(currentSelect);
            })
        }
        console.log('findSelects: ');
        console.log(select);
    }

    function fetchFromPHP(node) {
        const   id = node.options[node.selectedIndex].value,
                selectId = node.dataset.selectcount;
                xhr = new XMLHttpRequest(),
                url = `getChildCategories/${id}`;

        deleteAllNextSelects(selectId);

        if (id) {
            const dynamicChilds = document.getElementById('dynamic_childs');
            // active on live
            // const loadingHTML = `<img id="loading_img" src="/assets/images/loading.svg">`;
            // dynamicChilds.insertAdjacentHTML('beforeend', loadingHTML);

            // Get data from PHP file
            xhr.open('GET', url, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onreadystatechange = () => {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Get response text en parse die naar JSON
                    let data = JSON.parse(xhr.responseText);

                    if (data) {

                        const selectcount = document.getElementsByClassName('subchild_categories').length;

                        const dynamicSelect = document.createElement('select');
                        dynamicSelect.name = `subchild_categories[]`;
                        dynamicSelect.classList.add('subchild_categories');
                        dynamicSelect.classList.add('form-control');
                        dynamicSelect.classList.add('mb-4');
                        dynamicSelect.dataset.selectcount = `select-${selectcount + 1}`;

                        // Delete alle elements from <select>
                        // Nodig wanneer je van categorie wijzigt zo dat de oude values (van de eerst gekozen categorie) er niet meer bij staan
                        const L = dynamicSelect.options.length - 1;
                        for (let i = L; i >= 1; i--) {
                            dynamicSelect.remove(i);
                        }

                        // Create empty value
                        const emptyOption = document.createElement('option');
                        emptyOption.text = 'Select subcategory (No selected)';
                        emptyOption.value = '';
                        emptyOption.selected = true;
                        dynamicSelect.appendChild(emptyOption);

                        // <option selected value>Select subcategory (No selected)</option>

                        // Loop over json array
                        for (let i = 0; i < data.length; i++) {
                            const childCategory = data[i];

                            const id = childCategory.id;
                            const name = childCategory.category;

                            // Create option element
                            const option = document.createElement('option');
                            option.value = id;
                            option.text = name;

                            // Add element to <select>
                            dynamicSelect.appendChild(option);
                        }
                        dynamicChilds.appendChild(dynamicSelect);
                        allChildSelectDOM = document.getElementsByClassName('subchild_categories');
                        findSelects();
                        // active on live
                        // dynamicChilds.removeChild(document.getElementById("loading_img"));
                    }
                }
            };

        }
        xhr.send();
    }

    function deleteAllNextSelects(selectNumber) {
        const number = selectNumber.split('-')[1];
        console.log(number);
        if(number == 0) {
            document.getElementById('dynamic_childs').innerHTML = '';
        } else if(number > 0) {
            const allSelects = document.getElementsByClassName('subchild_categories');
            for(let i = 0; i < allSelects.length; i++) {
                const select = allSelects[i];
                const selectNumber = select.dataset.selectcount.split('-')[1];
                if(selectNumber > number) {
                    console.log('deleted select');
                    console.log(select);

                    select.closest('#dynamic_childs').removeChild(select);
                }
            }
        } else {

        }
    }

    /*Get Parent Categories
    $('#parent_category').change(function () {
        // parent id
        let id = $(this).val();
        console.log(id);

        // empty second select
        $('#child_category').find('option').not(':first').remove();

        // AJAX request
        $.ajax({
            url: 'getChildCategories/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                console.log(response['data']);
                // alert('test: ' + response);
                let len = 0;
                if(response['data'] != null) {
                    len = response['data'].length;
                }

                if(len > 0) {
                    // read data and create option
                    for(let i = 0; i < len; i++) {
                        let id = response['data'][i].id;
                        let name = response['data'][i].name;

                        let option = "<option value'"+id+"'>"+name+"</option>";

                        $('#child_category').append(option);
                    }
                }
            },
            error: function(errorThrown){
                if (!$.trim(data)){
                    alert("What follows is blank: " + data);
                }
                else{
                    alert("What follows is not blank: " + data);
                }
            }
        });
    });*/

});
