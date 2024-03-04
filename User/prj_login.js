function generateBackground() {

    const backgrounds = [];
    backgrounds[0] = "url('../Images/imgLogin/train0.jpg')";
    backgrounds[1] = "url('../Images/imgLogin/train1.jpg')";
    backgrounds[2] = "url('../Images/imgLogin/train2.jpg')";
    backgrounds[3] = "url('../Images/imgLogin/train3.jpg')";
    backgrounds[4] = "url('../Images/imgLogin/train4.jpg')";
    backgrounds[5] = "url('../Images/imgLogin/train5.jpg')";
    backgrounds[6] = "url('../Images/imgLogin/train6.jpg')";
    backgrounds[7] = "url('../Images/imgLogin/train7.jpg')";
    backgrounds[8] = "url('../Images/imgLogin/train8.jpg')";
    backgrounds[9] = "url('../Images/imgLogin/train9.jpg')";
    backgrounds[10] = "url('../Images/imgLogin/train10.jpg')";
    backgrounds[11] = "url('../Images/imgLogin/train11.jpg')";
    backgrounds[12] = "url('../Images/imgLogin/train12.jpg')";
    backgrounds[13] = "url('../Images/imgLogin/train13.jpg')";
    backgrounds[14] = "url('../Images/imgLogin/train14.jpg')";
    backgrounds[15] = "url('../Images/imgLogin/train15.jpg')";
    backgrounds[16] = "url('../Images/imgLogin/train16.jpg')";
    let index = getRandomInt(17);

    return backgrounds[index];

}

function getRandomInt(max) {
    
    return Math.floor(Math.random() * max);
} 


function validateFormLogin() {
    let fields = [document.getElementById("usernameLogin"), document.getElementById("passwordLogin")];
    let allFieldsValid = true; 

    for(let i = 0; i < fields.length; i++){
        if(fields[i].value.trim().length === 0){
            fields[i].style.border = "1px solid red";
            allFieldsValid = false;
        }
        else{               
            fields[i].style.border = "";                    
        }
    }
    return allFieldsValid;
}



function validateFormSignup() {

    let message = document.getElementById("signupErrorSpan");
    let name = document.getElementById("name");
    let surname = document.getElementById("surname");
    let email = document.getElementById("email");
    let username = document.getElementById("usernameSignup");
    let password = document.getElementById("passwordSignup");
    let passwordConfirm = document.getElementById("passwordConfirm");
    let fields = [name, surname, email, username, password, passwordConfirm];
    let allFieldsValid;
    let regex0 = /[a-z]/;
    let regex1 = /[A-Z]/;
    let regex2 = /[0-9]/;
    let regex3 = /[\W_]/;
    
    for(let i = 0; i < fields.length; i++){
        if(fields[i].value.trim().length === 0){
            fields[i].style.border = "1px solid red";
            allFieldsValid = false;
        }
        else{                        
            fields[i].style.border = "";                       
            allFieldsValid = true;                           
        }
    }
    if(allFieldsValid){

        if(password.value !== passwordConfirm.value) {
            password.style.border = "1px solid red";
            passwordConfirm.style.border = "1px solid red";
            message.innerHTML = "Le due password non sono uguali";
            allFieldsValid = false;
        }
        else if(password.value.length < 8){
            password.style.border = "1px solid red";
            passwordConfirm.style.border = "1px solid red";
            message.innerHTML = "La password deve avere almeno 8 caratteri";
            allFieldsValid = false;
        }
        else if(! regex0.test(password.value) ){
            password.style.border = "1px solid red";
            passwordConfirm.style.border = "1px solid red";
            message.innerHTML = "La password deve contenere almeno una lettera maiuscola";
            allFieldsValid = false; 
        }
        else if(! regex1.test(password.value) ){
            password.style.border = "1px solid red";
            passwordConfirm.style.border = "1px solid red";
            message.innerHTML = "La apssword deve contenere almeno una lettera minuscola";
            allFieldsValid = false;
        }
        else if(! regex2.test(password.value) ){
            password.style.border = "1px solid red";
            passwordConfirm.style.border = "1px solid red";
            message.innerHTML = "La password deve contenere almeno un numero";
            allFieldsValid = false;
        }
        else if(! regex3.test(password.value) ){
            password.style.border = "1px solid red";
            passwordConfirm.style.border = "1px solid red";
            message.innerHTML = "La password deve contenere almeno un carattere speciale";
            allFieldsValid = false;
        }
        else
            allFieldsValid = true;

    }
    return  allFieldsValid;
}
