<?php

session_start();
error_reporting(0);
include "db.php";
if(isset($_SESSION["username"])){
    header("Location: panel.php");
}


if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=md5($_POST["password"]);
    

    $sql="SELECT * FROM usuario WHERE email='$email' AND clave='$password'";
    $result= mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['usuarios'];
        
        header("Location: ../panel.php");
    }else{
        ?><script>alert('La contraseña o el email son incorrectos');
           window.location.href='../index.php';
        //header("Location: ../index.php"); session_start(): Cannot start session when headers already sent</script>
        <?php
    }
    
    
}


?>