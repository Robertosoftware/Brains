<?php
session_start();
$nombre="";
$descripcion="";
$db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
      mysqli_set_charset($db, 'utf8');
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
    $query = "Update asesor set nombre='$nombre', apellido_paterno='$apellidop', apellido_materno='$apellidom', direccion='$direccion', celular='$celular', email='$email', idcarrera='$carrera', horas='$horas' where idasesor = '$id'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index.php#!/Actualizar');}
    else{
                echo "ERROR";
    }
}
if (isset($_GET['dalumno'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dalumno']);
    $query = "Delete from alumno where idalumno='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index.php#!/Alumno');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['ealumno'])) {
         $edit = mysqli_real_escape_string($db, $_GET['ealumno']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index.php#!/Alumno-editar');
}
if (isset($_POST['consultar'])) {
        $mes= mysqli_real_escape_string($db, $_POST['mes']);
        $ano = mysqli_real_escape_string($db, $_POST['ano']);
        $_SESSION['mes'] = $mes;
        $_SESSION['ano'] = $ano;
        header('location: ../../index.php#!/Clases');
}
if (isset($_GET['eclases'])) {
         $edit = mysqli_real_escape_string($db, $_GET['eclases']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index.php#!/Clases-ver');
}
if (isset($_GET['dventa'])) {
        $delete = mysqli_real_escape_string($db, $_GET['dventa']);
    $query = "Delete from venta where idventa='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index.php#!/Clases');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_POST['alumno'])) {
    $email = $_SESSION['email'];
    $query="select idasesor from asesor where email='$email'";
    $result= mysqli_query($db, $query);
    $row=mysqli_fetch_array($result);
    $idasesor= $row['idasesor'];
    $nombre= mysqli_real_escape_string($db, $_POST['nombre_alumno']);
    $edad = mysqli_real_escape_string($db, $_POST['edad']);
    $nombre_responsable = mysqli_real_escape_string($db, $_POST['nombre_responsable']);
    $celular = mysqli_real_escape_string($db, $_POST['celular_responsable']);
    $correo = mysqli_real_escape_string($db, $_POST['correo_responsable']);
    $parentesco = mysqli_real_escape_string($db, $_POST['parentesco_responsable']);
    $direccion = mysqli_real_escape_string($db, $_POST['direccion']); 
    $query = "Insert into alumno (nombre_alumno,edad,nombre_responsable,celular_responsable,correo_responsable,parentesco_responsable,direccion,idasesor) values('$nombre','$edad','$nombre_responsable','$celular','$correo','$parentesco','$direccion','$idasesor')";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index.php#!/Alumno');}
    else{
                echo "ERROR";
    }
}
if (isset($_POST['alumno_editar'])) {
    $nombre= mysqli_real_escape_string($db, $_POST['nombre_alumno']);
    $edad = mysqli_real_escape_string($db, $_POST['edad']);
    $nombre_responsable = mysqli_real_escape_string($db, $_POST['nombre_responsable']);
    $celular = mysqli_real_escape_string($db, $_POST['celular_responsable']);
    $correo = mysqli_real_escape_string($db, $_POST['correo_responsable']);
    $parentesco = mysqli_real_escape_string($db, $_POST['parentesco_responsable']);
    $direccion = mysqli_real_escape_string($db, $_POST['direccion']); 
    $idalumno =  mysqli_real_escape_string($db, $_POST['idalumno']);
    $query = "Update alumno set nombre_alumno='$nombre', edad='$edad', nombre_responsable='$nombre_responsable', celular_responsable='$celular', correo_responsable='$correo', parentesco_responsable='$parentesco' where idalumno = '$idalumno'";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index.php#!/Alumno');}
    else{
                echo "ERROR";
    }
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
      	  header('location: ../../index.php#!/Exito');}
    else{
                echo "ERROR";
    }
     }else{
        header('location: ../../index.php#!/Falla');
    }
}
if (isset($_POST['venta'])) {
    $email = $_SESSION['email'];
    $cantidad=1;
    $query = "SELECT * FROM asesor WHERE email='$email'";
    $result=  mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $idasesor= $row['idasesor'];
    $hasesor= $row['horas'];
    $horas = mysqli_real_escape_string($db, $_POST['horas']);
    $paquete = mysqli_real_escape_string($db, $_POST['paquete1']);
    $fecha = mysqli_real_escape_string($db, $_POST['fecha']);
    $zona = mysqli_real_escape_string($db, $_POST['zona1']);
    $alumno = mysqli_real_escape_string($db, $_POST['alumno1']);
    $categoria = mysqli_real_escape_string($db, $_POST['categoria1']);
    $materia = mysqli_real_escape_string($db, $_POST['materia1']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    if ($hasesor<100){
    $cantidad= (350*$horas);
    }else{
    $cantidad= (250*$horas);
    }
    $query = "Insert into venta (horas,fecha,descripcion,idpaquete,idasesor,idzona,idalumno,idcategoria,idmateria,cantidad) values('$horas','$fecha','$descripcion','$paquete','$idasesor','$zona','$alumno','$categoria','$materia','$cantidad')";
  	$results = mysqli_query($db, $query);
        if($results){
      	  header('location: ../../index.php#!/Registro-exitoso');}
    else{
                echo "ERROR
                $horas,$fecha,$descripcion,$paquete,$idasesor,$zona,$alumno,$categoria,$materia,$cantidad";
    }
}
?>
?>