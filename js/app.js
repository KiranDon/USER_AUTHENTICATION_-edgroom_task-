let registerButton = document.getElementById("register");
let errorMessage = document.getElementById("errorMessage");
function validate(){
    let firstName = document.getElementById("firstName").value;
    let lastName = document.getElementById("lastName").value;
    let phoneNumber = document.getElementById("phoneNumber").value;
    let emailAddress = document.getElementById("emailAddress").value;
    let gender = document.querySelector('.genderInput:checked').value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;

    console.log(firstName, lastName, phoneNumber, emailAddress, gender, password, confirmPassword)

    errorMessage.innerTex = "";
    if(firstName.length<3){
        document.getElementById("errorMessage").classList.remove("hidden");
        errorMessage.innerText = "First name should be atleast 3 characters..."
        return false;
    }
    else if(lastName.length<3){
        document.getElementById("errorMessage").classList.remove("hidden");
        errorMessage.innerText = "\nLast name should be atleast 3 characters..."
        return false;
    }else if(!isValidPhone(phoneNumber)){
        document.getElementById("errorMessage").classList.remove("hidden");
        errorMessage.innerText = "\nInvalid phone number... Number should be of 10 digits and without country code...";
        return false;
    }else if(!isValidEmail(emailAddress)){
        document.getElementById("errorMessage").classList.remove("hidden");
        errorMessage.innerText = "\nInvalid email address... It must be a gmail account...";
        return false;
    }else if(password!=confirmPassword){
        document.getElementById("errorMessage").classList.remove("hidden");
        errorMessage.innerText = "\nPassword and confirm password should match...";
        return false;
    }else{
        document.getElementById("errorMessage").classList.add("hidden"); 
        return true;  
    }
}

function isValidPhone(number){
    // console.log(number)
    if (Number.isInteger(+number) && (number.length==10)){
        return true;
    }
    return false;
}
function isValidEmail(email){
    console.log(email)
    if (email.endsWith("@gmail.com")){
        return true;
    }
    return false;
}

// registerButton.addEventListener("click", function(e){
//     // e.preventDefault();
//     validate();
// });


