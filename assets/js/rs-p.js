    $("#formulario_promocion").submit(function (event) {
        if (confirm("¿Realmente deseas canjear este código?")) {
            $('#enviarCodigo').attr("disabled", true);
            var codigo = $("#codigo").val();    
            var parametros = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "forms/codigo.php",
                data: parametros,
                beforeSend: function (objeto) {
                    $("#resultados_ajax").html("Mensaje: Cargando...");
                },
                success: function (datos) {
                    // $("#resultados_ajax").html(datos);
                    if(datos == 1){
                    
                    document.getElementById("val").style.display = 'none';
                    document.getElementById("ruleta").style.display = 'block';
                    
                    var min = 1;
                    var max = 99;

                    var num = Math.round(Math.random() * (max - min) + min);
                    const counters = document.querySelectorAll('.counter');
                    const speed = 100;
                    counters.forEach(counter => {
                        const updateCount = () => {
                            const target = +counter.getAttribute('data-target');
                            const count = +counter.innerText;
                            const inc = target / speed;
                            if (count < target) {
                                counter.innerText = count + inc;
                                setTimeout(updateCount, 20);
                            } else {
                                counter.innerText = num;
                            }
                        };
                        updateCount();
                    });
                    
                        $('#enviarCodigo').attr("disabled", false);                    
                        $("#premio").val(num);
                        $("#codigo2").val(codigo);
                        load(1);   
                    }
                    
                    else if(datos == 2){
                        alert("Este código ya fue utilizado, gracias por participar :D");
                        $('#enviarCodigo').attr("disabled", false);
                    }
                       
                    else if(datos == 0){
                        alert("Favor de ingresar un código valido");
                        $('#enviarCodigo').attr("disabled", false);
                    }   
                }
            });

            event.preventDefault();

        } else {
            return false;
        }
    })
