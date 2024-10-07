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

    <br>
    
    

    <div class="container">
		<h1 class="text-center">Libro de reclamaciones</h1>
		<form class="col-sm-6 col-sm-offset-3" action="reclamacion.php" method="POST">
			<div class="form-group">
				<label>Nombre *</label>
				<input type="text" class="form-control" placeholder="Ej. Cesar">
			</div>
			<div class="form-group">
				<label>Apellido *</label>
				<input type="text" class="form-control" placeholder="Ej. Aquino Maximiliano">
			</div>
			<div class="form-group">
				<label>Dirección *</label>
				<input type="text" class="form-control" placeholder="Ej. Av. Los Angeles 1025">
			</div>
			<div class="form-group">
				<label>Distrito *</label>
				<input type="text" class="form-control" placeholder="Ej. Villa El Salvador">
			</div>
			<div class="form-group">
				<label>Documento de Identidad*</label>
				<select class="form-control">
					<option>-Ninguno-</option>
					<option value="D.N.I.">D.N.I.</option>
					<option value="C.E.">C.E.</option>
					<option value="Menor de edad">Menor de edad</option>
				</select>
			</div>
			<div class="form-group">
				<label>N° doc. Identidad *</label>
				<input type="text" class="form-control" placeholder="Ej. 40125201">
			</div>
			<div class="form-group">
				<label>Correo electrónico *</label>
				<input type="email" class="form-control" placeholder="Ej. nombre@correo.com">
			</div>
			<div class="form-group">
				<label>Teléfono alternativo *</label>
				<input type="text" class="form-control" placeholder="Ej. 1 294-0008">
			</div>
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-md-3">Papá Mamá *</label>
					<div class="col-md-9">
						<input type="text" class="form-control" placeholder="Ej. Luis">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Monto a reclamar (S/.)</label>
				<input type="text" class="form-control" placeholder="Ej. 200">
			</div>

            <div class="form-group">
                 <label for="exampleFormControlFile1">Suba su prueba de evidencia</label>
               <input type="file" class="form-control-file" id="exampleFormControlFile1">
           </div>
			<label class="radio-inline">
				<input type="radio" name="tipo" checked> Producto
			</label>
			<label class="radio-inline">
				<input type="radio" name="tipo"> Servicio
			</label>
			<div class="form-group">
				<label>Descripcion</label>
				<textarea class="form-control" rows="5"></textarea>
			</div>
			<input type="submit" class="btn btn-block btn-lg btn-primary">
		</form>
		<p>&nbsp;</p>

	</div>

    <div id="message" style="display: none; position: fixed; top: 20px; right: 20px; padding: 15px; background-color: #ffeb3b; border: 1px solid #f57c00; border-radius: 5px; z-index: 1000;">
        👋 ¡No te vayas! 🌟
    </div>

    


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="script.js"></script>

    <script>
        document.addEventListener('visibilitychange', function() {
            const message = document.getElementById('message');
            if (document.visibilityState === 'hidden') {
                message.style.display = 'block'; // Mostrar mensaje
            } else {
                message.style.display = 'none'; // Ocultar mensaje
            }
        });
    </script>
</body>
</html> 