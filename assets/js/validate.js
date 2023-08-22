function validateForm(){
    let a = document.getElementById("nombre");
    let text;

    if(x == ""){
        text = "Escribe tu nombre";
    }else{
        text = "OK";
    }
    document.getElementById("message").innerHTML = text;
}