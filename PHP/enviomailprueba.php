<?php


ini_set('display_errors', 1);
require("../PHPMailer/class.phpmailer.php");
require("../PHPMailer/class.smtp.php");

$correo = $_POST['co'];
$usuario = $_POST['usu'];
$clave = $_POST['cla'];

sendgmail($correo,$usuario,$clave);

function sendgmail($correo, $usuario,$clave) {
    $mail = new PHPMailer();

    $body = '<table border="0">
  <tbody>
    <tr>
      <td >Estimado Usuario su Credenciales de Acceso  son:</td>      
    </tr>
    <tr>
      <td >usuario ' . $usuario . '</td>      
    </tr>
    <tr>
      <td >clave ' . $clave . '</td>      
    </tr>
  </tbody>
</table>';

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

