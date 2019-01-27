<?php session_start();?>

<div class="jumbotron labelac">
<form method="post" action="partials-admin/CRUD/server-crud.php">
  	<?php include('../errores/errors-admin.php'); ?>
<?php
        $db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
        mysqli_set_charset($db, 'utf8');
        $numero = $_SESSION['id'];
        $query="select * from alumno where idalumno='$numero'";
        $result= mysqli_query($db, $query);
     if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $idalumno = $row['idalumno'];
                $nombre= $row['nombre_alumno'];
                $edad = $row['edad'];
                $fecha = $row['fecha_registro'];
                $nombre_responsable = $row['nombre_responsable'];
                $celular = $row['celular_responsable'];
                $correo = $row['correo_responsable'];
                $parentesco = $row['parentesco_responsable'];
                $direccion = $row['direccion']; 
                $asesor = $row['idasesor'];
            }
        }
          ?>
            <label>Id</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="idalumno" ria-describedby="sizing-addon1" value="<?php 
echo $idalumno;
?>"  readonly>
</div>
                <label>Nombre Completo del Alumno</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre_alumno" aria-describedby="sizing-addon1" value="<?php
echo $nombre;                                                                                                
?>">
</div>
               <label>Edad del Alumno</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="edad" aria-describedby="sizing-addon1" value="<?php
echo $edad;                                                                                                
?>">
    </div>
               <label>Nombre Responsable</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre_responsable" aria-describedby="sizing-addon1" value="<?php
echo $nombre_responsable;                                                                                                
?>">
</div>
               <label>Celular Responsable</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="celular_responsable" aria-describedby="sizing-addon1" value="<?php
echo $celular;                                                                                                
?>">
</div>
               <label>Correo Responsable</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="email" class="form-control" name="correo_responsable" aria-describedby="sizing-addon1" value="<?php
echo $correo;                                                                                                
?>">
</div>
               <label>Parentesco Responsable</label>
       <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="parentesco_responsable" aria-describedby="sizing-addon1" value="<?php
echo $parentesco;                                                                                                
?>">
</div>
                    <label>Dirección</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="direccion" aria-describedby="sizing-addon1" value="<?php
echo $direccion;                                                                                                    
?>">
</div>
    <label>Asesor</label>    
    <select name="idasesor" class="form-control dropd">
    <?php
        $query="select a.idasesor, a.nombre, a.apellido_paterno, a.apellido_materno from alumno al, asesor a where a.idasesor=al.idasesor and a.idasesor='$asesor'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $number=$row['idasesor'];
                echo'<option value="'.$row['idasesor'].'">'.$row['nombre'].
                    ' '.$row['apellido_paterno'].' '.$row['apellido_materno'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from asesor where idasesor != '$asesor'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idasesor'].'">'.$row['nombre'].
                    ' '.$row['apellido_paterno'].' '.$row['apellido_materno'].'</option>';
            }
        }
        ?>
     </select>
    
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg btn2" name="alumno_editar">Cambiar datos</button>
  	</div>
      	<p>
         <a href="index-admin.php#!/Alumno">¿Deseas regresar?</a>
  	</p>
  </form>
</div>