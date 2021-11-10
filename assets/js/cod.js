 $("#codigo_val").submit(function (event) {
        if (confirm("¿Realmente deseas validar este código?")) {
            $('#btn_validar').attr("disabled", true);  
            var parametros = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "generar.php",
                data: parametros,
                beforeSend: function (objeto) {
                    $("#resultados_ajax").html("Mensaje: Cargando...");
                },
                success: function (datos) {
                    
                    $("#resultados_ajax").removeClass("badge-dark");
                    $("#resultados_ajax").addClass("badge-success");
                   
                    $("#resultados_ajax").html(datos);
                    $('#btn_validar').attr("disabled", false); 
                }
            });

            event.preventDefault();

        } else {
            return false;
        }
    })
