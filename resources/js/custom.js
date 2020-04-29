// switch subcategory
let subCategory_switch = document.getElementById('subcategory_switch');

if(subCategory_switch !== null) {
    let divParentCategories = document.getElementById('parent_categories');

    subCategory_switch.addEventListener('click', () => {
        divParentCategories.style.display = subCategory_switch.checked ? 'block' : 'none';
    })
}

$(document).ready(function () {
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
    });
});


