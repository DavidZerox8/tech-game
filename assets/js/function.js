function cambiaValores(a) {

    if (a == "reparaciones") {
        
        var inputNombre = document.getElementById("subject");
        inputNombre.value = "Reparación de impresora/computadora";
        document.getElementById("subject").blur();
        document.getElementById("subject").focus();
       
    }
    
    if (a == "consumibles") {
        var inputNombre = document.getElementById("subject");
        inputNombre.value = "Compra de consumibles";
    }
    
    if (a == "accesorios") {
        var inputNombre = document.getElementById("subject");
        inputNombre.value = "Compra de accesorios";
    }
    
    if (a == "camaras") {
        var inputNombre = document.getElementById("subject");
        inputNombre.value = "Compra de cámaras";
    }
    
    if (a == "hys") {
        var inputNombre = document.getElementById("subject");
        inputNombre.value = "Solicitud de Hardware/Software";
    }
    
    if (a == "custom") {
        var inputNombre = document.getElementById("subject");
        inputNombre.value = "Solicitud personalizada de servicio";
    }

}
