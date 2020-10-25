//start-validate-login
var Username = document.forms['form1']['admin_username'];
var Password = document.forms['form1']['admin_password'];

var username_error = document.getElementById('username_error');
var password_error = document.getElementById('password_error');

Username.addEventListener('blur',username_verify,true);
Password.addEventListener('blur',password_verify,true);

function validateForm_login() {
   if(Username.value == ''){
       username_error.textContent = "You need to fill in the blanket";
       Username.focus();
       return false;
   }
    if(Password.value == ''){
        password_error.textContent = "You need to fill in the blanket";
        Password.focus();
        return false;
    }
}
function username_verify() {
    if(Username.value != ""){
        username_error.innerHTML = "";
        return true;
    }
}
function password_verify() {
    if(Password.value != ""){
        password_error.innerHTML = "";
        return true;
    }
}
//end-validate-login

