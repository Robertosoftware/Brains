<?php session_start();?>

<div class="jumbotron labelac">
<form method="post" action="partials-admin/CRUD/server-crud.php">
  	<?php include('../errores/errors-admin.php'); ?>
<?php
        $db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
        mysqli_set_charset($db, 'utf8');
        $numero = $_SESSION['id'];
        $query="select * from asesor where idasesor='$numero'";
        $result= mysqli_query($db, $query);
        $nombre="";
        $descripcion="";
     if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $nombre= $row['nombre'];
                $id= $row['idasesor'];
                $apellidop = $row['apellido_paterno'];
                $apellidom = $row['apellido_materno'];
                $direccion = $row['direccion'];
                $celular = $row['celular'];
                $carrera = $row['carrera'];
                $horas = $row['horas'];
                $email = $row['email'];
            }
        }
          ?>
            <label>Id</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="id" ria-describedby="sizing-addon1" value="<?php 
echo $id;
?>"  readonly>
</div>
                <label>Nombre</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" aria-describedby="sizing-addon1" value="<?php
echo $nombre;                                                                                                
?>">
</div>
               <label>Apellido Paterno</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="apellido_paterno" aria-describedby="sizing-addon1" value="<?php
echo $apellidop;                                                                                                
?>">
</div>
               <label>Apellido Materno</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="apellido_materno" aria-describedby="sizing-addon1" value="<?php
echo $apellidom;                                                                                                
?>">
</div>
               <label>Dirección</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="direccion" aria-describedby="sizing-addon1" value="<?php
echo $direccion;                                                                                                
?>">
</div>
               <label>Celular</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="celular" aria-describedby="sizing-addon1" value="<?php
echo $celular;                                                                                                
?>">
</div>
               <label>Horas impartidas</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="horas" aria-describedby="sizing-addon1" value="<?php
echo $horas;                                                                                                
?>">
</div>
               <label>Carrera</label>
      <select name="carrera" class="form-control dropd">
    <?php
        $query="select a.idcarrera, c.nombre from carrera c, asesor a where a.idcarrera=c.idcarrera and a.idcarrera='$carrera'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $number=$row['idcarrera'];
                echo'<option value="'.$row['idcarrera'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from carrera where idcarrera != '$number'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcarrera'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                    <label>Email</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="email" aria-describedby="sizing-addon1" value="<?php
echo $email;                                                                                                    
?>">
</div>
    
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg btn2" name="asesor_editar">Cambiar datos</button>
  	</div>
      	<p>
         <a href="index-admin.php#!/Asesor">¿Deseas regresar?</a>
  	</p>
  </form>
</div>