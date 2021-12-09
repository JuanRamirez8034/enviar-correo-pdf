<?php  

if(isset($_POST['Enviar'])){
    echo "<script>alert('sii')</script>";
    //Capturo los datos enviados por POST desde el formulario
    $email               = $_POST['correo']; 
    $nombreCompleto      = $_POST['nombre'];
    $desdEmail           = 'programadorphp2017@gmail.com'; 
    $telefono            = $_POST['telefono'];
    $mensaje             = $_POST['mensaje'];

    //Construyo el cuerpo del mensaje    
    $message            = "Nombre: " . $nombreCompleto . "\n";
    $message            = $message . "Email: " . $email . "\n";
    $message            = $message . "Telefono: " . $telefono . "\n";

    //Obtener datos del archivo subido 
    $file_tmp_name      = $_FILES['archivo']['tmp_name'];
    $file_name          = $_FILES['archivo']['name'];
    $file_size          = $_FILES['archivo']['size'];
    $file_type          = $_FILES['archivo']['type'];

    $handle              = fopen($file_tmp_name, "r");
    $content             = fread($handle, $file_size);
    fclose($handle);
    $encoded_content     = chunk_split(base64_encode($content));
   
    $boundary            = md5("pera");
  
    //Encabezados
    $headers             = "MIME-Version: 1.0\r\n"; 
    $headers            .= "From:".$email."\r\n"; 
    $headers            .= "Reply-To: ".$desdEmail."" . "\r\n";
    $headers            .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
           
    //Texto plano
    $body               = "--$boundary\r\n";
    $body               .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body               .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
    $body               .= chunk_split(base64_encode($message)); 
           
    //Adjunto
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type; name=".$file_name."\r\n";
    $body               .="Content-Disposition: attachment; filename=".$file_name."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content; 
       
    $subject            = "Hola amigos WebDeveloper";
    
    //Enviando el mail
    $sentMail = mail($email, $subject, $body, $headers);
    if($sentMail){       
        echo"<p style='color:green; text-align: center; margin-top: 100px;'>
            Formulario enviado, revisar el Email.</center></p>";
            // Enviando Mensaje
            mail($destinatario, $asunto, $carta);
            header('Location:mensaje_enviado.php');
    }else{
        echo "<h2>Se produjo un error y su pedido no pudo ser enviado</h2>";
    }  

    // Datos para el correo
    $destinatario = "juanramirez8034@gmail.com";
    $asunto = "Contacto desde nuestra web";

    
}

?>