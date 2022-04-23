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
        errorMessage.innerText = "First name should be atleast 3 characters.."
    }
    if(lastName.length<3){
        document.getElementById("errorMessage").classList.remove("hidden");
        errorMessage.innerText += "\nLast name should be atleast 3 characters.."
    }



}
registerButton.addEventListener("click", function(e){
    e.preventDefault();
    validate();
});