<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<!-- recive of controller data-->
<br>
<br>


<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
        <label for="tab-1" class="tab">Iniciar Sesion</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up">
        <label for="tab-2" class="tab">Crear Cuenta</label>
		<div class="login-form">

			<form action="controller/userControllers.php" method="post">

			<div class="sign-in-htm">
				<input type="hidden" name="action" value="login">
				<div class="group">
					<label for="user" class="label">Usuario</label>
					<input id="user" name="user" type="text" class="input" value="admin" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password" value="admin" required>
				</div>
                <br>
				
				<div class="group">
					<input type="submit" class="button" value="Iniciar Sesion">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			</form>
			<!-- this us for register new user-->

			<form action="controller/userControllers.php" method="post">
			<div class="sign-up-htm">
				<input type="hidden" name="action" value="insert">

				<div class="group">
					<label for="nombres" class="label">Nombres</label>
					<input id="nombres" name="nombres" type="text" class="input" placeholder=" Ingrese su Nombre Completo" pattern="[a-zA-Z ]{2,254}" title="Solo debe contener letras. e.g. john" required>
				</div>	
				<div class="group">
					<label for="user" class="label">Usuario</label>
					<input id="user"  name="user" type="text" class="input" placeholder=" Ingrese su Nombre de Usuario" pattern="[a-zA-Z0-9 ]{2,254}" title=" e.g. john" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password" required>
				</div>
				
				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="email"  name="email" type="email" class="input" placeholder=" Ingrese su Nombre de Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="e.g. aso@gmail.com" required >
				</div>
				<div class="group">
					<input type="submit" class="button" value="Crear Cuenta">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Tienes cuenta?</a>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>