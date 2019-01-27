<?php include('session.php') ?>
<?php session_start();?>
<?php
$db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
mysqli_set_charset($db, 'utf8')
          ?>
<div class="fondo">
     <div class="jumbotron labelac">
    <form method="post" action="partials/CRUD/server-crud.php">
<?php
        $db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
        mysqli_set_charset($db, 'utf8');
        $numero = $_SESSION['id'];
        $query="select * from venta where idventa='$numero'";
        $result= mysqli_query($db, $query);
     if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $idventa = $row['idventa'];
                $horas = $row['horas'];
                $fecha = $row['fecha'];
                $descripcion = $row['descripcion'];
                $paquete = $row['idpaquete'];
                $asesor = $row['idasesor'];
                $zona = $row['idzona'];
                $alumno = $row['idalumno'];
                $categoria= $row['idcategoria']; 
                $materia = $row['idmateria'];
                $cantidad = $row['cantidad'];
                $registro = $row['fecha_registro'];

            }
        }
          ?>
            <label>Id</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="idalumno" ria-describedby="sizing-addon1" value="<?php 
echo $numero;
?>"  readonly>
</div>
                <label>Paquete</label>
      <select readonly required name="paquete1" class="form-control dropd">   
        <?php
        $query="select * from paquete where idpaquete='$paquete'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idpaquete'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
               <label>Número de horas impartidas</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="horas" aria-describedby="sizing-addon1" value="<?php echo $horas;?>" readonly>
</div>
               <label>Fecha de la clase</label>
      <div class="input-group input-group-md">
           <span class="input-group-addon" id="sizing-addon1"></span>
          <input type="date" class="dat" name="fecha" value="<?php echo $fecha;?>" aria-describedby="sizing-addon1" readonly>
</div>
               <label>Zona</label>
       <select readonly name="zona1" class="form-control dropd">   
        <?php
        $query="select * from zona where idzona='$zona'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idzona'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
               <label>Alumno</label>
      <select readonly name="alumno1" class="form-control dropd">   
        <?php
         $email = $_SESSION['email'];
        $query = "SELECT * FROM asesor WHERE email='$email'";
        $result=  mysqli_query($db, $query);
        $row= mysqli_fetch_array($result);
        $number= $row['idasesor'];
        $query="select * from alumno where idalumno='$alumno' order by idalumno";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idalumno'].'">'.$row['nombre_alumno'].'</option>';
            }
        }
        ?>
     </select>
               <label>Categoría</label>
      <select readonly name="categoria1" class="form-control dropd"> 
        <?php
        $query="select * from categoria where idcategoria='$categoria'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
               
                    <label>Materia</label>
       <select readonly name="materia1" class="form-control dropd">   
        <?php
        $query="select * from materia where idmateria='$materia'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idmateria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
          <label>Descripción</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input style="height:100px" type="text" class="form-control" name="descripcion" aria-describedby="sizing-addon1" value="<?php 
echo $descripcion; ?>"  readonly>
</div>
       <label>Fecha de registro de la clase</label>
      <div class="input-group input-group-md">
           <span class="input-group-addon" id="sizing-addon1"></span>
          <input type="datetime" class="dat" name="fecha" value="<?php echo $registro;?>" aria-describedby="sizing-addon1" readonly>
</div>
        <br>
      </form> 
                  <a href="index.php#!/Consultar">¿Deseas regresar?</a>
</div>
    </div>
