 <?php
require '../../../vendor/autoload.php';

require "../../../vendor/spipu/html2pdf/src/Html2Pdf.php";
use Spipu\Html2Pdf\Html2Pdf;


require '../../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../../vendor/phpmailer/phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require('../../../controllers/controller.php');
require('../../../models/crud.php');

// Only process POST reqeusts.
if (isset($_POST["emailCliente"])) {
    $cuerpoCorreo = $_POST["cuerpoCorreo"];

    $html2pdf = new Html2Pdf('P', 'A4', 'en');
    $html2pdf -> writeHTML($cuerpoCorreo);
    $html2pdf -> output(__DIR__ . "correo.pdf", "F");
    
    /* $fileAtt = __DIR__ . "correo.pdf";
    $fileAttType = "application/pdf";
    $fileAttName = "Resultados.pdf";

    $file = fopen($fileAtt, 'rb');
    $data = fread($file, filesize($fileAtt));
    fclose($file); */
    $name = strip_tags(trim($_POST["nombreCliente"]));

    $recipient = $_POST["emailCliente"];
    $emailCopia = $_POST["emailCopia"];

    $subject = "Resultados de estudio para " . $_POST["nombreCliente"];

    $mail = new PHPMailer();
    $mail -> setFrom('info@OGALaboratorio.com', 'OGA Laboratorio');
    $mail -> addAddress($recipient, $name);
    $mail -> addCC($emailCopia);

    $mail -> isHTML(true);
    $mail -> CharSet = 'UTF-8';

    $mail -> Subject = $subject;
    $mail -> addAttachment(__DIR__ . "correo.pdf", 'resultados.pdf');

    
    $mail -> Body = 'Le hacemos llegar los resultados de los estudios clínicos para ' . $_POST["nombreCliente"] . ", quedamos a sus órdenes para las dudas o aclaraciones necesarias. <br> Atte.
    Laboratorio OGA. Tel. 625-589-1680. <br> <small>Este es un mensaje automático. Favor de no responder a este correo.</small>";

    $mail -> AltBody = 'Le hacemos llegar los resultados de los estudios clínicos para ' . $_POST["nombreCliente"] . ", quedamos a sus órdenes para las dudas o aclaraciones necesarias. Atte.
    Laboratorio OGA. Tel. 625-589-1680. Este es un mensaje automático. Favor de no responder a este correo.";


    if ($mail -> send()) {
        echo "success";
    } else {
        echo $mail -> ErrorInfo;
    }


    echo "error";
 /*

    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-Type: multipart/mixed;\n" . "boundary=\"{$mime_boundary}\"\n";
    $headers .= "From:info@OGALaboratorio.com" . "\n" . "CC: $emailCopia";

    $email_content = "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\n" . "Content-Transfer-Encoding: 7bit\n";

    $data = chunk_split(base64_encode($data));
    $email_content .= "--{$mime_boundary}\n" . "Content-Type: {$fileAttType};\n" . " name=\"{$fileAttName}\"\n" . "Content-Disposition: attachment;\n" . " filename=\"{$fileAttName}\"\n" . "Content-Transfer-Encoding: base64\n" . $data . "\n" . "--{$mime_boundary}--\n";

    $subject = "Resultados de estudio para" . $_POST["nombreCliente"];

    if (mail($recipient, $subject, $email_content, $headers)) {
        echo "success";
    } else {
       echo "error";
    }  */
    // Get the form fields and remove whitespace.
    /* $name = strip_tags(trim($_POST["cliente"]));
    $doctor = trim($_POST["medico"]);
    $date = trim($_POST["fecha"]);
    $estudios = json_decode($_POST["resultado"],true);
    $email = trim($_POST["emailCliente"]);
    $emailCopia = trim($_POST["emailCopia"]);     */
    

    // Check that data was sent to the mailer.
    /* if ( empty($name) OR empty($doctor) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(200);
        echo "Por favor terminar de llenar el formulario";

        exit;
    } */

// Set the recipient email address.
    // FIXME: Update this to your desired email address.
    // $recipient = $email;

    // Set the email subject.
    // $subject = "Resultados de estudios  para $name";

    // Build the email content.
    // Build the email content.
    /* $email_content ='
    <html>
        <style>
            font-family: "Arial", sans-serif;
            font-size: 16px;

            .espacio {
                display:flex;
                width:100%;
                justify-content: space-between;  
            }

            .element1 { margin-right : 20px; float:left; }
            .element2 { float:left; }
        </style>
        <body>';
    $email_content .='<img src="http://u3digital.com.mx/oga/Assets/encabezado.jpg" alt="OGA" width=100% height="auto">';
    $email_content.='
    <p width = 100%>
        <strong>Nombre:</strong>'.$name.'
    </p>
    <p>
        <strong>Medico:</strong>'.$doctor.'
    </p>
    <p>
        <strong>Fecha:</strong>'.$date.'
    </p>
    <hr></br>';

    foreach ($estudios as $estudio) {
        $email_content .= '<h3>' . $estudio["nombre"] . '</h3>';

        $limites = (count($estudio["resultados"][0]["limites"]) > 0) ? '<span style="margin-right: 1em;">Límites</span>' : '';

        $email_content .= '
        <div style="display: flex; justify-content: initial">
            <span style="margin-left: 1em; width: 65%;">Resultados</span>
            ' . $limites . '
        </div>';

        foreach ($estudio["resultados"] as $resultado) {

            $limites = (count($resultado["limites"]) > 0) ? (imprimirLimites($resultado["limites"])) : '';

            $email_content .= '
                <div style="display: flex; justify-content: initial">
                    <span style="margin-left: 1em; width: 35%;">' . $resultado["nombre"] . '</span>
                    <span style="margin-left: 1em; width: 30$;">' . $resultado["resultado"] . '</span>
                    ' . $limites. '
                </div>
            ';
        }

        if ($estudio["observaciones"]) {
            $email_content .= '
            <div style="display: flex; justify-content: space-between; ">
                <span style="margin-left: 1em;">Observaciones:&nbsp;&nbsp;&nbsp;&nbsp;' . $estudio["observaciones"] . '</span>
            </div>
            ';
        }
    } */
/*         foreach ($resultado as $row => $estudio) {
            $email_content .= '<h2>'.$estudio["nombre"].'</h2>';
                if(count($estudio["resultados"][0]["limites"]) == 1){
                    $email_content .='<div style="display:flex; justify-content: center; width:100%; "><h3 style="margin-left: 1em; width: 60%;">Resultados:</h3> <h3 style="margin-rigth: 1em;">Limites</h3></div>';
                }else{
                   $email_content .="<h3>Resultados:</h3>" ;
                }

            
            foreach ($estudio["resultados"] as $row2 => $resultadoI) {
                $email_content .='<div style="display:flex; justify-content: center; width:100%; ">';
                $email_content .= '<div style="margin-left: 1em; width: 60%;">'.$resultadoI["nombre"].': <span>'.$resultadoI["resultado"].'</span></div>';
                if($resultadoI["limites"][0]){
                    $email_content .= '<div>';
                    foreach ($resultadoI["limites"] as $row3 => $limite) {
                        $email_content .= '<div style="margin-rigth: 1em;" >Limites: '.$limite.'</div>';
                    }
                    $email_content .= '</div>';
                    
                }
                $email_content .= '</br></div>';
            }
            if($estudio["observaciones"]){
                $email_content .='<h3>Observaciones:</h3>' ;
                $email_content .= '<div>'.$estudio["observaciones"].'</div>';
            }
            
        } */


        // $email_content .= "</body></html>";

        // Build the email headers.
/*         $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= "From:info@OGALaboratorio.com" . "\r\n" . "CC: $emailCopia";
       
        print_r($email_content);
        // Send the email.
        */

}
/* 
function imprimirLimites($limites) {
    $cadenaLimites = '<div style="margin-right: 1em;">';

    foreach ($limites as $limite) {
        $cadenaLimites .= '
            <span style="margin-right: 1em;">' . $limite . '</span><br>';
    } 

    $cadenaLimites .= '</div>';

    return $cadenaLimites;
} */