var brand_name = document.forms['form4']['brand_name'];
var brand_description = document.forms['form4']['brand_description'];

var brand_name_error = document.getElementById('brand_name_error');
var brand_description_error = document.getElementById('brand_description_error');

brand_name.addEventListener('blue',brand_name_verify,true);
brand_description.addEventListener('blue',brand_description_verify,true);

function validate_brand() {
    if(brand_name.value==""){
        brand_name_error.textContent = "You need to fill in  the blanket";
        brand_name.focus();
        return false;
    }
    if(brand_description.value==""){
        brand_description_error.textContent = "You need to fill in in the blanket";
        brand_description.focus();
        return false;
    }
}
function brand_name_verify() {
    if(brand_name.value != ""){
        brand_name_error.innerHTML = "";
        return true;
    }
}
function brand_description_verify() {
    if(brand_description.value != ""){
        brand_description_error.innerHTML = "";
        return true;
    }
}
