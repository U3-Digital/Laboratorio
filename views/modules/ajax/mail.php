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
    $emailCopia = trim($_POST["emailCopia"]);    
    print_r($resultado);
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
        // Build the email content.
        $email_content ="<style>* {
                            font-family: 'Arial', sans-serif;
                            font-size: 16px;
                        }</style>
                        <html><body>";
        $email_content .='<img src="http://u3digital.com.mx/oga/Assets/encabezado.jpg" alt="OGA" width=100% height="50px">';
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
                if(count($estudio["resultados"][0]["limites"]) == 1){
                    $email_content .='<div style="display:flex; width:100%; justify-content: space-between;"><h3>Resultados:</h3> <h3>Limites</h3></div>';
                }else{
                   $email_content .="<h3>Resultados:</h3>" ;
                }

            $email_content .='<div style="display: flex; width:100%; justify-content: space-between;">';
            foreach ($estudio["resultados"] as $row2 => $resultadoI) {
                $email_content .= '<p>'.$resultadoI["nombre"].': <span>'.$resultadoI["resultado"].'</span></p>';
                if($resultadoI["limites"][0]){
                    $email_content .= '<div>Limites:'.$resultadoI["limites"][0].'</div>';
                }
                $email_content .= '</br>';  
                
            }
            $email_content .= '</div>';
        }


        $email_content .= "</body></html>";

        // Build the email headers.
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From:info@OGALaboratorio.com" . "\r\n" . "CC: $emailCopia";
       

        // Send the email.
        if (mail($recipient, $subject, $email_content, $headers)) {
            echo "success";
        } else {
           echo "error";
        }


    

   

} else {
// Not a POST request, set a 403 (forbidden) response code.
http_response_code(403);
echo "Tuvimos un error favor de intentarlo de nuevo";
}





