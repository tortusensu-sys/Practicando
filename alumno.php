<?php
    include("conexion.php");
    $con = conectar();
    $sql= "SELECT * FROM alumno";
    $query= mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practica</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class = "conrainer mt-5">
        <div class= "row">
            <div class = "col-md-3">
                <h1>Ingrese datos.</h1>
                <form action="insertar.php" method ="POST">

                    <input type="text" class="form-control mb-2" name= "cod_alumno" placeholder= "cod estudiante">
                    <input type="text" class="form-control mb-2" name= "dni_alumno" placeholder= "DNI">
                    <input type="text" class="form-control mb-2" name= "nombres_alumno" placeholder= "Nombres">
                    <input type="text" class="form-control mb-2" name= "apellido_alumno" placeholder= "Apellidos">

                    <input type="submit" class= "btn btn-primary">

                </form>

            </div>
            <div class = "col-md-8">
                <table class="table">
                    <thead class= "table-sucess table-striped">
                        <tr>
                            <th>Código</th>
                            <th>DNI</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while($row = mysqli_fetch_array($query)){
                        ?>

                        <tr>
                            <th><?php echo $row['cod_alumno']?></th>
                            <th><?php echo $row['dni_alumno']?></th>
                            <th><?php echo $row['nombres_alumno']?></th>
                            <th><?php echo $row['apellido_alumno']?></th>
                            <th><a href="actualizar.php?id=<?php echo $row['cod_alumno']?>" class= "btn btn-info">Editar</a></th>
                            <th><a href="eliminar.php?id=<?php echo $row['cod_alumno']?>" class= "btn btn-info">Eliminar</a></th>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>
        

    </div>
</body>
</html>