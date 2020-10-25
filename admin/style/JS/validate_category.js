var category_name = document.forms['form2']['category_name'];
var category_description = document.forms['form2']['category_description'];

var category_name_error = document.getElementById('category_name_error');
var category_description_error = document.getElementById('category_description_error');

category_name.addEventListener('blue',category_name_verify,true);
category_description.addEventListener('blue',category_description_verify,true);

function validate_category() {
    if(category_name.value==""){
        category_name_error.textContent = "You need to fill in  the blanket";
        category_name.focus();
        return false;
    }
    if(category_description.value==""){
        category_description_error.textContent = "You need to fill in in the blanket";
        category_description.focus();
        return false;
    }
}
function category_name_verify() {
    if(category_name.value != ""){
        category_name_error.innerHTML = "";
        return true;
    }
}
function category_description_verify() {
    if(category_description.value != ""){
        category_description_error.innerHTML = "";
        return true;
    }
}

