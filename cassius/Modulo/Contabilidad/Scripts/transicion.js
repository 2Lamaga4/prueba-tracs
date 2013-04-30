/*
#contabilidad
@contabilidad/index.php

#Parametrizacion
@activarterceros.php
@Parametrizacion/index.php
@parametrizacion_documentos.php
@ParametrizacionFuncionario.php
@terceros.php

#ResgitroContable
@rc_movimientos.php
@rc_movimientos_excel.ph
 */

window.onload = function() {MakeFluffHappen()} 
function MakeFluffHappen() { 
FluffyKittenMaker(0); 
Conflaburator(0); 
} 
function FluffyKittenMaker(SomeNumberThing) { 
document.body.style.opacity = SomeNumberThing/60; 
} 
function Conflaburator(SomeNumberThing) { 
if (SomeNumberThing <= 60) { 
FluffyKittenMaker(SomeNumberThing); 
SomeNumberThing += 5; 
window.setTimeout("Conflaburator("+SomeNumberThing+")", 60); 
} 
}