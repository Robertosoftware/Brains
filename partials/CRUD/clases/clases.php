<?php include('session.php') ?>
<?php session_start();?>
    <!-- logged in user information -->
<div class="fondo">
     <div class="jumbotron labelac">
    <form method="post" action="partials/CRUD/server-crud.php">
           <label>Año</label>
 <select name="ano" class="form-control dropd">
 <?php    
$Ano = array('2019', '2020', '2019');

for ($i=1; $i<=3; $i++) {
     if ($i == date('y'))
echo '<option value="'.$Ano[($i)-1].'"selected>'.$Ano[($i)-1].'</option>';
     else
echo '<option value="'.$Ano[($i)-1].'">'.$Ano[($i)-1].'</option>';
     }
?>
        </select>
                <label>Mes</label>
      <select name="mes" class="form-control dropd">
 <?php    
$Meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
       'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

for ($i=1; $i<=12; $i++) {
     if ($i == date('m'))
echo '<option value="'.$i.'"selected>'.$Meses[($i)-1].'</option>';
     else
echo '<option value="'.$i.'">'.$Meses[($i)-1].'</option>';
     }
?>
        </select>
        <br>
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg btn2" name="consultar">Consultar clases</button>
  	</div>
      </form>     
</div>
    </div>
