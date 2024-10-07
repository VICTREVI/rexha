<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIR</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="icon" type="image/jpeg" href="images/logorexha.JPG">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>
<body class="hidden">
    <div class="centrado" id="onload">
    <div class="lds-default">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
    <header class="header">
    <div class="menu container">
            <a href="#" class="logo">
            <img src="images/rexha 2.png" alt="Logo de REXHA.PE" style="max-width: 140px; height: auto;">
           </a> <!--NOMBRE DE LA EMPRESA-->
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="propiedades.php">Propiedades</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="iniciarsesion.html" target="_blank">Login</a></li>
                    <li><a href="registrarte.html" target="_blank">Registro</a></li>
                    
                    
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img id="img-carrito" src="images/car.svg" alt="car">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>                           
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-3">Vaciar Carrito</a>
                            <a href="#" id="comprar-carrito" class="btn-3" style="display: none;">Comprar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>    
    </header>

    <br>
    <div class="encontraras-contentn container">
    <div class="encontraras-txtn">
        <h1>Nuestra Misión</h1>
        <p> 
        En REXHA, nos dedicamos a conectar a las personas con su hogar<br>ideal.
        Creemos que cada cliente merece un servicio personalizado y profesional, 
        y trabajamos<br>incansablemente para hacer realidad sus sueños inmobiliarios.
        </p>
        <img src="images/Sector.jpg" alt="Nuestra Misión" width="300" height="200" />

    </div>

    <div class="encontraras-txtn">
        <h1>Nuestra Visión</h1>
        <p> 
        Aspiramos a ser la agencia inmobiliaria de confianza en Lima,<br>
        reconocida por nuestra integridad, compromiso y atención al cliente.<br>
        Nos esforzamos por innovar en cada aspecto de nuestro negocio, ofreciendo <br>
        soluciones que se adapten a las necesidades cambiantes del mercado.
        </p>
        <img src="images/vision.jpg" alt="Nuestra Misión" width="300" height="200" />
        
    </div>
    <br>

    <div class="encontraras-txtn">
        <h1>Nuestros Valores</h1>
        <p> 
        Integridad: Actuamos con honestidad y transparencia en todas nuestras transacciones.<br>
        Compromiso: Estamos dedicados a brindar un servicio excepcional, asegurándonos de que cada cliente se sienta valorado y apoyado.<br>
        Innovación: Nos mantenemos a la vanguardia del sector, utilizando tecnología y estrategias modernas para ofrecer las mejores opciones a nuestros clientes. <br>
        Comunicación: Fomentamos un diálogo abierto y claro, manteniendo a nuestros clientes informados en cada paso del proceso.
        </p>
        <img src="images/valores.jpg" alt="Nuestra Misión" width="300" height="200" />
    </div>

    <div class="encontraras-txtn">
        <h1>Nuestro Equipo</h1>
        <p> 
        Contamos con un equipo de profesionales altamente capacitados y apasionados por el sector inmobiliario.
        Desde agentes inmobiliarios hasta asesores financieros, cada miembro de nuestro equipo está comprometido
        a ofrecer un servicio de calidad y a ayudar a nuestros clientes a tomar decisiones informadas.
        </p>
        <img src="images/equipo.jpg" alt="Nuestra Misión" width="300" height="200" />
    </div>

    <div class="encontraras-txtn">
        <h1>¿Por qué elegirnos?</h1>
        <p> 
        En REXHA, no solo vendemos propiedades, construimos relaciones. 
        Nuestro enfoque centrado en el cliente y nuestro profundo 
        conocimiento del mercado nos permiten ofrecer soluciones que
        realmente marcan la diferencia. Ya sea que estés buscando 
        comprar, vender o alquilar, estamos aquí para guiarte en
         cada paso del camino.
        </p>
        <img src="images/elegirnos.jpg" alt="Nuestra Misión" width="300" height="200" />
    </div>

    <div class="encontraras-txtn">
        <h1>Contáctanos</h1>
        <p> 
        Estamos aquí para ayudarte. No dudes en ponerte en contacto 
        con nosotros para cualquier consulta o para comenzar tu viaje
        inmobiliario.
        </p>
        <img src="images/contactanos.jpg" alt="Nuestra Misión" width="300" height="200" />

    </div>
</div>

<footer class="footer">
    <div class="footer-content container">
        <div class="link">
            <h3>Enlaces de Navegación</h3>
            <ul>
                <li><a href="/acerca-de">Acerca de</a></li>
                <li><a href="/contacto">Contacto</a></li>
                <li><a href="">Política de Privacidad</a></li>
                <li><a href="/reclamos.php" target="_blank">Libro de Reclamos</a></li>
            </ul>
        </div>

        <div class="link">
            <h3>Redes Sociales</h3>
            <ul>
                <li><a href="https://twitter.com/misitioweb">Twitter</a></li>
                <li><a href="https://www.instagram.com/zumateong?igsh=MTljZzlmczJoZmxrYQ==" target="_blank">Instagram</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=61565989621254" target="_blank">Facebook</a></li>
                <li><a href="https://www.linkedin.com/company/ong-zumate/posts/?feedView=all " target="_blank">LinkedIn</a></li>
            </ul>
        </div>

            <div class="link">
            <h3>Información Legal</h3>
            <ul>
                <li><a href="Términos de Usos">Términos de Usos</a></li>
                <li><a href="Cookies">Política de Cookies</a></li>
            </ul>

            
        </div>
    </div>
</footer>



    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="script.js"></script>

    <script>
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) 
            {
                document.title = " 😰no te vayas "; // Mostrar mensaje
            } else {
                document.title = '😁Gracias por volver '; // Ocultar mensaje
            }
        });
    </script>

</body>
</html> 