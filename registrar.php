<?php
$servername="bolllp4rzwieyonxtw1e-mysql.services.clever-cloud.com";
$username="ulenwxk4s6qlq7zd";
$password="QNIPHtlowvy3txR0XP6g"
$dbname="bolllp4rzwieyonxtw1e"

$nombre=$_GET["nombre"];
$usuario=$_GET["usuario"];
$contrasena=$_GET["contrasena"];

$conn=new  mysql($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Conecction failed". $conn->connect_error);
}

$sql="INSERT INTO personas (nombre,usuario,contrasena)
VALUES ('$nombre','$usuario','$contrasena')";

if($conn->query($sql)===TRUE){

    echo("Nuevo registro creado con éxito");
   
}else{
    echo "Error" .$sql ."<br>" .$conn->error;

}

$conn->close();
?>