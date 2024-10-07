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
    <link rel="stylesheet" href="whatsapp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
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
            <br>
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

        <br>
        <br>

        <div class="header-content container">
            <div class="header-txt">
                <span>Bienvenido a nuestra inmobiliaria</span> 
                <h1>TODO EN INMOBILIARIA REXHA</h1>
                <p> 
                    
                     Sumérgete en el mundo de las propiedades y descubre una experiencia 
                     única. Estamos aquí para asesorarte para cada <br>estilo de acuerdo a 
                     las necesidades. Explora nuestra colección <br>y haz que tu pasión por 
                     las propiedades se refleje en cada compra.
                    ¡Empecemos a triunfar juntos en la vida y fuera de él!
                </p>
                
            </div>
            <div class="header-img">
                <img src="images/oficina.jpg" alt="">
            </div>          
        </div>
    </header>


<div class="encontraras-content container">
    <div class="encontraras-txt">
        <h1>En nuestra inmobiliaria encontraras</h1>
        <p> 
            En REXHA, te ofrecemos una excelente calidad de propiedades 
            de la más alta calidad. Desde las propiedades más reconocidas 
            hasta los departamentos maravillosos, cada propiedad que 
            encuentres aquí ha sido elegido por su excelencia en 
            diseño, durabilidad y rendimiento. Estamos comprometidos 
            en brindarte solo lo mejor, para que puedas confiar en que 
            tu vitalidad te llevará al éxito en cada lugar. Descubre 
            la diferencia que la calidad hace en tu vida y únete con 
            los mejores en REXHA inmobiliaria. 
            <br>¡Prepárate para elevar tu experiencia vivencial al 
            siguiente nivel!
        </p>
    </div>
</div>
   
    <section class="oferts container">
        
        <div class="ofert-1 b1">
            <div class="ofert-txt">
                <h3>DEPARTAMENTOS</h3>
            </div>
            <div class="ofert-img">
                <img src="images/depa.png" alt="">
            </div>  
        </div>

        <div class="ofert-1 b2">
            <div class="ofert-txt">
                <h3>CASAS</h3>             
            </div>
            <div class="ofert-img">
                <img src="images/casas.jpg" alt="">
            </div>  
        </div>

        <div class="ofert-1 b3">
            <div class="ofert-txt">
                <h3>LOTES</h3>
            </div>
            <div class="ofert-img">
                <img src="images/lotes.jpg" alt="">
            </div>  
        </div>
    
    </section>

   <main class="products container">

    <h2>ÚLTIMAS PROPIEDADES</h2>

    <div class="box-container" id="lista-1">

        <div class="box">   
            <img src="images/sanbartolo.jpg" alt="">
            <div class="product-txt">
                <h3>DEPARTAMENTO <br> EN ALQUILER </h3>
                <h3>1110359</h3>
                    <p>Lima, San Bartolo</p>
                    <p class="precio">S/. 2,256.00 <br> USD 600.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">
                        Agregar al carrito
                    </a>
            </div>
        </div>

        <div class="box">
            <img src="images/surco.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO <br> EN ALQUILER</h3>
                <h3>1110521</h3>
                    <p>Lima, Santiago de Surco</p>
                    <p class="precio">S/. 3,500.00 <br> USD 930.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="2">
                        Agregar al carrito
                    </a>
            </div>
        </div>

        <div class="box">       
            <img src="images/miraflores.jpg" alt="producto-1">     
            <div class="product-txt">
                <h3>DEPARTAMENTO FLAT<br> EN ALQUILER</h3>
                <h3>1110482</h3>
                <p>Lima, Santiago de Surco</p>
                <p class="precio">S/. 4,512.00 <br> USD 1,200.00</p>
                <a href="#" class="agregar-carrito btn-3" data-id="3">
                    Agregar al carrito
                </a>
            </div>
        </div>
        <div class="box">
            <img src="images/chorrillos.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO FLAT<br> EN ALQUILER </h3>
                <h3>1110564</h3>
                    <p>Lima, Chorrillos</p>
                    <p class="precio">S/. 2,444.00 <br> USD 650.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/lince2.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO FLAT<br> EN ALQUILER </h3>
                <h3>1110484</h3>
                    <p>Lima, Lince</p>
                    <p class="precio">S/. 4,324.00 <br> USD 1,150.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="5">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/santiago.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO <br> EN ALQUILER </h3>
                <h3>1110519</h3>
                    <p>Lima, Santiago de Surco</p>
                    <p class="precio">S/. 3,500.00 <br> USD 930.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="6">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/sami2.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO DUPLEX<br> EN ALQUILER </h3>
                <h3>1110471</h3>
                    <p>Lima, San Miguel</p>
                    <p class="precio">S/. 2,000.00 <br> USD 531.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="7">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">          
            <img src="images/losolivos.png" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO<br> EN ALQUILER </h3>
                <h3>1110453</h3>
                    <p>Lima, Los Olivos</p>
                    <p class="precio">S/. 15,792.00 <br> USD 4,200.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="8">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/casa_urbana2.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>CASA URBANA<br> EN ALQUILER </h3>
                <h3>1110352</h3>
                    <p>Lima, San Isidro</p>
                    <p class="precio">S/. 9,400.00 <br> USD 2,500.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="9">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/terro.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>TERRENO<br> EN ALQUILER </h3>
                <h3>1110308</h3>
                    <p>Lima, Lurigancho</p>
                    <p class="precio">S/. 29,328.00 <br> USD 7,800.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="10">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/venta_duplex.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO DUPLEX<br> EN ALQUILER </h3>
                <h3>1110471</h3>
                    <p>Lima, San Miguel</p>
                    <p class="precio">S/. 2,000.00 <br> USD 531.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="11">
                        Agregar al carrito
                    </a>
            </div>
        </div>
        <div class="box">
            <img src="images/lindodepa.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO <br>EN ALQUILER </h3>
                <h3>1110465</h3>
                    <p>Lima, Santiago de Surco</p>
                    <p class="precio">S/. 300.00 <br> USD 79.00</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="12">
                        Agregar al carrito
                    </a>
            </div>
        </div>
      
    </div>
    
    <div class="btn-2" id="load-more"> Cargar Mas</div>
