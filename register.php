<?php
include('server.php')
    ?>
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
<?php
           $db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
      mysqli_set_charset($db, 'utf8');
          ?>
    <title>Registro del sistema</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Registro</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
        	  <label>Nombre</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" ria-describedby="sizing-addon1" value="">
  	</div>
        	  <label>Apellido paterno</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="apellido_paterno" ria-describedby="sizing-addon1" value="">
  	</div>
        	  <label>Apellido materno</label>
       <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="apellido_materno" ria-describedby="sizing-addon1" value="">
  	</div>
        <label>Celular</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="celular" ria-describedby="sizing-addon1" value="">
  	</div>
      <label>Email</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="email" class="form-control" name="email" ria-describedby="sizing-addon1" value="">
</div>
         	  <label>Domicilio</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="direccion" ria-describedby="sizing-addon1" value="">
</div>
        	  <label>Horas impartidas</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="horas" ria-describedby="sizing-addon1" value="">
</div>
        	  <label>Carrera</label>
<select required name="carrera" class="form-control dropd">
                     <option value="">
                             </option>
                         <?php
                         $query="select * from carrera";
                         $result= mysqli_query($db, $query);
                         if($result)
                         {
                             while($row=mysqli_fetch_array($result)){
                                 echo'<option value="'.$row['idcarrera'].'">'.$row['nombre'].'</option>';
                             }
                         }
                         ?>
                      </select>
     <br>
        	  <label>Password</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="password" class="form-control" name="password_1" ria-describedby="sizing-addon1" value="">
</div>
        	  <label>Confirmar password</label>
  	 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="password" class="form-control" name="password_2" ria-describedby="sizing-addon1" value="">
</div>
      <label>Clave de registro</label>
  	 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="password" class="form-control" name="clave" ria-describedby="sizing-addon1" value="">
</div>
  	<div class="input-group">
    <button type="submit" class="btn" name="reg_asesor">Registrar</button>
  	</div>
  	<p>
  		Ya eres miembro? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>