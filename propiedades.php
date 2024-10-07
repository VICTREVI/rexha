<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIR</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpeg" href="images/logorexha.JPG">
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

    <main class="products container">
    <br>

    <h2>NUEVAS PROPIEDADES</h2>

    <div class="box-container" id="lista-1">

        <div class="box">   
            <img src="images/terreno_urbano.jpg" alt="">
            <div class="product-txt">
                <h3>TERRENO URBANO <br>EN VENTA </h3>
                <h3>1110325</h3>
                    <p>Cusco, Cusco, San Sebastian</p>
                    <p class="precio">S/. 1'015,200.00 <br> USD 270,000.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">
                        Agregar al carrito
                    </a>
            </div>
        </div>

        <div class="box">
            <img src="images/terreno.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>TERRENO <br>EN VENTA</h3>
                <h3>1110307</h3>
                    <p>Arequipa, Arequipa, Socabaya</p>
                    <p class="precio">S/. 620,400.00 <br> USD 165,000.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="2">
                        Agregar al carrito
                    </a>
            </div>
        </div>

        <div class="box">       
            <img src="images/local_comercial.jpg" alt="producto-1">     
            <div class="product-txt">
                <h3>LOCAL COMERCIAL <br>EN ALQUILER</h3>
                <h3>1110331</h3>
                <p>Lambayeque, Chiclayo</p>
                <p class="precio">S/. 22,560.00 <br> USD 6,000.00</p>
                <a href="#" class="agregar-carrito btn-3" data-id="3">
                    Agregar al carrito
                </a>
            </div>
        </div>
        <div class="box">
            <img src="images/casita.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>CASA <br>EN VENTA </h3>
                <h3>1110332</h3>
                    <p>Lima, Punta Negra</p>
                    <p class="precio">S/. 244,400.00 <br> USD 65,000.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/oficina2.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>OFICINA <br>EN VENTA </h3>
                <h3>1110316</h3>
                    <p>Lima, Santiago de Surco</p>
                    <p class="precio">S/. 4'985,760.00 <br> USD 1'326,000.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="5">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/oficina3.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>OFICINA <br>EN ALQUILER </h3>
                <h3>1110317</h3>
                    <p>Lima, Santiago de Surco</p>
                    <p class="precio">S/. 30,681.00 <br> USD 8,160.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="6">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/terreno2.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>TERRENO<br>EN ALQUILER </h3>
                <h3>1110308</h3>
                    <p>Lima, Lurigancho</p>
                    <p class="precio">S/. 29,328.00 <br> USD 7,800.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="7">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">          
            <img src="images/depa_duplex.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO DUPLEX<br> EN ALQUILER</h3>
                <h3>1110326</h3>
                    <p>Lima, San Miguel</p>
                    <p class="precio">S/. 1,900.00 <br> USD 505.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="8">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/urbana_c.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>CASA URBANA <br>EN VENTA </h3>
                <h3>1110304</h3>
                    <p>Lima, San Borja</p>
                    <p class="precio">S/. 2'143,200.00 <br> USD 570,000.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="9">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/departamento_flat.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO FLAT<br>EN VENTA</h3>
                <h3>1110335</h3>
                    <p>Lima, Los Olivos</p>
                    <p class="precio">S/. 221,840.00 <br> USD 59,000.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="10">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/oficina4.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>OFICINA <br>EN VENTA </h3>
                <h3>1110345</h3>
                    <p>Lima, San Borja</p>
                    <p class="precio">S/. 536,176.00 <br> USD 142,600.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="11">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/lamolina.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>CASA <br>EN VENTA </h3>
                <h3>1110359</h3>
                    <p>Lima, La Molina</p>
                    <p class="precio">S/. 2'368,800.00 <br> USD 630,000.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="12">
                        Agregar al carrito
                    </a>
            </div>
        </div>
      
    </div>
    
    <div class="btn-2" id="load-more"> Cargar Mas</div>
</main>

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