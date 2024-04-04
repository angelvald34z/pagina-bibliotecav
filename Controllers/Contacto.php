public function contacto()
{
    $nombre = strClean($_POST['nombre']);
    $correo = strClean($_POST['correo']);
    $asunto = strClean($_POST['asunto']);
    $comentario = strClean($_POST['comentario']);
    $fecha = date("Y-m-d");

    // Aquí puedes realizar cualquier validación adicional que necesites

    // Luego puedes realizar acciones con estos datos, como enviar un correo electrónico o almacenarlos en una base de datos
    // Por ejemplo, enviar un correo electrónico
    $mensaje = "Nombre: $nombre\nCorreo: $correo\nAsunto: $asunto\nComentario: $comentario\nFecha: $fecha";
    mail("destinatario@example.com", "Mensaje de contacto", $mensaje);

    // Puedes enviar una respuesta JSON indicando el éxito del envío
    $response = array('success' => true, 'message' => 'Mensaje enviado correctamente');
    echo json_encode($response);
    die();
}
