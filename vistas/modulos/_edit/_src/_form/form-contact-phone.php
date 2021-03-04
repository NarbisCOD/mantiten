<?php

    # Declaración de Variables
    $dominio = "http://mantiten.com/";
    
    # Declaración de Variables del Cuerpo del Mensaje y Obtención de Datos del Formulario
    $asunto = "Contacto desde la Web";

    if(!empty($_POST["name"]) && !empty($_POST["email-address"]) && !empty($_POST["phone"])){
        # Si [name], [email-address] y [phone] son diferentes a vacío (es decir, no están vacíos)

        $name = $_POST["name"];
        $emailaddress = $_POST["email-address"];
        $phone = $_POST["phone"];

    }else{
        # Caso contrario (significa que algún campo llegó vacío)
        # el mail no se envía y los manda a la página /vulneracion

        echo '<script>
                window.location.href = "'.$dominio.'vulneracion";
            </script>';
        exit();

    }

    # Utilizamos PHP Mailer porque es muy estable
    use PHPMailer\PHPMailer\PHPMailer;
    require '../../../../../PHPMailerHostinger/vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.hostinger.com.ar';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'form@mantiten.com'; # Email Corporativo
    $mail->Password = '123456';     # Contraseña del Email Corporativo

    $mail->setFrom('form@mantiten.com', 'mantiten.com');     # Email Corporativo y cómo va a figurar en el email del destinatario
    $mail->addAddress('comercial@mantiten.com', 'mantiten.com');  # Email del destinatario (podés colocar el mismo email de arriba). Solo 1 destinatario

    if ($mail->addReplyTo($_POST["email-address"], $_POST["name"])) {  # Email al cual responderle (email del usuario)
        $mail->Subject = $asunto;
        $mail->isHTML(false);
        $mail->msgHTML('
            <head>
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
            </head>
            <body>'.
                $cuerpo = 'Contacto Web.</strong><br/><br/>'. "\r\n" .
                '<b>Nombre:</b> '.$name.'<br/>'. "\r\n" .
                '<b>Email:</b> '.$emailaddress.'<br/>'. "\r\n" .
                '<b>Telefono:</b> '.$phone.'
            </body>');
        if (!$mail->send()) {
            # Acá podrías enviarlo a una página que diga que "hubo un error".
            # Por ej. si justo se le corta el internet. En lo personal me parece excesivo, innecesario.
        } else {
            # Esto pasalo por alto ya que se cumple en el script de abajo, donde te manda a /mensaje-enviado
        }
    } else {
        # Este de acá sería si el envío no pudo ejecutarse porque el Email del destinatario es inválido.
        # Generalmente te enviás el Email a vos mismo, por eso me parece totalemten innecesario agregar algo acá
    }

    # el mail se envío correctamente y los manda a la página /mensaje-enviado
    echo '
        <script>
            window.location.href = "'.$dominio.'mensaje-enviado";
        </script>';
?>