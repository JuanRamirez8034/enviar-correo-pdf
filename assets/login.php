<?php 
include "db.php";
session_start();
error_reporting(0);

if(isset($_SESSION["username"])){
    header("Location: panel.php");
}


if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=md5($_POST["password"]);

    $sql="SELECT * FROM usuario WHERE email='$email' AND clave='$password'";
    $result= mysqli_query($conn, $sql);
    echo var_dump($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['usuarios'];
        $usuario = $_SESSION['username'];
        $usuario = htmlspecialchars($usuario);
        echo "<script>alert('Sesion iniciada para: ". $usuario. "')</script>";
        header("Location: ./panel.php");
    }else{
        echo "<script>alert('La contraseña o el email son incorrectos')</script>";
    }
    
    
}


?>