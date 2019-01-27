<?php
session_start();

// initializing variables
$nombre = "";
$apellido_paterno = "";
$apellido_materno = "";
$celular = "";
$direccion = "";
$horas = "";
$email = "";
$carrera = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
      mysqli_set_charset($db, 'utf8');
//Ver la conexión de la database.
//if ($db->connect_error) {
//   die("Connection failed: " . $db->connect_error);
//}
//  echo "Connected successfully";
// REGISTER USER
if (isset($_POST['reg_asesor'])) {
  // receive all input values from the form
  $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $apellido_paterno = mysqli_real_escape_string($db, $_POST['apellido_paterno']);
  $apellido_materno = mysqli_real_escape_string($db, $_POST['apellido_materno']);
  $direccion = mysqli_real_escape_string($db, $_POST['direccion']);
  $horas = mysqli_real_escape_string($db, $_POST['horas']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $celular = mysqli_real_escape_string($db, $_POST['celular']);
  $carrera = mysqli_real_escape_string($db, $_POST['carrera']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $clave = mysqli_real_escape_string($db, $_POST['clave']);
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($nombre)) { array_push($errors, "Email requerido para la operación"); }
  if (empty($email)) { array_push($errors, "Email requerido para la operación"); }
  if (empty($celular)) { array_push($errors, "Celular requerido para la operación"); }
  if (empty($apellido_paterno)) { array_push($errors, "Apellido Paterno requerido para la operación"); }
  if (empty($apellido_materno)) { array_push($errors, "Apellido Materno requerido para la operación"); }
  if (empty($direccion)) { array_push($errors, "Domicilio requerido para la operación"); }
  if (empty($horas)) { array_push($errors, "Horas requerido para la operación"); }
  if (empty($carrera)) { array_push($errors, "Carrera requerida para la operación"); }
  if (empty($password_1)) { array_push($errors, "Password requerido para la operación"); }
  if (empty($clave)) { array_push($errors, "Clave requerida para la operación"); }
  if ($password_1 != $password_2) {
	array_push($errors, "No coincide el password");
  }
  if ($clave != "IW32") {
	array_push($errors, "La clave de registro no es correcta");
  }

  // first check the database to make sure 
  // a user does not already exist with the same email and/or email
  $user_check_query = "SELECT * FROM asesor WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
 if ($user){
    if ($user['email'] === $email) {
      array_push($errors, "Email existente");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO asesor (nombre, apellido_paterno, apellido_materno, celular, email, direccion, horas, idcarrera, password)
  			  VALUES('$nombre', '$apellido_paterno', '$apellido_materno', '$celular', '$email', '$direccion', '$horas', '$carrera', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "Ahora estás en el sistema";
  	header('location: index.php');
  }
}
if (isset($_POST['login_asesor'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email requerido para la operación");
  }
  if (empty($password)) {
  	array_push($errors, "Password requerido para la operación");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM asesor WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
        while($row=mysqli_fetch_array($results)){
            if($row['email']=="admin@gmail.com"){
             $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "Ahora estás en el sistema";
  	  header('location: index-admin.php')  ; 
            }else{
         $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "Ahora estás en el sistema";
  	  header('location: index.php')  ; 
        }
        }
  	}else {
  		array_push($errors, "Email/password incorrectos");
  	}
  }
}
?>