<?php 

$server="localhost";
$user="id18088683_juan";
$pass="6w@1MYvSyp^On\8{";
$database="id18088683_users";

$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("Conexión fallida");
}

?>