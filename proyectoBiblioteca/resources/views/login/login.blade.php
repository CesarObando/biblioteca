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
      {!!Form::open(['action'=>'LoginController@store','method'=>'post'])!!}
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" placeholder="nombre de usuario" id="nombreUsuario" name="nombreUsuario">
				<label class="login-field-icon fui-user" for="nombreUsuario"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" placeholder="contrasena" id="contrasena" name="contrasena">
				<label class="login-field-icon fui-lock" for="contrasena"></label>
				</div>
        <input type="submit" name="iniciarSesion" value="Iniciar Sesión" class="btn btn-primary btn-large btn-block" >
        {!!Form::close()!!}
			</div>
		</div>
	</div>
</body>


  </body>
</html>
