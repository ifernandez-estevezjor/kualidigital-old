<!doctype html>
<html lang="es">
    <head>
        <!-- Metatags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="title" content="Bienvenido a Kuali Digital somos tu Internet">
        <meta name="DC.title" content="Bienvenido a Kuali Digital somos tu Internet">
        <meta http-equiv="title" content="Bienvenido a Kuali Digital somos tu Internet">
        <meta name="description" content="Ofrecemos un servicio de conexión de fibra óptica de última generación que se adapta a las posibilidades de nuestros clientes, a través de un modelo comercial.">
        <meta http-equiv="description" content="Ofrecemos un servicio de conexión de fibra óptica de última generación que se adapta a las posibilidades de nuestros clientes, a través de un modelo comercial.">
        <meta http-equiv="DC.description" content="Ofrecemos un servicio de conexión de fibra óptica de última generación que se adapta a las posibilidades de nuestros clientes, a través de un modelo comercial.">
        <meta name="keywords" content="fibra Óptica,  internet,  velocidad en tu internet,  conexión de calidad,  internet tizayuca">
        <meta http-equiv="keywords" content="fibra Óptica,  internet,  velocidad en tu internet,  conexión de calidad,  internet tizayuca">
        <meta name="author" content="Kuali Digital">

        <meta property="og:title" content="Bienvenido a Kuali Digital somos tu Internet">
        <meta property="og:description" content="Ofrecemos un servicio de conexión de fibra óptica de última generación que se adapta a las posibilidades de nuestros clientes, a través de un modelo comercial.">
        <meta property="og:type" content="article">
        <meta property="og:site_name" content="Bienvenido a Kuali Digital">
        <meta property="og:image" content="">
        <meta property="og:url" content="https://www.kualidigital.com/index.php">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="Bienvenido a Kuali Digital">
        <meta name="twitter:description" content="Ofrecemos un servicio de conexión de fibra óptica de última generación que se adapta a las posibilidades de nuestros clientes, a través de un modelo comercial.">
        <meta name="twitter:image" content="">
        <!-------------->

        <!-- Favicon -->
        <link rel="shortcut icon" href="./assets/img/inicio/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="./assets/img/inicio/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="./assets/img/inicio/favicon-32x32.png" type="image/png" sizes="32x32">
        <link rel="icon" href="./assets/img/inicio/favicon-16x16.png" type="image/png" sizes="16x16">
        <!------------->

        <!-- Custom Styles -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/hover.css">
        <!------------------->

        <title>KualiDigital - Contacto y Soporte</title>

        <!--<script src="./assets/js/validacion.js"></script>-->
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <body>
        <?php
            if (isset($_POST['submitForm'])) {
                $captcha_response = true;
                $recaptcha = $_POST['g-recaptcha-response'];

                $url = 'https://www.google.com/recaptcha/api/siteverify';
                $data = array(
                    'secret' => 'TU CLAVE SECRETA AQUÍ',
                    'response' => $recaptcha
                );
                $options = array(
                    'http' => array (
                        'method' => 'POST',
                        'content' => http_build_query($data)
                    )
                );
                $context  = stream_context_create($options);
                $verify = file_get_contents($url, false, $context);
                $captcha_success = json_decode($verify);
                $captcha_response = $captcha_success->success;

                if ($captcha_response) {
                    echo '<p class="alert alert-success">Procesar datos...</p>';
                } else {
                    echo '<p class="alert alert-danger">Debes indicar que no eres un robot.';
                }
            }
            ?>
        <script src="./assets/js/check.js"></script>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="./assets/img/inicio/logo-kuali.png" class="img-fluid" width="150" height="40" alt="Logo KualiDigital"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-bold nav-servicios dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SERVICIOS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="http://localhost/kualidigital/servicios.html#ancla-internet">Internet</a></li>
                                <li><a class="dropdown-item" href="http://localhost/kualidigital/servicios.html#ancla-kualitv">KualiTV</a></li>
                                <li><a class="dropdown-item" href="speedtest.html">Speed Test</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link fw-bold nav-paquetes" href="paquetes.html">PAQUETES</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link fw-bold nav-nosotros" href="nosotros.html">NOSOTROS</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link fw-bold nav-cobertura" href="cobertura.html">COBERTURA</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link fw-bold nav-productos" href="otros-productos.html">OTROS PRODUCTOS</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link fw-bold nav-contacto" href="contacto-soporte.html">CONTACTO Y SOPORTE</a>
                        </li>
                    </ul>
                    <div class="flex">
                        <!--<div class="me-2">
                            <a class="" href=""><i class="bi bi-person fs-2 text-dark hvr-push"></i></a>
                        </div>-->
                        <div class="me-2">
                            <ul class="navbar-nav me-auto mb-lg-0">
                                <li class="nav-item mx-1">
                                    <a class="nav-link fw-bold nav-residencial" href="empresarial.html">EMPRESARIAL</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container my-4">
            <h1 class="text-center display-4 fw-bold text-soporte">CONTACTO Y SOPORTE</h1>
        </div>
            
        <div class="container text-center my-5">
            <div class="row">
                <img src="./assets/img/contacto-soporte/banner_contacto.gif" class="img-contacto-soporte" alt="Contacto y Soporte">
            </div>
        </div>

        <div class="container-contacto" id="ancla-contacto">
            <h1 class="text-white text-center fw-bold">MÁNDANOS TUS COMENTARIOS</h1>
        </div>
        <div class="container my-3">
            <form name="f1" action="contacto.php" onsubmit="return validate()" method="post">
                <div class="row text-center my-3">
                    <div class="col-12">
                        <p>Los campos marcados con <span class="required-input">*</span> son obligatorios.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <label for="inputNombre" class="form-label fw-bold">Nombre<span class="required-input">*</span></label>
                        <input type="text" name="name" class="form-control" aria-label="Nombre"/>  
                        <span id="nameinput" style="color:red"></span>
                    </div>
                    <div class="col-md-3">
                        <label for="inputNumContrato" class="form-label fw-bold">No. de Contrato</label>
                        <input type="text" name="numero_contrato" class="form-control" aria-label="Número de Contrato">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <label for="inputCodigoPostal" class="form-label fw-bold">Código Postal<span class="required-input">*</span></label>
                        <input type="text" name="zipcode" class="form-control" aria-label="Código Postal">
                        <span id="zipcodeinput" style="color:red"></span>
                    </div>
                    <div class="col-md-3">
                        <label for="inputMobile" class="form-label fw-bold">Teléfono<span class="required-input">*</span></label>
                        <input type="text" name="mobile" class="form-control" aria-label="Teléfono">
                        <span id="mobileinput" style="color:red"></span>
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <div class="col-md-6">
                        <label for="inputMensaje" class="form-label fw-bold"><span class="text-mensaje">¿En qué podemos ayudarte?</span><span class="required-input">*</span></label>
                        <textarea name="message" class="form-control" cols="20" rows="5"></textarea>
                        <div id="mensajeHelp" class="form-text">Sólo se permiten 500 caracteres letras, números, puntos y comas.</div>
                        <span id="messageinput" style="color:red"></span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <input type="checkbox" class="form-check-input" id="avisoCheck">
                        <label class="form-check-label" for="avisoCheck">Aceptar <a href="" class="text-decoration-none">Aviso de Privacidad</a>.</label>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 mt-3">
                        <div class="g-recaptcha" data-sitekey="TU CLAVE DEL SITIO AQUÍ" data-callback="correctCaptcha"></div>
                    </div>
                </div>
                <div class="row text-center my-3">
                    <div class="col-12">
                        <button type="submit" value="Submit" class="btn btn-form fw-bold">Enviar</button>
                    </div>
                </div>
            </form>
                <!--<table>
                <tr><td>Name:</td><td><input type="text" name="name"/>  
                <span id="nameinput" style="color:red"></span></td></tr>
                <tr><td>Password:</td><td><input type="password" name="password"/>  
                <span id="passwordlocation" style="color:red"></span></td></tr>
                <tr><td colspan="2"><input type="submit" value="register"/>  </td></tr>
                </table>
                </form>-->
            <!--<form name="f1" onsubmit="return validate()" action="contacto.php" method="post">
                <div class="row text-center my-3">
                    <div class="col-12">
                        <p>Los campos marcados con <span class="required-input">*</span> son obligatorios.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <label for="inputNombre" class="form-label fw-bold">Nombre<span class="required-input">*</span></label>
                        <input type="text" class="form-control" name="name" aria-label="Nombre">
                        <span class="error" id="nameinput"></span>
                    </div>
                </div>
                <div class="row text-center my-3">
                    <div class="col-12">
                        <button type="submit" value="submit" class="btn btn-form fw-bold">Enviar</button>
                    </div>
                </div>
            </form>-->
            <!--<form name="contactForm" onsubmit="return validateForm()" action="contacto.php" method="post" class="needs-validation" novalidate>
                <div class="row text-center my-3">
                    <div class="col-12">
                        <p>Los campos marcados con <span class="required-input">*</span> son obligatorios.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <label for="inputNombre" class="form-label fw-bold">Nombre<span class="required-input">*</span></label>
                        <input type="text" class="form-control" name="name" aria-label="Nombre">
                        <div class="error" id="nameErr"></div>
                    </div>
                    <div class="col-md-3">
                        <label for="inputNumContrato" class="form-label fw-bold">No. de Contrato</label>
                        <input type="text" class="form-control" name="numero_contrato" aria-label="Número de Contrato">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <label for="inputCodigoPostal" class="form-label fw-bold">Código Postal<span class="required-input">*</span></label>
                        <input type="text" class="form-control" name="zipcode" aria-label="Código Postal">
                        <div class="error" id="zipcodeErr"></div>
                    </div>
                    <div class="col-md-3">
                        <label for="inputMobile" class="form-label fw-bold">Teléfono<span class="required-input">*</span></label>
                        <input type="text" class="form-control" name="mobile" aria-label="Teléfono">
                        <div class="error" id="mobileErr"></div>
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <div class="col-md-6">
                        <label for="inputMensaje" class="form-label fw-bold"><span class="text-mensaje">¿En qué podemos ayudarte?</span><span class="required-input">*</span></label>
                        <textarea class="form-control" name="message" cols="20" rows="5"></textarea>
                        <div id="mensajeHelp" class="form-text">Sólo se permiten 500 caracteres letras, números, puntos y comas.</div>
                        <div class="error" id="messageErr"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="accept" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">Aceptar <a href="./assets/docs/Aviso_Privacidad.pdf" class="text-decoration-none">Aviso de Privacidad</a> </label>
                            <div class="invalid-feedback">Debes aceptar el Aviso de Privacidad.</div>
                        </div>
                    </div>
                </div>
                <div class="row text-center my-3">
                    <div class="col-12">
                        <button type="submit" value="Submit" class="btn btn-form fw-bold">Enviar</button>
                    </div>
                </div>
            </form>-->
            <!--<form class="g-3" name="contactForm" onsubmit="return validateForm()">
                <div class="row text-center my-3">
                    <div class="col-12">
                        <p>Los campos marcados con <span class="required-input">*</span> son obligatorios.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <label for="inputNombre" class="form-label fw-bold">Nombre<span class="required-input">*</span></label>
                        <input type="text" class="form-control" name="name" required>
                        <div class="error" id="nameErr"></div>
                    </div>
                    <div class="col-md-3">
                        <label for="inputNumContrato" class="form-label fw-bold">No. de Contrato</label>
                        <input type="text" class="form-control" name="numero_contrato" aria-label="Número de Contrato">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <label for="inputCodigoPostal" class="form-label fw-bold">Código Postal<span class="required-input">*</span></label>
                        <input type="text" class="form-control" name="codigo_postal" aria-label="Código Postal" required>
                    </div>
                    <div class="col-md-3">
                        <label for="inputCodigoPostal" class="form-label fw-bold">Teléfono de Contacto<span class="required-input">*</span></label>
                        <input type="text" class="form-control" name="codigo_postal" aria-label="Código Postal" required>
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <div class="col-md-6">
                        <label for="inputMensaje" class="form-label fw-bold"><span class="text-mensaje">¿En qué podemos ayudarte?</span><span class="required-input">*</span></label>
                        <textarea class="form-control" name="mensaje" id="" cols="20" rows="5" required></textarea>
                        <div id="mensajeHelp" class="form-text">Sólo se permiten 500 caracteres letras, números, puntos y comas.</div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">Aceptar <a href="" class="text-decoration-none">Aviso de Privacidad</a>.</label>
                    </div>
                </div>
                <div class="row text-center my-3">
                    <div class="col-12">
                        <button type="submit" value="Submit" class="btn btn-form fw-bold">Enviar</button>
                    </div>
                </div>
            </form>-->
        </div>

        <footer class="">
            <div class="container">
                <!-- Row START -->
                <div class="row">

                    <!-- Widget 2 START -->
                    <div class="col-lg-12 ms-auto">
                        <div class="row">
                            <!-- Link block -->
                            <div class="col-6 col-md-3 pt-3">
                                <h5 class="text-white pb-2">SÍGUENOS</h5>
                                <ul class="nav">
                                    <li class="nav-item p-1 hvr-grow"><a class="" href="https://www.facebook.com/kualidigital" target="_blank" rel="noopener noreferrer"><img src="./assets/img/inicio/facebook.png" class="img-fluid logo-facebook" alt="Facebook"></a></li>
                                    <li class="nav-item p-1 hvr-grow"><a class="" href="https://www.instagram.com/kuali.digital/" target="_blank" rel="noopener noreferrer"><img src="./assets/img/inicio/instagram.png" class="img-fluid logo-instagram" alt="Instagram"></a></li>
                                    <li class="nav-item p-1 hvr-grow"><a class="" href="https://wa.me/+5215578784652?text=" target="_blank" rel="noopener noreferrer"><img src="./assets/img/inicio/whatsapp.png" class="img-fluid logo-whatsapp" alt="WhatsApp"></a></li>
                                </ul>
                            </div>

                            <!-- Link block -->
                            <div class="col-6 col-md-3 pt-3">
                                <h5 class="text-white pb-2">CONOCE MÁS</h5>
                                <div class="container-chevron ps-5">
                                    <a href="nosotros.html"><img src="./assets/img/inicio/chevron-down.png" class="img-fluid img-chevron hvr-sink" alt=""></a>
                                </div>
                            </div>
                                            
                            <!-- Link block -->
                            <div class="col-6 col-md-3 pt-3">
                                <h5 class="text-white pb-2">FORMAS DE PAGO</h5>
                                <p class="text-white">Puedes pagar tus servicios de Kuali Digital:</p>
                                <ul class="list-unstyled">
                                    <li class="text-white">En ventanilla del banco</li>
                                    <li class="text-white">En la practi-caja del banco</li>
                                    <li class="text-white">En sucursal o transferencia electrónica</li>
                                </ul>
                            </div>

                            <!-- Link block -->
                            <div class="col-6 col-md-3 pt-3">
                                <h5 class="text-white pb-2">ATENCIÓN PERSONALIZADA</h5>
                                <div class="container-atencion text-center">
                                    <a href="contacto-soporte.html" class="text-white fw-bold p-2 hvr-pulse btn btn-atencion">¡Quiero que me contacten!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Widget 2 END -->

                </div><!-- Row END -->
            </div>
            <div class="col">
                <div class="text-center text-footer"><a href="./assets/docs/Aviso_Privacidad.pdf" class="text-decoration-none text-secondary" rel="noopener noreferrer" target="_blank">Aviso de Privacidad</a> | <a href="./assets/docs/Codigo_Practicas_Comerciales.pdf" class="text-decoration-none text-secondary" rel="noopener noreferrer" target="_blank">Código de prácticas comerciales</a> | <a href="" class="text-decoration-none text-secondary" rel="noopener noreferrer" target="_blank">Título de concesión única para uso comercial</a> | <a href="./assets/docs/Registro_Publico_Contratos.pdf" class="text-decoration-none text-secondary" rel="noopener noreferrer" target="_blank">Registro público de contratos de adhesión de telecomunicaciones</a></div>
                <div class="text-center text-footer"><a href="./assets/docs/Colaboracion_Justicia.pdf" class="text-decoration-none text-secondary" rel="noopener noreferrer" target="_blank">Colaboración con la justicia</a> | <a href="./assets/docs/Carta_Derechos_Minimos_IFT.PDF" class="text-decoration-none text-secondary" rel="noopener noreferrer" target="_blank">Carta Derechos Mínimos de los Usuarios IFT</a> | <a href="./assets/docs/Contrato_Prestacion_Servicios_Internet.pdf" class="text-decoration-none text-secondary" rel="noopener noreferrer" target="_blank">Contrato de Prestación de Servicios de Internet</a></div>
            </div>
        </footer>

        <a href="https://wa.me/525578784652?text=Me%20gustaría%20saber%20mas%informacion%20sobre%20sus%20servicios" class="whatsapp" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp fs-1"></i></a>

        <script src="./assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>