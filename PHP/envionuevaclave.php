<?php

ini_set('display_errors', 1);
require("../PHPMailer/class.phpmailer.php");
require("../PHPMailer/class.smtp.php");

$correo = $_POST['co'];
$usuario = $_POST['usu'];
$clave = $_POST['cla'];

sendgmail($correo, $usuario, $clave);

function sendgmail($correo, $usuario, $clave) {
    $mail = new PHPMailer();

    $body = '<html lang="es">
    <head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    </head>
    <body style="background: #ffffff" >    
    <center><img src="http://tramites.gob.sv/media/Operacion%20de%20negocio.png"></center> 
    <h4>Su Peticion de cambio de  contraseña ha sido  validado.</h4>
    <center><table>
            <caption style="font-style: oblique"><h3>Estimado Usuario sus Credenciales  son:</h3></caption>
            <tr>
                <td style="width: 200px;height: 30px;font-size: 20px">Nombre de Usuario:</td>
                <td style="width: 200px;height: 30px;font-size: 30px" >'.$usuario.'</td>
            </tr>
            <tr>
                <td style="width: 200px;height: 30px;font-size: 20px">Password: </td>
                <td style="width: 200px;height: 30px;font-size: 30px">'.$clave.'</td>
            </tr>
        </table>
</center>                     
    </body>
</html>';

    $body .= "";

    $mail->IsSMTP();

    //Sustituye (ServidorDeCorreoSMTP)  por el host de tu servidor de correo SMTP
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    //Sustituye  ( CuentaDeEnvio )  por la cuenta desde la que deseas enviar por ejem. prueba@domitienda.com  
    $mail->From = "proyectovas2017@gmail.com";
    $mail->FromName = "Trabajo 1";
    $mail->Subject = "Hola este es una prueba de mail";
    $mail->AltBody = "Leer";
    $mail->MsgHTML($body);

    // Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. usuario@destino.com  
    $mail->AddAddress($correo, '');
    $mail->SMTPAuth = true;

    // Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@midominio.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta 
    $mail->Username = "proyectovas2017@gmail.com";
    $mail->Password = "PVAS2017";
    if ($mail->Send()) {
        return $body;
    } else {
        return false;
        die();
    }

    $json['success'] = 'OK';
    echo json_encode($json);
}
