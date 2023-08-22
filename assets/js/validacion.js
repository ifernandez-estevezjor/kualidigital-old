function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var name = document.contactForm.name.value;
    var zipcode = document.contactForm.zipcode.value;
    var mobile = document.contactForm.mobile.value;
    var message = document.contactForm.message.value;
    var paviso = docuement.contactForm.paviso.value;
    /*var hobbies = [];
    var checkboxes = document.getElementsByName("hobbies[]");
    for(var i=0; i < checkboxes.length; i++) {
        if(checkboxes[i].checked) {
            hobbies.push(checkboxes[i].value);
        }
    }*/
    
    var nameErr = zipcodeErr = mobileErr = messageErr = true;
    
    if(name == "") {
        printError("nameErr", "Escribe tu Nombre Completo");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Por favor, escribe un Nombre Completo válido");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }


    if(zipcode == "") {
        printError("zipcodeErr", "Escribe tu Código Postal");
    } else {
        var regex = /^[1-5]\d{9}$/;
        if(regex.test(zipcode) === false) {
            printError("zipcodeErr", "Por favor, escribe los 5 números de tu Código Postal");
        } else{
            printError("zipcodeErr", "");
            zipcodeErr = false;
        }
    }
    

    if(mobile == "") {
        printError("mobileErr", "Escribe tu Número de Teléfono");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Por favor, escribe los 10 dígitos de tu Número de Teléfono");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    

    if(message == "") {
        printError("messageErr", "Escribe tu mensaje");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(message) === false) {
            printError("messageErr", "Por favor, escribe tu mensaje para contactarte");
        } else {
            printError("messageErr", "");
            messageErr = false;
        }
    }
    

    if((nameErr || zipcodeErr || mobileErr || messageErr) == true) {
        return false;
    } else {
        var dataPreview = "You've entered the following details: \n" +
                        "Full Name: " + name + "\n" +
                        "Zip Code: " + zipcode + "\n" +
                        "Mobile Number: " + mobile + "\n" +
                        "Message: " + message + "\n";
        /*if(hobbies.length) {
            dataPreview += "Hobbies: " + hobbies.join(", ");
        }*/
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};