</main>

<section class="testimonial container">
    <h1>Testimonios</h1>
    <h2>Que opinan los nuestros clientes</h2>
    <div class="testimonial-content">
        <div class="testimonial-1">
            <h4>PIERO CASTILLO</h4>
            <p>La entrega rapida y segura, lo recomiendo
                a todo publico en general.
            </p>
            <img src="images/starts.png" alt="">
        </div>

        <div class="testimonial-1">
            <h4>JORGE BARBA</h4>
            <p>Desde que compramos nuestro departamento en Rexha nos hemos sentido muy felices, 
                las propiedades son de primera. 
            </p>
            <img src="images/starts.png" alt="">
        </div>

        <div class="testimonial-1">
            <h4>PILAR GASCA</h4>
            <p>La vida nos ha traido bendiciones desde que conocimos al gran equipo de Rexha. 
            </p>
            <img src="images/starts.png" alt="">
        </div>

        <div class="testimonial-1">
            <h4>BARBARA HERRERA</h4>
            <p>Les hablé a mis familiares sobre la inmobiliaria Rexha se quedaron impresionados, sin palabras por la cantidad 
                de propiedades que ofrece Rexha como inmobiliaria. 
            </p>
            <img src="images/starts.png" alt="">
        </div>

        <div class="testimonial-1">
            <h4>JOSE SANTAMARIA</h4>
            <p>Les hablé a mis familiares sobre la inmobiliaria Rexha se quedaron impresionados, sin palabras por la cantidad 
                de propiedades que ofrece Rexha como inmobiliaria. 
            </p>
            <img src="images/starts.png" alt="">
        </div>

        <div class="testimonial-1">
            <h4>PEDRO JIMENEZ</h4>
            <p>Les hablé a mis familiares sobre la inmobiliaria Rexha se quedaron impresionados, sin palabras por la cantidad 
                de propiedades que ofrece Rexha como inmobiliaria. 
            </p>
            <img src="images/starts.png" alt="">
        </div>

        
    </div>
</section>

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51932779837&text=Hola%20sean%20bienvenidos,%20deseo%20conversar%20con%20el%20vendedor" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    
</body>
</html> 