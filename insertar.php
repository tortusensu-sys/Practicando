<?php
    include("conexion.php");
    $con = conectar();

    $cod_alumno = $_POST['cod_alumno'];
    $dni_alumno = $_POST['dni_alumno'];
    $nombres_alumno = $_POST['nombres_alumno'];
    $apellido_alumno = $_POST['apellido_alumno'];

    $sql = "INSERT INTO alumno VALUES('$cod_alumno','$dni_alumno','$nombres_alumno','$apellido_alumno')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");

    }else{

    }
?>