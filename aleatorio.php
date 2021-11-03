<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .counter {
            font-size: 25px;
            font-weight: bold;
            text-align: center;
        }

    </style>
</head>

<body>
    <div id="NumeroAleatorio"></div>
    <br><br><br><br>



    <?php
     /*   
        $con = mysqli_connect("127.0.0.1", "root", "", "rp");
        if(!$con){
            die("imposible conectarse: ".mysqli_error($con));
        }
        if (@mysqli_connect_errno()) {
            die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
        }

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        function generate_string($input, $strength = 16) {
            $input_length = strlen($input);
            $random_string = '';
            for($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }

        return $random_string;
            
        }
        $valor = "";
        $cantidad = 100;
        $i = 0;
        
        $sentencia = $con->prepare("INSERT INTO codigo(codigo) VALUES (?)");
    
        if (!$sentencia->bind_param("s", $codigo)) {
            echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
        }

        for ($i = 1; $i <= $cantidad; $i++) {
            $codigo = generate_string($permitted_chars, 6);
            
            $validar = "select * from codigo where codigo = '$codigo'";
            $query = mysqli_query($con,$validar);
            
            if($query){
                foreach ($query as $r):
                    $valor = $r['codigo'];
                endforeach;
                
                if($valor == $codigo){
                    //$i-=1;
                    continue;
                }
                
               else{
                    
                    if (!$sentencia->execute()) {
                        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
                    }   
                } 
            }
            
            else{
                echo "Error, favor de revisar la información";
            }
            
        }   
        
        echo $i;
        */
    ?>
    <div onclick="contador()">
        <div class="counter" data-target="100">0</div>
    </div>

    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script>
        $('body').load(function() {
            NumeroAleatorio(1, 100);
        });

        NumeroAleatorio(1, 100);

        function NumeroAleatorio(min, max) {
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
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = num;
                    }
                };
                updateCount();
            });
        }

    </script>


</body>

</html>
