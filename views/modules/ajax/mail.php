 <?php
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



    // Check that data was sent to the mailer.
    if ( empty($name) OR empty($doctor) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(200);
        echo "Por favor terminar de llenar el formulario";

        exit;
    }


    // Set the recipient email address.
    // FIXME: Update this to your desired email address.
    $recipient = $email;

    // Set the email subject.
    $subject = "Resultados de estudios  para $name";

    // Build the email content.
    $email_content ="<style>* {
                        font-family: 'Arial', sans-serif;
                        font-size: 16px;
                    }</style>
                    <html><body>";
    $email_content .='<img src="../../Assets/header.jpeg" alt="Girl in a jacket" width=100% height="50px">';
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

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        print_r("success");
    } else {
        print_r("error");
    }

} else {
// Not a POST request, set a 403 (forbidden) response code.
http_response_code(403);
echo "Tuvimos un error favor de intentarlo de nuevo";
}





