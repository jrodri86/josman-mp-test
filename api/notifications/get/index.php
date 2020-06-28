<?php

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token,$collector_id,$notificationJSON;


// Este servicio llama a la URL recibida en la notificación
// Para ver el estado del pago.

$lastResource = file_get_contents('../notifications.txt');
<script>
	// other JavaScript code before ...
	
	var js_variable_as_placeholder = <?= json_encode($lastResource, 
		JSON_HEX_TAG); ?>;
	console.log("Extraccion de notifications.txt: ", js_variable_as_placeholder);
	
	// other JavaScript code and after ...
	</script>
$url= "$lastResource?access_token=$access_token";

// REVISAR AQUÍ:
// Agrega la $url necesaria para revisar el estado del pago en base al recurso recibido de la notificación

// Sustituye el método por su correspondiente: get, put, post, delete

curl_call("get","$url","");

 ?>