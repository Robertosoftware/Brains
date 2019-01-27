<?php
session_start();
$nombre="";
$descripcion="";
$errors = array(); 
$db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
      mysqli_set_charset($db, 'utf8');
if (isset($_POST['categoria'])) {
$nombre="";
$descripcion="";
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Insert into categoria (nombre, descripcion) values ('$nombre','$descripcion')";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Categoria');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['zona'])) {
$nombre="";
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $query = "Insert into zona (nombre) values ('$nombre')";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Zona');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['dzona'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dzona']);
    $query = "Delete from zona where idzona='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Zona');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['ezona'])) {
         $edit = mysqli_real_escape_string($db, $_GET['ezona']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Zona-editar');
}
if (isset($_POST['zona_editar'])) {
$nombre="";
$descripcion="";
$id="";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $query = "Update zona set nombre='$nombre' where idzona = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Zona');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['categoria_editar'])) {
$nombre="";
$descripcion="";
$id="";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Update categoria set nombre='$nombre', descripcion='$descripcion' where idcategoria = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Categoria');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['paquete'])) {
$nombre="";
$descripcion="";
$precio="";
$descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
 $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $query = "Insert into paquete (nombre, precio, descripcion) values ('$nombre','$precio','$descripcion')";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Paquete');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['dpaquete'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dpaquete']);
    $query = "Delete from paquete where idpaquete='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Paquete');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['epaquete'])) {
         $edit = mysqli_real_escape_string($db, $_GET['epaquete']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Paquete-editar');
}
if (isset($_POST['paquete_editar'])) {
$nombre="";
$descripcion="";
$precio="";
$id="";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Update paquete set nombre='$nombre', precio='$precio', descripcion='$descripcion' where idpaquete = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Paquete');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['actualizar'])) {
                $apellidop =mysqli_real_escape_string($db, $_POST['apellido_paterno']);
                $apellidom = mysqli_real_escape_string($db, $_POST['apellido_materno']);
                $direccion = mysqli_real_escape_string($db, $_POST['direccion']);
                $celular = mysqli_real_escape_string($db, $_POST['celular']);
                $carrera = mysqli_real_escape_string($db, $_POST['carrera']);
                $horas = mysqli_real_escape_string($db, $_POST['horas']);
     $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $email = mysqli_real_escape_string($db, $_POST['email']);                                         
    $query = "Update asesor set nombre='$nombre', apellido_paterno='$apellidop', apellido_materno='$apellidom', direccion='$direccion', celular='$celular', email='$email', horas='$horas', idcarrera='$carrera' where idasesor = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Actualizar');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['dcategoria'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dcategoria']);
    $query = "Delete from categoria where idcategoria='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Categoria');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['ecategoria'])) {
         $edit = mysqli_real_escape_string($db, $_GET['ecategoria']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Categoria-editar');
}
if (isset($_POST['materia'])) {
$nombre="";
$descripcion="";
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Insert into materia (nombre, descripcion) values ('$nombre','$descripcion')";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Materia');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['emateria'])) {
         $edit = mysqli_real_escape_string($db, $_GET['emateria']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Materia-editar');
}
if (isset($_GET['dmateria'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dmateria']);
    $query = "Delete from materia where idmateria = '$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Materia');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_POST['materia_editar'])) {
$nombre="";
$descripcion="";
$id="";
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Update materia set nombre='$nombre', descripcion='$descripcion' where idmateria = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Materia');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['dasesor'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dasesor']);
    $query = "Delete from asesor where idasesor='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Asesor');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['easesor'])) {
         $edit = mysqli_real_escape_string($db, $_GET['easesor']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Asesor-editar');
}
if (isset($_POST['asesor_editar'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $apellidop = mysqli_real_escape_string($db, $_POST['apellido_paterno']);
    $apellidom = mysqli_real_escape_string($db, $_POST['apellido_materno']);
    $direccion = mysqli_real_escape_string($db, $_POST['direccion']);
    $celular = mysqli_real_escape_string($db, $_POST['celular']);
    $carrera = mysqli_real_escape_string($db, $_POST['carrera']);
    $horas = mysqli_real_escape_string($db, $_POST['horas']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $query = "Update asesor set nombre='$nombre', apellido_paterno='$apellidop', apellido_materno='$apellidom', direccion='$direccion', celular='$celular', email='$email', idcarrera='$carrera', horas='$horas' where idasesor = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Asesor');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['dalumno'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dalumno']);
    $query = "Delete from alumno where idalumno='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Alumno');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['ealumno'])) {
         $edit = mysqli_real_escape_string($db, $_GET['ealumno']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Alumno-editar');
}
if (isset($_POST['alumno_editar'])) {
    $idalumno =  mysqli_real_escape_string($db, $_POST['idalumno']);
    $nombre= mysqli_real_escape_string($db, $_POST['nombre_alumno']);
    $edad = mysqli_real_escape_string($db, $_POST['edad']);
    $nombre_responsable = mysqli_real_escape_string($db, $_POST['nombre_responsable']);
    $celular = mysqli_real_escape_string($db, $_POST['celular_responsable']);
    $correo = mysqli_real_escape_string($db, $_POST['correo_responsable']);
    $parentesco = mysqli_real_escape_string($db, $_POST['parentesco_responsable']);
    $direccion = mysqli_real_escape_string($db, $_POST['direccion']); 
    $asesor = mysqli_real_escape_string($db, $_POST['idasesor']);
    $query = "Update alumno set nombre_alumno='$nombre', edad='$edad', nombre_responsable='$nombre_responsable', celular_responsable='$celular', correo_responsable='$correo', parentesco_responsable='$parentesco', idasesor='$asesor' where idalumno = '$idalumno'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Alumno');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['epassword'])) {
         $edit = mysqli_real_escape_string($db, $_GET['epassword']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Password-editar');
}
if (isset($_POST['password_editar'])) {
     $id = mysqli_real_escape_string($db, $_POST['id']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    if ($password_1 == $password_2) {
    $password = md5($password_1);
    $query = "Update asesor set password='$password' where idasesor = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index-admin.php#!/Exito');}
    else{
                echo "ERROR";
    }
     }else{
        header('location: ../../index-admin.php#!/Falla');
    }
}
?>