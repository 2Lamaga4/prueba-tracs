<?php

$BaseDatos =$_POST["BaseDatos"];
$Servidor  =$_POST["Servidor"];
$Usuario   =$_POST["Usuario"];
$Clave     =$_POST["Clave"];

$nuevoarchivo = fopen('Modulo/Contabilidad/php/dao/info.php', "w+");
$location = "location: conexion.php?OK=1";
fwrite($nuevoarchivo,'
<?php
 		$this->BaseDatos = "'.$BaseDatos.'";
        $this->Servidor = "'.$Servidor.'";
        $this->Usuario = "'.$Usuario.'";
        $this->Clave = "'.$Clave.'";
?>');
fclose($nuevoarchivo);
header($location);
exit;
?>