		$("#contactForm").submit(function (event) {

		    $('#btn_enviar').attr("disabled", true);

		    var parametros = $(this).serialize();
		    $.ajax({
		        type: "POST",
		        url: "forms/contact.php",
		        data: parametros,
		        beforeSend: function (objeto) {
                    $("#resultados_ajax2").css("display", "block");
		            $("#resultados_ajax2").html("Mensaje: Cargando...");
		        },
		        success: function (datos) {
                    
		            $("#resultados_ajax2").html(datos);
		            $('#btn_enviar').attr("disabled", false);
		            load(1);
		        }
		    });
		    event.preventDefault();

		})
