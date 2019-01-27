<?php include('session.php') ?>
<?php session_start();?>
<?php
$db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
mysqli_set_charset($db, 'utf8')
          ?>
<div class="fondo">
     <div class="jumbotron labelac">
    <form method="post" action="partials/CRUD/server-crud.php">
                <label>Paquete</label>
      <select required name="paquete1" class="form-control dropd">   
        <?php
              echo'<option value=""></option>';
        $query="select * from paquete";
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
  <input type="number" class="form-control" name="horas" aria-describedby="sizing-addon1" value="" required>
</div>
               <label>Fecha de la clase</label>
      <div class="input-group input-group-md">
           <span class="input-group-addon" id="sizing-addon1"></span>
          <input type="date" class="dat" name="fecha" value="" aria-describedby="sizing-addon1" required>
</div>
               <label>Zona</label>
       <select required name="zona1" class="form-control dropd">   
        <?php
                  echo'<option value=""></option>';
        $query="select * from zona";
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
      <select required name="alumno1" class="form-control dropd">   
        <?php
                  echo'<option value=""></option>';
         $email = $_SESSION['email'];
        $query = "SELECT * FROM asesor WHERE email='$email'";
        $result=  mysqli_query($db, $query);
        $row= mysqli_fetch_array($result);
        $number= $row['idasesor'];
        $query="select * from alumno where idasesor='$number' order by idalumno";
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
      <select required name="categoria1" class="form-control dropd"> 
        <?php
          echo'<option value=""></option>';
        $query="select * from categoria";
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
       <select required name="materia1" class="form-control dropd">   
        <?php
                     echo'<option value=""></option>';
        $query="select * from materia";
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
  <input style="height:100px" type="text" class="form-control" name="descripcion" aria-describedby="sizing-addon1" value="">
</div>
        <br>
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg btn2" name="venta">Registrar clase</button>
  	</div>
      </form>     
</div>
    </div>
