<?php

$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"wallet_db");

if (!$connection) {
    echo "error de conexion";
}


$email =$_GET['email'];
$password =$_GET['password'];

$query= "SELECT * FROM usuario WHERE email='$email' AND password='$password'";
//$query="SELECT email, password from usuario where email='$email' AND password='$password'";
//$query="SELECT * FROM usuario WHERE email='$email'";

$resultado= mysqli_query($connection,$query);



while ($fila= $resultado->fetch_array()) {
    $usuario[]=array_map('utf8_encode',$fila);
}
var_dump($usuario);
//echo json_encode($usuario);

if($usuario[2]==$email && $usuario[3]==$password){
    echo"ingreso correctamente";
}else{
    print "error";
}

//var_dump($resultado);
/*
if($resultado->num_rows >0){
    echo "ingreso correctamente";
}else{
    echo"no se pudo mamaguevo";
}
*/





/*class DBConfig{

private $user = "root";
private $password = "";
private $dbname = "wallet_db";
private $host ="localhost";

public function connect(){
    try{
    $dsn= "mysql:hots=$this->host;dbname=$this->dbname";
    $connection = new PDO($dsn, $this->user, $this->password);
    $connection-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "conecction full";
    }
    catch(PDOException $exception){
        echo "Connection failded ".$exception->getMessage();
    }
}
}
$clase= new DBConfig;

$clase->connect();  */