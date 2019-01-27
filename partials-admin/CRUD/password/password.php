<?php include('session.php') ?>
<?php session_start();?>
<?php
$db = mysqli_connect('localhost', 'id8502144_root', '254088Ma!', 'id8502144_mydb');
mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron">
               <div class="container">
                       <h1><strong>CONSULTA </strong>TUS USUARIOS</h1>
    <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                    <th>#</th>
                    <th>Nombre completo</th>
                    <th>Email</th>
                    <th>Carrera</th>
                    <th>Editar</th>
                    </tr>
                            <?php
        $query="select * from asesor order by idasesor";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $id= $row['idcarrera'];
                $query2 = "SELECT * FROM carrera WHERE idcarrera='$id'";
                $result2=  mysqli_query($db, $query2);
                $row2= mysqli_fetch_array($result2);
                echo'<tr>
                <td>'.$row['idasesor'].'</td>
                <td>'.$row['nombre'].' '.$row['apellido_paterno'].' '.$row['apellido_materno'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row2['nombre'].'</td>
                 <td><a href="partials-admin/CRUD/server-crud.php?epassword='.$row['idasesor'].'" class="btn btn-info">Cambiar</a></td>
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