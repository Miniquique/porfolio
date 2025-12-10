<?php
// Token y chat ID
$token   = "8100364269:AAF3WvDAFjmHgWCEz5aVYYIE2Z41UUPjT2A";
$chat_id = "5073762194";

// Carpeta donde guardas los mensajes
$directorio = __DIR__ . "/mensajes";
$archivos = glob($directorio . "/*.txt");

// Archivo marcador para saber cuál fue el último enviado
$ultimoArchivoEnviado = __DIR__ . "/ultimo.txt";
$ultimo = file_exists($ultimoArchivoEnviado) ? file_get_contents($ultimoArchivoEnviado) : "";

foreach ($archivos as $archivo) {
    if (filemtime($archivo) > (int)$ultimo) {
        // Contenido del archivo
        $mensaje = file_get_contents($archivo);

        // Enviar a Telegram
        $url = "https://api.telegram.org/bot$token/sendMessage";
        $data = [
            "chat_id" => $chat_id,
            "text"    => $mensaje
        ];

        $options = [
            "http" => [
                "header"  => "Content-Type: application/x-www-form-urlencoded\r\n",
                "method"  => "POST",
                "content" => http_build_query($data)
            ]
        ];
        $context  = stream_context_create($options);
        file_get_contents($url, false, $context);

        // Actualizar último archivo enviado
        file_put_contents($ultimoArchivoEnviado, (string)filemtime($archivo));

    }
}
?>
