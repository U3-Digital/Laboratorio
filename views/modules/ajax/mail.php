 <?php
require('../../../controllers/controller.php');
require('../../../models/crud.php');


// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get the form fields and remove whitespace.
$name = strip_tags(trim($_POST["cliente"]));
$doctor = trim($_POST["medico"]);
$date = trim($_POST["fecha"]);
$resultado = $_POST["resultado"];
$email = trim($_POST["emailCliente"]);

// Check that data was sent to the mailer.
if ( empty($name) OR empty($doctor) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Set a 400 (bad request) response code and exit.
    http_response_code(400);
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
                <html><body>"
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
                </p><hr></br>
                <h2>${estudio.nombre}</h2>';

foreach ($resultado as $row => $estudio) {
	$email_content .= '<h2>'.$estudio["nombre"].'</h2>'
	$email_content .='<div style="display: flex;  width = 100% justify-content: space-around;">'
	foreach ($estudio["resultados"] as $row => $resultado) {
		$email_content .= '<p>'.$resultado["nombre"].': <span>'.$resultado["resultado"].'</span></p>'
		
	}
	$email_content .= '</div>'
}


$email_content .= "</body></html>"

// Build the email headers.
$email_headers = "From: $name <$email>";

// Send the email.
if (mail($recipient, $subject, $email_content, $email_headers)) {
    // Set a 200 (okay) response code.
    http_response_code(200);
    echo '   <!DOCTYPE html>
    <html lang="zxx">
    <head>
        <title>BRCC | Bienes Raices Corredor Comercial</title>
         <script src="modules/js/sweetalert2.all.js"></script>
    </head>
    <body>

    <script>

        swal({

            type: "success",
            title: "¡Su mensaje se envió correctamente!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"

        }).then(function(result){

            if(result.value){

                window.location = "../index.php";

            }

        });


    </script>
</body>
</html>';
} else {
    // Set a 500 (internal server error) response code.
    http_response_code(500);
    echo '
    <!DOCTYPE html>
    <html lang="zxx">
    <head>
        <title> BRCC | Bienes Raices Corredor Comercial</title>
         <script src="modules/js/sweetalert2.all.js"></script>
    </head>
    <body>
    <script>

    swal({

        type: "error",
        title: "¡Tenemos problemas para enviar su correo, intente mas tarde o verifique su mensaje!",
        showConfirmButton: true,
        confirmButtonText: "Cerrar"

    }).then(function(result){

        if(result.value){

            window.location = "contact.php";

        }

    });


</script>
</body>
</html>';
}

} else {
// Not a POST request, set a 403 (forbidden) response code.
http_response_code(403);
echo "Tuvimos un error favor de intentarlo de nuevo";
}






//$Controller = new Controller();
//$respuesta = $Controller ->ctlsaveEstudio($_POST);  


print_r($_POST);            

