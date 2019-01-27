<?php include('session.php') ?>
<?php session_start();?>
<?php
$db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron">
               <div class="container">
                       <h1><strong>CONSULTA </strong>TUS ALUMNOS</h1>
    <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                    <th>#</th>
                    <th>Asesor</th>
                    <th>Alumno</th>
                    <th>Responsable</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </tr>
                            <?php
        
        $query="select * from alumno order by idalumno";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $asesor= $row['idasesor'];
                $query2="select a.idasesor, a.nombre, a.apellido_paterno, a.apellido_materno from alumno al, asesor a where a.idasesor=al.idasesor and a.idasesor='$asesor'";
                $result2= mysqli_query($db, $query2);
                $row2=mysqli_fetch_array($result2);
                echo'<tr>
                <td>'.$row['idalumno'].'</td>
                <td>'.$row2['nombre'].
                    ' '.$row2['apellido_paterno'].' '.$row2['apellido_materno'].'</td>
                <td>'.$row['nombre_alumno'].'</td>
                <td>'.$row['nombre_responsable'].'</td>
                 <td><a href="partials-admin/CRUD/server-crud.php?ealumno='.$row['idalumno'].'" class="btn btn-info">Editar</a></td>
                    <td><a href="partials-admin/CRUD/server-crud.php?dalumno='.$row['idalumno'].'" class="btn btn-danger">Eliminar</a></td>
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