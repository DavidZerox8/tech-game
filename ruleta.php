<?php

    $acceso = $_GET['acceso'];
    if(empty($acceso)){
        header("location: index.php");
    }

?>
<!doctype html>
<html class="no-js" lang="es">

<head>

    <title> Ruleta de la suerte | Soluciones Tech & Game</title>

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
        .counter {
            font-size: 70px;
            font-weight: bold;
            text-align: center;
        }

        .countertext {
            font-size: 40px;
            font-weight: bold;
            text-align: center;
        }

    </style>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v11.0" nonce="bEL33p3J"></script>

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
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">Ruleta de la Suerte :D</h1>
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
            <div class="container">
                <h3 style="text-align: center;">Prueba suerte en nuestra sorteo de promociones</h3>
                <div class="col-12" id="val">

                    <h5 style="text-align: center;">Siguenos en facebook y llena el formulário para continuar</h5>
                    <br>

                    <div class="fb-like d-flex justify-content-center" data-href="https://www.facebook.com/techandgame101" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>

                    <br>
                    <div class="d-flex justify-content-center">
                        <form id="formulario_promocion">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Código de participación</label>
                                <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="codigo" required>
                                <small id="emailHelp" class="form-text text-muted">Se encuentra en el ticket que se le proporcionó al momento de su compra.</small>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="facecheck" required>
                                <label class="form-check-label" for="">Los sigo en facebook ♥</label>
                            </div>
                            <button id="enviarCodigo" type="submit" class="btn btn-primary">Envíar</button>
                        </form>
                    </div>

                </div>
                <br>
                <div class="col-12" id="ruleta" style="display:none;">
                    <p class="countertext">Tu número ganador es:</p>
                    <div class="counter" data-target="100"></div>
                    <table class="table table-hover" style="text-align: center; font-size: 20px;">
                        <thead class="thead-dark">
                            <tr>
                                <th>Rango</th>
                                <th>Premio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01 al 20</td>
                                <td>Descuento del 5% en tu siguiente compra.</td>
                            </tr>
                            <tr>
                                <td>21 al 60</td>
                                <td>Descuento del 10% en tu siguiente compra.</td>
                            </tr>
                            <tr>
                                <td>61 al 89</td>
                                <td>Cupón valido por $50.</td>
                            </tr>
                            <tr>
                                <td>90 al 99</td>
                                <td>Instalación de un programa gratis.</td>
                            </tr>
                            <tr>
                                <td>100</td>
                                <td>Cupon válido por articulo participante.</td>
                            </tr>
                        </tbody>
                    </table>
                    <small>*Aplican restricciones</small>
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

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <script src="./assets/js/gijgo.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

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

    <script src="assets/js/correo.js"></script>
    <script src="assets/js/rs-p.js"></script>

</body>

</html>
