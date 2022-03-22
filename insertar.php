<?php

$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"wallet_db");

if (!$connection) {
    echo "error de conexion";
}

$nombre =$_POST['nombre'];
$email =$_POST['email'];
$password =$_POST['password'];



/*
$qry1="select * from tbl_usuario where email='$email'";
$raw=mysqli_query($connection,$qry1);
$count=mysqli_num_rows($raw);

if ($count>0) {
    $response="exist";
}else{*/




$query="INSERT INTO usuario (nombre,email,password)values ('$nombre','$email','$password')";

$resultado=mysqli_query($connection,$query);

if ($resultado) {
    echo "registro correctamente";
}else{
    echo "error";
}
