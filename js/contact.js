console.log("This is form validation using JS")

let fullname = document.getElementById("fullname");
let email = document.getElementById("email");
let phone = document.getElementById("phone");
let city = document.getElementById("city");
let country = document.getElementById("country");
let address = document.getElementById("address");
let skills = document.getElementById("skills");
let ideatitle = document.getElementById("ideatitle");
let desc = document.getElementById("description");
let resources = document.getElementById("resources");
let submit = document.getElementById("submit")


console.log(fullname, email, phone, city, country, address, skills, ideatitle, desc,resources, submit)


fullname.addEventListener("blur", () => {
    // console.log("helluu gg");
    let str = fullname.value;
    let regex = /[^0-9][a-zA-Z\s]{3,45}/;

    // console.log(regex.test(str));
    if(regex.test(str)){
        fullname.classList.remove("is-invalid");
        fullname.classList.add("is-valid");
    }
    
    else{
        fullname.classList.remove("is-valid");
        fullname.classList.add("is-invalid");
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


city.addEventListener("blur", () => {
    // console.log("helluu gg");
    let str = city.value;
    let regex = /^[a-zA-Z\s]+$/;
    
    ;

    // console.log(regex.test(str));
    if(regex.test(str)){
        city.classList.remove("is-invalid");
        city.classList.add("is-valid");
    }
    
    else{
        city.classList.remove("is-valid");
        city.classList.add("is-invalid");
    }

});


country.addEventListener("blur", () => {
    // console.log("helluu gg");
    let str = country.value;
    let regex = /^[a-zA-Z\s]{1,100}$/;

    // console.log(regex.test(str));
    if(regex.test(str)){
        city.classList.remove("is-invalid");
        city.classList.add("is-valid");
    }
    
    else{
        city.classList.remove("is-valid");
        city.classList.add("is-invalid");
    }

});


address.addEventListener("blur", () => {
    let str = address.value;
    let regex = /^[a-zA-Z0-9\s\-.,'#&]+$/;    

    // console.log(regex.test(str));
    if(regex.test(str)){
        address.classList.remove("is-invalid");
        address.classList.add("is-valid");
    }
    
    else{
        address.classList.remove("is-valid");
        address.classList.add("is-invalid");
    }

});



skills.addEventListener("blur", () => {
    // console.log("helluu gg");
    let str = skills.value;
    console.log(value)
    let regex = /^[a-zA-Z0-9-_|,.\s]*$/;

    // console.log(regex.test(str));
    if(regex.test(str)){
        skills.classList.remove("is-invalid");
        skills.classList.add("is-valid");
    }
    
    else{
        skills.classList.remove("is-valid");
        skills.classList.add("is-invalid");
    }

});


ideatitle.addEventListener("blur", () => {
    // console.log("helluu gg");
    let str = ideatitle.value;
    let regex = /^[^0-9][a-zA-Z0-9!@#$%^&*()-_=+`~[\]{}|;:'",.<>/?\s]*$/;
    
    ;

    // console.log(regex.test(str));
    if(regex.test(str)){
        ideatitle.classList.remove("is-invalid");
        ideatitle.classList.add("is-valid");
    }
    
    else{
        ideatitle.classList.remove("is-valid");
        ideatitle.classList.add("is-invalid");
    }

});


desc.addEventListener("blur", () => {
    // console.log("helluu gg");
    let str = desc.value;
    let regex = /^[^0-9][a-zA-Z0-9!@#$%^&*()-_=+`~[\]{}|;:'",.<>/?\s]*$/;
    
    ;

    // console.log(regex.test(str));
    if(regex.test(str)){
        desc.classList.remove("is-invalid");
        desc.classList.add("is-valid");
    }
    
    else{
        desc.classList.remove("is-valid");
        desc.classList.add("is-invalid");
    }

});


resources.addEventListener("blur", () => {
    // console.log("helluu gg");
    let str = resources.value;
    let regex = /^[^0-9][a-zA-Z0-9!@#$%^&*()-_=+`~[\]{}|;:'",.<>/?\s]*$/;

    // console.log(regex.test(str));
    if(regex.test(str)){
        resources.classList.remove("is-invalid");
        resources.classList.add("is-valid");
    }
    
    else{
        resources.classList.remove("is-valid");
        resources.classList.add("is-invalid");
    }

});



submit.addEventListener("click", () => {
    let isEmpty = false;
    if(fullname.value == '' || email.value == '' || phone.value == '' || city.value == '' || country.value == '' || address.value == '' || skills.value == '' || ideatitle.value == '' || desc.value == '' || resources.value == ''){
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


