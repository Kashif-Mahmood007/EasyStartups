console.log("This is form validation using JS")

let personName = document.getElementById("namesignup");
let email = document.getElementById("emailsignup");
let phone = document.getElementById("phonesignup");
let password = document.getElementById("passwordsignup");
let submit = document.getElementById("submitsignup");


console.log(personName, email, phone, password);


personName.addEventListener("blur", () => {
    // console.log("helluu gg");
    let str = personName.value;
    let regex = /[^0-9][a-zA-Z\s]{3,45}/;

    // console.log(regex.test(str));
    if(regex.test(str)){
        personName.classList.remove("is-invalid");
        personName.classList.add("is-valid");
    }
    
    else{
        personName.classList.remove("is-valid");
        personName.classList.add("is-invalid");
    }

});


email.addEventListener("blur", () => {
    // console.log("helluu gg");
    let str = email.value;
    let regex = /^[^\s@]{3,}@[^\s@]+\.[^\s@]+$/;

    // console.log(regex.test(str));
    if(regex.test(str)){
        email.classList.remove("is-invalid");
        email.classList.add("is-valid");
    }
    
    else{
        email.classList.remove("is-valid");
        email.classList.add("is-invalid");
    }

});


phone.addEventListener("blur", () => {
    // console.log("helluu gg");
    let str = phone.value;
    let regex = /^\+\d{2}\s\d{3}(?:\s\d{7}|\d{7})$/;

    // console.log(regex.test(str));
    if(regex.test(str)){
        phone.classList.remove("is-invalid");
        phone.classList.add("is-valid");
    }
    
    else{
        phone.classList.remove("is-valid");
        phone.classList.add("is-invalid");
    }

});


password.addEventListener("blur", () => {
    // console.log("helluu gg");
    let str = password.value;
    let regex = /^(?=.*[a-zA-Z0-9])(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-])[a-zA-Z0-9!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]{8,}$/;

    // console.log(regex.test(str));
    if(regex.test(str)){
        password.classList.remove("is-invalid");
        password.classList.add("is-valid");
    }
    
    else{
        password.classList.remove("is-valid");
        password.classList.add("is-invalid");
    }

});




submit.addEventListener("click", () => {
    let isEmpty = false;
    if(personName.value == '' || email.value == '' || phone.value == '' || password.value == ''){
        isEmpty = false;
    }

    else{
        isEmpty = true;
    }

    console.log(isEmpty);

    if(!isEmpty){
        document.getElementById('isEmpty').innerHTML = "Plzz fill all the fields of Form, some are missing, just go and fill them";
        document.getElementById('isEmpty').classList.add("text-danger");
        document.getElementById('isEmpty').classList.remove("text-success");
    }
    
    else{
        document.getElementById('isEmpty').innerHTML = "Your record is submitted successfully";
        document.getElementById('isEmpty').classList.add("text-success");
        document.getElementById('isEmpty').classList.remove("text-danger");
    }
});


