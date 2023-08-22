function valida_envia(){
    //valido el nombre
    if (document.fvalida.nombre.value.length==0){
        alert("Escribe tu Nombre Completo.")
        document.fvalida.nombre.focus()
        return 0;
    }

    //valido el interés
    if (document.fvalida.codigo_postal.value.lenght==0){
        alert("Escribe el Código Postal de tu Municipio.")
        document.fvalida.codigo_postal.focus()
        return 0;
    }

    //el formulario se envia
    alert("Muchas gracias por enviar el formulario");
    document.fvalida.submit();
}