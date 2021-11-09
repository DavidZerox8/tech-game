<?php
    $premio = $_POST['premio'];
    $codigo = $_POST['codigo2'];
    $valor = "";
    if($premio >=1 & $premio <=20)
    {
        $valor = "un descuento del 5% en tu siguiente compra.";
    }
    elseif($premio >=21 & $premio <=60){
        $valor = "un descuento del 10% en tu siguiente compra.";
    }
    elseif($premio >=61 & $premio <=89){
        $valor = "un cupón valido por $50.";
    }
    elseif($premio >=91 & $premio <=99){
        $valor = "una instalación de un programa gratis.";
    }
    elseif($premio == 100){
        $valor = "un cupon válido por articulo participante.";
    }    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Premio | Soluciones Tech & Game</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/ico.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/hamburgers.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body> <br>
    <div class="container" style="border-style: solid; border-with: 3px; background-image: url('');">
        <img src="assets/img/logo/elbiuenosegun.png" alt="" width="250" height="130">
        <p>&nbsp;</p>
        <h1>Felicidades has ganado <?php echo $valor ?></h1>
        <p>Presenta este cupon en el local 101 de la Plaza de la Tecnología en Nicolás Romero.</p>
        <p>Código de participación: <?php echo $codigo; ?></p>

        <br>
        
        <a href="index.php"><button class="btn">Página principal</button></a>
        <button class="btn" onclick="imprimir()">Imprimir</button> 
        <p>&nbsp;</p>
        <small>*Favor de imprimir, si este se pierde NO hay manera de recuperarlo.</small>
    </div>
</body>
<script>
    function imprimir() {
        window.print();
    }

</script>

</html>
