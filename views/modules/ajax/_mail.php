 <?php

 use PHPMailer\PHPMailer\PHPMailer;

require '../../../lib/phpmailer/src/PHPMailer.php';
require '../../../lib/phpmailer/src/SMTP.php';
require('../../../controllers/controller.php');
require('../../../models/crud.php');

// Only process POST reqeusts.
if (isset($_POST["cliente"])) {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["cliente"]));
    $doctor = trim($_POST["medico"]);
    $date = trim($_POST["fecha"]);
    $resultado = json_decode($_POST["resultado"],true);
    $email = trim($_POST["emailCliente"]);
    $emailCopia = trim($_POST["emailCopia"]);    


    // Check that data was sent to the mailer.
    if ( empty($name) OR empty($doctor) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(200);
        echo "Por favor terminar de llenar el formulario";

        exit;
    }
    $mail = new PHPMailer();

    $mail->SetFrom( 'ingo@OGALaboratorio.com' , 'OGA Laboratorio info' );
    $mail->AddReplyTo( 'u3digital.com.mx/oga' , 'OGA Laboratorio' );

    // Set the email subject.
    $subject = "Resultados de estudios  para $name";

    $mail->AddAddress( $email, $name );
    if($emailCopia){
        $mail->AddAddress($emailCopia,$name);
    }
    

    $mail->Subject = $subject;

    $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';


    // Build the email content.
    $email_content ="<style>* {
                        font-family: 'Arial', sans-serif;
                        font-size: 16px;
                    }</style>
                    <html><body>";
    $email_content .='<img src="../../Assets/header.jpeg" alt="OGA" width=100% height="50px">';
    $email_content.='<p width = 100%>
                        <strong>
                            Nombre:
                        </strong>
                            '.$name.'
                    </p>
                    <p>
                        <strong>
                            Medico:
                        </strong>
                            '.$doctor.'
                    </p><hr></br>';


    foreach ($resultado as $row => $estudio) {
    	$email_content .= '<h2>'.$estudio["nombre"].'</h2>';
    	$email_content .='<div style="display: flex;  width = 100% justify-content: space-around;">';
    	foreach ($estudio["resultados"] as $row2 => $resultadoI) {
    		$email_content .= '<p>'.$resultadoI["nombre"].': <span>'.$resultadoI["resultado"].'</span></p>';
    		
    	}
    	$email_content .= '</div>';
    }


    $email_content .= "</body></html>";

    $mail->MsgHTML( $email_content );
    $sendEmail = $mail->Send();

    // Send the email.
    if( $sendEmail == false ){
        echo  "error al enviar";
    }
        echo "success";

} else {
// Not a POST request, set a 403 (forbidden) response code.
http_response_code(403);
echo "Tuvimos un error favor de intentarlo de nuevo";
}





