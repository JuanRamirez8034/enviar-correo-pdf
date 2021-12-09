<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
}else{
    $usuario = $_SESSION['username'];
    $usuario = htmlspecialchars($usuario);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/personalizados.css">
</head>
<body id="fondo">
        <!-- Navegacion  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="./logout.php"><img src="img/ico/correos.png" alt="Imagen Principal" style="width: 50px; height: 50px;"> CORREOS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="panel.php" class="nav-link text-black fw-bolder fst-italic btn-warning rounded-2"><img src="img/ico/send.png" alt="" style="width: 20px; height: 20px;" class="align-top"> Enviar</a></li>
                <li class="nav-item"><a href="./assets/logout.php" class="nav-link text-black fw-bolder fst-italic btn-primary rounded-2 mx-2"><img src="img/ico/apagar.png" alt="" style="width: 20px; height: 20px;" class="align-top">  <?php echo $usuario ;?></a></li>
            </ul>
        </div>        
      </nav>
    <section class="form_wrap opacity-75" style="min-height: 700px;">
        
        <section class="mensaje-exito">
            <h1>SU MENSAJE SE ENVIÓ CON EXITO</h1>
            <a href="panel.php" class="btn rounded-4 ">ENVIAR OTRO MENSAJE</a>
        </section>

    </section>
     <!--Footer-->
        <div class="bg-dark container-fluid pt-4">
            <div class="row align-items-center">
              
                <div class="container-fluid p-2 bg-gradient text-center mb-4">
                    <span class="text-white fw-lighter">2021 &copy; Todos los derechos reservados<br><p class="fst-italic">Juan Ramirez</p></span>
                </div>
            </div>
        </div> 
        <!--Scripts-->
        <!--Jquery-->
        <!--<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>-->
        <script src="js/jquery-3.6.0.slim.js"></script>
        <!--bootstrap js-->
        <script src="js/bootstrap.js"></script>

</body>
</html>
