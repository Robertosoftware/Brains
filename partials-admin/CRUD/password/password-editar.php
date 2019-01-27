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
?>" readonly>
</div>
               <label>Apellido Paterno</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="apellido_paterno" aria-describedby="sizing-addon1" value="<?php
echo $apellidop;                                                                                                
?>" readonly>
</div>
               <label>Apellido Materno</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="apellido_materno" aria-describedby="sizing-addon1" value="<?php
echo $apellidom;                                                                                                
?>" readonly>
</div>
        <label>Celular</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="celular" aria-describedby="sizing-addon1" value="<?php
echo $celular;                                                                                                
?>" readonly>
    </div>
                    <label>Email</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="email" aria-describedby="sizing-addon1" value="<?php
echo $email;                                                                                                    
?>" readonly>
</div>
     <label>Password</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="password_1" ria-describedby="sizing-addon1" value="">
</div>
        	  <label>Confirmar password</label>
  	 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="password_2" ria-describedby="sizing-addon1" value="">
</div>
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg btn2" name="password_editar">Cambiar datos</button>
  	</div>
      	<p>
         <a href="index-admin.php#!/Password">¿Deseas regresar?</a>
  	</p>
  </form>
</div>