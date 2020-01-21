function validateRegister(){
    let name = $('#name').val();
    if (name.split(" ").length !== 2){
        alert("Wrong name! You need to provide your first and last name. Also check for an extra whitespace.");
        return false;
    }

    let email = $('#email').val();
    if (email.indexOf('@') === -1)
    {
        alert("Your email is incorrect! Please enter a proper email address.")
        return false;
    }

    let password = $('#password').val();
    if (password === ""){
        alert("You need to provide a password.");
        return false;
    }

    let passwordValidation = $('#password-verify').val();
    if (password !== passwordValidation){
        alert("Password verification is incorrect.");
        return false;
    }

    let birth = $('#birth-date').val();
    if (birth === ""){
        alert("You need to provide a birth date");
        return false;
    }

    let country = $('#country').val();
    if (country === ""){
        alert("You need to provide a country");
        return false;
    }

    let state = $('#state').val();
    if (state === ""){
        alert("You need to provide a state");
        return false;
    }

    let city = $('#city').val();
    if (city === ""){
        alert("You need to provide a city");
        return false;
    }

    let street = $('#street').val();
    if (street === ""){
        alert("You need to provide a street");
        return false;
    }

    $('#register-form').submit();
    return true;
}