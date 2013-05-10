<?php

$BaseDatos =$_POST["BaseDatos"];
$Servidor  =$_POST["Servidor"];
$Usuario   =$_POST["Usuario"];
$Clave     =$_POST["Clave"];

$nuevoarchivoC = fopen('Modulo/Contabilidad/php/dao/info.php', "w+");
$nuevoarchivoA = fopen('Modulo/Administracion/php/dao/info.php', "w+");
$location = "location: conexion.php?OK=1";
fwrite($nuevoarchivoC,'
<?php
 		$this->BaseDatos = "'.$BaseDatos.'";
        $this->Servidor = "'.$Servidor.'";
        $this->Usuario = "'.$Usuario.'";
        $this->Clave = "'.$Clave.'";
?>');
fwrite($nuevoarchivoA,'
<?php
 		$this->BaseDatos = "'.$BaseDatos.'";
        $this->Servidor = "'.$Servidor.'";
        $this->Usuario = "'.$Usuario.'";
        $this->Clave = "'.$Clave.'";
?>');

fclose($nuevoarchivoC);
fclose($nuevoarchivoA);
header($location);
exit;
?>