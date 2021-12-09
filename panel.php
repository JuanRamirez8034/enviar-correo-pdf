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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/personalizados.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
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
    <div class="container-fluid" style="min-height: 700px;">
        <h1 class="fs-1 fw-bolder font-monospace text-center py-4 text-light">BIENVENIDO A SU CUENTA</h1>
        <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>FORMULARIO<br>DE CORREOS</h2>
            </section>
            <section class="info_items">
                <img src="./img/ico/correos_2.png" class="fa fa-envelope" style="width: 128px; height:128px;" alt="">
            </section>
        </section>

        <form action="./assets/enviar.php" method="post" class="form_contact" enctype="multipart/form-data">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombre y Apellido (*)</label>
                <input type="text" id="names" name="nombre" required>

                <label for="phone">Telefono/Celular (Opcional)</label>
                <input type="text" id="phone" name="telefono">

                <label for="email">Correo electronico (*)</label>
                <input type="text" id="email" name="correo" required>

                <label for="mensaje">Mensaje (*)</label>
                <textarea id="mensaje" name="mensaje" required></textarea>

                <label for="mensaje">Archivo (Opcional)</label>
                <input type="file" name="archivo" id="archivo" class="form-control text-center">
                <input type="submit" value="Enviar" name="Enviar" id="btnSend">
            </div>
        </form>

    </section>
        
    </div>
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
