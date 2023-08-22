/*function validate(){
    var nombre = document.contactform.nombre.value;
    var status = false;

    if (nombre = "") {
        document.getElementById("nombreinput").innerHTML = "Escribe tu Nombre Completo.";
        status = false;
    }
}*/

function validate(){  
    var name = document.f1.name.value;
    var zipcode = document.f1.zipcode.value.length;
    var mobile = document.f1.mobile.value.length;
    var message = document.f1.message.value;
    var status = false;

    if(name == ""){  
        document.getElementById("nameinput").innerHTML = "Escribe tu Nombre Completo.";  
        status = false;
    }else{  
        document.getElementById("nameinput").innerHTML = "OK";  
        status = true;
    }  
    
    if(zipcode<5){  
        document.getElementById("zipcodeinput").innerHTML = "Escribe los 5 dígitos de tu Código Postal.";  
        tatus=false; 
    }else{  
        document.getElementById("zipcodeinput").innerHTML = "OK";  
    }

    if(mobile<10){  
        document.getElementById("mobileinput").innerHTML = "Escribe tu Número de Teléfono.";  
        status=false; 
    }else{  
        document.getElementById("mobileinput").innerHTML = "OK";  
    }

    if(message == ""){  
        document.getElementById("messageinput").innerHTML = "Escribe el mensaje que deseas enviar.";  
        status = false;
    }else{  
        document.getElementById("messageinput").innerHTML = "OK";  
        status = true;
    }
    
    return status;  
}