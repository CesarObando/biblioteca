<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>

        <link rel="stylesheet" href="login/css/style.css">

  </head>

  <body>

    <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Iniciar Sesión</h1>
			</div>
      {!!Form::open(['route'=>'login.store','method'=>'post'])!!}
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="nombre de usuario" id="nombreUsuario">
				<label class="login-field-icon fui-user" for="nombreUsuario"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="contrasena" id="contrasena">
				<label class="login-field-icon fui-lock" for="contrasena"></label>
				</div>

				<a class="btn btn-primary btn-large btn-block" href="#">Iniciar sesión</a>
        {!!Form::close()!!}
			</div>
		</div>
	</div>
</body>


  </body>
</html>
