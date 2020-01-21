function validateLogin(){
    if ($('#email').val() === ""){
        alert("You need to enter your email");
        return false;
    }

    if ($('#password').val() === ""){
        alert("You need to enter your password");
        return false;
    }

    $('#login-form').submit();
    return true;
}