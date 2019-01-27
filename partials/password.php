<?php session_start();?>

<div class="jumbotron labelac">
<form method="post" action="partials/CRUD/server-crud.php">
<?php
        $db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
        mysqli_set_charset($db, 'utf8');
        $email = $_SESSION['email'];
        $query="select * from asesor where email='$email'";
        $result= mysqli_query($db, $query);
     if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $id= $row['idasesor'];
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
         <a href="index.php">¿Deseas regresar?</a>
  	</p>
  </form>
</div>