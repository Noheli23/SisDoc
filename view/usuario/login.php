<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar Sesión</title>
	
	<link rel="shortcut icon" href="public/img/logo_ufpsRojo.png" type1="image/x-icon">
	<link rel="stylesheet" href="public/css/style1.css">
	<link rel="stylesheet" href="public/css/estilo.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
</head>

<body>

	<header class="nav">
		<img src="public/img/logo_ufps.png" alt="logo_ufps">
	</header>

	<div class="container">
		<div class="login-content">
			<form action="<?php echo constant('URL'); ?>login/iniciarSesion" method="POST">

				<h2 class="title">Iniciar Sesión</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Código del usuario</h5>
						<input class="input" type="number" name="codigo" maxlength="7" required />
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Contraseña</h5>
						<input class="input" type="password" name="clave" maxlength="32" required />
					</div>
				</div>
				<a href="#">¿Has olvidado tu contraseña?</a>
				<br>
				<h2><a href="<?php echo constant('URL') . 'registrar'; ?>">Registrarse</a></h2>
				<input type="submit" class="btn" value="Iniciar Sesión">
			</form>
		</div>
	</div>
 <!-- footer -->
 <footer>
    <div class="footer">
      <div class="footer__imagenes">
        <img id="sis" src="public/img/logo_vertical_ingsistemas_ht180.png" alt="ingSistemas" />
        <img id="ufps" src="public/img/logoufpsvertical.png" alt="UFPS" />
        <h3 class="footer__imagenes--titulo">SisDoc</h3>
        <p class="footer__imagenes--texto">
          Plataforma para el envio y recepcion de documentos para el
          departamento y programa de ingenieria de sistemas UFPS. Desarrollo,
          soporte y mantenimiento hecho 100% por talento UFPS.
        </p>
      </div>
      <div class="footer__enlaces">
        <h3 class="footer__enlaces--titulo">Enlaces Rapidos</h3>
        <label><a href="">Acerca de nosotros</a></label><br />
        <label><a href="">Funcionalidades del software</a></label><br />
        <label><a href="">Acerca de nosotros</a></label><br />
        <label><a href="">Soporte</a></label><br />
      </div>
      <div class="footer__redes">
        <h3 class="footer__redes--titulo">Redes</h3>
        <label><a href="">Facebook</a></label><br />
        <label><a href="">Twitter</a></label>
      </div>
    </div>
    <div class="footer2">
      <div class="footer2__linea"></div>
      <div class="footer2__last">
        <h3 class="linea__last--title" style="color: aliceblue">
          Copyright © AÑO 2021
        </h3>
      </div>
    </div>
    
  </footer>
	<script src="public/js/main.js"></script>
</body>

</html>