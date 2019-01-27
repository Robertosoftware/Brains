<?php include('session.php') ?>
<?php session_start();?>
<?php
$db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron">
               <div class="container">
                       <h1><strong>CONSULTA </strong>TUS CLASES</h1>
    <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                    <th>#</th>
                    <th># Clase</th>
                    <th>Fecha</th>
                    <th>Alumno</th>
                    <th>Ver</th>
                    <th>Eliminar</th>
                    </tr>
                            <?php
        $email = $_SESSION['email'];
        $query="select idasesor from asesor where email='$email'";
        $result= mysqli_query($db, $query);
        $row=mysqli_fetch_array($result);
        $idasesor= $row['idasesor'];
        $mes= $_SESSION['mes'];
        $ano= $_SESSION['ano'];
        $query="select * from venta where idasesor='$idasesor' and YEAR(fecha)='$ano' and MONTH(fecha)='$mes' order by idventa";
        $result= mysqli_query($db, $query);
        $numero=0;
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $numero= $numero + 1;
                $nalumno= $row['idalumno'];
                $query2="select nombre_alumno from alumno where idalumno='$nalumno'";
        $result2= mysqli_query($db, $query2);
        $row2=mysqli_fetch_array($result2);
        $nombre_alumno= $row2['nombre_alumno'];
                echo'<tr>
                <td>'.$numero.'</td>
                <td>'.$row['idventa'].'</td>
                <td>'.$row['fecha'].'</td>
                <td>'.$nombre_alumno.'</td>
                 <td><a href="partials/CRUD/server-crud.php?eclases='.$row['idventa'].'" class="btn btn-info">Ver</a></td>
                    <td><a href="partials/CRUD/server-crud.php?dventa='.$row['idventa'].'" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                ';
            }
        }
        ?>
                </table>
</div>
</div>
                   </div>
    </div>