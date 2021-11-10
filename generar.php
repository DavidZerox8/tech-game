<?php
    error_reporting(0);
    $con = mysqli_connect("127.0.0.1", "u526744503_root", "L]p6c1G/a3", "u526744503_tech");
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

    $codigo = $_POST['codigo'];

    if(!empty($codigo)){
    
        $consulta = "select * from codigo where codigo = '$codigo'";
        $query = mysqli_query($con,$consulta);

        if($query){
            $count = mysqli_num_rows($query);
            foreach ($query as $r):
                $estatus = $r['estado'];
            endforeach;
            if($count == 1 and $estatus == "Disponible"){
                
                echo "Este código no ha sido entregado aún, no recibir cupon.";
                      
            }
        
            elseif($count == 1 and $estatus == "Entregado"){
            
                echo "Código y cupón validos.";
            }
        
            elseif($count == 1 and $estatus == "Canjeado"){
            
                echo "Código y cupón invalidos, ya fueron cnajeados (Favor de validar con sistemas de ser necesario).";
            }
        
            else{
                echo "Cupón no valido";
            }
        }
    }

    else{
        
        $consulta = "select * from codigo where estado = 'Disponible'";
        $query = mysqli_query($con,$consulta);
        
          if($query){
            
            $cuenta = 0;  
            $count = mysqli_num_rows($query);
            foreach ($query as $r):
                $valor = $r['codigo'];
                $id = $r['id_codigo'];
              $cuenta++;
              if($cuenta > 0){
                  break;
              }
           
              endforeach;              
          }
        
        echo "
    <!DOCTYPE html>
    <html lang='en'>

    <head>

    <title>Generación de códigos | Soluciones Tech & Game</title>
    <meta charset='utf-8'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='shortcut icon' type='image/x-icon' href='assets/img/logo/ico.png'>
    <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/css/owl.carousel.min.css'>
    <link rel='stylesheet' href='assets/css/slicknav.css'>
    <link rel='stylesheet' href='assets/css/animate.min.css'>
    <link rel='stylesheet' href='assets/css/hamburgers.min.css'>
    <link rel='stylesheet' href='assets/css/magnific-popup.css'>
    <link rel='stylesheet' href='assets/css/fontawesome-all.min.css'>
    <link rel='stylesheet' href='assets/css/themify-icons.css'>
    <link rel='stylesheet' href='assets/css/themify-icons.css'>
    <link rel='stylesheet' href='assets/css/slick.css'>
    <link rel='stylesheet' href='assets/css/nice-select.css'>
    <link rel='stylesheet' href='assets/css/style.css'>
    
</head>
    
<body>
    <br>
    <div id='container' style='border-width: 3px; border-style: solid; width:25%; text-align:center;'>
        <img src='assets/img/logo/elbiuenosegun.png' alt='' width='150'>
        <h3>Este es tu código participante</h3>
        
        <h5>código: $valor</h5>
        <p>Puedes canjearlo en nuestra página.</p>
        <p>Escanea el siguiente QR y solicita tu premio:</p>
        
        <img src='assets/img/util/qr.png' alt=''>
        <p></p>
    </div>
</body>
</html>
        
        ";
        
        $consulta_c = "UPDATE `codigo` SET `estado` = 'Entregado' WHERE `codigo`.`id_codigo` = $id";
        $query_c = mysqli_query($con,$consulta_c);
        
          if($query_c){
                echo "<script>alert('Favor de imprimir su código');</script>";
          }
    }

?>
