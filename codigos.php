<?php

    $acceso = $_GET['acceso'];
    if(empty($acceso)){
        header("location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Codigos | Soluciones Tech & Game</title>

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

    <style>
        .container {
            text-align: center;
        }

    </style>
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/ico.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php"><img width="220" height="100" src="assets/img/logo/elbiuenosegun.png" alt=""></a>

                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.php">Inicio</a></li>
                                                <li><a href="services.php">Servicios</a></li>
                                                <li><a href="products.php">Productos</a></li>
                                                <li><a href="blog.php">Noticias</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.php">&Uacute;ltimas noticias</a></li>
                                                        <li><a href="blog_details.php">Nuevos productos</a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="contact.php">Contacto</a></li>
                                                <li style="display:none;" class="button-header margin-left "><a href="register.php" class="btn">Registrate</a></li>
                                                <li style="display:none;" class="button-header"><a href="login.php" class="btn3">Iniciar sesi&oacute;n</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="slider-area slider-bg ">
            <div class="single-slider d-flex align-items-center" style="min-height: 350px;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12 ">
                            <div class="hero__caption hero__caption3 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">Validación y expedición de códigos.</h1>
                                <img src="assets/img/lineas/l5.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-shape d-none d-lg-block">
            </div>
        </div>

        <section style="padding: 35px;">
            <div id="container" class="container">
                <h1>¿Qué deseas realizar?</h1>
                <br>
                <div class="row justify-content-center">
                    <div class="col-sm">
                        <a href="generar.php"><button class="btn" id="generar">Generar un código</button></a>
                    </div>
                    <div class="col-sm">
                        <button class="btn" id="validar" value="2" onclick="opciones()">Validar un código</button>
                    </div>
                </div>
                <br>
                <div id="validacion" class="row justify-content-center" style="display:none;">
                   
                    <form id="codigo_val">
                        <label for="codigo">Ingrese el código para validar</label>
                        <input class="form-control" type="text" id="codigo" name="codigo" placeholder="escriba el código" required> <br>
                        <span class="badge badge-pill badge-dark" id="resultados_ajax"></span> <br><br>
                        <button type="submit" class="btn" id="btn_validar">Validar</button>
                        
                    </form>
                    
                </div>
                
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-wrappr " data-background="assets/img/gallery/footer-bg.png">
            <div class="footer-area footer-padding ">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img width="250" height="" src="assets/img/logo/elbiuenosegun.png" alt=""></a>
                                </div>
                                <div class="footer-tittle mb-50">
                                    <p>Suscríbete a nuestro Newletter y mantente informado sobre lo &uacute;ltimo en tecnolog&iacute;a. </p>
                                </div>
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://solucionesrp.us6.list-manage.com/subscribe/post?u=fd24464c83124fc26154fb0b0&amp;id=c1ebeba151" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Correo electrónico " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribe tu correo electrónico'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    Suscr&iacute;bete
                                                </button>
                                            </div>
                                            <div class="mt-10 info" style="color:white; text-align:center;"></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="footer-social mt-50">
                                    <a href="https://www.facebook.com/techandgame101"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/soluciones.rp/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Nosotros</h4>
                                    <ul>
                                        <li><a href="#">¿Quiénes somos?</a></li>
                                        <li><a href="#">Valores</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Productos y servicios</h4>
                                    <ul>
                                        <li><a href="#">Equipos De Cómputo e Impresoras</a></li>
                                        <li><a href="#">Consumibles</a></li>
                                        <li><a href="#">Accesorios</a></li>
                                        <li><a href="#">Cámaras</a></li>
                                        <li><a href="#">Hardware y Software</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contacto</h4>
                                    <ul>
                                        <li><a href="#">Tel: 55 5038 8250</a></li>
                                        <li><a href="#">Av. 16 de Septiembre 63, Hidalgo, 54434 Villa Nicolás Romero, Méx. (Local 101)</a></li>
                                        <li><a href="#">Horario: 10:00 am | 07:00 pm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="footer-copy-right text-center">
                                    <p>

                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());

                                        </script> Todos los derechos reservados | <a href="https://www.solucionesrp.com.mx">Soluciones RP</a>.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    
    <script>
        
        function opciones(){
            document.getElementById('validacion').style.display = '';
        }
        
    </script>

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <script src="./assets/js/gijgo.min.js"></script>

    <script src="./assets/js/jquery.vide.js"></script>

    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="assets/js/cod.js"></script>

</body>

</html>
