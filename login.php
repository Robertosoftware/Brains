<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<html lang="es">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resources/favicon.ico">
        <!-- Bootstrap core CSS -->
    <link href="resources/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme -->
    <link href="resources/bootstrap-theme.min.css" rel="stylesheet">
   <head>
  <title>Login del Usuario</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
           <label>Email</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="email" class="form-control" name="email" ria-describedby="sizing-addon1" value="">
</div>
                <label>Password</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="password" class="form-control" name="password" aria-describedby="sizing-addon1">
</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_asesor">Login</button>
  	</div>
      	<p>
  		¿Deseas registrarte? <a href="register.php">Registro de Usuario</a>
  	</p>
  </form>
</body>
</html>